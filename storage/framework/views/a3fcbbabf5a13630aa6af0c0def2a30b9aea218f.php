<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Requisitos</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                    <?php echo Form::model($requisito,['route'=>['genero.update',$requisito->id_requisito],'method'=>'PUT']); ?>


                    <?php echo Form::label('Id. Tipo de Ingreso'); ?>

                    <?php echo Form::select('id_tipo_ingreso', $tipoingreso, $requisito->id_tipo_ingreso, ['class' => 'form-control']); ?>


                    <?php echo Form::label('Descripción del Requisito'); ?>

                    <?php echo Form::text('descripcion_requisito', null,['class'=>'form-control', 'placeholder'=>'Descripción del Requisito']); ?>

                    <?php echo $errors->first('descripcion_requisito','<span class="help-block">:message</span>'); ?>


                    <?php echo Form::label('Observaciones'); ?>

                    <?php echo Form::text('observaciones', null,['class'=>'form-control', 'placeholder'=>'Observaciones']); ?>


                    <?php echo Form::label('Obligatorio'); ?>

                    <?php echo Form::select('obligatorio', ['S'=>'SI','N'=>'NO'], null, ['class' => 'form-control']); ?>

                    
                    
                    <br>
                    <?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?> 
                <?php echo Form::close(); ?> 
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>