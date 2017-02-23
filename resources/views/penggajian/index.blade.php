@extends('layouts/app')
@section('content')
<center><h1>Penggajians</h1></center>
<hr>
<center><form action="{{url('penggajian')}}/?jumlah_jam_lembur">
<input type="text" name="jumlah_jam_lembur" placeholder="search">
<input type="submit" value="search" class="btn btn-primary">
</center>
<center><a href="{{url('/jumlah jam lembur/create')}}"class="btn btn-success">Tambah Data</a></center>


<table class="table table-striped table bordered table-hover">
<table class="table table-default">
<tr class="danger">

	<thead>
		<tr class="bg-info">
		<th><center>No</center></th>
		<th>Tunjangan Pengawai id</th>
		<th><center>Jumlah Jam Lembur</center></th>
		<th><center>Jumlah Uang Lembur</center></th>
		<th><center>Gaji Pokok</center></th>
		<th><center>Total Gaji</center></th>
		<th><center>Tanggal Pengambilan</center></th>
		<th><center>Status Pengambilan</center></th>
		<th><center>Petugas Penerima</center></th>
		<th colspan="3">Action</th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($penggajian as $penggajians)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$penggajians->tunjangan_pegawai_id}}</td>
			<td>{{$penggajians->jumlah_jam_lembur}}</td>
			<td>{{$penggajians->jumlah_uang_lembur}}</td>
			<td>{{$penggajians->gaji_pokok}}</td>
			<td>{{$penggajians->total_gaji}}</td>
			<td>{{$penggajians->tanggal_penggambilan}}</td>
			<td>{{$penggajians->status_pengambilan}}</td>
			<td>{{$penggajians->petugas_penerima}}</td>
		<td><a href="{{route('penggajian.edit',$penggajians->id)}}"class="btn btn-warning">edit</a></td>
			
		</td>
		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['penggajian.destroy',$penggajians->id]])!!}
		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		
		@endforeach

	</tbody>
</table>
{{$penggajian->links()}}
</form>
@endsection