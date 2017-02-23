qqqqqqqqqqqqqqq@extends('layouts.app')
@section('content')
<h1>Tambah Data</h1>
{!!Form::open(['url'=>'golongan'])!!}
<div class="form-group">
	{!!Form::label('kode','Kode Golongan:')!!}
	{!!Form::text('kode_golongan',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
   {!!Form::label('nama','Nama Golongan :')!!}
   {!!Form::text('nama_golongan',null,['class'=>'form-control'])!!}	
</div>
<div class="form-group">
   {!!Form::label('besaran uang','Besaran Uang :')!!}
   {!!Form::text('besaran_uang',null,['class'=>'form-control'])!!}	
</div>
<div class="form-group">
   {!!Form::submit('Save',['class'=>'btn btn-primary form-control'])!!}
</div>
  {!!Form::close()!!}
@stop
