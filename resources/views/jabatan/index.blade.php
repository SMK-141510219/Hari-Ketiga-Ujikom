@extends('layouts/app')
@section('content')
<center><h1>Jabatan</h1></center>
<hr>
<center><form action="{{url('jabatan')}}/?nama_jabatan">
<input type="text" name="nama_jabatan" placeholder="search">
<input type="submit" value="search" class="btn btn-primary">
</center>
<center><a href="{{url('/jabatan/create')}}"class="btn btn-success">Tambah Data</a></center>


<table class="table table-striped table bordered table-hover">
<table class="table table-default">
<tr class="danger">

	<thead>
		<tr class="bg-info">
		<th><center>No</center></th>
		<th>Kode Jabatan</th>
		<th><center>Besaran Uang</center></th>
		<th><center>Nama Jabatan</center></th>
		<th colspan="3">Action</th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($jabatan as $jabatans)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$jabatans->kode_jabatan}}</td>
			<td>{{$jabatans->besaran_uang}}</td>
			<td>{{$jabatans->nama_jabatan}}</td>
		<td><a href="{{route('jabatan.edit',$jabatans->id)}}"class="btn btn-warning">edit</a></td>
			
		</td>
		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['jabatan.destroy',$jabatans->id]])!!}
		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		
		@endforeach

	</tbody>
</table>
{{$jabatan->links()}}
</form>
@endsection