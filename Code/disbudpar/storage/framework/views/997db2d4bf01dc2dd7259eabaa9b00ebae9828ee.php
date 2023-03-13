 
<?php $__env->startSection('title'); ?>
Hotel
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section id="page-title">
	<div class="container clearfix">
		<div class="heading-block center nomargin">
			<h2>Hotel</h2>
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
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="entry clearfix">
				<div class="entry-image">
					<img src="<?php echo e(url('../storage/app/foto/'.($hotel->foto==NULL?:$hotel->foto))); ?>" alt="Gambar">
				</div>
				<div class="entry-title">
					<h2><?php echo e($hotel->nama_hotel); ?></a></h2>
				</div>
				<ul class="entry-meta clearfix">
					<li>Kategori/Bintang : <?php echo e($hotel->kategori); ?></li>
				</ul>
				<div class="entry-content">
					<p>
					<b>Jumlah Kamar : </b><?php echo e($hotel->jumlah_kamar); ?><br>
					<b>Detail Kamar : </b><br><?php echo e($hotel->detail_kamar); ?><br>
					<b>Pimpinan : </b><?php echo e($hotel->pimpinan); ?><br>
					<b>Kontak : </b><?php echo e($hotel->no_telp); ?><br>
					<b>Alamat : </b><?php echo e($hotel->alamat); ?>

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
<?php echo $__env->make('layouts.layout_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disbudpar\resources\views/user/lihathotel.blade.php ENDPATH**/ ?>