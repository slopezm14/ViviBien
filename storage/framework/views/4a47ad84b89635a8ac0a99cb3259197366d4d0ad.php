<?php if(Session::has('message')): ?>
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo e(Session::get('message')); ?>

</div>
<?php endif; ?>
<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Expediente Grupo</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 <?php echo Form::open(['route'=>'grupo.store','id'=>'contact', 'method'=>'POST','files' => true]); ?> 

                 <?php echo e(Form::hidden('numero', $holi)); ?>


                 <h3>Expediente</h3>
                 <?php echo Form::label('Id proyecto'); ?>

                 <?php echo Form::select('id_proyecto', $proyecto, null, ['class' => 'form-control']); ?>


                 <?php echo Form::label('Id Tipo Solicitud Subsidio'); ?>

                 <?php echo Form::select('id_tipo_solicitud_subsidio', $destino, null, ['class' => 'form-control']); ?>


                 <?php echo Form::label('Inicio del Proyecto'); ?>

                 <?php echo Form::date('fecha_registro', \Carbon\Carbon::now(),['class'=>'form-control']); ?>

                 <?php echo $errors->first('fecha_registro','<span class="help-block">:message</span>'); ?>

                 
                 <?php echo Form::label('Observaciones'); ?>

                 <?php echo Form::textarea('observaciones_expediente', null,['class'=>'form-control', 'placeholder'=>'Observaciones']); ?>

                 <?php echo $errors->first('observaciones_expediente','<span class="help-block">:message</span>'); ?>


                 <?php echo Form::label('Monto Solicitado'); ?>

                 <?php echo Form::number('monto_solicitado', null,['class'=>'form-control', 'placeholder'=>'Monto']); ?>

                 <?php echo $errors->first('monto_solicitado','<span class="help-block">:message</span>'); ?>


                 <?php echo Form::label('Num. Expediente'); ?>

                 <?php echo Form::number('numero_expediente', $num,['class'=>'form-control', 'disabled' => 'disabled', 'placeholder'=>'Num. de Expediente']); ?>

                 <?php echo $errors->first('numero_expediente','<span class="help-block">:message</span>'); ?>


                 <?php echo Form::label('Año Expediente'); ?>

                 <?php echo Form::number('anio_expediente', \Carbon\Carbon::now()->year,['class'=>'form-control']); ?>

                 <?php echo $errors->first('anio_expediente','<span class="help-block">:message</span>'); ?>


                    <br>
                    <?php for($i = 1; $i <= $holi; $i++): ?>
                    <h5>Persona No.<?php echo e($i); ?></h5>
                    <hr>
                    <?php echo Form::label('Relación Familiar'); ?>

                    <?php echo Form::select($i.'id_relacion', $relacion, null, ['class' => 'form-control']); ?>


                    <?php echo Form::label('Genero'); ?>

                    <?php echo Form::select($i.'id_genero', $genero, null, ['class' => 'form-control']); ?>


                    <?php echo Form::label('Número de Documento'); ?>

                    <?php echo Form::text($i.'numero_documento', null,['class'=>'form-control', 'placeholder'=>'Número de Documento']); ?>

                    <?php echo $errors->first('numero_documento','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Número de Telefono'); ?>

                    <?php echo Form::text($i.'numero_telefono', null,['class'=>'form-control', 'placeholder'=>'Número de Documento']); ?>

                    <?php echo $errors->first('numero_telefono','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Primer Nombre'); ?>

                    <?php echo Form::text($i.'nombre1', null,['class'=>'form-control', 'placeholder'=>'Primer Nombre']); ?>

                    <?php echo $errors->first('nombre1','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Segundo Nombre'); ?>

                    <?php echo Form::text($i.'nombre2', null,['class'=>'form-control', 'placeholder'=>'Segundo Nombre']); ?>

                    <?php echo $errors->first('nombre2','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Primer Nombre'); ?>

                    <?php echo Form::text($i.'apellido1', null,['class'=>'form-control', 'placeholder'=>'Primer Apellido']); ?>

                    <?php echo $errors->first('apellido1','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Segundo Nombre'); ?>

                    <?php echo Form::text($i.'apellido2', null,['class'=>'form-control', 'placeholder'=>'Segundo Apellido']); ?>

                    <?php echo $errors->first('apellido2','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Apellido de Casada'); ?>

                    <?php echo Form::text($i.'apellidoCasada', null,['class'=>'form-control', 'placeholder'=>'Apellido de Casada']); ?>

                    <?php echo $errors->first('apellidoCasada','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Fecha de Nacimiento'); ?>

                    <?php echo Form::date($i.'fecha_nacimiento', \Carbon\Carbon::now(),['class'=>'form-control']); ?>

                    <?php echo $errors->first('fecha_nacimiento','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Dirección'); ?>

                    <?php echo Form::text($i.'direccion', null,['class'=>'form-control', 'placeholder'=>'Dirección']); ?>

                    <?php echo $errors->first('direccion','<span class="help-block">:message</span>'); ?>


                    <?php $__empty_1 = true; $__currentLoopData = $requisitos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $requisito): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        
                        <?php echo Form::label('Nombre Archivo - '.$requisito->descripcion_requisito); ?>

                        <?php echo Form::file('p'.$i.'archivo_'.$requisito->id_requisito, null, ['class' => 'form-control']); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        No hay!!!!
                    <?php endif; ?> 

                    <?php endfor; ?>
                        


                    <br>
                    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?> 
                <?php echo Form::close(); ?> 
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>