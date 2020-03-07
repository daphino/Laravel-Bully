<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __invoke()
    {
        $data['title'] = 'Data Profile';
        return view('admin-profile')->with($data);
    }

    public function changePasswordForm()
    {
        $data['title'] = "Ganti Password";
        return view('admin-change-password')->with($data);
    }

    public function changePassword(Request $request)
    {
        $user = User::findOrFail(auth()->user()->id);

        $user->password = bcrypt($request->new_password);
        $user->save();

        $request->session()->flash('password', 'Password berhasil di rubah.');
        return redirect()->route('admin.change.password');
    }
}
