@extends('layouts/app')
@section('content')
<center><h1>Kategorilembur</h1></center>
<hr>
<center><form action="{{url('kategorilembur')}}/?jabatan_id">
<input type="text" name="jabatan_id" placeholder="search">
<input type="submit" value="search" class="btn btn-primary">
</center>
<center><a href="{{url('/kategorilembur/create')}}"class="btn btn-success">Tambah Data</a></center>


<table class="table table-striped table bordered table-hover">
<table class="table table-default">
<tr class="danger">

	<thead>
		<tr class="bg-info">
		<th><center>No</center></th>
		<th>Kode Lembur</th>
		<th><center>Jabatan id</center></th>
		<th><center>Golongan id</center></th>
		<th><center>Besaran Uang</center></th>
		<th colspan="3">Action</th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($kategorilembur as $kategorilemburs)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$kategorilemburs->kode_lembur}}</td>
			<td>{{$kategorilemburs->jabatan_id}}</td>
			<td>{{$kategorilemburs->golongan_id}}</td>
			<td>{{$kategorilemburs->besaran_uang}}</td>
		<td><a href="{{route('kategorilembur.edit',$kategorilemburs->id)}}"class="btn btn-warning">edit</a></td>
			
		</td>
		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['kategorilembur.destroy',$kategorilemburs->id]])!!}
		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		
		@endforeach

	</tbody>
</table>
{{$kategorilembur->links()}}
</form>
@endsection