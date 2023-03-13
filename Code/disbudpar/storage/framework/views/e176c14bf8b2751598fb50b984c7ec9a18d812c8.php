<?php $__env->startSection('title'); ?>
Pemandu Wisata
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Pemandu Wisata</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <?php if(Session::has('success_msg')): ?>
             <div class="alert alert-success"><?php echo e(Session::get('success_msg')); ?></div>
            <?php endif; ?>
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i>Edit Data Pemandu Wisata</h4>
              <form class="form-horizontal style-form" method="POST" action="<?php echo e(route('updatepemandu',$pemandu->id)); ?>" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
                <div class="form-group">
                  <label for="nama_pemandu" class="col-sm-2 col-sm-2 control-label"><?php echo e(__('Nama Pemandu Wisata')); ?></label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_pemandu" name="nama_pemandu" value="<?php echo e($pemandu->nama_pemandu); ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="jenis_produk" class="col-sm-2 col-sm-2 control-label"><?php echo e(__('Spesifikasi Bahasa')); ?></label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="spesifikasi_bahasa" name="spesifikasi_bahasa" value="<?php echo e($pemandu->spesifikasi_bahasa); ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="id_kabupaten" class="col-sm-2 col-sm-2 control-label"><?php echo e(__('Kabupaten/Kota')); ?></label>
                  <div class="col-sm-10">
                      <select class="form-control" id="id_kabupaten" name="id_kabupaten" data-source="<?php echo e(url('/getKabupaten')); ?>" data-valueKey="id" data-displayKey="nama_kabupaten" required>
                      <option selected disabled><?php echo e($pemandu->id_kabupaten); ?></option>
                      </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 col-sm-2 control-label"><?php echo e(__('Alamat')); ?></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo e($pemandu->alamat); ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="lokasi" class="col-sm-2 col-sm-2 control-label"><?php echo e(__('No HP')); ?></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo e($pemandu->no_hp); ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <a href="<?php echo e(route('datapemandu')); ?>" class="btn btn-theme04">Batal</a>
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
<?php echo $__env->make('layouts.layout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disbudpar\resources\views/admin/editpemandu.blade.php ENDPATH**/ ?>