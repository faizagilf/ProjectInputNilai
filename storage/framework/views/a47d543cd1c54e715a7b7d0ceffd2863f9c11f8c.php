
<?php $__env->startSection('content'); ?>

<div class="container">
  <div class="row">
    <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success" role="alert">
      <?php echo e($message); ?>

    </div>
    <?php endif; ?>
    <div class="col-md-12">
    <h2>
        DAFTAR NILAI MAHASISWA
    </h2>
    <p>
        Dibawah ini merupakan daftar nilai mahasiswa program studi
        <b>
        Teknik Informatika
        </b>
    </p>
      <div class="div d-flex justify-content-end">
        <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-primary">TAMBAH</a>
      </div>
      <table class="table">
        <div class="row mt-5">
            <table class="table table-bordered"> 
                <tr>
                    <th rowspan="2">#</th>
                    <th rowspan="2">NPM</th>
                    <th rowspan="2">Nama Lengkap</th>
                    <th colspan="4">Nilai</th>
                    <th colspan="4">Presentase</th>
                    <th rowspan="2">Nilai Akhir</th>
                    <th rowspan="2">Keterangan</th>
                    <th rowspan="2">Aksi</th>
                </tr>
                <tr>
                    <th>Absen</th>
                    <th>Tugas</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Absen(10%)</th>
                    <th>Tugas(20%)</th>
                    <th>UTS(30%)</th>
                    <th>UAS(40%)</th>
                </tr>
                <tr>
                    <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <td scope="row"><?php echo e($loop->iteration); ?></td>

                    <td><?php echo e($mahasiswa->npm); ?></td>
                    <td><?php echo e($mahasiswa->nama); ?></td>
                    <td><?php echo e($mahasiswa->absen); ?></td>
                    <td><?php echo e($mahasiswa->tugas); ?></td>
                    <td><?php echo e($mahasiswa->uts); ?></td>
                    <td><?php echo e($mahasiswa->uas); ?></td>
                    <td><?php echo e($mahasiswa->absen * 0.1); ?></td>
                    <td><?php echo e($mahasiswa->tugas * 0.2); ?></td>
                    <td><?php echo e($mahasiswa->uts * 0.3); ?></td>
                    <td><?php echo e($mahasiswa->uas * 0.4); ?></td>
                    <td><?php echo e($mahasiswa->absen * 0.1 + $mahasiswa->tugas * 0.2 + $mahasiswa->uts *0.3 + $mahasiswa->uas * 0.4); ?></td>

                        <td>
                            <!-- kondisi -->
                            <?php if($mahasiswa->absen * 0.1 + $mahasiswa->tugas * 0.2 + $mahasiswa->uts * 0.3 + $mahasiswa->uas * 0.4 >= 70 &&
                            $mahasiswa->absen
                            *
                            0.1 + $mahasiswa->tugas * 0.2 + $mahasiswa->uts * 0.3 + $mahasiswa->uas * 0.4 <= 100): ?> <span class="text-success">Lulus</span>

                                <?php elseif($mahasiswa->absen * 0.1 + $mahasiswa->tugas * 0.2 + $mahasiswa->uts * 0.3 + $mahasiswa->uas * 0.4 >= 0 &&
                                $mahasiswa->absen
                                *
                                0.1 + $mahasiswa->tugas * 0.2 + $mahasiswa->uts * 0.3 + $mahasiswa->uas * 0.4 < 70): ?> <span class="text-danger">Tidak Lulus</span>

                                    <?php else: ?>
                                    <?php endif; ?>
                        </td>
                    
                    <td>
                      <form action="<?php echo e(route('mahasiswa.destroy', $mahasiswa->id)); ?>" method="POST">
                        <a href="<?php echo e(route('mahasiswa.edit', $mahasiswa->id)); ?>" class="btn btn-sm btn-primary">Edit</a>
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('DELETE'); ?>
                      <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
              </table>
        </div>



      </table>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\src\5D_FaizAgilFirmansyah_20067\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>