<?php $__env->startSection('content'); ?>
<h1>Update</h1>
<?php echo Form::model($jabatan,['method'=>'PATCH','route'=>['jabatan.update',$jabatan->id]]); ?>

<div class="form-group">
	<?php echo Form::label('kode','Kode jabatan:'); ?>

	<?php echo Form::text('kode_jabatan',null,['class'=>'form-control']); ?>

</div>

<div class="form-group">
<?php echo Form::label('nama','Nama Jabatan :'); ?>

<?php echo Form::text('nama_jabatan',null,['class'=>'form-control']); ?>	
<div class="form-group">
<?php echo Form::label('besaran','Besaran Uang :'); ?>

<?php echo Form::text('besaran_uang',null,['class'=>'form-control']); ?>	
</div>
</div>
<div class="form-group">
<?php echo Form::submit('Update',['class'=>'btn btn-primary']); ?>	
</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>