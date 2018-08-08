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
                 

                    <?php echo Form::label('Login'); ?>

                    <?php echo Form::text('login', null,['class'=>'form-control', 'placeholder'=>'Login']); ?>

                    <?php echo $errors->first('login','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Rol'); ?>

                    <?php echo Form::select('id_departamento', ['01'=>'Rol1','02'=>'Rol2','03'=>'Rol3'], null, ['class' => 'form-control']); ?>

                    
                    <?php echo Form::label('Unidad'); ?>

                    <?php echo Form::select('id_unidad', ['01'=>'Unidad1','02'=>'Unidad2','03'=>'Unidad3'], null, ['class' => 'form-control']); ?>


                    <?php echo Form::label('Nombre'); ?>

                    <?php echo Form::text('nombre', null,['class'=>'form-control', 'placeholder'=>'Nombre del Usuario']); ?>

                    <?php echo $errors->first('nombre','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Estatus'); ?>

                    <?php echo Form::select('estatus', ['01'=>'Estatus1','02'=>'Estatus2'], null, ['class' => 'form-control']); ?>

                    
                    <?php echo Form::label('Clave'); ?>

                    <?php echo Form::password('clave',['class'=>'form-control']); ?>

                    <?php echo $errors->first('clave','<span class="help-block">:message</span>'); ?>


                    <br>
                    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?> 
                
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>