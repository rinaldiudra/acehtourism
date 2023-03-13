 
<?php $__env->startSection('title'); ?>
Pemandu Wisata
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section id="page-title">
<div class="container clearfix">
	<h1>Pemandu Wisata</h1>
	<span></span>
</div>
</section><!-- #page-title end -->

<section id="content">
<div class="content-wrap">
	<div class="container clearfix">
		<!-- Posts
		============================================= -->
		<div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pemandu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="entry clearfix">
				<div align="center">
					<img src="<?php echo e(asset('user/images/user.png')); ?>" alt="Gambar" width="150px" height="150px">
				</div>
				<div class="entry-title">
					<h2><?php echo e($pemandu->nama_pemandu); ?></a></h2>
				</div>
				<ul class="entry-meta clearfix">
					<li><?php echo e($pemandu->spesifikasi_bahasa); ?></li>
				</ul>
				<div class="entry-content">
					<p>
					<b>No HP : </b><?php echo e($pemandu->no_hp); ?><br>
					<b>Alamat : </b><?php echo e($pemandu->alamat); ?>

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
<?php echo $__env->make('layouts.layout_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disbudpar\resources\views/user/pemandu.blade.php ENDPATH**/ ?>