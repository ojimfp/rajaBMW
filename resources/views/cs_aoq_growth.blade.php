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
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Average Order Quantity Growth</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Customer Spend</li>
                    <li class="breadcrumb-item active" aria-current="page">Average Order Quantity Growth</li>
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
                    <h3 class="block-title">Line Chart</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full text-center">
                    <div class="py-3">
                        <!-- Bars Chart Container -->
                        <canvas id="myChart" height="150"></canvas>
                    </div>
                </div>
            </div>
            <!-- END Bars Chart -->

            <div class="block block-bordered">
                <div class="block-content">
                    <p><strong>From the chart above, we can conclude that:</strong>
                    Throughout 2015 to 2017, even though the <strong>customer count</strong> ... and <strong>order
                    quantity</strong> ... increased, the <strong>average order quantity per customer</strong> decreased
                    every year. This means, in average, your customers are buying not more than 2-3 products in a year.
                    Improve this by implementing strategies related to increasing <strong>ORDER QUANTITY PER PURCHASE
                    </strong> such as: market basket analysis, cross-selling, up-selling, etc.</p>
                </div>
            </div>

    <!-- Recommended Strategy -->
    <h2 class="content-heading">Recommended Strategy</h2>
        <h6>Affinity Analysis/Market Basket Analysis (MBA)</h6>
            <p>A technique to determine which items are frequently bought together. This way , company can assume
            what items to be placed in the same shelf. Hopefully, customer would buy those related products.
            (<a href="https://www.techopedia.com/definition/32063/market-basket-analysis">Read more...</a>)</p>
        <h6>Cross-selling and Up-selling</h6>
            <p>A technique used to get a customer spend more by purchasing more or higher value products. Cross-
            selling involves offering the customer a related product, while up-selling involves offering a high
            value product than what the customer previously bought.
            1 (<a href="https://www.shopify.co.id/encyclopedia/cross-selling">Read more...</a>)
            2 (<a href="https://www.shopify.co.id/encyclopedia/upselling">Read more...</a>)</p>
        <p><strong>Note:</strong><br>
        If needed, you can perform MBA using R. More info:
        (<a href="https://www.datacamp.com/community/tutorials/market-basket-analysis-r">Read more...</a>)</p>
    <!-- END Recommended Strategy -->

    <!-- Related Charts -->
    <h2 class="content-heading">Related Charts</h2>
    <div class="row">
        <div class="col-md-6">
            <a class="block block-rounded block-link-shadow" href="cs_aoq_loc">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Average Order Quantity by Location</h3>
                </div>
                <div class="block-content">
                    <img src="<?php echo $dm->assets_folder; ?>/media/photos/chart_thumbnail.png">
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="block block-rounded block-link-shadow" href="cs_aoq_channel">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Average Order Quantity by Channel</h3>
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
