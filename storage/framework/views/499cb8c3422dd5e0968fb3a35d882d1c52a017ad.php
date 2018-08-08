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
                 

                    

                    <?php echo Form::label('Login'); ?>

                    <?php echo Form::select('id_departamento', ['01'=>'Login1','02'=>'Login2','03'=>'Login3'], null, ['class' => 'form-control']); ?>


                    <?php echo Form::label('Tipo de Ingreso'); ?>

                    <?php echo Form::select('id_tipo_ingreso', ['01'=>'Tipo1','02'=>'Tipo2','03'=>'Tipo3'], null, ['class' => 'form-control']); ?>


                    <?php echo Form::label('Tipo de Soli. Subsidio'); ?>

                    <?php echo Form::select('id_tipo_solicitud_subsidio', ['01'=>'Tipo1','02'=>'Tipo2','03'=>'Tipo3'], null, ['class' => 'form-control']); ?>


                    <?php echo Form::label('Id proyecto'); ?>

                    <?php echo Form::select('id_tipo_ingreso', ['01'=>'Tipo1','02'=>'Tipo2','03'=>'Tipo3'], null, ['class' => 'form-control']); ?>


                    <?php echo Form::label('Inicio del Proyecto'); ?>

                    <?php echo Form::date('fecha_registro', \Carbon\Carbon::now(),['class'=>'form-control']); ?>

                    <?php echo $errors->first('fecha_registro','<span class="help-block">:message</span>'); ?>

                    
                    <?php echo Form::label('Observaciones'); ?>

                    <?php echo Form::textarea('observaciones_expediente', null,['class'=>'form-control', 'placeholder'=>'Observaciones']); ?>

                    <?php echo $errors->first('observaciones_expediente','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Monto Solicitado'); ?>

                    <?php echo Form::number('monto_solicitado', null,['class'=>'form-control', 'placeholder'=>'Monto']); ?>

                    <?php echo $errors->first('monto_solicitado','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Longitud'); ?>

                    <?php echo Form::number('longitud_proyecto', null,['class'=>'form-control', 'placeholder'=>'Longitud del Proyecto']); ?>

                    <?php echo $errors->first('longitud_proyecto','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Latitud'); ?>

                    <?php echo Form::number('latitud_proyecto', null,['class'=>'form-control', 'placeholder'=>'Latitud del Proyecto']); ?>

                    <?php echo $errors->first('latitud_proyecto','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Num. Expediente'); ?>

                    <?php echo Form::number('numero_expediente', null,['class'=>'form-control', 'placeholder'=>'Latitud del Proyecto']); ?>

                    <?php echo $errors->first('numero_expediente','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Año Expediente'); ?>

                    <?php echo Form::number('anio_expediente', \Carbon\Carbon::now()->year,['class'=>'form-control']); ?>

                    <?php echo $errors->first('anio_expediente','<span class="help-block">:message</span>'); ?>



                    <br>
                    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?> 
                
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>