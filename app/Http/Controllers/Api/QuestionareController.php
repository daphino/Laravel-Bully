<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Questionare;
use Illuminate\Http\Request;

class QuestionareController extends Controller
{
    public function index()
    {
        $data = Questionare::all();
        return response()->json($data,200);
    }
}
