 
<?php $__env->startSection('title'); ?>
Jasa Travel
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section id="page-title">
	<div class="container clearfix">
		<div class="heading-block center nomargin">
			<h2>Jasa Travel</h2>
			<?php $__currentLoopData = $kab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kabupaten): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<h4><?php echo e($kabupaten->nama_kabupaten); ?></h4>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</section>

<section id="content">
<div class="content-wrap">
	<div class="container clearfix">
		<!-- Posts
		============================================= -->
		<div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $travel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="entry clearfix">
				<div align="center">
					<img src="<?php echo e(asset('user/images/travel.png')); ?>" alt="Gambar" width="200px" height="200px">
				</div>
				<div class="entry-title">
					<h2><?php echo e($travel->nama_travel); ?></a></h2>
				</div>
				<ul class="entry-meta clearfix">
					<li><?php echo e($travel->jenis); ?></li>
				</ul>
				<div class="entry-content">
					<p>
					<b>No Izin : </b><?php echo e($travel->no_izin); ?><br>
					<b>Pimpinan : </b><?php echo e($travel->pimpinan); ?><br>
					<b>Kontak : </b><?php echo e($travel->kontak); ?><br>
					<b>Alamat : </b><?php echo e($travel->alamat); ?>

					</p>
				</div>
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div><!-- #posts end -->
		<div align="right">
			<?php echo $data->render(); ?>

		</div>
	</div>
</div>
</section><!-- #content end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disbudpar\resources\views/user/lihattravel.blade.php ENDPATH**/ ?>