 
<?php $__env->startSection('title'); ?>
Destinasi Wisata
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section id="page-title">
	<div class="container clearfix">
		<div class="heading-block center nomargin">
			<h2>Destinasi Wisata</h2>
		</div>
	</div>
</section>

<section id="content">
<div class="section parallax nobottommargin notopmargin nobottomborder" style="background: url('user/images/bgpattern.png');" data-stellar-background-ratio="0.3">
	<div class="container clearfix">
	<?php $__currentLoopData = $kabupaten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kabupaten): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-md-3 bottommargin-sm">
			<div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
				<div class="fbox-icon">
					<a href="<?php echo e(url('/lihatdestinasi/'.$kabupaten->id)); ?>"><i class="icon-location i-alt"></i></a>
				</div>
				<h3><?php echo e($kabupaten->nama_kabupaten); ?></h3>
			</div>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<div class="clear"></div>
	</div>
</div>
</section><!-- #content end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disbudpar\resources\views/user/destinasiwisata.blade.php ENDPATH**/ ?>