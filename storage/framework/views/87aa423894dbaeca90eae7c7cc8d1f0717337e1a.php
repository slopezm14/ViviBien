<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">CREAR TIPOS DE TELEFONO</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 

                    <?php echo Form::label('Departamento'); ?>

                    <?php echo Form::select('id_departamento', ['01'=>'Jutiapa','02'=>'Jalapa','03'=>'Santa Rosa'], null, ['class' => 'form-control']); ?>

                    <br>
                    <?php echo Form::label('Descripción del Municipio'); ?>

                    <?php echo Form::text('descripcion_municipio', null,['class'=>'form-control', 'placeholder'=>'Descripción del Municipio']); ?>

                    <?php echo $errors->first('descripcion_municipio','<span class="help-block">:message</span>'); ?>

                    
                    <br>
                    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?> 
                
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>