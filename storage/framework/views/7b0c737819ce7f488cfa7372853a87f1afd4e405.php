<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tipo Telefono</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <?php echo Form::model($tipotelefono,['route'=>['tipotelefono.update',$tipotelefono->id_tipotelefono],'method'=>'PUT']); ?>




                    <?php echo Form::label('Tipo Telefono'); ?>

                    <?php echo Form::text('descripcion_tipotelefono', null,['class'=>'form-control', 'placeholder'=>'Tipo Telefono']); ?>

                    <?php echo $errors->first('tipo_telefono','<span class="help-block">:message</span>'); ?>


                    
                   

                    <br>
                    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?> 
                <?php echo Form::close(); ?> 
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>