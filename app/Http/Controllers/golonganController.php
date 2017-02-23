<?php

namespace App\Http\Controllers;

use Request;
use App\golonganModel;

class golonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $golongan=golonganModel::all();
          $golongan=golonganModel::where('nama_golongan',request('nama_golongan'))->paginate(0);
          if(request()->has('nama_golongan'))
          {
            $golongan=golonganModel::where('nama_golongan',request('nama_golongan'))->paginate(0);
          }
          else
          {
            $golongan=golonganModel::paginate(3);
          }
        return view('golongan.index',compact('golongan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('golongan.create');
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
        $golongan=Request::all();
        golonganModel::create($golongan);
        return redirect('golongan');
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
        $golongan=golonganModel::find($id);
        return view('golongan.edit',compact('golongan'));
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
        $golongan=golonganModel::find($id);
        $golongan->update($update);
        return redirect('golongan');
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
        golonganModel::find($id)->delete();
        return redirect('golongan');
    }
}
