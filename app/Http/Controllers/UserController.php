<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Present;
use App\Models\Skill;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function profile()
    {
        $user = User::where('slug', Auth::user()->slug)->first();
        return view('user.profile', compact('user'));
    }

    public function setting()
    {
        $skills = Skill::all();
        $classes = Classes::all();
        return view('user.setting', compact('classes', 'skills'));
    }

    public function profileEdit(Request $request, $slug)
    {
        $user = User::where('slug', $slug)->first();

        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'nisn' => 'nullable|string',
            'phone' => 'nullable|string',
            'instagram' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'email' => 'required|email',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'class_id' => '',
            'description' => 'nullable|string',
            'skill' => 'nullable|array',
            'skill.*' => 'exists:skills,id',
        ]);

        // Update basic user information
        $user->update($request->only([
            'name', 'username', 'nisn', 'phone', 'instagram', 'linkedin', 'email', 'class_id', 'description'
        ]));

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $uploadFile = $request->file('image');
            $extension = $uploadFile->getClientOriginalExtension();
            $storeName = $request->username . now()->format('Ymd') . '.' . $extension;
            $pathFile = $uploadFile->storeAs('users', $storeName);
            $user->image = $pathFile;
        }

        // Save the user model with the updated information
        $user->save();

        // Sync user skills
        if ($request->has('skill')) {
            $user->skills()->sync($request->input('skill'));
        } else {
            $user->skills()->detach();
        }

        // Redirect or return a response as needed
        return redirect('profile/setting')->with('status', 'PROFILE BERHASIL DIUPDATE');
    }









    public function indexAbsen()
    {
        $presents = Present::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        $todayPresent = Present::where('user_id', Auth::user()->id)->where('date', Carbon::now()->toDateString())->get();

        return view('user.absenIndex', compact('presents', 'todayPresent'));
    }

    public function qrHadir(Request $request)
    {
        return response()->json([
            'status' => true
        ]);
    }

    public function fotoHadir(Request $request)
    {
        $existPresent = Present::where('user_id', Auth::user()->id)->where('date', Carbon::now()->toDateString())->get();

        if ($existPresent->count() > 0) {
            return redirect()->back()->with('alreadyPresent', 'KAMU SUDAH ABSEN HARI INI!');
        } else {
            if ($request->hasFile('image')) {
                $uploadFile = $request->file('image');
                $extension = $uploadFile->getClientOriginalExtension();
                $storeName = Auth::user()->slug . now()->format('Ymd') . '-' . Str::random(3) . '.' . $extension;
                $path = $uploadFile->storeAs('present/hadir/foto', $storeName);
            }

            $data = [
                'user_id' => Auth::user()->id,
                'image' => $path,
                'date' => Carbon::now()->toDateString(),
                'status' => 'Hadir',
                'keterangan' => 'Foto',
                'reason' => null
            ];

            Present::create($data);

            return redirect('profile/absen')->with('status', 'BERHASIL ABSEN');
        }

    }

























    public function sidePart()
    {
        $skills = Skill::all();
        $classes = Classes::all();
        return view('admin.user.side-part', compact('skills', 'classes'));
    }

    public function addSkill(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:skills,name',
            'image' => ''
        ]);

        if ($request->hasFile('image')) {
            $uploadFile = $request->file('image');
            $extension = $uploadFile->getClientOriginalExtension();
            $storeName = $data['name'] . now()->format('Ymd') . '.' . $extension;
            $filePath = $uploadFile->storeAs('skills', $storeName);
            $data['image'] = $filePath;
        }

        Skill::create($data);

        return redirect('side-part')->with('status', 'BERHASIL MENAMBAH SKILL');
    }


    public function editSkill(Request $request, $id)
    {
        $skill = Skill::find($id);

        $data = $request->validate([
            'name' => 'required|unique:skills,name,' . $skill->id,
            'image' => ''
        ]);

        $gambarSebelumnya = $skill->image;
        if ($request->hasFile('image')) {
            Storage::delete([$gambarSebelumnya]);
            $uploadFile = $request->file('image');
            $extension = $uploadFile->getClientOriginalExtension();
            $storeName = $data['name'] . now()->format('Ymd') . '.' . $extension;
            $filePath = $uploadFile->storeAs('skills', $storeName);
            $skill->image = $filePath;
        }

        $skill->name = $request->name;
        $skill->update();

        return redirect('/side-part')->with('status', 'BERHASIL MENGEDIT SKILL');
    }


    public function hapusSkill($name)
    {
        $skill = Skill::where('name', $name)->first();
        $imageSkill = $skill->image;

        DB::table('pivot_skill')->where('skill_id', $skill->id)->delete();

        $skill->delete();
        Storage::delete($imageSkill);

        return redirect('side-part')->with('status', 'BERHASIL MENGHAPUS SKILL');
    }




    public function addClass(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:class,name',
        ]);

        Classes::create($data);

        return redirect('side-part')->with('status', 'BERHASIL MENAMBAH KELAS');
    }

    public function editClass(Request $request, $id)
    {
        $class = Classes::where('id', $id)->first();

        $class->name = $request->name;
        $class->update();

        return redirect('side-part')->with('status', 'BERHASIL MENGEDIT KELAS');
    }

    public function hapusClass($id)
    {
        $class = Classes::where('id', $id)->first();
        $users = User::where('class_id', $class->id)->get();

        if ($users) {
            foreach ($users as $user) {
                $user->class_id = null;
                $user->update();
            }
        }

        $class->delete();

        return redirect('side-part')->with('status', 'BERHASIL MENGHAPUS KELAS');
    }
}
