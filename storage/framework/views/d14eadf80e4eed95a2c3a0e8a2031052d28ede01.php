<?php if(Session::has('message')): ?>
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo e(Session::get('message')); ?>

</div>
<?php endif; ?>

<?php $__env->startSection('content'); ?>

<div id="page-content-wrapper">
<div align="center">
        <?php echo e(Form::hidden('numero', $hidden)); ?>

        <?php echo e(Form::hidden('numero', $choose)); ?>

    <table class="table table-bordered">
    <thead>
        <th align="center">ID</th>
        <th align="center">Descripcion Diligencias</th>
    </thead>
    <?php if($flag != 0): ?>
        <?php $__empty_1 = true; $__currentLoopData = $diligencias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tbody>
            <td align="center"><?php echo e($d->id_diligencia); ?></td>
            <td align="center"><?php echo e($d->descripcion_diligencia); ?></td>
            <td align="center"><?php echo link_to_route('expdili.edit', $title = 'Checkear', $parameter = $d->id_diligencia, $attributes = ['class'=>'btn btn-warning']); ?></td>    
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h1>NO HAY DATOS</h1>
        <?php endif; ?> 
    <?php else: ?>
    <h1>NO DILIGENCIAS NOW!</h1>
    <?php endif; ?>
    
</table>
    
</div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>