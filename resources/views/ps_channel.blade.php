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
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Product Sold by Channel</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Product Sold</li>
                    <li class="breadcrumb-item active" aria-current="page">Product Sold by Channel</li>
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
    <!-- Pie Chart -->
            <div class="block block-rounded block-bordered">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Pie Chart</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full text-center">
                    <div style="padding:10px;display:inline-block">
                        <label>Year</label>
                        <select id="myFilter">
                            <option value ="1">2015</option>
                            <option value ="2">2016</option>
                            <option value ="3" selected="selected">2017</option>
                        </select>
                    </div>
                    <div class="py-3">
                        <!-- Chart Container -->
                        <canvas id="myChart" height="150"></canvas>
                    </div>
                </div>
            </div>
            <!-- END Pie Chart -->

            <div class="block block-bordered">
                <div class="block-content">
                    <p><strong>From the chart above, we can conclude that:</strong><br>
                    In 2017, most products are bought through <span style="color:#3dca60">Online [2256 unit]</span>
                    channel, rather than buying through <span style="color:red">Offline [1077 unit]</span> channel.
                    Among all Online channels, customers preferred <span style="color:#3dca60">Tokopedia [1213 unit]
                    </span> to buy products. Since your customers preferred online channel, your company should
                    implement <strong>E-COMMERCE MARKETING</strong>.</p>
                </div>
            </div>

    <!-- Recommended Strategy -->
    <h2 class="content-heading">Recommended Strategy</h2>
      <h6>E-Commerce/Digital Marketing</h6>
        <p>Drive traffic into your online store and turn them into paying customers using social media or the internet.
        (<a href="https://www.shopify.com/blog/ecommerce-marketing">Read more...</a>)</p>
      <p>Creating more value to customers using additional material or contents such as videos, webinar, infographics,
      etc. Also, business process automation might help to improve customer satisfaction.
        (<a href="https://blog.adext.com/digital-marketing-strategies-increase-online-sales/">Read more...</a>)</p>
      <h6>Dynamic Pricing</h6>
         <p> Changing products prices based on certain condition such as demands, product costs, or your competitor's
         prices.
         (<a href="https://medium.com/swlh/the-advantages-and-disadvantages-of-dynamic-pricing-c2d914fe644f">Read more...</a>)
         </p>
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
            <a class="block block-rounded block-link-shadow" href="ps_growth">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Product Sold Growth</h3>
                </div>
                <div class="block-content text-center">
                    <img src="<?php echo $dm->assets_folder; ?>/media/charts/line-chart.png">
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
    </div>
    <!-- END Related Charts -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php';?>
<?php require 'inc/_global/views/footer_start.php';?>

<!-- Chart Logic -->
<script>
var url = "{{url('chartProdChan3')}}";
var ChanType3 = [];
var OrderQty3 = [];
$(document).ready(function() {
  $.get(url, function(response) {
     response.forEach(function(data) {
         ChanType3.push(data.Channel_Type);
         OrderQty3.push(data.sum_qty3);
     });
     var ctx = document.getElementById('myChart').getContext('2d');
         var myChart = new Chart(ctx, {
           type: 'pie',
           data: {
               labels: ChanType3,
               datasets: [{
                   label: 'Product Sold',
                   data: OrderQty3,
                   backgroundColor: ['#ffd747', '#ff8a47']
               }]
           },
       });
    });
 });

 $('#myFilter').change(function(){
   var val = $(this).val();
   if(val==1)
   {
    var url = "{{url('chartProdChan1')}}";
    var ChanType1 = [];
    var OrderQty1 = [];
    $(document).ready(function() {
        $.get(url, function(response) {
            response.forEach(function(data) {
                ChanType1.push(data.Channel_Type);
                OrderQty1.push(data.sum_qty1);
            });
            var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ChanType1,
                    datasets: [{
                        label: 'Product Sold',
                        data: OrderQty1,
                        backgroundColor: ['#ffd747', '#ff8a47']
                    }]
                },
            });
        });
    });
    }
    else if(val==2)
    {
    var url = "{{url('chartProdChan2')}}";
    var ChanType2 = [];
    var OrderQty2 = [];
    $(document).ready(function() {
        $.get(url, function(response) {
            response.forEach(function(data) {
                ChanType2.push(data.Channel_Type);
                OrderQty2.push(data.sum_qty2);
            });
            var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ChanType2,
                    datasets: [{
                        label: 'Product Sold',
                        data: OrderQty2,
                        backgroundColor: ['#ffd747', '#ff8a47']
                    }]
                },
            });
        });
    });
   }
   else if(val==3)
   {
    var url = "{{url('chartProdChan3')}}";
    var ChanType3 = [];
    var OrderQty3 = [];
    $(document).ready(function() {
        $.get(url, function(response) {
            response.forEach(function(data) {
                ChanType3.push(data.Channel_Type);
                OrderQty3.push(data.sum_qty3);
            });
            var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ChanType3,
                    datasets: [{
                        label: 'Product Sold',
                        data: OrderQty3,
                        backgroundColor: ['#ffd747', '#ff8a47']
                    }]
                },
            });
        });
    });
   }
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
