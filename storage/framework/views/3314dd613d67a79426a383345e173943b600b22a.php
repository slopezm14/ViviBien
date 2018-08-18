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
           
            <?php echo Form::model($desarrolladores,['route'=>['desarrollador.update',$desarrolladores->id_desarrollador],'method'=>'PUT']); ?>


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


                     <?php echo Form::label('Telefono1'); ?>

                    <?php echo Form::text('Num_Tel',$telefono[0]->numero_telefono, ['class'=>'form-control', 'placeholder'=>'Numero Telefono 1'] ); ?>

                    <?php echo $errors->first('Num_Tel','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Tipo Telefono'); ?>

                    <?php echo Form::select('id_ttelefono1', $tipotelefonos,null, ['class' => 'form-control']); ?>


                        <?php echo Form::label('Telefono2'); ?>

                    <?php echo Form::text('Num_Tel2',$telefono[1]->numero_telefono, ['class'=>'form-control', 'placeholder'=>'Numero Telefono 2'] ); ?>

                    <?php echo $errors->first('Num_Tel','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Tipo Telefono'); ?>

                    <?php echo Form::select('id_ttelefono2', $tipotelefonos,null, ['class' => 'form-control']); ?>


                        <?php echo Form::label('Telefono3'); ?>

                    <?php echo Form::text('Num_Tel3',null, ['class'=>'form-control', 'placeholder'=>'Numero Telefono 3'] ); ?>

                    <?php echo $errors->first('Num_Tel','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Tipo Telefono'); ?>

                    <?php echo Form::select('id_ttelefono1', $tipotelefonos, null, ['class' => 'form-control']); ?>

            
                    <br>
                    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?> 
                
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>