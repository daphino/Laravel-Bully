<?php

namespace App\Http\Controllers\Api;

use App\Chat;
use App\Customer;
use App\Http\Controllers\Controller;
use App\Psychiatrist;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $chats = Chat::
                with('customer')
                ->with('psychiatrist')
                ->where('customer_id', $request->customer_id)
                ->get();

        return response()->json(['error' => false, 'data' => $chats], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = Customer::findOrFail($request->customer_id);
        $psy = Psychiatrist::findOrFail($request->psychiatrist_id);

        $chat = new Chat();
        $chat->room_code = $request->room_name;
        $chat->chat = $request->chat;
        $chat->customer_id = $customer->id;
        $chat->psychiatrist_id = $psy->id;
        $chat->status = "0";
        $chat->save();

        return response()->json(['error'=> false], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
