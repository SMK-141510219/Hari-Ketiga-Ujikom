@extends('layouts.app')
@section('content')
<h1>Update</h1>
{!!Form::model($golongan,['method'=>'PATCH','route'=>['golongan.update',$golongan->id]])!!}
<div class="form-group">
	{!!Form::label('kode','Kode Golongan:')!!}
	{!!Form::text('kode_golongan',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
   {!!Form::label('nama','Nama Golongan :')!!}
   {!!Form::text('nama_golongan',null,['class'=>'form-control'])!!}	
<div class="form-group">
   {!!Form::label('besaran','Besaran Uang :')!!}
   {!!Form::text('besaran_uang',null,['class'=>'form-control'])!!}	
</div>
<div class="form-group">
   {!!Form::submit('Update',['class'=>'btn btn-primary'])!!}	
</div>
  {!!Form::close()!!}
@stop