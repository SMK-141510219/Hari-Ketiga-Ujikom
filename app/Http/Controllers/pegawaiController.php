<?php

namespace App\Http\Controllers;

use App\pegawaiModel;
use App\User;
use App\golonganModel;
use App\jabatanModel;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;



class pegawaiController extends Controller
{
    use RegistersUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
         $pegawai=pegawaiModel::all();
        return view('pegawai.index',compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $jabatan=jabatanModel::all();
            $golongan=golonganModel::all();
        return view('pegawai.create',compact('pegawai'));
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
        $this->validate($request,[
            'name' => 'required',
            'nip'=>'required|numeric|min:3|unique:pegawai',
            'permision' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            ]);

        $User = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'permision'=>$request->get('permision'),
            'password' => bcrypt($request['password']),
        ]);

        $pegawai=new pegawaiModel;
        $pegawai->nip=$request->get('nip');
        $pegawai->jabatan_id =$request->get('jabatan_id');
        $pegawai->golongan_id =$request->get('golongan_id');
        $pegawai->foto =$request->get('foto');
        $pegawai->user_id=$User->id;
        $pegawai->save();


        return redirect('/pegawai');
        //


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
         $pegawai=pegawaiModel::find($id);
        return view('pegawai.edit',compact('pegawai'));
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
        $pegawai=pegawaiModel::find($id);
        $pegawai->update($update);
        return redirect('pegawai');
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
         pegawaiModel::find($id)->delete();
        return redirect('pegawai');
    }
}
