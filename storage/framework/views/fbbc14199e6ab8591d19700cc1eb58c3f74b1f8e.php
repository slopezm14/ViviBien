<?php if(Session::has('message')): ?>
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo e(Session::get('message')); ?>

</div>
<?php endif; ?>
<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Relación Familiar</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 <?php echo Form::open(['route'=>'relacionfam.store','id'=>'contact', 'method'=>'POST']); ?> 
                    <?php echo Form::label('Descripción de la Relación'); ?>

                    <?php echo Form::text('descripcion', null,['class'=>'form-control', 'placeholder'=>'Descripción de la Relación']); ?>

                    <?php echo $errors->first('descripcion','<span class="help-block">:message</span>'); ?>

                    
                    <br>
                    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?> 
                <?php echo Form::close(); ?> 
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>