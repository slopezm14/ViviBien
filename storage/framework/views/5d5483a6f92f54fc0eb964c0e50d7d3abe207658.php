<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Genero</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                    <?php echo Form::model($genero,['route'=>['genero.update',$genero->id_generos],'method'=>'PUT']); ?>




                    <?php echo Form::label('Genero'); ?>

                    <?php echo Form::text('descripcion_genero', null,['class'=>'form-control', 'placeholder'=>'Genero']); ?>

                    <?php echo $errors->first('genero','<span class="help-block">:message</span>'); ?>


                    
                   

                    <br>
                    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?> 
                <?php echo Form::close(); ?> 
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>