@extends('layouts.app')
@section('content')
<h1>Tambah Data</h1>
{!!Form::open(['url'=>'kategorilembur'])!!}
<div class="form-group">
	{!!Form::label('kode','Kode Lembur:')!!}
	{!!Form::text('kode_jabatan',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
   {!!Form::label('jabatan','Jabatan id :')!!}
   {!!Form::text('jabatan_id',null,['class'=>'form-control'])!!}	
</div>
<div class="form-group">
   {!!Form::label('golongan','Golongan id :')!!}
   {!!Form::text('golongan_id',null,['class'=>'form-control'])!!}	
</div>
<div class="Form-group">
   {!!Form::label('besaran','Besaran Uang :')!!}
   {!!Form::text('besaran_uang',null,['class'=>'form-control'])!!}
<div class="form-group">
   {!!Form::submit('Save',['class'=>'btn btn-primary form-control'])!!}
</div>
    {!!Form::close()!!}
@stop
