<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Municipios</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 

                    <?php echo Form::label('Nombre del Desarrollador'); ?>

                    <?php echo Form::text('nombre_desarrollador', null,['class'=>'form-control', 'placeholder'=>'Nombre del Desarrollador']); ?>

                    <?php echo $errors->first('nombre_desarrollador','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Nit del Desarrollador'); ?>

                    <?php echo Form::text('nit', null,['class'=>'form-control', 'placeholder'=>'Nit del Desarrollador']); ?>

                    <?php echo $errors->first('nit','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Dirección'); ?>

                    <?php echo Form::text('direccion_empresa', null,['class'=>'form-control', 'placeholder'=>'Dirección']); ?>

                    <?php echo $errors->first('direccion_empresa','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Correo Electronico'); ?>

                    <?php echo Form::email('correo_electronico',null, ['class'=>'form-control', 'placeholder'=>'Correo Electronico'] ); ?>

                    <?php echo $errors->first('correo_electronico','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Teléfono'); ?>

                    <?php echo Form::text('telefono', null,['class'=>'form-control', 'placeholder'=>'Teléfono']); ?>

                    <?php echo $errors->first('telefono','<span class="help-block">:message</span>'); ?>

            
                    <br>
                    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?> 
                
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>