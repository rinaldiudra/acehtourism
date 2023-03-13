<?php $__env->startSection('title'); ?>
Souvenir
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Souvenir</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <?php if(Session::has('success_msg')): ?>
             <div class="alert alert-success"><?php echo e(Session::get('success_msg')); ?></div>
            <?php endif; ?>
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i>Masukkan Data Souvenir</h4>
              <form class="form-horizontal style-form" method="POST" action="<?php echo e(route('inputsouvenir')); ?>" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
                <div class="form-group">
                  <label for="nama_usaha" class="col-sm-2 col-sm-2 control-label"><?php echo e(__('Nama Usaha Souvenir')); ?></label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_usaha" name="nama_usaha" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="jenis_produk" class="col-sm-2 col-sm-2 control-label"><?php echo e(__('Jenis Produk')); ?></label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="jenis_produk" name="jenis_produk" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama_pemilik" class="col-sm-2 col-sm-2 control-label"><?php echo e(__('Nama Pemilik')); ?></label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="id_kabupaten" class="col-sm-2 col-sm-2 control-label"><?php echo e(__('Kabupaten/Kota')); ?></label>
                  <div class="col-sm-10">
                      <select class="form-control" id="id_kabupaten" name="id_kabupaten" data-source="<?php echo e(url('/getKabupaten')); ?>" data-valueKey="id" data-displayKey="nama_kabupaten" required>
                      </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 col-sm-2 control-label"><?php echo e(__('Alamat')); ?></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="no_hp" class="col-sm-2 col-sm-2 control-label"><?php echo e(__('No HP')); ?></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="foto" class="col-sm-2 col-sm-2 control-label"><?php echo e(__('Foto Produk')); ?></label>
                  <div class="col-sm-10">
                      <input id="foto" type="file" class="default" name="foto" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <a href="<?php echo e(route('datasouvenir')); ?>" class="btn btn-theme04">Batal</a>
                    <button class="btn btn-theme" type="submit">Simpan</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
<?php $__env->stopSection(); ?>

<script src="<?php echo e(asset('js/jquery-3.4.1.min.js')); ?>"></script>
<script>
	$(document).ready(function(){
		$('select[data-source]').each(function() {
        var $select = $(this);
        
        $select.append('<option></option>');
        //fungsi fetch all kabupaten records
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
                    var nama_kabupaten = response['data'][i].nama_kabupaten;
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
<?php echo $__env->make('layouts.layout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disbudpar\resources\views/admin/inputsouvenir.blade.php ENDPATH**/ ?>