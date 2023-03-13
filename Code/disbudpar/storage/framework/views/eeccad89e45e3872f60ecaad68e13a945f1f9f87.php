 
<?php $__env->startSection('title'); ?>
Destinasi Wisata
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section id="page-title">
	<div class="container clearfix">
		<h1>Destinasi Wisata</h1>
		<span><?php echo e($tampilkan->id_kabupaten); ?></span>
	</div>
</section><!-- #page-title end -->

<div class="content-wrap">

<div class="container clearfix">

<div class="single-post nobottommargin">

<div class="related-posts clearfix">

<div class="col_half nobottommargin">

	<?php
		$id = $tampilkan->id;
		$id = explode(',' , $id);
		for($a = 0; $a < count($id); $a++){
		foreach($destinasi as $destinasi){
		if($destinasi->id == $id[$a]){
		echo '

	<div class="mpost clearfix">
		<div class="entry-image">
			<a href="#"><img src="images/blog/small/10.jpg" alt="Blog Single"></a>
		</div>
		<div class="entry-c">
			<div class="entry-title">
				<h4><a href="#">'.$destinasi->namaobjek.'</a></h4>
			</div>
			<ul class="entry-meta clearfix">
				<li><i class="icon-calendar3"></i> 10th July 2014</li>
				<li><a href="#"><i class="icon-comments"></i> 12</a></li>
			</ul>
			<div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
		</div>
	</div>';

	<!-- <div class="mpost clearfix">
		<div class="entry-image">
			<a href="#"><img src="images/blog/small/20.jpg" alt="Blog Single"></a>
		</div>
		<div class="entry-c">
			<div class="entry-title">
				<h4><a href="#">This is a Video Post</a></h4>
			</div>
			<ul class="entry-meta clearfix">
				<li><i class="icon-calendar3"></i> 24th July 2014</li>
				<li><a href="#"><i class="icon-comments"></i> 16</a></li>
			</ul>
			<div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
		</div>
	</div> -->

</div>
?>
<!-- <div class="col_half nobottommargin col_last">

	<div class="mpost clearfix">
		<div class="entry-image">
			<a href="#"><img src="images/blog/small/21.jpg" alt="Blog Single"></a>
		</div>
		<div class="entry-c">
			<div class="entry-title">
				<h4><a href="#">This is a Gallery Post</a></h4>
			</div>
			<ul class="entry-meta clearfix">
				<li><i class="icon-calendar3"></i> 8th Aug 2014</li>
				<li><a href="#"><i class="icon-comments"></i> 8</a></li>
			</ul>
			<div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
		</div>
	</div>

	<div class="mpost clearfix">
		<div class="entry-image">
			<a href="#"><img src="images/blog/small/22.jpg" alt="Blog Single"></a>
		</div>
		<div class="entry-c">
			<div class="entry-title">
				<h4><a href="#">This is an Audio Post</a></h4>
			</div>
			<ul class="entry-meta clearfix">
				<li><i class="icon-calendar3"></i> 22nd Aug 2014</li>
				<li><a href="#"><i class="icon-comments"></i> 21</a></li>
			</ul>
			<div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
		</div>
	</div> -->

</div>

</div>
</div>

</div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disbudpar\resources\views///user/destinasi.blade.php ENDPATH**/ ?>