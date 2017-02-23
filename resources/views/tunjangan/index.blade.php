@extends('layouts/app')
@section('content')
<center><h1>Tunjangan</h1></center>
<hr>
<center><form action="{{url('tunjangan')}}/?jabatan_id">
<input type="text" name="jabatan_id" placeholder="search">
<input type="submit" value="search" class="btn btn-primary">
</center>
<center><a href="{{url('/tunjangan/create')}}"class="btn btn-success">Tambah Data</a></center>


<table class="table table-striped table bordered table-hover">
<table class="table table-default">
<tr class="danger">

	<thead>
		<tr class="bg-info">
		<th><center>No</center></th>
		<th>Kode Tunjangan</th>
		<th><center>Jabatan id</center></th>
		<th><center>Golongan id</center></th>
		<th><center>Status</center></th>
		<th><center>Jumlah Anak</center></th>
		<th><center>Besaran Uang</center></th>
		<th colspan="3">Action</th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($tunjangan as $tunjangans)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$tunjangans->kode_tunjangan}}</td>
			<td>{{$tunjangans->jabatan_id}}</td>
			<td>{{$tunjangans->golongan_id}}</td>
			<td>{{$tunjangans->status}}</td>
			<td>{{$tunjangans->jumlah_anak}}</td>
			<td>{{$tunjangans->besaran_uang}}</td>
		<td><a href="{{route('tunjangan.edit',$tunjangans->id)}}"class="btn btn-warning">edit</a></td>
			
		</td>
		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['tunjangan.destroy',$tunjangans->id]])!!}
		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		
		@endforeach

	</tbody>
</table>
{{$tunjangan->links()}}
</form>
@endsection