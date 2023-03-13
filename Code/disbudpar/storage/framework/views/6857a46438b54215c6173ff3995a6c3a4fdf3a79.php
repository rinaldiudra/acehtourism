<?php $__env->startSection('title'); ?>
Login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
      <div class="content-wrap nopadding">

        <div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('user/images/gambar.jpg') center center no-repeat; background-size: cover;"></div>

        <div class="section nobg full-screen nopadding nomargin">
          <div class="container vertical-middle divcenter clearfix">

            <div class="row center">
              <!-- <a href="index.html"><img src="<?php echo e(asset('users/images/logo-dark.png')); ?>" alt="Canvas Logo"></a> -->
            </div>

            <div class="panel panel-default divcenter noradius noborder" style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
              <div class="panel-body" style="padding: 40px;">
                <form id="login-form" name="login-form" class="nobottommargin"  method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                  <h3>Login</h3>

                  <div class="col_full">
                    <label for="login-form-username"><?php echo e(__('Alamat Email')); ?></label>
                     <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                     <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                  </div>

                  <div class="col_full">
                    <label for="login-form-password"><?php echo e(__('Password')); ?></label>
                    <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>
                    
                     <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>                   
                  </div>

                  <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Ingatkan Saya')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>


                    <div class="col_full nobottommargin">
                                <button type="submit" class="button button-3d button-black nomargin">
                                    <?php echo e(__('Masuk')); ?>

                                </button>

                                <?php if(Route::has('password.request')): ?>
                                    <a class="fright" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Lupa Password?')); ?>

                                    </a>
                                <?php endif; ?>
                            </div>
                </form>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disbudpar\resources\views/auth/login.blade.php ENDPATH**/ ?>