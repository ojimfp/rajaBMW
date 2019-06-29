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
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Customer by Geography</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Customer Profitability</li>
                    <li class="breadcrumb-item active" aria-current="page">Customer by Geography</li>
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
    <!-- Bars Chart -->
            <div class="block block-rounded block-bordered">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Bar Chart</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full text-center">
                    <div class="py-3">
                        <!-- Bars Chart Container -->
                        <div id="myChart" height="150"></div>
                        <?= \Lava::render("GeoChart","Customer by Location","myChart"); ?>
                    </div>
                </div>
            </div>
            <!-- END Bars Chart -->

            <div class="block block-bordered">
                <div class="block-content">
                    <p><strong>From the chart above, we can conclude that:</strong><br>
                    Location with <strong>HIGHEST CUSTOMER COUNT</strong> in 2017 is ..., followed by ..., ...,
                    and .... Among all locations, only these 4 locations are green-colored. It indicates that other
                    locations are having difficulties selling products, caused by: low product awareness, high shipping
                    cost, etc. Maintain these green-colored locations to generate more buying customers, also, improve
                    other low-customers locations by implementing strategies related to <strong>CUSTOMER COUNT</strong>
                    on certain location such as: local marketing, customer acquisition, customer retention, etc.</p>
                </div>
            </div>

    <!-- Recommended Strategy -->
    <h2 class="content-heading">Recommended Strategy</h2>
    <h6>Local Marketing</h6>
        <p>A strategy to increase buying customers by optimizing your website or other channels to increase more
        traffic and brand awareness in a certain location.
        (<a href="https://www.bigcommerce.com/blog/local-marketing">Read more...</a>)</p>
    <h6>Customer Acquisiton Strategy</h6>
        <p>A strategy to acquire more new buying customers rather than to maintain existing customers. If your
        company sells high value products but have a low purchase frequency, you should consider this strategy.
        (<a href="https://www.pixlee.com/blog/3-new-trends-in-retail-customer-acquisition/">Read more...</a>)</p>
      <h6>Customer Retention Strategy</h6>
        <p>A strategy to maintain existing customers to keep buying from your company. If your company sells
        low value products but have a high purchase frequency, this strategy might help a lot.
        (<a href="https://www.shopify.com/blog/customer-retention-strategies">Read more...</a>)</p>
    <!-- END Recommended Strategy -->

    <!-- Related Charts -->
    <h2 class="content-heading">Related Charts</h2>
    <div class="row">
        <div class="col-md-6">
            <a class="block block-rounded block-link-shadow" href="cp_cust_growth">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Customer Growth</h3>
                </div>
                <div class="block-content">
                    <img src="<?php echo $dm->assets_folder; ?>/media/photos/chart_thumbnail.png">
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="block block-rounded block-link-shadow" href="cp_cust_channel">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Customer by Channel</h3>
                </div>
                <div class="block-content">
                    <img src="<?php echo $dm->assets_folder; ?>/media/photos/chart_thumbnail.png">
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="block block-rounded block-link-shadow" href="cp_cust_category">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Customer by Category</h3>
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

<!-- Dark Sidebar -->
<script>jQuery(function(){ Dashmix.layout('sidebar_style_dark'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
