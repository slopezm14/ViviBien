<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Primer Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('nombre2') ? ' has-error' : ''); ?>">
                            <label for="nombre2" class="col-md-4 control-label">Segundo Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre2" type="text" class="form-control" name="nombre2" value="<?php echo e(old('nombre2')); ?>" autofocus>

                                <?php if($errors->has('nombre2')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('nombre2')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('apellido1') ? ' has-error' : ''); ?>">
                            <label for="nombre2" class="col-md-4 control-label">Segundo Nombre</label>

                            <div class="col-md-6">
                                <input id="apellido1" type="text" class="form-control" name="apellido1" value="<?php echo e(old('apellido1')); ?>" autofocus>

                                <?php if($errors->has('apellido1')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('apellido1')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('apellido2') ? ' has-error' : ''); ?>">
                            <label for="apellido2" class="col-md-4 control-label">Segundo Nombre</label>

                            <div class="col-md-6">
                                <input id="apellido2" type="text" class="form-control" name="apellido2" value="<?php echo e(old('apellido2')); ?>" autofocus>

                                <?php if($errors->has('apellido2')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('apellido2')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('id_rol') ? ' has-error' : ''); ?>">
                            <label for="id_rol" class="col-md-4 control-label">Rol</label>
                            <select class="form-control" id="sel1">
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value=<?php echo e($rol->id_rol); ?>><?php echo e($rol->descripcion_rol); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <div class="col-md-6">
                                
                                <?php if($errors->has('id_rol')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('id_rol')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('id_unidad') ? ' has-error' : ''); ?>">
                            <label for="id_unidad" class="col-md-4 control-label">Rol</label>
                            <select class="form-control" id="sel1">
                                <?php $__currentLoopData = $unidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unidad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value=<?php echo e($unidad->id_unidad); ?>><?php echo e($unidad->descripcion_unidad); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <div class="col-md-6">
                                
                                <?php if($errors->has('id_unidad')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('id_unidad')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('id_genero') ? ' has-error' : ''); ?>">
                            <label for="id_genero" class="col-md-4 control-label">Rol</label>
                            <select class="form-control" id="sel1">
                                <?php $__currentLoopData = $generos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value=<?php echo e($genero->id_genero); ?>><?php echo e($genero->descripcion_genero); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <div class="col-md-6">
                                
                                <?php if($errors->has('id_genero')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('id_genero')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>