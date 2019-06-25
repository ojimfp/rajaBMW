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
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Average Order Frequency Growth</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Customer Loyalty</li>
                    <li class="breadcrumb-item active" aria-current="page">Average Order Frequency Growth</li>
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
                    Throughout 2015 to 2017, the <strong>average order frequency per
                    customer</strong> ... decreased every year. This means, in average,
                    your customers are buying not more than 1-2 times in a year. Improve
                    this by implementing strategy related to <strong>ORDER FREQUENCY PER
                    CUSTOMER</strong> such as: customer retention strategy, customer
                    loyalty program, etc.</p>
                </div>
            </div>

    <!-- Recommended Strategy -->
    <h2 class="content-heading">Recommended Strategy</h2>
      <h6>Customer Retention Strategy</h6>
        <p>A strategy to maintain existing customers to keep buying from your company. If your company sells
          low value products but have a high purchase frequency, this strategy might help a lot.
        (<a href="https://www.shopify.com/blog/customer-retention-strategies">Read more...</a>)</p>
      <h6>Customer Loyalty Strategy</h6>
        <p>This program is intended to make customer keep buying your product, rather than buying from
          another competitor.
        (<a href="https://www.shopify.com/blog/loyalty-program">Read more...</a>)</p>
        <p><strong>Note:</strong><br>
        More information regarding ways to increase order frequency:
        1 (<a href="https://www.growcode.com/blog/purchase-frequency/">Read more...</a>)
        2 (<a href="http://burkhartmarketing.com/five-ways-to-increase-customer-frequency-and-loyalty/">Read more...</a>)</p> 
    <!-- END Recommended Strategy -->

    <!-- Related Charts -->
    <h2 class="content-heading">Related Charts</h2>
    <div class="row">
        <div class="col-md-6">
            <a class="block block-rounded block-link-shadow" href="aof_loc">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Average Order Frequency by Location</h3>
                </div>
                <div class="block-content">
                    <img src="<?php echo $dm->assets_folder; ?>/media/photos/chart_thumbnail.png">
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="block block-rounded block-link-shadow" href="aof_channel">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Average Order Frequency by Channel</h3>
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

<!-- Chart Logic -->
<script>
var url = "{{url('chartAOF')}}";
var CustMonth = [];
var AOF = [];
$(document).ready(function() {
  $.get(url, function(response) {
     response.forEach(function(data) {
         CustMonth.push(data.Month);
         AOF.push(data.AvgOF);
     });
     var ctx = document.getElementById('myChart').getContext('2d');
         var myChart = new Chart(ctx, {
           type: 'line',
           data: {
               labels: CustMonth,
               datasets: [{
                   label: 'Average Order Frequency',
                   data: AOF,
                   backgroundColor: '#fcee23',
                   borderWidth: 5,
                   borderColor: '#fcee23',
                   pointRadius: 5,
                   pointBorderColor: '#000000',
                   pointBackgroundColor: '#000000',
                   pointStyle: 'rectRot',
                   fill: false
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
