<?php if(Session::has('message')): ?>
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo e(Session::get('message')); ?>

</div>
<?php endif; ?>

<?php $__env->startSection('content'); ?>

<div id="page-content-wrapper">
<div align="center">
    <table class="table table-bordered">
    <thead>
        <th align="center">ID</th>
        <th align="center">Numero</th>
        <th align="center">Nombre Desarrollador</th>
        <th align="center">Tipo Telefono</th>
    </thead>
     <?php $__empty_1 = true; $__currentLoopData = $telefonos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <tbody>
        <td align="center"><?php echo e($t->id_telefono); ?></td>
        <td align="center"><?php echo e($t->numero_telefono); ?></td>
        <td align="center"><?php echo e($t->nombre_desarrollador); ?></td>
        <td align="center"></td>
        <td align="center"><?php echo link_to_route('telefono.edit', $title = 'Actualizar', $parameter = $t->id_telefono, $attributes = ['class'=>'btn btn-warning']); ?></td>    
    </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <h1>NO HAY DATOS</h1>
    <?php endif; ?> 
</table>
    
</div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>