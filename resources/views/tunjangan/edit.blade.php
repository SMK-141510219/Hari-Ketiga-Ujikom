@extends('layouts.app')
@section('content')
<h1>Update</h1>
{!!Form::model($tunjangan,['method'=>'PATCH','route'=>['tunjangan.update',$tunjangan->id]])!!}
<div class="form-group">
	{!!Form::label('kode','Kode Tunjangan:')!!}
	{!!Form::text('kode_tunjangan',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
   {!!Form::label('jabatan','Jabatan id :')!!}
   {!!Form::text('jabatan_id',null,['class'=>'form-control'])!!}	
<div class="form-group">
    {!!Form::label('golongan','Golongan id :')!!}
    {!!Form::text('golongan_id',null,['class'=>'form-control'])!!}	
</div>
<div class="form-group">
   {!!Form::label('status','Status :')!!}
   {!!Form::text('status',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('jumlah','Jumlah Anak :')!!}
    {!!Form::text('jumlah_anak',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
   {!!Form::submit('Update',['class'=>'btn btn-primary'])!!}	
</div>
   {!!Form::close()!!}
@stop