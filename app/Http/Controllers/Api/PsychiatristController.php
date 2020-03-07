<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Psychiatrist;
use Illuminate\Http\Request;

class PsychiatristController extends Controller
{
    public function index()
    {
        $data = Psychiatrist::all();
        return response()->json($data, 200);
    }
}
