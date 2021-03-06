<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Unidad de Trabajo</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <?php echo Form::model($unidad,['route'=>['unidadtrabajo.update',$unidad->id_unidad_trabajo],'method'=>'PUT']); ?>


        
                    <?php echo Form::label('Unidad de Trabajo'); ?>

                    <?php echo Form::text('descripcion_unidad', null,['class'=>'form-control', 'placeholder'=>'Descripcion Unidad']); ?>

                    <?php echo $errors->first('descripcion_unidad','<span class="help-block">:message</span>'); ?>


                    <br>
                    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?> 
                <?php echo Form::close(); ?> 
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>