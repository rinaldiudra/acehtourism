<?php $__env->startSection('title'); ?>
Kuliner
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Kuliner</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <?php if(Session::has('success_msg')): ?>
             <div class="alert alert-success"><?php echo e(Session::get('success_msg')); ?></div>
            <?php endif; ?>
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i>Edit Data Kuliner</h4>
              <form class="form-horizontal style-form" method="POST" action="<?php echo e(route('updatekuliner',$kuliner->id)); ?>" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
                <div class="form-group">
                  <label for="nama_travel" class="col-sm-2 col-sm-2 control-label"><?php echo e(__('Nama Travel')); ?></label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_kuliner" name="nama_kuliner" value="<?php echo e($kuliner->nama_kuliner); ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="detail_kuliner" class="col-sm-2 col-sm-2 control-label"><?php echo e(__('Detail Kuliner')); ?></label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="detail_kuliner" id="detail_kuliner" rows="5" required><?php echo e($kuliner->detail_kuliner); ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                    <label for="pemilik" class="col-sm-2 col-sm-2 control-label"><?php echo e(__('Pemilik')); ?></label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="pemilik" name="pemilik" value="<?php echo e($kuliner->pemilik); ?>" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="id_kabupaten" class="col-sm-2 col-sm-2 control-label"><?php echo e(__('Kabupaten/Kota')); ?></label>
                  <div class="col-sm-10">
                      <select class="form-control" id="id_kabupaten" name="id_kabupaten" data-source="<?php echo e(url('/getKabupaten')); ?>" data-valueKey="id" data-displayKey="nama_kabupaten" required>
                      <option selected disabled><?php echo e($kuliner->id_kabupaten); ?></option>
                      </select>
                  </div>
                </div>
                <div class="form-group">
                    <label for="alamat" class="col-sm-2 col-sm-2 control-label"><?php echo e(__('Alamat')); ?></label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo e($kuliner->alamat); ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="kontak" class="col-sm-2 col-sm-2 control-label"><?php echo e(__('Kontak')); ?></label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="kontak" name="kontak" value="<?php echo e($kuliner->kontak); ?>" required>
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <a href="<?php echo e(route('datakuliner')); ?>" class="btn btn-theme04">Batal</a>
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
<?php echo $__env->make('layouts.layout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disbudpar\resources\views/admin/editkuliner.blade.php ENDPATH**/ ?>