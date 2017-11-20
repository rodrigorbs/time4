<?php $__env->startSection('titulo'); ?>
    Login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
    <br>
    <div class="container ">
        <div class="row">
            <div class="col s3"></div>
            <div class="col s6">
                <div class="card-content black-text">
                    <span class="card-title centered"><h5>Login</h5></span>
                </div>
            </div>
            <div class="col s3"></div>
        </div>

        <div class ="row">
            <div class="col s3"></div>
            <div class="col s12 m6 l6 z-depth-6 card-panel hoverable"><br>
                <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <div class="row">
                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">mail_outline</i>
                                <label for="email" data-error="wrong" data-success="right">Email</label>
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
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
                            <div class="input-field col s12" >
                                <i class="material-icons prefix">lock_outline</i>
                                <label for="password">Password</label>
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
                        <div class="input-field col s12 m12 l12  login-text">
                            <input type="checkbox" id="remember-me" />
                            <label for="remember-me">Remember me</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <button type="submit" class="btn waves-effect waves-light col s12">
                                Login
                            </button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6 m6 l6">
                            <p class="margin medium-small">
                                <a class="black-text" href="<?php echo e(route('register')); ?>">
                                    Register New
                                </a>
                            </p>
                        </div>

                        <div class="input-field col s6 m6 l6">
                            <p class="margin right-align medium-small">
                                <a class="black-text" href="<?php echo e(route('password.request')); ?>">
                                    Forgot Your Password?
                                </a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col s3"></div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>