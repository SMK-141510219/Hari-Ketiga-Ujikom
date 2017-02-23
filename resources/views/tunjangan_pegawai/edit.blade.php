@extends('layouts.app')
@section('content')
<h1>Update</h1>
{!!Form::model($tunjangan pegawai,['method'=>'PATCH','route'=>['tunjangan pegawai.update',$tunjangan pegawai->id]])!!}
<div class="form-group">
	{!!Form::label('kode','Kode Tunjangan id:')!!}
	{!!Form::text('kode_tunjangan_id',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
   {!!Form::label('pegawai','Pegawai id :')!!}
   {!!Form::text('pegawai_id',null,['class'=>'form-control'])!!}	
<div class="form-group">
   {!!Form::submit('Update',['class'=>'btn btn-primary'])!!}	
</div>
   {!!Form::close()!!}
@stop