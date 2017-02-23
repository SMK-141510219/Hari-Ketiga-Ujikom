
@extends('layouts.app')
@section('content')
<h1>Update</h1>
{!!Form::model($lemburpegawai,['method'=>'PATCH','route'=>['lemburpegawai.update',$lemburpegawai->id]])!!}
<div class="form-group">
	{!!Form::label('kode','Kode Lembur id:')!!}
	{!!Form::text('kode_lembur_id',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
   {!!Form::label('pegawai','Pegawai id :')!!}
   {!!Form::text('pegawai_id',null,['class'=>'form-control'])!!}	
<div class="form-group">
   {!!Form::label('jumlah','Jumlah Jam :')!!}
   {!!Form::text('jumlah_jam',null,['class'=>'form-control'])!!}	
</div>
<div class="form-group">
   {!!Form::submit('Update',['class'=>'btn btn-primary'])!!}	
</div>
    {!!Form::close()!!}
@stop