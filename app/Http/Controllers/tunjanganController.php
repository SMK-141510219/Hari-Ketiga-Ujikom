<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tunjanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tunjangan=tunjanganmodel::all();
          $tunjangan=tunjanganmodel::where('jabatan_id',request('jabatan_id'))->paginate(0);
          if(request()->has('jabatan_id'))
          {
            $tunjangan=tunjanganmodel::where('jabatan_id',request('jabatan_id'))->paginate(0);
          }
          else
          {
            $tunjangan=tunjanganmodel::paginate(3);
          }
        return view('tunjangan.index',compact('tunjangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tunjangan.create');
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
        $tunjangan=Request::all();
        tunjanganmodel::create($tunjangan);
        return redirect('tunjangan');
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
        $tunjangan=tunjanganmodel::find($id);
        return view('tunjangan.edit',compact('tunjangan'));
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
        $tunjangan=tunjanganmodel::find($id);
        $tunjangan->update($update);
        return redirect('tunjangan');
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
        tunjanganmodel::find($id)->delete();
        return redirect('tunjangan');
    }
}
