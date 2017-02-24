<?php $__env->startSection('content'); ?>
<center><h1>Golongan</h1></center>
<hr>
<center><form action="<?php echo e(url('golongan')); ?>/?nama_golongan">
<input type="text" name="nama_golongan" placeholder="search">
<input type="submit" value="search" class="btn btn-primary">
</center>
<center><a href="<?php echo e(url('/golongan/create')); ?>"class="btn btn-success">Tambah Data</a></center>


<table class="table table-striped table bordered table-hover">
<table class="table table-default">
<tr class="danger">

	<thead>
		<tr class="bg-info">
		<th><center>No</center></th>
		<th>Kode Golongan</th>
		<th><center>Nama </center></th>
		<th><center>Besaran Uang</center></th>
		<th colspan="3">Action</th>
			
		</tr>
	</thead>
	<tbody>
		<?php 
		$no=1;
		 ?>
		<?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $golongans): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><?php echo e($no++); ?></td>
			<td><?php echo e($golongans->kode_golongan); ?></td>
			<td><?php echo e($golongans->nama_golongan); ?></td>
			<td><?php echo e($golongans->besaran_uang); ?></td>
		<td><a href="<?php echo e(route('golongan.edit',$golongans->id)); ?>"class="btn btn-warning">edit</a></td>
			
		</td>
		<td>
		<?php echo Form::open(['method'=>'DELETE','route'=>['golongan.destroy',$golongans->id]]); ?>

		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		<?php echo Form::close(); ?>

		</td>
		</tr>
		
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

	</tbody>
</table>
<?php echo e($golongan->links()); ?>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>