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
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Net Profit Growth</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Net Profit</li>
                    <li class="breadcrumb-item active" aria-current="page">Net Profit Growth</li>
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
                    Net profit increased by <span style="color:#3dca60">20-100%</span> through 2015 to 2017.
                    You can maintain and improve this achievement by implementing strategy related to <strong>
                    NET PROFIT GROWTH</strong>.
                    </p>
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
      <p>Which to focus on, ACQUISITION or RETENTION?
      (<a href="https://www.invespcro.com/blog/customer-acquisition-retention/">Read more...</a>)
      It also depends on what kind of products your company sells. Pay attention to your products' value and its
      purchase frequency.
      (<a href="https://en.promorepublic.com/wp-content/uploads/2016/10/image8-20.png">Read more...</a>)</p>
      <h6>Dynamic Pricing</h6>
        <p>Changing product prices based on certain conditions such as demands, product costs, or your competitor's
        prices.
        (<a href="https://medium.com/swlh/the-advantages-and-disadvantages-of-dynamic-pricing-c2d914fe644f">Read more...</a>)</p>
      <p>Creating more value to customers using additional material or contents such as videos, webinar,
      infographics, etc. Also, business process automation might help to improve customer satisfaction.
      (<a href="https://blog.adext.com/digital-marketing-strategies-increase-online-sales/">Read more...</a>)</p>
      <p><strong>Note:</strong><br>
      More strategies to improve revenue growth.
      (<a href="https://chiefexecutive.net/three-strategies-for-revenue-growth/">Read more...</a>)</p>

    <!-- Related Charts -->
    <h2 class="content-heading">Related Charts</h2>
    <div class="row">
        <div class="col-md-6">
            <a class="block block-rounded block-link-shadow" href="np_loc">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Net Profit by Location</h3>
                </div>
                <div class="block-content text-center">
                    <img src="<?php echo $dm->assets_folder; ?>/media/charts/global.png">
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="block block-rounded block-link-shadow" href="np_channel">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Net Profit by Channel</h3>
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
var url = "{{url('chartNetGrow')}}";
var NetYear = [];
var NetGrow = [];
$(document).ready(function() {
  $.get(url, function(response) {
     response.forEach(function(data) {
         NetYear.push(data.Year);
         NetGrow.push(data.net_grow);
     });
     var ctx = document.getElementById('myChart').getContext('2d');
         var myChart = new Chart(ctx, {
           type: 'line',
           data: {
               labels: NetYear,
               datasets: [{
                   label: 'Net Profit Growth',
                   data: NetGrow,
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
