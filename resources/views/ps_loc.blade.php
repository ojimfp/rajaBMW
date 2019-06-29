<?php require 'inc/_global/config.php';?>
<?php require 'inc/backend/config.php';?>
<?php require 'inc/_global/views/head_start.php';?>
<?php require 'inc/_global/views/head_end.php';?>
<?php require 'inc/_global/views/page_start.php';?>

<?php $dm->get_css('css/themes/xwork.min.css');?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Product Sold by Location</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Product Sold</li>
                    <li class="breadcrumb-item active" aria-current="page">Product Sold by Location</li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Charts -->
    <h2 class="content-heading">Charts</h2>
    <!-- Line Chart -->
            <div class="block block-rounded block-bordered">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Geo Chart</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full text-center">
                    <div class="py-3">
                        <!-- Chart Container -->
                        <canvas id="myChart" height="150"></canvas>
                    </div>
                </div>
            </div>
            <!-- END Line Chart -->

            <div class="block block-bordered">
                <div class="block-content">
                    <p><strong>From the chart above, we can conclude that:</strong><br>
                    Location with <strong>HIGHEST PRODUCT SOLD</strong> in 2017 is <span style="color:#3dca60">Georgia
                    [627 Unit]</span>, followed by <span style="color:#3dca60">Indiana [453 Unit]</span>, and
                    <span style="color:#3dca60">Illinois [443 Unit]</span>. Green-colored location means those locations
                    are the high-selling locations, while the red-colored location indicates those locations are having
                    difficulties in selling products. Maintain these green-colored locations to generate more sales,
                    also, improve other low-customers locations by implementing strategies related to <strong>LOCATION
                    MARKETING</strong> on certain location such as: local marketing, customer acquisition, customer
                    retention, etc.</p>
                </div>
            </div>

    <!-- Recommended Strategy -->
    <h2 class="content-heading">Recommended Strategy</h2>
      <h6>Geographic Segmentation Marketing</h6>
        <p>Choosing marketing strategies based on geographic unit such as climates, population density, cultural
        preferences, etc.
        (<a href="https://marketingwit.com/geographic-segmentation">Read more...</a>)</p>
      <h6>Geographical Zone Pricing</h6>
        <p>Determining prices based on geographic traits such as shipping cost, tax regulation, etc.
        (<a href="https://www.investopedia.com/terms/g/geographical-pricing.asp">Read more...</a>)</p>
      <p>Make decision whether to keep selling the low-selling products or not, by taking product cost and
      margin into consideration.</p>
      <p>Make decision whether to open new outlets branch to get closer to customers, hence reducing additional
      costs such as shipping cost, tax, etc.</p>

    <!-- Related Charts -->
    <h2 class="content-heading">Related Charts</h2>
    <div class="row">
        <div class="col-md-6">
            <a class="block block-rounded block-link-shadow" href="ps_main">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Product Sold per ID</h3>
                </div>
                <div class="block-content text-center">
                    <img src="<?php echo $dm->assets_folder; ?>/media/charts/bars-chart.png">
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="block block-rounded block-link-shadow" href="ps_growth">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Product Sold Growth</h3>
                </div>
                <div class="block-content text-center">
                    <img src="<?php echo $dm->assets_folder; ?>/media/charts/line-chart.png">
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="block block-rounded block-link-shadow" href="ps_channel">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Product Sold by Channel</h3>
                </div>
                <div class="block-content text-center">
                    <img src="<?php echo $dm->assets_folder; ?>/media/charts/pie-chart.png">
                </div>
            </a>
        </div>
    </div>
    <!-- END Related Charts -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php';?>
<?php require 'inc/_global/views/footer_start.php';?>

<!-- Chart Logic -->
<script>
</script>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/easy-pie-chart/jquery.easypiechart.min.js');?>
<?php $dm->get_js('js/plugins/jquery-sparkline/jquery.sparkline.min.js');?>
<?php $dm->get_js('js/plugins/chart.js/Chart.bundle.min.js');?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/be_comp_charts.min.js');?>

<!-- Page JS Helpers (Easy Pie Chart + jQuery Sparkline Plugins) -->
<script>jQuery(function(){ Dashmix.helpers(['easy-pie-chart', 'sparkline']); });</script>

<!-- Dark Sidebar -->
<script>jQuery(function(){ Dashmix.layout('sidebar_style_dark'); });</script>

<?php require 'inc/_global/views/footer_end.php';?>
