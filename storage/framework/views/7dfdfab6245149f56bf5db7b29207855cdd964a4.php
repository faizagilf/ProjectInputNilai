
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
        TAMBAH NILAI MAHASISWA
    </h2>
    <p>
        Silakan masukkan data dengan benar dan lengkap!!
    </p>
<div class="container">
    <div class="edit m-auto">
        <div class="row">
            <div class="col-md-12">
                <form action="<?php echo e(route('mahasiswa.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">NPM</label>
                                <input type="text" name="npm" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e(old('npm')); ?>">

                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Absen</label>
                                <input type="text" name="absen" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e(old('absen')); ?>">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">UTS</label>
                                <input type="text" name="uts" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e(old('uts')); ?>">
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e(old('nama')); ?>">

                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tugas</label>
                                <input type="text" name="tugas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e(old('tugas')); ?>">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">UAS</label>
                                <input type="text" name="uas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e(old('uas')); ?>">
                              </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\src\5D_FaizAgilFirmansyah_20067\resources\views/mahasiswa/create.blade.php ENDPATH**/ ?>