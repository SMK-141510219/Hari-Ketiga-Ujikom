<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tunjangan_pegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tunjanganpegawai=tunjanganpegawaimodel::all();
          $tunjanganpegawai=tunjanganpegawaimodel::where('pegawai_id',request('pegawai_id'))->paginate(0);
          if(request()->has('pegawai_id'))
          {
            $tunjanganpegawai=tunjanganpegawaimodel::where('pegawai_id',request('pegawai_id'))->paginate(0);
          }
          else
          {
            $tunjanganpegawai=tunjanganpegawaimodel::paginate(3);
          }
        return view('tunjanganpegawai.index',compact('tunjanganpegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tunjanganpegawai.create');
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
        $tunjanganpegawai=Request::all();
        tunjanganpegawaimodel::create($tunjanganpegawai);
        return redirect('tunjanganpegawai');
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
         $tunjanganpegawai=tunjanganpegawaimodel::find($id);
        return view('tunjanganpegawai.edit',compact('tunjanganpegawai'));
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
        $tunjanganpegawai=tunjanganpegawaimodel::find($id);
        $tunjanganpegawai->update($update);
        return redirect('tunjanganpegawai');
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
         tunjanganpegawaimodel::find($id)->delete();
        return redirect('tunjanganpegawai');
    }
}
