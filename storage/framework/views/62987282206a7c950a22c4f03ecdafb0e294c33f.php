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
                 

                    <?php echo Form::label('Login'); ?>

                    <?php echo Form::select('login', ['01'=>'Login1','02'=>'Login2','03'=>'Login3'], null, ['class' => 'form-control']); ?>


                    <?php echo Form::label('Id Expediente'); ?>

                    <?php echo Form::select('id_expediente_requisito', ['01'=>'Expediente1','02'=>'Expediente2','03'=>'Expediente3'], null, ['class' => 'form-control']); ?>


                    <?php echo Form::label('Expediente Requisito'); ?>

                    <?php echo Form::select('id_expediente_requisito', ['01'=>'Id1','02'=>'Id2','03'=>'Id3'], null, ['class' => 'form-control']); ?>


                    <?php echo Form::label('Nombre Archivo'); ?>

                    <?php echo Form::file('nombre_archivo', null, ['class' => 'form-control']); ?>

                    
                    <?php echo Form::label('Fecha Escaneo'); ?>

                    <?php echo Form::date('fecha_escaneo', \Carbon\Carbon::now(),['class'=>'form-control']); ?>

                    <?php echo $errors->first('fecha_escaneo','<span class="help-block">:message</span>'); ?>


                    <br>
                    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?> 
                
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>