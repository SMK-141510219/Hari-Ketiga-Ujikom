<?php $__env->startSection('content'); ?>
<h1>Tambah Data</h1>
<?php echo Form::open(['url'=>'jabatan']); ?>

<div class="form-group">
	<?php echo Form::label('kode','Kode Jabatan:'); ?>

	<?php echo Form::text('kode_jabatan',null,['class'=>'form-control']); ?>

</div>
<div class="form-group">
   <?php echo Form::label('nama','Nama Jabatan :'); ?>

   <?php echo Form::text('nama_jabatan',null,['class'=>'form-control']); ?>	
</div>
<div class="form-group">
   <?php echo Form::label('besaran ','Besaran Uang :'); ?>

   <?php echo Form::text('besaran_uang',null,['class'=>'form-control']); ?>	
</div>
</div>
<div class="form-group">
  <?php echo Form::submit('Save',['class'=>'btn btn-primary form-control']); ?>

	
</div>
  <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>