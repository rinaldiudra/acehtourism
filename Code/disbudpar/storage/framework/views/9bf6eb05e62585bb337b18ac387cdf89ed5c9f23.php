 
<?php $__env->startSection('title'); ?>
Perkiraan Biaya
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>
<section id="content">
<div class="content-wrap">
	<div class="container clearfix">
		<div class="col_one_third nobottommargin">
			<div class="well well-lg nobottommargin">

				<form id="login-form" name="login-form" class="nobottommargin" action="#" method="post">
					<h3>Pilih Provinsi Asalmu</h3>

					<div class="col_full">
						<label for="login-form-username"><?php echo e(__('Provinsi :')); ?></label>
						<select class="form-control" id="id_provinsi" name="id_provinsi" data-source="<?php echo e(url('/getProvinsi')); ?>" data-valueKey="id_provinsi" data-displayKey="nama_provinsi">
						</select>
					</div>
			</div>

		</div>

		<div class="col_two_third col_last nobottommargin">
			<h3>Pilih Tujuan Destinasi Liburanmu di Aceh</h3>
			<p>Hitung perkiraan biaya liburanmu selama di Aceh, Perkiraan biaya yang dihitung yaitu Biaya Tiket Pesawat dari Provinsimu ke Banda Aceh (Pulang Pergi), Biaya Transportasi Umum dari Banda Aceh ke Kabupaten/Kota destinasi liburanmu (Pulang Pergi) dan Biaya Penginapan.</p>

				<div class="col_half">
					<label for="register-form-name"><?php echo e(__('Pilih Kabupaten/Kota :')); ?></label>
					<select class="form-control" id="id_kabupaten" name="id_kabupaten" data-source="<?php echo e(url('/getKabupaten')); ?>" data-valueKey="id" data-displayKey="nama_kabupaten">
                    </select>
				</div>

				<div class="col_half col_last">
					<label for="register-form-email">Pilih Destinasi Wisata:</label>
					<input type="text" id="register-form-email" name="register-form-email" value="" class="form-control" />
				</div>

				<div class="clear"></div>

				<div class="col_half">
					<label for="register-form-username">Pilih Hotel:</label>
					<input type="text" id="register-form-username" name="register-form-username" value="" class="form-control" />
				</div>

				<div class="col_half col_last">
					<label for="register-form-phone">Pilih Tipe Kamar:</label>
					<input type="text" id="register-form-phone" name="register-form-phone" value="" class="form-control" />
				</div>

				<div class="clear"></div>

				<div class="col_half">
					<label for="register-form-password">Pilih Jumlah Hari:</label>
					<input type="number" id="register-form-password" name="register-form-password" value="" class="form-control" />
				</div>

				<div class="clear"></div>

				<div class="col_full nobottommargin">
					<button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">Hitung Perkiraan Biaya</button>
				</div>
			</form>
		</div>
	</div>
</div>
</section>
<?php $__env->stopSection(); ?>

<script src="<?php echo e(asset('js/jquery-3.4.1.min.js')); ?>"></script>
<script>
	$(document).ready(function(){
		$('select[data-source]').each(function() {
        var $select = $(this);
        
        $select.append('<option></option>');
        //fungsi fetch all provinsi records
        $.ajax({
            url: $select.attr('data-source'),
            dataType: 'json',
            success:function(response){
                var lens = 0;

                if(response['data'] != null){
                    lens = response['data'].length;
                }else if(response['data'] == null){
                	console.log("data kosong");
                }
                for(var i=0; i<lens; i++ ){
                    var id = response['data'][i].id;
                    var nama_provinsi = response['data'][i].nama_provinsi;
                }
            }
            }).then(function(options) {
                options.map(function(option) {
                var $option = $('<option>');      
                $option.val(option[$select.attr('data-valueKey')]).text(option[$select.attr('data-displayKey')]);      
                $select.append($option);
                });
            });
    });

	});
</script>

<?php echo $__env->make('layouts.layout_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disbudpar\resources\views/user/perkiraanbiaya.blade.php ENDPATH**/ ?>