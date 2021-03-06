<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Usuario</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <?php echo Form::model($usuario,['route'=>['usuario.update',$usuario->id],'method'=>'PUT']); ?>


                    <?php echo Form::label('Usuario'); ?>

                    <?php echo Form::email('email', null,['class'=>'form-control', 'placeholder'=>'Ingrese Usuario']); ?>

                    <?php echo $errors->first('email','<span class="help-block">:message</span>'); ?>

                    
                    <?php echo Form::label('Unidad'); ?>

                    <?php echo Form::select('id_unidad', $unidad_trabajo, $usuario->id_unidad_trabajo, ['class' => 'form-control']); ?>


                    <?php echo Form::label('Id Genero'); ?>

                    <?php echo Form::select('id_genero', $genero, $usuario->id_generos, ['class' => 'form-control']); ?>


                    <?php echo Form::label('Nombre1'); ?>

                    <?php echo Form::text('name', null,['class'=>'form-control', 'placeholder'=>'Nombre 1']); ?>

                    <?php echo $errors->first('name','<span class="help-block">:message</span>'); ?>


                    
                    <?php echo Form::label('Nombre2'); ?>

                    <?php echo Form::text('nombre2', null,['class'=>'form-control', 'placeholder'=>'Nombre 2']); ?>

                    <?php echo $errors->first('nombre2','<span class="help-block">:message</span>'); ?>


                                    
                    <?php echo Form::label('Apellido 1'); ?>

                    <?php echo Form::text('apellido1', null,['class'=>'form-control', 'placeholder'=>'Apellido 1']); ?>

                    <?php echo $errors->first('apellido1','<span class="help-block">:message</span>'); ?>

                    
                    <?php echo Form::label('Apellido 2'); ?>

                    <?php echo Form::text('apellido2', null,['class'=>'form-control', 'placeholder'=>'Apellido 2']); ?>

                    <?php echo $errors->first('apellido2','<span class="help-block">:message</span>'); ?>



                    <?php echo Form::label('Estatus'); ?>

                    <?php echo Form::select('estatus', ['01'=>'Estatus1','02'=>'Estatus2'], null, ['class' => 'form-control']); ?>


                    <br>
                    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?> 
                <?php echo Form::close(); ?> 
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>