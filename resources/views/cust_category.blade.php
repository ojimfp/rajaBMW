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
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Customer by Category</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Customer Profitability</li>
                    <li class="breadcrumb-item active" aria-current="page">Customer by Category</li>
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
                    <h3 class="block-title">Stacked Horizontal Bar Chart</h3>
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
                    Your company lost more than ... customers through 2015 and 2016, and only about ... customers
                    are your regulars. In 2017, you acquired more than ... new customers, use this chance to turn
                    them into loyal customers and prevent them from leaving by creating customer programs, for
                    example: <strong>LOYALTY PROGRAM, REFERRAL PROGRAM,</strong> etc.</p>
                </div>
            </div>

    <!-- Recommended Strategy -->
    <h2 class="content-heading">Recommended Strategy</h2>
      <h6>RFM Analysis</h6>
        <p>A way to create customer segmentation based on buying behavior using three indicators/parameters:
        <strong>R</strong>ecency, <strong>F</strong>requency, <strong>M</strong>onetary. It groups customer based
        on their transaction history. How recently, how often, and how much they spend at your company. By making
        customer segmentation using this method, you can differentiate strategies to win each customer group.
        (<a href="https://www.putler.com/rfm-analysis/">Read more...</a>)</p>
      <h6>Customer Loyalty Program</h6>
        <p>This program is intended to make customer keep buying your product, rather than buying from another
        competitor.
        (<a href="https://www.shopify.com/blog/loyalty-program">Read more...</a>)</p>
        <p><strong>Note:</strong><br>
        More information regarding ways to reduce customer churn:
        1 (<a href="https://acquire.io/blog/reduce-customer-churn-rate/">Read more...</a>)
        2 (<a href="https://www.bain.com/insights/breaking-the-back-of-customer-churn/">Read more...</a>)</p> 

    <!-- Related Charts -->
    <h2 class="content-heading">Related Charts</h2>
    <div class="row">
        <div class="col-md-6">
            <a class="block block-rounded block-link-shadow" href="cp_cust_growth">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Customer Growth</h3>
                </div>
                <div class="block-content text-center">
                    <img src="<?php echo $dm->assets_folder; ?>/media/charts/line-chart.png">
                </div>
            </a>
        </div>
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
            <a class="block block-rounded block-link-shadow" href="cp_cust_channel">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Customer by Channel</h3>
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
var url = "{{url('chartCustCat')}}";
// var CustYear = [];
// var CustLost = [];
// var CustLoyal = [];
// var CustNew = [];
var CustReturn = [];
$(document).ready(function() {
  $.get(url, function(response) {
     response.forEach(function(data) {
        //  CustYear.push(data.Year);
        //  CustLost.push(data.lost_cust);
        //  CustLoyal.push(data.loyal_cust);
        //  CustNew.push(data.new_cust);
         CustReturn.push(data.return_cust);
     });
     var ctx = document.getElementById('myChart').getContext('2d');
         var myChart = new Chart(ctx, {
           type: 'horizontalBar',
           data: {
               labels: 'Customer by Category',
               datasets: [{
            //        label: 'Lost Customer',
            //        data: CustLost,
            //        backgroundColor: 'red'
            //    },
            //    {
            //        label: 'Loyal Customer',
            //        data: CustLoyal,
            //        backgroundColor: 'yellow'
            //    },
            //    {
            //        label: 'New Customer',
            //        data: CustNew,
            //        backgroundColor: 'blue'
            //    },
            //    {
                   label: 'Returning Customer',
                   data: CustReturn,
                   backgroundColor: 'red'
               }]
           },
           options: {
               scales: {
                   xAxes: [{
                       stacked: true
                   }]
                   yAxes: [{
                       stacked: true
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
