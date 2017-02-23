@extends('layouts.app')
@section('content')
<h1>Tambah Data</h1>
{!!Form::open(['url'=>'lemburpegawai'])!!}
<div class="form-group">
	{!!Form::label('kode','Kode Lembur id:')!!}
	{!!Form::text('kode_lembur_id',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
   {!!Form::label('pegawai','Pegawai id :')!!}
   {!!Form::text('pegawai_id',null,['class'=>'form-control'])!!}	
</div>
<div class="form-group">
   {!!Form::label('jumlah','Jumlah Jam :')!!}
   {!!Form::text('jumlah_jam',null,['class'=>'form-control'])!!}	
</div>

<div class="form-group">
   {!!Form::submit('Save',['class'=>'btn btn-primary form-control'])!!}
</div>
    {!!Form::close()!!}
@stop
