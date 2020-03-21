<?php

namespace App\Http\Controllers\Api\Psychiatrist;

use App\Http\Controllers\Controller;
use App\Psychiatrist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validation($request);

        if(Auth::guard('psychiatrist')->attempt($request->only('email', 'password'), false))
        {
            return response()->json(['error' => false, 'message' => 'Login berhasil!'], 200);
        }

        return $this->loginFailed();
    }

    public function validation(Request $request, $login = true)
    {
        if ($login)
        {
            $rules = [
                'email' => 'required|exists:psychiatrists|max:191',
                'password' => 'required'
            ];
        }
        else{
            $rules = [
                'name' => 'required|max:191',
                'email' => 'required|unique:psychiatrists|max:191',
                'password' => 'required'
            ];
        }

        $messages = [
            'email.exists' => 'Alamat email tidak terdaftar',
            'email.unique' => 'Alamat email sudah terdaftar'
        ];

        $request->validate($rules, $messages);
    }

    public function loginFailed()
    {
        return response()->json([
            'error' => true,
            'message' => 'Login gagal. Periksa email dan password!'
        ], 404);
    }

    public function logout()
    {
        Auth::guard('psychiatrist')->logout();
        return response()->json(['error' => false, 'message' => 'Berhasil keluar!'], 200);
    }
}
