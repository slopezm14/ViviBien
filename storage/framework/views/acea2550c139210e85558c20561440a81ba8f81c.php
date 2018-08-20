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
                <?php echo Form::model($diligencia,['route'=>['categodili.update',$diligencia->id_diligencia],'method'=>'PUT']); ?>



                    <?php echo Form::label('Unidad de Trabajo'); ?>

                    <?php echo Form::select('id_unidad_trabajo', $unidad, $diligencia->id_unidad_trabajo, ['class' => 'form-control']); ?>


                    <?php echo Form::label('Descripcion de la Diligencia'); ?>

                    <?php echo Form::textarea('descripcion_diligencia', null,['class'=>'form-control', 'placeholder'=>'Descripción de la Diligencia']); ?>

                    <?php echo $errors->first('descripcion_diligencia','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Obligatorio'); ?>

                    <br> 
                    <?php echo Form::select('obligatoria', ['S'=>'Si','N'=>'No'], $diligencia->obligatoria, ['class' => 'form-control']); ?>


                    <?php echo Form::label('Orden'); ?>

                    <?php echo Form::number('orden', null,['class'=>'form-control']); ?>

                    <?php echo $errors->first('orden','<span class="help-block">:message</span>'); ?>



                    <br>
                    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?> 
                <?php echo Form::close(); ?> 
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>