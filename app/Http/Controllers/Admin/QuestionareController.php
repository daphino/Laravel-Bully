<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Questionare;

class QuestionareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['questionares'] = Questionare::orderBy('order', 'asc')->get();
        $data['title'] = 'Daftar Kuesioner';
        return view('questionare-index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Tambah Kuesioner';
        return view('questionare-create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!$request->options[0]){
            Questionare::create($request->except(['options', 'token']));
        }else{
            $questionare = new Questionare();
            $questionare->question = $request->question;
            $questionare->type = $request->type;
            $questionare->order = $request->order;
            $questionare->options = json_encode($request->options);
            $questionare->save();
        }

        return redirect()->route('admin.questionare.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['questionare'] = Questionare::findOrFail($id);
        $data['title'] = 'Edit Kuesioner';
        return view('questionare-edit')->with($data);
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
//        dd($request->all());
        $questinoare = Questionare::findOrFail($id);
        $questinoare->update($request->except(['_token', '_method']));

        return redirect()->route('admin.questionare.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Questionare::findOrFail($id)->delete();
    }

    public function destroyAll()
    {
        Questionare::truncate();
    }
}
