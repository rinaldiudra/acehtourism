<?php $__env->startSection('title'); ?>
Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section id="main-content">
      <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i>Dashboard</h3>
        <div class="row">
        <div class="col-lg-12 main-chart">
              <!--/ col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>DESTINASI WISATA</h5>
                  </div>
                    <div class="user">
                      <img src="<?php echo e(asset('admin/img/foto.jpg')); ?>" class="img-circle" width="110" height="110">
                    </div>
                    <h5>Total Data</h5>
                  <h3><b><?php echo e($destinasi); ?></b></h3>
                </div>
              </div>

              <!--/ col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>HOTEL</h5>
                  </div>
                    <div class="user">
                      <img src="<?php echo e(asset('admin/img/hotel.jpg')); ?>" class="img-circle" width="110" height="110">
                    </div>
                    <h5>Total Data</h5>
                  <h3><b><?php echo e($hotel); ?></b></h3>
                </div>
              </div>

              <!--/ col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>KULINER</h5>
                  </div>
                    <div class="user">
                      <img src="<?php echo e(asset('user/images/food.png')); ?>" class="img-circle" width="110" height="110">
                    </div>
                    <h5>Total Data</h5>
                  <h3><b><?php echo e($kuliner); ?></b></h3>
                </div>
              </div>

              <!--/ col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>SOUVENIR</h5>
                  </div>
                    <div class="user">
                      <img src="<?php echo e(asset('admin/img/khasaceh.jpg')); ?>" class="img-circle" width="110" height="110">
                    </div>
                    <h5>Total Data</h5>
                  <h3><b><?php echo e($souvenir); ?></b></h3>
                </div>
              </div>

              <!--/ col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>PEMANDU WISATA</h5>
                  </div>
                    <div class="user">
                      <img src="<?php echo e(asset('admin/img/pemandu.jpg')); ?>" class="img-circle" width="110" height="110">
                    </div>
                    <h5>Total Data</h5>
                  <h3><b><?php echo e($pemandu); ?></b></h3>
                </div>
              </div>

              <!--/ col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>JASA TRAVEL</h5>
                  </div>
                    <div class="user">
                      <img src="<?php echo e(asset('admin/img/travel.jpg')); ?>" class="img-circle" width="110" height="110">
                    </div>
                    <h5>Total Data</h5>
                  <h3><b><?php echo e($travel); ?></b></h3>
                </div>
              </div>

            <!-- /row -->
          </div>
		</div>
      </section>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disbudpar\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>