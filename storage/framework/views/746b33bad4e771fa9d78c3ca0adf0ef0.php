<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.chartjs'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Charts
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Chartjs
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Line Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="lineChart" class="chartjs-chart"
                        data-colors='["--vz-primary-rgb, 0.2", "--vz-primary", "--vz-info-rgb, 0.2", "--vz-info"]'></canvas>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Bar Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="bar" class="chartjs-chart"
                        data-colors='["--vz-primary-rgb, 0.8", "--vz-primary-rgb, 0.9"]'></canvas>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Pie Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="pieChart" class="chartjs-chart" data-colors='["--vz-info", "--vz-light"]'></canvas>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Donut Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="doughnut" class="chartjs-chart" data-colors='["--vz-primary", "--vz-light"]'></canvas>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Polar Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="polarArea" class="chartjs-chart"
                        data-colors='["--vz-danger", "--vz-info", "--vz-warning", "--vz-primary"]'> </canvas>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Radar Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="radar" class="chartjs-chart"
                        data-colors='["--vz-info-rgb, 0.2", "--vz-info", "--vz-primary-rgb, 0.2", "--vz-primary"]'></canvas>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/chart.js/chart.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/chartjs.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Tarun\Laravel Admins\velzon_laravel\Laravel\interactive\resources\views/charts-chartjs.blade.php ENDPATH**/ ?>