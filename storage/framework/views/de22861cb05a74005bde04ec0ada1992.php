
<?php $__env->startSection('title'); ?>
    Tambah Data Pemasukan
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Forms
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Pemasukan
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xxl-6">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Tambah Data Pemasukan</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <form method="post" action="/tambah-pemasukan/store" data-toggle="validator">
                            <?php echo e(csrf_field()); ?>

                            <div class="mb-3">
                                <label for="description" class="form-label">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" id="description"
                                    placeholder="Masukkan Nama Produk">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Kategori</label>
                                        <select class="form-control" id="choices-single-no-sorting"
                                            name="kategori" data-choices data-choices-sorting-false>
                                            <option value="operasional">Operasional</option>
                                            <option value="hiburan">Hiburan</option>
                                            <option value="belanja">Belanja</option>
                                            <option value="lain-lain">Lain-Lain</option>
                                        </select>
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="text" name="harga" class="form-control" id="harga"
                                    placeholder="Masukkan Harga Produk">
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Tanggal Pembelian</label>
                                <input type="date" name="date" class="form-control" id="date">
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!--end row-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('build/libs/prismjs/prism.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rakha\OneDrive\Documents\walletwise\resources\views/pemasukan/create.blade.php ENDPATH**/ ?>