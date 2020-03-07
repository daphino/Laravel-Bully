<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Psychiatrist;
use Illuminate\Http\Request;

class PsychiatristController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['psychiatrists'] = Psychiatrist::all();
        $data['title'] = 'Daftar Psikiater';
        return view('psychiatrist-index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Tambah Psikiater';
        return view('psychiatrist-create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['password'] = bcrypt($data['password']);
        Psychiatrist::create($data);

        return redirect()->route('admin.psychiatrist.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $psy = Psychiatrist::findOrFail($id);
        $data['psy'] = $psy;
        $data['title'] = 'Edit Psikiater';
        return view('psychiatrist-edit')->with($data);
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
        $psy = Psychiatrist::findOrFail($id);
        $psy->update($request->except('_token'));

        return redirect()->route('admin.psychiatrist.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $psy = Psychiatrist::findOrFail($id);
        $psy->delete();
    }

    public function destroyAll()
    {
        Psychiatrist::truncate();
    }
}
