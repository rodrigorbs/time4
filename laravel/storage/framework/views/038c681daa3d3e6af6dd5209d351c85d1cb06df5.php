<?php $__env->startSection('titulo'); ?>
    Register
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<br>
<div class="container">
    <div class="row">
        <div class="col s3"></div>
        <div class="col s6">
            <div class="card-content black-text">
                <span class="card-title centered"><h5>Register</h5></span>
            </div>
        </div>
        <div class="col s3"></div>
    </div>

    <div class ="row">
        <div class="col s3"></div>
        <div class="col s12 m6 l6 z-depth-6 card-panel hoverable"><br>
            <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                <?php echo e(csrf_field()); ?>


                <div class="row">
                    <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">person_outline</i>
                            <label for="name" data-error="wrong" data-success="right">Name</label>
                            <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                            <?php if($errors->has('name')): ?>
                                <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">person_outline</i>
                            <label for="email" data-error="wrong" data-success="right">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>
                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock_outline</i>
                            <label for="password" class="col-md-4 control-label" >Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                            <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                        <div class="input-field col s12" >
                            <i class="material-icons prefix">lock_outline</i>
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <button type="submit" class="btn waves-effect waves-light col s12">
                            Register
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <a class="btn waves-effect waves-light col s12" href="<?php echo e(route('login')); ?>">
                            Come Back
                        </a>
                    </div>
                </div>
                <br>
            </form>
        </div>
        <div class="col s3"></div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>