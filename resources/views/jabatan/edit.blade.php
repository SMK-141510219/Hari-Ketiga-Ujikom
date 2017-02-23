@extends('layouts.app')
@section('content')
<h1>Update</h1>
{!!Form::model($jabatan,['method'=>'PATCH','route'=>['jabatan.update',$jabatan->id]])!!}
<div class="form-group">
	{!!Form::label('kode','Kode Jabatan:')!!}
	{!!Form::text('kode_jabatan',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
   {!!Form::label('nama','Nama Jabatan :')!!}
   {!!Form::text('nama_jabatan',null,['class'=>'form-control'])!!}	
<div class="form-group">
   {!!Form::label('besaran','Besaran Uang :')!!}
   {!!Form::text('besaran_uang',null,['class'=>'form-control'])!!}	
</div>
<div class="form-group">
   {!!Form::submit('Update',['class'=>'btn btn-primary'])!!}	
</div>
   {!!Form::close()!!}
@stop