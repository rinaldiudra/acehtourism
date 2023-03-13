 
<?php $__env->startSection('title'); ?>
Souvenir
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section id="page-title">
	<div class="container clearfix">
		<div class="heading-block center nomargin">
			<h2>Souvenir</h2>
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
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $souvenir): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="entry clearfix">
				<div class="entry-image">
					<img src="<?php echo e(url('../storage/app/foto/'.($souvenir->foto==NULL?:$souvenir->foto))); ?>" alt="Gambar">
				</div>
				<div class="entry-title">
					<h2><?php echo e($souvenir->nama_usaha); ?></a></h2>
				</div>
				<ul class="entry-meta clearfix">
					<li><?php echo e($souvenir->jenis_produk); ?></li>
				</ul>
				<div class="entry-content">
					<p>
					<b>Pemilik : </b><?php echo e($souvenir->nama_pemilik); ?><br>
					<b>Kontak : </b><?php echo e($souvenir->no_hp); ?><br>
					<b>Alamat : </b><?php echo e($souvenir->alamat); ?>

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
<?php echo $__env->make('layouts.layout_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disbudpar\resources\views/user/lihatsouvenir.blade.php ENDPATH**/ ?>