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
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Average Order Frequency by Channel</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Customer Loyalty</li>
                    <li class="breadcrumb-item active" aria-current="page">Average Order Frequency by Channel</li>
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
                    <h3 class="block-title">Horizontal Bar Chart</h3>
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
                <p><strong>From the chart above, we can conclude that:</strong><br>
                    In 2017, most customers are buying through ... channel, rather than buying through ... channel.
                    Among all Online channel, customers preferred ... to buy products. Since your customers
                    preferred Online channel, your company should implement <strong>E-COMMERCE ADVERTISING</strong>
                    or other <strong>ONLINE ADVERTISING</strong> such as: Facebook Ads, Instagram Ads, and other
                    e-commerce ads (eg: Tokopedia, Bukalapak, etc.) to maintain and increase buying customers
                    through Online channel.</p>
                </div>
            </div>

    <!-- Recommended Strategy -->
    <h2 class="content-heading">Recommended Strategy</h2>
        <h6>E-Commerce Marketing/Advertising</h6>
            <p>A strategy to increase buying customers using e-commerce and online campaign.
        (   <a href="https://www.digitalmarketer.com/blog/ecommerce-advertising/">Read more...</a>)</p>
        <h6>Online Advertising</h6>
            <p>A way to reach your customer through social media or e-commerce, for example: Facebook Ads.
            (<a href="https://neilpatel.com/blog/copy-paste-guide-how-to-drive-a-flood-of-ecommerce-sales-using-facebook-ads/">Read more...</a>)</p>
    <!-- END Recommended Strategy -->

    <!-- Related Charts -->
    <h2 class="content-heading">Related Charts</h2>
    <div class="row">
        <div class="col-md-6">
            <a class="block block-rounded block-link-shadow" href="AOFGrowth">
                <div class="block-header block-header-default">
                    <h3 class="block-title text-center">Average Order Frequency Growth</h3>
                </div>
                <div class="block-content text-center">
                    <img src="<?php echo $dm->assets_folder; ?>/media/charts/line-chart.png">
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="block block-rounded block-link-shadow" href="aof_loc">
                <div class="block-header block-header-default">
                    <h3 class="block-title text-center">Average Order Frequency by Location</h3>
                </div>
                <div class="block-content text-center">
                    <img src="<?php echo $dm->assets_folder; ?>/media/charts/global.png">
                </div>
            </a>
        </div>
    </div>
    <!-- END Related Charts -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Chart Logic -->
<script>
var url = "{{url('chartAOFChan')}}";
var ChanType = [];
var AOF = [];
$(document).ready(function() {
  $.get(url, function(response) {
     response.forEach(function(data) {
         ChanType.push(data.Channel_Type);
         AOF.push(data.aof);
     });
     var ctx = document.getElementById('myChart').getContext('2d');
         var myChart = new Chart(ctx, {
           type: 'horizontalBar',
           data: {
               labels: ChanType,
               datasets: [{
                   label: 'Average Order Frequency',
                   data: AOF,
                   backgroundColor: ['#fff587', '#ff8a47'],
               }]
           },
           options: {
               scales: {
                   yAxes: [{
                       ticks: {
                           beginAtZero: true
                       }
                   }]
               }
           }
       });
    });
 });
</script>

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
