<?php if(Session::has('message')): ?>
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo e(Session::get('message')); ?>

</div>
<?php endif; ?>

<?php $__env->startSection('content'); ?>

<div id="page-content-wrapper">
<a href="<?php echo e(url('relacionfam/create')); ?>">Creación Relacion Familiar</a>
<div align="center">
    <table class="table table-bordered">
    <thead>
        <th align="center">ID</th>
        <th align="center">Relación Familiar</th>
    </thead>
     <?php $__empty_1 = true; $__currentLoopData = $relacion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <tbody>
        <td align="center"><?php echo e($r->id_relacion_familiar); ?></td>
        <td align="center"><?php echo e($r->descripcion); ?></td>
        <td align="center"><?php echo link_to_route('relacionfam.edit', $title = 'Actualizar', $parameter = $r->id_relacion_familiar, $attributes = ['class'=>'btn btn-warning']); ?></td>    
    </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <h1>NO HAY DATOS</h1>
    <?php endif; ?> 
</table>
    
</div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>