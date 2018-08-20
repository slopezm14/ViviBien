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
                    <?php echo Form::model($proyecto,['route'=>['proyecto.update',$proyecto->id_proyecto],'method'=>'PUT']); ?>


                    <?php echo Form::label('Municipio del Proyecto'); ?>

                    <?php echo Form::select('id_municipio_proyecto', $municipios, $proyecto->id_municipio, ['class' => 'form-control']); ?>

                    
                    <?php echo Form::label('Desarrollador'); ?>

                    <?php echo Form::select('id_desarrollador', $desarrollador, $proyecto->id_desarrollador, ['class' => 'form-control']); ?>

                    
                    <?php echo Form::label('Nombre del Proyecto'); ?>

                    <?php echo Form::text('nombre_proyecto', null,['class'=>'form-control', 'placeholder'=>'Nombre del Proyecto']); ?>

                    <?php echo $errors->first('nombre_proyecto','<span class="help-block">:message</span>'); ?>

                    
                    <?php echo Form::label('Nombre del Proyecto'); ?>

                    <?php echo Form::text('nombre_proyecto', null,['class'=>'form-control', 'placeholder'=>'Nombre del Proyecto']); ?>

                    <?php echo $errors->first('nombre_proyecto','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Longitud del Proyecto'); ?>

                    <?php echo Form::number('longitud_proyecto', null,['class'=>'form-control', 'placeholder'=>'Longitud del Proyecto']); ?>

                    <?php echo $errors->first('longitud_proyecto','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Latitud del Proyecto'); ?>

                    <?php echo Form::number('latitud_proyecto', null,['class'=>'form-control', 'placeholder'=>'Latitud del Proyecto']); ?>

                    <?php echo $errors->first('latitud_proyecto','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Monto del Proyecto'); ?>

                    <?php echo Form::number('monto_aproximado_proyecto', null,['class'=>'form-control', 'placeholder'=>'Monto del Proyecto']); ?>

                    <?php echo $errors->first('monto_proyecto','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Inicio del Proyecto'); ?>

                    <?php echo Form::date('fecha_inicio_trabajos', \Carbon\Carbon::now(),['class'=>'form-control']); ?>

                    <?php echo $errors->first('fecha_inicio_trabajos','<span class="help-block">:message</span>'); ?>


                    <br>
                    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?> 
                
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>