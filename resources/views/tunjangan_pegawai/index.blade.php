@extends('layouts/app')
@section('content')
<center><h1>Tunjangan pegawai</h1></center>
<hr>
<center><form action="{{url('tunjangan pegawai')}}/?pegawai_id">
<input type="text" name="pegawai_id" placeholder="search">
<input type="submit" value="search" class="btn btn-primary">
</center>
<center><a href="{{url('/tunjangan pegawai/create')}}"class="btn btn-success">Tambah Data</a></center>


<table class="table table-striped table bordered table-hover">
<table class="table table-default">
<tr class="danger">

	<thead>
		<tr class="bg-info">
		<th><center>No</center></th>
		<th>Kode Tunjangan id</th>
		<th><center>Pegawai id</center></th>
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
			<td>{{$tunjangan pegawai->kode_tunjangan_id}}</td>
			<td>{{$tunjangan pegawai->pegawai_id}}</td>
		<td><a href="{{route('tunjangan pegawai.edit',$tunjangans pegawai->id)}}"class="btn btn-warning">edit</a></td>
			
		</td>
		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['tunjangan pegawai.destroy',$tunjangans pegawai->id]])!!}
		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		
		@endforeach

	</tbody>
</table>
{{$tunjangan pegawai->links()}}
</form>
@endsection