@extends('layouts/app')
@section('content')
<center><h1>Pegawai</h1></center>
<hr>
<table class="table table-striped table bordered table-hover">
<table class="table table-default">
<tr class="danger">
<center><a href="{{url('/pegawai/create')}}"class="btn btn-success">Tambah Data</a></center>

	<thead>
		<tr class="bg-info">
		<th>No</th>
		<th><center>Nama</center></th>
		<th><center>Email</center></th>
		<th><center>Permision</center></th>
		<th>Nip</th>
		<th>Jabatan</th>
		<th>Golongan</th>
		<th>Foto</th>
		<th colspan="3">Action</th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($pegawai as $pegawais)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$pegawais->User->name}}</td>
			<td>{{$pegawais->User->email}}</td>
			<td>{{$pegawais->User->permision}}</td>
			<td>{{$pegawais->nip}}</td>
			<td>{{$pegawais->golonganModel->kode_golongan}}</td>
			<td>{{$pegawais->jabatanModel->kode_jabatan}}</td>
            


	<td><img src="assets/image/{{$pegawais->Foto}}" height="80" width="80"></td>
		>	
		</td>

		<td><a href="{{route('pegawai.edit',$pegawais->id)}}"class="btn btn-warning">edit</a></td>
		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['pegawai.destroy',$pegawais->id]])!!}
		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		@endforeach
	</tbody>
</table>
   @endsection