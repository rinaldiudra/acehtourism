<?php $__env->startSection('title'); ?>
Pemandu Wisata
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Pemandu Wisata</h3>
        <div class="row">
          <div class="col-lg-12">
            <a href="<?php echo e(route('inputpemandu')); ?>" class="pull-left btn btn-theme">+ Tambah Data Pemandu</a>
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
                <h4><i class="fa fa-angle-right"></i>Data Pemandu Wisata</h4>
              </div>
              <div class="col-lg-4">
                <form action="<?php echo e(url('/datapemandu')); ?>" method="GET">
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
                        <th width="100px">Nama Pemandu</th>
                        <th width="100px">Kabupaten/Kota</th>
                        <th width="170px">Alamat</th>
                        <th width="100px">Kontak</th>
                        <th width="100px">Spesifikasi Bahasa</th>
                        <th width="50px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(count($data)): ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pemandu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($pemandu->id); ?></td>
                        <td><?php echo e($pemandu->nama_pemandu); ?></td>
                        <td><?php echo e($pemandu->nama_kabupaten); ?></td>
                        <td><?php echo e($pemandu->alamat); ?></td>
                        <td><?php echo e($pemandu->no_hp); ?></td>
                        <td><?php echo e($pemandu->spesifikasi_bahasa); ?></td>
                        <td>
                            <a href="<?php echo e(route('updatepemandu',$pemandu->id)); ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                            <a href="<?php echo e(route('hapuspemandu',$pemandu->id)); ?>" onclick="return confirm('Yakin ingin menghapus data?')"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>
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
<?php echo $__env->make('layouts.layout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\disbudpar\resources\views/admin/datapemandu.blade.php ENDPATH**/ ?>