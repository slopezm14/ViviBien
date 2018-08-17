<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tipo de Ingreso</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <?php echo Form::model($tipoingreso,['route'=>['tipoingreso.update',$tipoingreso->id_tipo_ingreso],'method'=>'PUT']); ?>

                    <?php echo Form::label('Descripción del Ingreso'); ?>

                    <?php echo Form::text('descripcion_ingreso', null,['class'=>'form-control', 'placeholder'=>'Descripción del Ingreso']); ?>

                    <?php echo $errors->first('descripcion_ingreso','<span class="help-block">:message</span>'); ?>

                    
                    <br>
                    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?> 
                <?php echo Form::close(); ?> 
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>