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
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Average Customer Lifetime Value</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Customer Profitability</li>
                    <li class="breadcrumb-item active" aria-current="page">Average Customer Lifetime Value</li>
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
                        <canvas class="js-chartjs-bars"></canvas>
                    </div>
                </div>
            </div>
            <!-- END Bars Chart -->

            <div class="block block-bordered">
                <div class="block-content">
                    <p><strong>From the chart above, we can conclude that:</strong><br>
                    At the end of 2017, customers with <strong>HIGHEST LIFETIME VALUE</strong> are ..., ...,
                    and ... respectively. Lifetime value represents how much a customer spend (total net profit)
                    at your company over time. Maintain green-colored customer (high lifetime value) and improve
                    red-colored customer (low lifetime value) by implementing strategies related to <strong>
                    CUSTOMER LIFETIME VALUE</strong>, such as: one-to-one marketing, personalization, customization,
                    etc.</p>
                </div>
            </div>

    <!-- Recommended Strategy -->
    <h2 class="content-heading">Recommended Strategy</h2>
      <h6>One-to-one Marketing</h6>
        <p>A strategy to increase customer spend by emphasizing personalized interactions with customers. There
        are two types of activites in one-to-one marketing: <strong>PERSONALIZATION</strong> is offering
        personalized product to customers based on their preferences which already been studied before. Personalization
        relies on customer data such as: purchase history, last purchase date, color preferences, gender, etc. While
        <strong>CUSTOMIZATION</strong> is giving the customers opportunity to customize their product to their
        specific requests or preferences. For example: customers can choose their favorite color, size, or any aspect
        of a product.
        1 (<a href="https://marketbusinessnews.com/financial-glossary/one-to-one-marketing-definition-meaning/">Read more...</a>)
        2 (<a href="https://www.marketing91.com/one-one-marketing-personalized-marketing/">Read more...</a>)</p>
    <!-- END Recommended Strategy -->

    <!-- Related Charts -->
    <h2 class="content-heading">Related Charts</h2>
    <div class="row">
        <div class="col-md-6">
            <a class="block block-rounded block-link-shadow" href="cp_total_cust">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Total Customer</h3>
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
