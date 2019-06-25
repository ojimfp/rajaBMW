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
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Customer per Channel</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Customer Profitability</li>
                    <li class="breadcrumb-item active" aria-current="page">Customer per Channel</li>
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
    <!-- Doughnut Chart -->
        <div class="block block-rounded block-bordered">
            <div class="block-header block-header-default">
                <h3 class="block-title">Doughnut Chart</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                    </button>
                </div>
            </div>
            <div class="block-content block-content-full text-center">
            <div class="dd_month" style="padding:10px;display:inline-block">
                <label>Month</label>
                <select id="month" name="Month">
                  <option value="all" selected="selected">Select Month</option>
                  @foreach(collect($months)->unique('Month') as $month)
                    <option value = "{{$month->Date_ID}}">
                      {{$month->Month}}
                    </option>
                  @endforeach
                </select>
              </div>
              <div class="dd_year" style="padding:10px;display:inline-block">
                <label>Year</label>
                <select id="year" name="Year">
                  <option value="all" selected="selected">Select Year</option>
                  @foreach(collect($years)->unique('Year') as $year)
                    <option value = "{{$year->Date_ID}}">
                      {{$year->Year}}
                    </option>
                  @endforeach
                </select>
              </div>

                <div>
                  <!-- Doughnut Chart Container -->
                  <canvas id="myChart" height="150"></canvas>
                </div>
            </div>
            </div>
        <!-- END Doughnut Chart -->

            <div class="block block-bordered">
                <div class="block-content">
                    <p><strong>From the chart above, we can conclude that:</strong>
                    In 2017, customers preferred buying through ONLINE channel, rather
                    than buying through OFFLINE channel. Among all ONLINE channels, customers
                    preferred TOKOPEDIA to buy products. Since your customers preferred online
                    channel, your company should implement <strong>E-COMMERCE ADVERTISING</strong>
                    to maintain and increase buying customers through online channel.</p>
                </div>
            </div>

    <!-- Recommended Strategy -->
    <h2 class="content-heading">Recommended Strategy</h2>
    <h6>RACE Framework</h6>
        <p>Manage digital marketing activities in a structured way using <strong>RACE</strong> Framework. <strong>
        RACE</strong> stands for <strong>R</strong>each, <strong>A</strong>ct, <strong>C</strong>onvert, and
        <strong>E</strong>ngage.
        (<a href="https://www.smartinsights.com/digital-marketing-strategy/race-a-practical-framework-to-improve-your-digital-marketing/">Read more...</a>)</p>
    <h6>Marketing Campaign Strategy</h6>
        <p>Reach an infinite number of potential target audiences or potential customers by doing campaign.
        (<a href="https://www.disruptiveadvertising.com/marketing/campaign-strategy/">Read more...</a>)</p>
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
            <a class="block block-rounded block-link-shadow" href="cp_cust_loc">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Customer by Location</h3>
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

<?php require 'inc/_global/views/page_end.php';?>
<?php require 'inc/_global/views/footer_start.php';?>

<!-- Chart Logic -->
<script>
var url = "{{url('chartCustChan/1')}}";
var ChanType = [];
var CustID = [];
$(document).ready(function() {
  $.get(url, function(response) {
     response.forEach(function(data) {
         ChanType.push(data.Channel_Type);
         CustID.push(data.CustomerID);
     });
     var ctx = document.getElementById('myChart').getContext('2d');
     var myChart = new Chart(ctx, {
       type: 'doughnut',
       data: {
           labels: ChanType,
           datasets: [{
               label: 'Customers by Channel',
               data: CustID,
               backgroundColor: ['#ffd747', '#ff8a47']
           }]
       }
     });
  });
});

// $('#month').change(function() {
//     $(document).ready(function() {
//         $.get(url, function(response) {
//             response.forEach(function(data) {
//                 ChanType.push(data.Channel_Type);
//                 CustID.push(data.CustomerID);
//             });
//         myChart.update();
//         });
//     });
// });
// $('#month').change(function(){
//    var val = $(this).val();
//    if(val=={{$month->Date_ID}})
//    {
//        var url = "{{url('chartCustChan/$dateId')}}";
//        var ChanType = [];
//        var CustID = [];
//        $(document).ready(function() {
//          $.get(url, function(response) {
//             response.forEach(function(data) {
//                 ChanType.push(data.Channel_Type);
//                 CustID.push(data.CustomerID);
//             });
//             var ctx = document.getElementById('myChart').getContext('2d');
//             var myChart = new Chart(ctx, {
//               type: 'doughnut',
//               data: {
//                   labels: ChanType,
//                   datasets: [{
//                       label: 'Customers by Channel',
//                       data: CustID,
//                       backgroundColor: ['#ffd747', '#ff8a47']
//                   }]
//               },
//             });
//             // myChart.update();
//            });
//         });
//    }
//     });
//     else if(val==2)
//     {
//        var url = "{{url('chartCustChan2')}}";
//        var ChanType2 = [];
//        var CustID2 = [];
//        $(document).ready(function() {
//          $.get(url, function(response) {
//             response.forEach(function(data) {
//                 ChanType2.push(data.Channel_Type);
//                 CustID2.push(data.CustomerID2);
//             });
//             var ctx2 = document.getElementById('myChart').getContext('2d');
//             var myChart = new Chart(ctx2, {
//               type: 'doughnut',
//               data: {
//                   labels: ChanType2,
//                   datasets: [{
//                       label: 'Customers by Channel',
//                       data: CustID2,
//                       backgroundColor: ['#ffd747', '#ff8a47']
//                   }]
//               },
//           });
//            });
//         });
//    }
//    else if(val==3)
//    {
//        var url = "{{url('chartCustChan3')}}";
//        var ChanType3 = [];
//        var CustID3 = [];
//        $(document).ready(function() {
//          $.get(url, function(response) {
//             response.forEach(function(data) {
//                 ChanType3.push(data.Channel_Type);
//                 CustID3.push(data.CustomerID3);
//             });
//             var ctx3 = document.getElementById('myChart').getContext('2d');
//             var myChart = new Chart(ctx3, {
//               type: 'doughnut',
//               data: {
//                   labels: ChanType3,
//                   datasets: [{
//                       label: 'Customers by Channel',
//                       data: CustID3,
//                       backgroundColor: ['#ffd747', '#ff8a47']

//                   }]
//               },
//           });
//            });
//         });
//    }
//    });
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
