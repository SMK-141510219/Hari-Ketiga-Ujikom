@extends('layouts.app')
@section('content')
<h1>Update</h1>
{!!Form::model($kategorilembur,['method'=>'PATCH','route'=>['kategorilembur.update',$kategorilembur->id]])!!}
<div class="form-group">
	{!!Form::label('kode','Kode lembur:')!!}
	{!!Form::text('kode_lembur',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
   {!!Form::label('jabatan','Jabatan id :')!!}
   {!!Form::text('jabatan_id',null,['class'=>'form-control'])!!}	
<div class="form-group">
   {!!Form::label('golongan','Golongan id :')!!}
   {!!Form::text('golongan_id',null,['class'=>'form-control'])!!}	
</div>
<div class="form-group">
   {!!Form::label('besaran','Besaran Uang :')!!}
   {!!Form::text('besaran_uang',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
   {!!Form::submit('Update',['class'=>'btn btn-primary'])!!}	
</div>
    {!!Form::close()!!}
@stop