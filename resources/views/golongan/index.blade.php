@extends('layouts/app')
@section('content')
<center><h1>Golongan</h1></center>
<hr>
<center><form action="{{url('golongan')}}/?nama_golongan">
<input type="text" name="nama_golongan" placeholder="search">
<input type="submit" value="search" class="btn btn-primary">
</center>
<center><a href="{{url('/golongan/create')}}"class="btn btn-success">Tambah Data</a></center>


<table class="table table-striped table bordered table-hover">
<table class="table table-default">
<tr class="danger">

	<thead>
		<tr class="bg-info">
		<th><center>No</center></th>
		<th>Kode Golongan</th>
		<th><center>Nama Golongan</center></th>
		<th><center>Besaran Uang</center></th>
		<th colspan="3">Action</th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($golongan as $golongans)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$golongans->kode_golongan}}</td>
			<td>{{$golongans->nama_golongan}}</td>
			<td>{{$golongans->besaran_uang}}</td>
		<td><a href="{{route('golongan.edit',$golongans->id)}}"class="btn btn-warning">edit</a></td>
			
		</td>
		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['golongan.destroy',$golongans->id]])!!}
		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		
		@endforeach

	</tbody>
</table>
{{$golongan->links()}}
</form>
@endsection