<?php $__env->startSection('title'); ?>
Travel
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Travel</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <?php if(Session::has('success_msg')): ?>
             <div class="alert alert-success"><?php echo e(Session::get('success_msg')); ?></div>
            <?php endif; ?>
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i>Masukkan Data Travel</h4>
              <form class="form-horizontal style-form" method="POST" action="<?php echo e(route('inputtravel')); ?>" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
                <div class="form-group">
                  <label for="nama_travel" class="col-sm-2 col-sm-2 control-label"><?php echo e(__('Nama Travel')); ?></label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_travel" name="nama_travel" required>
                  </div>
                </div>
                <div class="form-group">
                    <label for="jenis" class="col-sm-2 col-sm-2 control-label"><?php echo e(__('Jenis Travel')); ?></label>
                    <div class="col-sm-10">
                        <select class="form-control" id="jenis" name="jenis" required>
                            <option selected></option>
                            <option value="Agen Penjalanan Wisata (APW)">Agen Penjalanan Wisata (APW)</option>
                            <option value="Biro Perjalanan Wisata (BPW)">Biro Perjalanan Wisata (BPW)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="no_izin" class="col-sm-2 col-sm-2 control-label"><?php echo e(__('No Izin')); ?></label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="no_izin" name="no_izin" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pimpinan" class="col-sm-2 col-sm-2 control-label"><?php echo e(__('Pimpinan')); ?></label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="pimpinan" name="pimpinan" required>
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
                    <label for="kontak" class="col-sm-2 col-sm-2 control-label"><?php echo e(__('Kontak')); ?></label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="kontak" name="kontak" required>
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <a href="<?php echo e(route('datatravel')); ?>" class="btn btn-theme04">Batal</a>
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
<?php echo $__env->make('layouts.layout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disbudpar\resources\views/admin/inputtravel.blade.php ENDPATH**/ ?>