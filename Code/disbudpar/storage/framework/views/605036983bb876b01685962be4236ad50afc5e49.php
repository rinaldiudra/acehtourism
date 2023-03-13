 
<?php $__env->startSection('title'); ?>
Destinasi Wisata
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section id="page-title">
<div class="container clearfix">
	<h1>Destinasi Wisata</h1>
	<span></span>
</div>
</section><!-- #page-title end -->

<section id="content">
<div class="content-wrap">
	<div class="container clearfix">
		<!-- Posts
		============================================= -->
		<div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destinasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="entry clearfix">
				<div class="entry-image">
					<img src="<?php echo e(url('../storage/app/foto/'.($destinasi->foto==NULL?:$destinasi->foto))); ?>" alt="Gambar">
				</div>
				<div class="entry-title">
					<h2><?php echo e($destinasi->namaobjek); ?></a></h2>
				</div>
				<ul class="entry-meta clearfix">
					<li><?php echo e($destinasi->jenis); ?></li>
				</ul>
				<div class="entry-content">
					<p><b>Alamat : </b><?php echo e($destinasi->lokasi); ?></p>
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
<?php echo $__env->make('layouts.layout_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disbudpar\resources\views/user/destinasi.blade.php ENDPATH**/ ?>