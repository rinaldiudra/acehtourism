<?php $__env->startSection('title'); ?>
Souvenir
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Souvenir</h3>
        <div class="row">
          <div class="col-lg-12">
            <a href="<?php echo e(route('inputsouvenir')); ?>" class="pull-left btn btn-theme">+ Tambah Data Souvenir</a>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <?php if(Session::has('success_msg')): ?>
            <div class="alert alert-success"><?php echo e(Session::get('success_msg')); ?></div>
            <?php endif; ?>
          </div>
        </div>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <div class="col-lg-8">
                <h4><i class="fa fa-angle-right"></i>Data Souvenir</h4>
              </div>
              <div class="col-lg-4">
                <form action="<?php echo e(url('/datasouvenir')); ?>" method="GET">
							    <div class="input-group">
								    <input type="text" class="form-control" name="search">
								    <span class="input-group-btn">
									    <button class="btn btn-search" type="submit"> Cari</button>
								    </span>
							    </div>
						    </form>
              </div>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                <?php echo csrf_field(); ?>
                <thead>
                    <tr>
                        <th width="30px">ID</th>
                        <th width="100px">Nama Usaha</th>
                        <th width="100px">Jenis Produk</th>
                        <th width="100px">Kabupaten/Kota</th>
                        <th width="200px">Alamat</th>
                        <th width="100px">Kontak</th>
                        <th width="80px">Pemilik</th>
                        <th width="80px">Foto</th>
                        <th width="50px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(count($data)): ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $souvenir): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($souvenir->id); ?></td>
                        <td><?php echo e($souvenir->nama_usaha); ?></td>
                        <td><?php echo e($souvenir->jenis_produk); ?></td>
                        <td><?php echo e($souvenir->nama_kabupaten); ?></td>
                        <td><?php echo e($souvenir->alamat); ?></td>
                        <td><?php echo e($souvenir->no_hp); ?></td>
                        <td><?php echo e($souvenir->nama_pemilik); ?></td>
                        <td><?php echo e($souvenir->foto); ?></td>
                        <td>
                            <a href="<?php echo e(route('updatesouvenir',$souvenir->id)); ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                            <a href="<?php echo e(route('hapussouvenir',$souvenir->id)); ?>" onclick="return confirm('Yakin ingin menghapus data?')"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <?php else: ?>
				          <div class="row mt">
					          <h3 style="text-align: center">Pencarian Tidak Ditemukan</h3>
				          </div>
			          <?php endif; ?>
                </table>
              </section>
            </div>
            <div align="right">
		          <?php echo $data->render(); ?>

	          </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disbudpar\resources\views/admin/datasouvenir.blade.php ENDPATH**/ ?>