extends('layouts.app')
@section('content')
<h1>Tambah Data</h1>
{!!Form::open(['url'=>'Tunjangan pegawai'])!!}
<div class="form-group">
	{!!Form::label('kode','Kode Tunjangan id:')!!}
	{!!Form::text('kode_tunjangan-id',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('pegawai','Pegawai id :')!!}
    {!!Form::text('pegawai_id',null,['class'=>'form-control'])!!}	
</div>
<div class="form-group">
   {!!Form::submit('Save',['class'=>'btn btn-primary form-control'])!!}
</div>
    {!!Form::close()!!}
@stop