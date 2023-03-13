 

<?php $__env->startSection('title'); ?>
Destinasi Wisata 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-body">
                            <h4 class="card-title">Destinasi Wisata</h4>
                            <h6 class="card-subtitle"> Input Destinasi Wisata</h6>
                            
                            <form class="form-horizontal m-t-40">
                                <div class="form-group">
                                    <label>Nama Wisata</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Wisata</label>
                                    <select class="custom-select col-12" id="jenis">
                                        <option selected>Pilih Jenis Wisata...</option>
                                        <option value="Alam">Alam</option>
                                        <option value="Budaya">Budaya</option>
                                        <option value="Buatan">Buatan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kabupaten/Kota</label>
                                    <?php echo e(csrf_field()); ?>

                                    <select class="custom-select col-12" id="id_kabupaten" name="id_kabupaten" data-source="<?php echo e(url('/getKabupaten')); ?>" data-valueKey="id" data-displayKey="nama_kabupaten">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Lokasi</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                            	<div class="custom-file mb-3">
		                              <input type="file" class="custom-file-input" id="customFile">
		                              <label class="custom-file-label form-control" for="customFile">Pilih Foto</label>
                           		</div>
                           		<button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>

<?php $__env->stopSection(); ?>

<script src="<?php echo e(asset('js/jquery-3.4.1.min.js')); ?>"></script>
<script>
	$(document).ready(function(){
		$('select[data-source]').each(function() {
        var $select = $(this);
        
        $select.append('<option></option>');
        //fungsi fetch all dosen records
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
<?php echo $__env->make('layouts.layout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disbudpar\resources\views/admin/destinasi.blade.php ENDPATH**/ ?>