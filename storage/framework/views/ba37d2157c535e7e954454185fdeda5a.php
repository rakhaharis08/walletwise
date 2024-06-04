<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.grid-js'); ?>
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
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0 flex-grow-1">Detail Pengeluaran</h4>
                </div>

                <div class="card-body">
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
                    name: 'Name',
                    width: '150px',
                },
                {
                    name: 'Email',
                    width: '220px',
                    formatter: (function (cell) {
                        return gridjs.html('<a href="">' + cell + '</a>');
                    })
                },
                {
                    name: 'Position',
                    width: '250px',
                },
                {
                    name: 'Company',
                    width: '180px',
                },
                {
                    name: 'Country',
                    width: '180px',
                },
                {
                    name: 'Actions',
                    width: '150px',
                    formatter: (function (cell) {
                        return gridjs.html("<a href='#' class='text-reset text-decoration-underline'>" +
                            "Details" +
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
                ["01", "Jonathan", "jonathan@example.com", "Senior Implementation Architect", "Hauck Inc", "Holy See"],
                ["02", "Harold", "harold@example.com", "Forward Creative Coordinator", "Metz Inc", "Iran"],
                ["03", "Shannon", "shannon@example.com", "Legacy Functionality Associate", "Zemlak Group", "South Georgia"],
                ["04", "Robert", "robert@example.com", "Product Accounts Technician", "Hoeger", "San Marino"],
                ["05", "Noel", "noel@example.com", "Customer Data Director", "Howell - Rippin", "Germany"],
                ["06", "Traci", "traci@example.com", "Corporate Identity Director", "Koelpin - Goldner", "Vanuatu"],
                ["07", "Kerry", "kerry@example.com", "Lead Applications Associate", "Feeney, Langworth and Tremblay", "Niger"],
                ["08", "Patsy", "patsy@example.com", "Dynamic Assurance Director", "Streich Group", "Niue"],
                ["09", "Cathy", "cathy@example.com", "Customer Data Director", "Ebert, Schamberger and Johnston", "Mexico"],
                ["10", "Tyrone", "tyrone@example.com", "Senior Response Liaison", "Raynor, Rolfson and Daugherty", "Qatar"],
            ]
        }).render(document.getElementById("table-gridjs"));
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itvisi/Documents/walletwise/resources/views/pengeluaran/index.blade.php ENDPATH**/ ?>