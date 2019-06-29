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
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Customer Growth Rate</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Customer Profitability</li>
                    <li class="breadcrumb-item active" aria-current="page">Customer Growth Rate</li>
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
                      The number of customers increased from 2015 to 2017, each year growth rate also reached
                      your assigned target ... . You can maintain and improve this achievement by implementing
                      strategy related to <strong>CUSTOMER COUNT</strong> such as: local marketing, customer
                      acquisition, customer retention, etc.</p>
                </div>
            </div>

    <!-- Recommended Strategy -->
    <h2 class="content-heading">Recommended Strategy</h2>
      <h6>Customer Acquisiton Strategy</h6>
        <p>A strategy to acquire more new buying customers rather than to maintain existing customers. If your
        company sells high value products but have a low purchase frequency, you should consider this strategy.
        (<a href="https://www.pixlee.com/blog/3-new-trends-in-retail-customer-acquisition/">Read more...</a>)</p>
      <h6>Customer Retention Strategy</h6>
        <p>A strategy to maintain existing customers to keep buying from your company. If your company sells
        low value products but have a high purchase frequency, this strategy might help a lot.
        (<a href="https://www.shopify.com/blog/customer-retention-strategies">Read more...</a>)</p>

    <!-- Related Charts -->
    <h2 class="content-heading">Related Charts</h2>
    <div class="row">
        <div class="col-md-6">
            <a class="block block-rounded block-link-shadow" href="cp_cust_loc">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Customer by Location</h3>
                </div>
                <div class="block-content text-center">
                    <img src="<?php echo $dm->assets_folder; ?>/media/charts/global.png">
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="block block-rounded block-link-shadow" href="custChan">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Customer by Channel</h3>
                </div>
                <div class="block-content text-center">
                    <img src="<?php echo $dm->assets_folder; ?>/media/charts/pie-chart.png">
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="block block-rounded block-link-shadow" href="cp_cust_category">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Customer by Category</h3>
                </div>
                <div class="block-content text-center">
                    <img src="<?php echo $dm->assets_folder; ?>/media/charts/bars-chart.png">
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
var url = "{{url('chartCustGrowth')}}";
var CustYear = [];
var CustGro = [];
$(document).ready(function() {
  $.get(url, function(response) {
     response.forEach(function(data) {
         CustYear.push(data.Year);
         CustGro.push(data.cust_growth);
     });
     var ctx = document.getElementById('myChart').getContext('2d');
         var myChart = new Chart(ctx, {
           type: 'line',
           data: {
               labels: CustYear,
               datasets: [{
                   label: 'Total Customer',
                   data: CustGro,
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
