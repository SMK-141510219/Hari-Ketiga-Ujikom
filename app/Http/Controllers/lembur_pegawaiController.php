<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lembur_pegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lemburpegawai=lemburpegawaimdel::all();
        return view('lemburpegawai.index',compact('lemburpegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('lemburpegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $lemburpegawai=Request::all();
        lemburpegawaimodel::create($lemburpegawai);
        return redirect('lemburpegawai');
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
        $lemburpegawai=lemburpegawaimodel::find($id);
        return view('lemburpegawai',compact('lemburpegawai'));
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
        $update=Request::all();
        $lemburpegawai=lemburpegawaimodel::find($id);
        $lemburpegawai->update($update);
        return redirect('lemburpegawai');
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
        lemburpegawaimodel::find($id)->delete();
        return redirect('lemburpegawai');
    }
}
