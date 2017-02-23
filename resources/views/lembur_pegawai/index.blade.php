@extends('layouts/app')
@section('content')
<center><h1>Lemburpegawai</h1></center>
<hr>
<center><form action="{{url('Lemburpegawai')}}/?pegawai_id">
<input type="text" name="pegawai_id" placeholder="search">
<input type="submit" value="search" class="btn btn-primary">
</center>
<center><a href="{{url('/Lemburpegawai/create')}}"class="btn btn-success">Tambah Data</a></center>


<table class="table table-striped table bordered table-hover">
<table class="table table-default">
<tr class="danger">

	<thead>
		<tr class="bg-info">
		<th><center>No</center></th>
		<th>Kode Lembur id</th>
		<th><center>Pegawai id</center></th>
		<th><center>Jumlah Pegawai</center></th>
		<th colspan="3">Action</th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($lemburpegawai as $lemburpegawais)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$lemburpegawais->kode_lembur_id}}</td>
			<td>{{$lemburpegawais->pegawai_id}}</td>
			<td>{{$lemburpegawais->jumlah_jam}}</td>
		<td><a href="{{route('Lemburpegawai.edit',$lemburpegawais->id)}}"class="btn btn-warning">edit</a></td>
			
		</td>
		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['lemburpegawai.destroy',$lemburpegawais->id]])!!}
		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		
		@endforeach

	</tbody>
</table>
{{$lemburpegawai->links()}}
</form>
@endsection