<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Skill;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function profile() {
        $user = User::where('slug', Auth::user()->slug)->first();
        return view('user.profile', compact('user'));
    }

    public function setting() {
        $skills = Skill::all();
        $classes = Classes::all();
        return view('user.setting', compact('classes', 'skills'));
    }

    public function profileEdit(Request $request, $slug) {
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

























    public function sidePart() {
        $skills = Skill::all();
        $classes = Classes::all();
        return view('admin.user.side-part', compact('skills', 'classes'));
    }

    public function addSkill(Request $request) {
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


    public function editSkill(Request $request, $id) {
        $skill = Skill::find($id);

        $data = $request->validate([
            'name' => 'required|unique:skills,name,'.$skill->id,
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
}
