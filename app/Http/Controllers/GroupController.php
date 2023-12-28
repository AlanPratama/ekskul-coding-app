<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GroupController extends Controller
{

    public function index()
    {
        $users = User::all();
        $groups = Group::all();

        return view('admin.group.groupIndex', compact('users', 'groups'));
    }

    public function detailGroup($slug)
    {
        $group = Group::where('slug', $slug)->first();
        $pivotGroup = DB::table('pivot_group')->where('group_id', $group->id)->where('obligation', 'Ketua')->first();
        $users = User::all();

        return view('admin.group.detailGroup', compact('group', 'users', 'pivotGroup'));
    }

    public function createGroup(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:groups,name',
            'image' => 'image',
        ]);

        if ($request->hasFile('image')) {
            $uploadFile = $request->file('image');
            $extension = $uploadFile->getClientOriginalExtension();
            $storeName = $request->name . '-' . now()->format('Ymd') . '-' . $extension;
            $path = $uploadFile->storeAs('group', $storeName);
            $data['image'] = $path;
        }

        // Gunakan transaksi agar operasi database dapat di-rollback jika terjadi kesalahan
        DB::beginTransaction();

        try {
            // Membuat grup
            $group = Group::create($data);

            // Membuat tabel pivot
            $ketuaId = $request->input('ketua_id');
            $group->users()->attach($ketuaId, ['obligation' => 'Ketua']);

            $anggotaId = $request->input('anggota');
            $group->users()->attach($anggotaId, ['obligation' => 'Anggota']);

            DB::commit();

            return redirect()->back()->with('status', 'Group and Pivot Group created successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('status', 'Error creating Group and Pivot Group');
        }
    }

    public function editGroup(Request $request, $slug)
    {
        $group = Group::where('slug', $slug)->first();
        $group->name = $request->name;
        $gambar = $group->gambar;

        if ($request->hasFile('image')) {
            if ($gambar) {
                Storage::delete($gambar);
            }

            $uploadFile = $request->file('image');
            $extension = $uploadFile->getClientOriginalExtension();
            $storeName = $request->name . '-' . now()->format('Ymd') . '-' . $extension;
            $path = $uploadFile->storeAs('group', $storeName);
            $group->image = $path;
        }
        $group->slug = null;
        $group->save();

        // $pivotGroupKetua = DB::table('pivot_group')->where('group_id', $group->id)->where('obligation', 'Ketua')->first();
        // $pivotGroupAnggota = DB::table('pivot_group')->where('group_id', $group->id)->where('obligation', 'Anggota')->get();

        if ($request->has('ketua_id')) {
            // $userKetua[$request->input('ketua_id')] = ['obligation' => 'Ketua'];
            $ketuaId = $request->ketua_id;
            $group->users()->wherePivot('obligation', 'Ketua')->detach();
            $group->users()->attach($ketuaId, ['obligation' => 'Ketua']);
                // DB::table('pivot_group')
            //     ->where('group_id', $group->id)
            //     ->where('obligation', 'Ketua')
            //     ->update(['user_id' => $ketuaId]);
        }

        if ($request->has('anggota')) {
            $group->users()->wherePivot('obligation', 'Anggota')->detach();
            $group->users()->attach($request->anggota, ['obligation' => 'Anggota']);

            // $usersAnggota = [];
            // foreach ($request->input('anggota') as $anggotaId) {
            //     $usersAnggota[$anggotaId] = [
            //         'obligation' => 'Anggota',
            //     ];
            // }
            // $group->users()->sync($usersAnggota);
        }



        return redirect('group/detail/' . $group->slug)->with('status', 'BERHASIL MENGEDIT GROUP');
    }

    public function deleteGroup($slug)
    {
        $group = Group::where('slug', $slug)->first();
        $image = $group->image;

        DB::table('pivot_group')->where('group_id', $group->id)->delete();
        $group->delete();

        if ($image) {
            Storage::delete($image);
        }

        return response()->json([
            'status' => 200,
        ]);
    }
}
