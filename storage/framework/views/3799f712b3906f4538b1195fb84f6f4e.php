<?php $__env->startSection('title'); ?>
    Data Pemasukkan
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('build/libs/gridjs/theme/mermaid.min.css')); ?>">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Tables
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Grid Js
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <?php if(Session::has('success.message')): ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                title: 'Success!',
                text: '<?php echo e(Session::get('
                success.message ')); ?>',
                icon: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            });
        });

    </script>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0 flex-grow-1">Detail Pemasukan</h4>
                    
                </div>

                <div class="card-body">
                        <a href="tambah-pemasukan"><button type="button" class="btn btn-primary waves-effect waves-light">+ Data Pemasukan</button></a><br><br>
                    <div id="table-gridjs"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('build/libs/prismjs/prism.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/gridjs/gridjs.umd.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
    <script>
    let counter = 1;
    if (document.getElementById("table-gridjs"))
        new gridjs.Grid({
            columns: [{
                    name: 'ID',
                    width: '80px',
                    formatter: (function (cell) {
                        return gridjs.html('<span class="fw-semibold">' + cell + '</span>');
                    })
                },
                {
                    name: 'Deskripsi',
                    width: '250px',
                },
                {
                    name: 'Kategori',
                    width: '120px',
                },
                {
                    name: 'Jumlah',
                    width: '150px',
                },
                {
                    name: 'Tanggal',
                    width: '180px',
                },
                {
                    name: 'Actions',
                    width: '150px',
                    formatter: (function (cell) {
                        return gridjs.html("<a href='hapus-pemasukan' class='text-reset text-decoration-underline'>" +
                            "Hapus" +
                            "</a>");
                    })
                },
            ],
            pagination: {
                limit: 5
            },
            sort: true,
            search: true,
            data: [
                <?php $__currentLoopData = $pemasukan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                [counter++,"<?php echo e($row->description); ?>","<?php echo e($row->category); ?>","Rp. <?php echo e(number_format($row->amount)); ?>","<?php echo e($row->date); ?>"],
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ]
        }).render(document.getElementById("table-gridjs"));
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itvisi/Documents/walletwise/resources/views/pemasukan/index.blade.php ENDPATH**/ ?>