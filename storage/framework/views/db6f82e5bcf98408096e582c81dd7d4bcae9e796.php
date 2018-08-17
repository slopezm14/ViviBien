<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tipo Accion</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <?php echo Form::model($tipoaccion,['route'=>['tipoaccion.update',$tipoaccion->id_accion],'method'=>'PUT']); ?>




                    <?php echo Form::label('Descripcion de Accion'); ?>

                    <?php echo Form::text('descripcion_accion', null,['class'=>'form-control', 'placeholder'=>'Descripcion de Accion']); ?>

                    <?php echo $errors->first('descripAccion','<span class="help-block">:message</span>'); ?>


                    
                   

                    <br>
                    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?> 
                <?php echo Form::close(); ?> 
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>