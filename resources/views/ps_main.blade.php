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
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Product Sold per ID</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Product Sold</li>
                    <li class="breadcrumb-item active" aria-current="page">Product Sold per ID</li>
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
    <!-- Bar Chart -->
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
            <!-- END Bar Chart -->

            <div class="block block-bordered">
                <div class="block-content">
                    <p><strong>From the chart above, we can conclude that:</strong><br>
                    The most product sold in 2017 is <span style="color:#3dca60">7146 [66 unit]</span>, followed by
                    <span style="color:#3dca60">7631 [47 unit]</span>, and <span style="color:#3dca60">8176 [44
                    unit]</span>. Maintain these high-selling product (indicated by green-colored bar) and improve
                    low-selling product (indicated by red-colored bar) by implementing strategies related to <strong>
                    PRODUCT MARKETING</strong> such as: pricing strategy, up-selling, cross-selling, etc.</p>
                </div>
            </div>

    <!-- Recommended Strategy -->
    <h2 class="content-heading">Recommended Strategy</h2>
      <h6>Bundling Pricing</h6>
        <p>Take any products that relate to each other, then combine them into one package product. Use this
        strategy to improve sales on low-selling products while maintaining sales of high-selling products.
        (<a href="https://smallbusiness.chron.com/bundle-pricing-strategy-67049.html">Read more...</a>)</p>
      <h6>Psychological Pricing</h6>
        <p>Choosing certain prices that have a bigger psychological impact on customers.
        (<a href="https://www.entrepreneur.com/article/279464">Read more...</a>)</p>
      <h6>Cross-selling and Up-selling</h6>
         <p>A technique used to get a customer spend more by purchasing more or higher value products. Cross-
         selling involves offering the customer a related product, while up-selling involves offering a high
         value product than what the customer previously bought.
         1 (<a href="https://www.shopify.co.id/encyclopedia/cross-selling">Read more...</a>)
         2 (<a href="https://www.shopify.co.id/encyclopedia/upselling">Read more...</a>)</p>
      <p>Make decision whether to keep selling the low-selling products or not, by taking product cost and
      margin into consideration.</p>

    <!-- Related Charts -->
    <h2 class="content-heading">Related Charts</h2>
    <div class="row">
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
var url = "{{url('chartProdSold3')}}";
var ProdID3 = [];
var OrderQty3 = [];
$(document).ready(function() {
  $.get(url, function(response) {
     response.forEach(function(data) {
         ProdID3.push(data.Product_ID);
         OrderQty3.push(data.sum_qty3);
     });
     var ctx = document.getElementById('myChart').getContext('2d');
         var myChart = new Chart(ctx, {
           type: 'horizontalBar',
           data: {
               labels: ProdID3,
               datasets: [{
                   label: 'Product Sold',
                   data: OrderQty3,
                   backgroundColor: ['#00ff42','#8fe540','#a6e140','#c4dc40','#f1d43f','#f6c03b',
                   '#f7b138','#f7ab37','#f99633','#f99633']
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

 $('#myFilter').change(function(){
   var val = $(this).val();
   if(val==1)
   {
    var url = "{{url('chartProdSold1')}}";
    var ProdID1 = [];
    var OrderQty1 = [];
    $(document).ready(function() {
        // $('#myChart').detach();
        $.get(url, function(response) {
            response.forEach(function(data) {
                ProdID1.push(data.Product_ID);
                OrderQty1.push(data.sum_qty1);
            });
            var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'horizontalBar',
                data: {
                    labels: ProdID1,
                    datasets: [{
                        label: 'Product Sold',
                        data: OrderQty1,
                        backgroundColor: ['#00ff42','#8fe540','#a6e140','#c4dc40','#f1d43f','#f6c03b',
                        '#f7b138','#f7ab37','#f99633','#f99633']
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
        // $('#myChart').append(myChart);
    });
    }
    else if(val==2)
    {
    var url = "{{url('chartProdSold2')}}";
    var ProdID2 = [];
    var OrderQty2 = [];
    $(document).ready(function() {
        // $('#myChart').detach();
        $.get(url, function(response) {
            response.forEach(function(data) {
                ProdID2.push(data.Product_ID);
                OrderQty2.push(data.sum_qty2);
            });
            var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'horizontalBar',
                data: {
                    labels: ProdID2,
                    datasets: [{
                        label: 'Product Sold',
                        data: OrderQty2,
                        backgroundColor: ['#00ff42','#8fe540','#a6e140','#c4dc40','#f1d43f','#f6c03b',
                        '#f7b138','#f7ab37','#f99633','#f99633']
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
        // $('#myChart').append(myChart);
    });
   }
   else if(val==3)
   {
    var url = "{{url('chartProdSold3')}}";
    var ProdID3 = [];
    var OrderQty3 = [];
    $(document).ready(function() {
        // $('#myChart').detach();
        $.get(url, function(response) {
            response.forEach(function(data) {
                ProdID3.push(data.Product_ID);
                OrderQty3.push(data.sum_qty3);
            });
            var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'horizontalBar',
                data: {
                    labels: ProdID3,
                    datasets: [{
                        label: 'Product Sold',
                        data: OrderQty3,
                        backgroundColor: ['#00ff42','#8fe540','#a6e140','#c4dc40','#f1d43f','#f6c03b',
                        '#f7b138','#f7ab37','#f99633','#f99633']
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
            // $('myChart').append(myChart));
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
