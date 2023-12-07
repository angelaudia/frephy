<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(Auth::id());

        return view('mahasiswa.mprofil', compact('user'));
    }

    public function update(Request $request, $id)
{
    request()->validate([
    'name' => 'required|string|min:2|max:100',
    'username' => 'required|unique:users|min:8|max:32',
    'email' => 'required|email|unique:users',
    'old_password' => 'nullable|string',
    'password' => 'nullable|required_with:old_password|string|confirmed|min:6',
    ]);

    $user = User::find($id);

    $user->name = $request->name;
    $user->email = $request->email;

    if ($request->filled('old_password')) {
        if (Hash::check($request->old_password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->password)
            ]);
        } else {
            return back()
                ->withErrors(['old_password' => __('Please enter the correct password')])
                ->withInput();
        }
    }

    if (request()->hasFile('profil_img')) {
        if ($user->profil_img && Storage::exists('public/img/' . $user->profil_img)) {
            Storage::delete('public/img/' . $user->profil_img);
        }

        $file = $request->file('profil_img');
        $fileName = $file->hashName();
        $file->storeAs('public/img/', $fileName);

        $user->profil_img = $fileName;
    }



    $user->save();

    return back()->with('status', 'Profil Telah Diperbarui!');
}
}
