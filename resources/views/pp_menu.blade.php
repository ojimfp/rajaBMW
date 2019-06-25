<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<?php $dm->get_css('css/themes/xwork.min.css'); ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Charts</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Product Profitability</li>
                    <li class="breadcrumb-item active" aria-current="page">Charts</li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Related Charts -->
    <div class="row">
        <div class="col-md-6">
            <a class="block block-rounded block-link-shadow" href="pp_prod_sold">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Product Sold per ID</h3>
                </div>
                <div class="block-content">
                    <img src="<?php echo $dm->assets_folder; ?>/media/photos/chart_thumbnail.png">
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="block block-rounded block-link-shadow" href="pp_prod_growth">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Product Sold Growth</h3>
                </div>
                <div class="block-content">
                    <img src="<?php echo $dm->assets_folder; ?>/media/photos/chart_thumbnail.png">
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="block block-rounded block-link-shadow" href="pp_prod_loc">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Product Sold by Location</h3>
                </div>
                <div class="block-content">
                    <img src="<?php echo $dm->assets_folder; ?>/media/photos/chart_thumbnail.png">
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="block block-rounded block-link-shadow" href="pp_prod_channel">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Product Sold by Channel</h3>
                </div>
                <div class="block-content">
                    <img src="<?php echo $dm->assets_folder; ?>/media/photos/chart_thumbnail.png">
                </div>
            </a>
        </div>
    </div>
    <!-- END Related Charts -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/easy-pie-chart/jquery.easypiechart.min.js'); ?>
<?php $dm->get_js('js/plugins/jquery-sparkline/jquery.sparkline.min.js'); ?>
<?php $dm->get_js('js/plugins/chart.js/Chart.bundle.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/be_comp_charts.min.js'); ?>

<!-- Page JS Helpers (Easy Pie Chart + jQuery Sparkline Plugins) -->
<script>jQuery(function(){ Dashmix.helpers(['easy-pie-chart', 'sparkline']); });</script>

<script>jQuery(function(){ Dashmix.layout('sidebar_style_dark'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
