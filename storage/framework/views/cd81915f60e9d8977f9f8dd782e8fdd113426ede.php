<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">CHEQUEO DE DILIGENCIA</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- FORMULARIO -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                    <?php echo Form::model($diligencias,['route'=>['expdili.update',$diligencias->id_diligencia],'method'=>'PUT']); ?>

                    <h2>Estas Chequeando una diligencia</h2>
                    <br>
                    <?php echo Form::submit('Checkear',['class'=>'btn btn-primary']); ?> 
                <?php echo Form::close(); ?> 
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>