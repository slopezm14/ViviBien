<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Destino Subsidio</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
            <?php echo Form::open(['route'=>'destinosub.store','id'=>'contact', 'method'=>'POST']); ?>

                    <?php echo Form::label('Descripción del Tipo de Subsidio'); ?>

                    <?php echo Form::text('descripcion', null,['class'=>'form-control', 'placeholder'=>'Descripción del Tipo de Subsidio']); ?>

                    <?php echo $errors->first('descripcion','<span class="help-block">:message</span>'); ?>

                    
                    <br>
                    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?> 
               <?php echo Form::close(); ?>  
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>