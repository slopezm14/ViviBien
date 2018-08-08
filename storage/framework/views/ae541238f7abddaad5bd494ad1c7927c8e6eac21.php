<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Usuarios</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 

                    

                    <?php echo Form::label('Id. Requisito'); ?>

                    <?php echo Form::select('id_requisito', ['01'=>'Reguisito1','02'=>'Requisito2','03'=>'Requisito3'], null, ['class' => 'form-control']); ?>


                    <?php echo Form::label('Login'); ?>

                    <?php echo Form::select('login', ['01'=>'Login1','02'=>'Login2','03'=>'Login3'], null, ['class' => 'form-control']); ?>


                    <?php echo Form::label('Expediente'); ?>

                    <?php echo Form::select('id_tipo_solicitud_subsidio', ['01'=>'Expediente1','02'=>'Expediente2','03'=>'Expediente3'], null, ['class' => 'form-control']); ?>


                    <?php echo Form::label('Fecha de Presentacion'); ?>

                    <?php echo Form::date('fecha_presentacion', \Carbon\Carbon::now(),['class'=>'form-control']); ?>

                    <?php echo $errors->first('fecha_presentacion','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Aceptado o Rechazado'); ?>

                    <br>
                    <?php echo Form::label('Aceptado'); ?>

                    <?php echo Form::checkbox('aceptado', '1', false);; ?>

                    <br>
                    <?php echo Form::label('Rechazado'); ?>

                    <?php echo Form::checkbox('aceptado', '0', false);; ?>


                    <br>
                    <?php echo Form::label('Comentario'); ?>

                    <?php echo Form::textarea('motivo_rechazo', null,['class'=>'form-control', 'placeholder'=>'Observaciones']); ?>

                    <?php echo $errors->first('motivo_rechazo','<span class="help-block">:message</span>'); ?>


                    <br>
                    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?> 
                
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>