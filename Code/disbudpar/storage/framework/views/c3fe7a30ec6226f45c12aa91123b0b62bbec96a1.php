<?php $__env->startSection('title'); ?>
Harga Transportasi Umum
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
                    <div class="col-sm-12">
                        <div class="card card-body">
                            <h3 class="card-title">Masukkan Data Harga Transportasi Umum</h3>
                            <?php if(Session::has('success_msg')): ?>
                                <div class="alert alert-success"><?php echo e(Session::get('success_msg')); ?></div>
                             <?php endif; ?>
                            <form class="form-horizontal m-t-40" method="POST" action="<?php echo e(route('inputhargatransportasi')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group">
                                    <label><?php echo e(__('Kabupaten/Kota')); ?></label>
                                    <select class="custom-select col-12" id="id_kabupaten" name="id_kabupaten" data-source="<?php echo e(url('/getKabupaten')); ?>" data-valueKey="id" data-displayKey="nama_kabupaten">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><?php echo e(__('Harga')); ?></label>
                                    <input type="number" class="form-control" id="harga_transportasi" name="harga_transportasi">
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
<?php echo $__env->make('layouts.layout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disbudpar\resources\views/admin/inputhargatransportasi.blade.php ENDPATH**/ ?>