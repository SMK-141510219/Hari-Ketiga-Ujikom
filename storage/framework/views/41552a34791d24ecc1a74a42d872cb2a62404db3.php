<?php $__env->startSection('content'); ?>
<center><h1>Jabatan</h1></center>
<hr>
<center><form action="<?php echo e(url('jabatan')); ?>/?nama_jabatan">
<input type="text" name="nama_jabatan" placeholder="search">
<input type="submit" value="search" class="btn btn-primary">
</center>
<center><a href="<?php echo e(url('/jabatan/create')); ?>"class="btn btn-success">Tambah Data</a></center>


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
		<?php 
		$no=1;
		 ?>
		<?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jabatans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><?php echo e($no++); ?></td>
			<td><?php echo e($jabatans->kode_jabatan); ?></td>
			<td><?php echo e($jabatans->besaran_uang); ?></td>
			<td><?php echo e($jabatans->nama_jabatan); ?></td>
		<td><a href="<?php echo e(route('jabatan.edit',$jabatans->id)); ?>"class="btn btn-warning">edit</a></td>
			
		</td>
		<td>
		<?php echo Form::open(['method'=>'DELETE','route'=>['jabatan.destroy',$jabatans->id]]); ?>

		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		<?php echo Form::close(); ?>

		</td>
		</tr>
		
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

	</tbody>
</table>
<?php echo e($jabatan->links()); ?>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>