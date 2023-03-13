<?php $__env->startSection('title'); ?>
Harga Tiket Pesawat
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
                    <div class="col-sm-12">
                        <div class="card card-body">
                            <h3 class="card-title">Masukkan Data Harga Tiket Pesawat</h3>
                            <?php if(Session::has('success_msg')): ?>
                                <div class="alert alert-success"><?php echo e(Session::get('success_msg')); ?></div>
                             <?php endif; ?>
                            <form class="form-horizontal m-t-40" method="POST" action="<?php echo e(route('inputhargatiket')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group">
                                    <label><?php echo e(__('Provinsi')); ?></label>
                                    <select class="custom-select col-12" id="nama_provinsi" name="nama_provinsi">
                                        <option selected>Pilih Provinsi...</option>
                                        <option value="Aceh">Aceh</option>
                                        <option value="Bali">Bali</option>
                                        <option value="Banten">Banten</option>
                                        <option value="Bengkulu">Bengkulu</option>
                                        <option value="Gorontalo">Gorontalo</option>
                                        <option value="Jakarta">Jakarta</option>
                                        <option value="Jambi">Jambi</option>
                                        <option value="Jawa Barat">Jawa Barat</option>
                                        <option value="Jawa Tengah">Jawa Tengah</option>
                                        <option value="Jawa Timur">Jawa Timur</option>
                                        <option value="Kalimantan Barat">Kalimantan Barat</option>
                                        <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                        <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                        <option value="Kalimantan Timur">Kalimantan Timur</option>
                                        <option value="Kalimantan Utara">Kalimantan Utara</option>
                                        <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                                        <option value="Kepulauan Riau">Kepulauan Riau</option>
                                        <option value="Lampung">Lampung</option>
                                        <option value="Maluku">Maluku</option>
                                        <option value="Maluku Utara">Maluku Utara</option>
                                        <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                        <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                        <option value="Papua">Papua</option>
                                        <option value="Papua Barat">Papua Barat</option>
                                        <option value="Riau">Riau</option>
                                        <option value="Sulawesi Barat">Sulawesi Barat</option>
                                        <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                        <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                        <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                        <option value="Sulawesi Utara">Sulawesi Utara</option>
                                        <option value="Sulawesi Barat">Sulawesi Barat</option>
                                        <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                        <option value="Sumatra Barat">Sumatra Barat</option>
                                        <option value="Sumatra Selatan">Sumatra Selatan</option>
                                        <option value="Sumatra Utara">Sumatra Utara</option>
                                        <option value="Yogyakarta">Yogyakarta</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><?php echo e(__('Harga')); ?></label>
                                    <input type="number" class="form-control" id="harga_tiket" name="harga_tiket">
                                </div>
                           		<button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disbudpar\resources\views/admin/inputhargatiket.blade.php ENDPATH**/ ?>