<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Desarrollador</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                 <?php echo Form::open(['route'=>'desarrollador.store','id'=>'contact', 'method'=>'POST']); ?> 

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


                    <?php echo Form::label('Dueño'); ?>

                    <?php echo Form::text('nombre_owner',null, ['class'=>'form-control', 'placeholder'=>'Nombre del Dueño'] ); ?>

                    <?php echo $errors->first('nombre_owner','<span class="help-block">:message</span>'); ?>


                    <br>

                     <?php echo Form::label('Telefono1'); ?>

                    <?php echo Form::text('Num_Tel1',null, ['class'=>'form-control', 'placeholder'=>'Numero Telefono 1'] ); ?>

                    <?php echo $errors->first('Num_Tel1','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Tipo Telefono de Telefono1'); ?>

                    <?php echo Form::select('tipotelefono1', $tipotelefonos, null, ['class' => 'form-control']); ?>


                    <br>

                        <?php echo Form::label('Telefono2'); ?>

                    <?php echo Form::text('Num_Tel2',null, ['class'=>'form-control', 'placeholder'=>'Numero Telefono 2'] ); ?>

                    <?php echo $errors->first('Num_Tel2','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Tipo Telefono de Telefono2'); ?>

                    <?php echo Form::select('tipotelefono2', $tipotelefonos, null, ['class' => 'form-control']); ?>


                    <br>
                    
                        <?php echo Form::label('Telefono3'); ?>

                    <?php echo Form::text('Num_Tel3',null, ['class'=>'form-control', 'placeholder'=>'Numero Telefono 3'] ); ?>

                    <?php echo $errors->first('Num_Tel3','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Tipo Telefono de Telefono3'); ?>

                    <?php echo Form::select('tipotelefono3', $tipotelefonos, null, ['class' => 'form-control']); ?>


            
                    <br>
                    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?> 
                <?php echo Form::close(); ?> 
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>