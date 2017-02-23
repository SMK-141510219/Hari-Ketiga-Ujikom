@extends('layouts.app')
@section('content')
<h1>Tambah Data</h1>
{!!Form::open(['url'=>'penggajian'])!!}
<div class="form-group">
	{!!Form::label('tunjangan','Tunjangan Pegawai id:')!!}
	{!!Form::text('tunjangan_pegawai_id',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('jumlah',Jumlah Jam Lembur :')!!}
    {!!Form::text('jumlah_jam_lembur',null,['class'=>'form-control'])!!}	
</div>
<div class="form-group">
   {!!Form::label('jumlah','Jumlah Uang Lembur :')!!}
   {!!Form::text('jumlah_uang-lembur',null,['class'=>'form-control'])!!}	
</div>
<div class="form-group">
   {!!Form::label('gaji','Gaji Pokok :')!!}
   {!!Form::text('gaji_pokok',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
   {!!Form::label('total','Total Gaji :')!!}
   {!!Form::text('total_gaji',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
   {!!Form::label('tanggal','Tanggal Pengambilan :')!!}
   {!!Form::text('tanggal_pengambilan',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
   {!!Form::label('status','Status Pengambilan :')!!}
   {!!Form::text('status_pengambilan',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
   {!!Form::label('petugas','Petugas Penerima :')!!}
   {!!Form::text('petugas_penerima',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
   {!!Form::submit('Save',['class'=>'btn btn-primary form-control'])!!}
</div>
    {!!Form::close()!!}
@stop