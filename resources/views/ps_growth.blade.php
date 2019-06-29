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
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Product Sold Growth</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Product Sold</li>
                    <li class="breadcrumb-item active" aria-current="page">Product Sold Growth</li>
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
                    <h3 class="block-title">Line Chart</h3>
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
                    The number of product sold increased by <span style="color:#3dca60">5-70%</span> through 2015
                    to 2017. You can maintain and improve this achievement by implementing strategies related to
                    <strong>PRODUCT SOLD GROWTH</strong>.</p>
                </div>
            </div>

    <!-- Recommended Strategy -->
    <h2 class="content-heading">Recommended Strategy</h2>
      <h6>Increase Penetration in Existing or New Market</h6>
        <p>In other words, know what you're good at and be the best at it. Also, creating a new product for
        a new potential market could be a good solution.
        (<a href="https://www.educba.com/market-penetration/">Read more...</a>)</p>
      <h6>Aggresive Pricing & Loss Leaders</h6>
        <p>Selling a product below its production cost to attract people to visit your store and actually browse
        your products and end up buying more. This can be done to improve sales growth.
        (<a href="https://www.feedough.com/the-10-types-of-pricing-strategies/">Read more...</a>)</p>
      <h6>Dynamic Pricing</h6>
        <p>Changing product prices based on certain conditions such as demands, product costs, or your competitor's
        prices.
        (<a href="https://medium.com/swlh/the-advantages-and-disadvantages-of-dynamic-pricing-c2d914fe644f">Read more...</a>)</p>
      <p>Make decision whether to keep selling the low-selling products or not, by taking product cost and
      margin into consideration.</p>

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
            <a class="block block-rounded block-link-shadow" href="ps_loc">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Product Sold by Location</h3>
                </div>
                <div class="block-content text-center">
                    <img src="<?php echo $dm->assets_folder; ?>/media/charts/global.png">
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
var url = "{{url('chartProdGrow')}}";
var ProdYear = [];
var OrderQty = [];
$(document).ready(function() {
  $.get(url, function(response) {
     response.forEach(function(data) {
         ProdYear.push(data.Year);
         OrderQty.push(data.qty_growth);
     });
     var ctx = document.getElementById('myChart').getContext('2d');
         var myChart = new Chart(ctx, {
           type: 'line',
           data: {
               labels: ProdYear,
               datasets: [{
                   label: 'Product Sold',
                   data: OrderQty,
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
