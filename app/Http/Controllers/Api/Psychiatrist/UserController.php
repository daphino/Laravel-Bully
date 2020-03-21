<?php

namespace App\Http\Controllers\Api\Psychiatrist;

use App\Http\Controllers\Controller;
use App\Psychiatrist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function info(Request $request)
    {
        $psychiatrist = Psychiatrist::findOrFail($request->id);
        return response()->json(['error' => false, 'psychiatrist' => $psychiatrist], 200);
    }
}
