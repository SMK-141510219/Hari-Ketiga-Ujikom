@extends('layouts.app')
@section('content')
<h1>Tambah Data</h1>
{!!Form::open(['url'=>'jabatan'])!!}
<div class="form-group">
	{!!Form::label('kode','Kode Jabatan :')!!}
	{!!Form::text('kode_jabatan',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
   {!!Form::label('nama','Nama Jabatan :')!!}
   {!!Form::text('nama_jabatan',null,['class'=>'form-control'])!!}	
</div>
<div class="form-group">
   {!!Form::label('besaran ','Besaran Uang :')!!}
   {!!Form::text('besaran_uang',null,['class'=>'form-control'])!!}	
</div>
<div class="form-group">
  {!!Form::submit('Save',['class'=>'btn btn-primary form-control'])!!}	
</div>
   {!!Form::close()!!}
@stop
