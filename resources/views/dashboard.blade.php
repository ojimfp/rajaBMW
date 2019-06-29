<?php require 'inc/_global/config.php';?>
<?php require 'inc/backend/config.php';?>
<?php require 'inc/_global/views/head_start.php';?>
<?php require 'inc/_global/views/head_end.php';?>
<?php require 'inc/_global/views/page_start.php';?>

<?php $dm->get_css('css/themes/xwork.min.css');?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/various/bmw.jpg');">
    <div class="bg-white-90">
        <div class="content content-full">
            <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-center">
                    <div class="py-4 py-md-0 text-center text-md-left invisible" data-toggle="appear">
                        <h1 class="font-size-h2 mb-2">Dashboard</h1>
                        <h2 class="font-size-lg font-w400 text-muted mb-0">Today is a great one!</h2>
                    </div>
                </div>
                <div class="col-md-6 d-md-flex align-items-md-center">
                </div>
            </div>
       </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
<!-- Quick Stats -->
<!-- jQuery Sparkline (.js-sparkline class is initialized in Helpers.sparkline() -->
<!-- For more info and examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
<h2 class="content-heading">Financial</h2>
    <div class="row row-deck">
    <div class="col-sm-3">
            <div class="block block-rounded block-bordered">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Product Sold</h3>
                </div>
                <div class="block-content">
                    @foreach($prodSold as $ps)
                    <p class="font-size-h2 font-w300 mb-0 text-center">
                        {{$ps->order_qty}}
                    </p>
                    @endforeach
                    <p class="text-info text-center">Unit</p>
                </div>
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Product Sold Growth</h3>
                    </div>
                    <div class="block-content">
                        <div class="block-content text-center">
                            <img src="<?php echo $dm->assets_folder; ?>/media/charts/line-chart.png">
                        </div>
                    </div>
                </div>
                <div class="block block-rounded">
                    <div class="notif">
                        <div class="progress push">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <div class="flex-00-auto">
                                <button type="button" class="btn btn-block btn-danger" data-toggle="popover" data-animation="true"
                                data-trigger="click" data-placement="top" title="Product Sold"
                                data-content="Represents the number of product that has been sold based on current period.">
                                <i class="fa fa-fw fa-exclamation-circle"></i></button>
                            </div>
                            <div class="flex-fill ml-3">
                                <p class="mb-0"><a class="alert-link" href="ps_main">See what happened</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="block block-rounded block-bordered">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Net Profit</h3>
                </div>
                <div class="block-content">
                    @foreach($netProfit as $np)
                    <p class="font-size-h2 font-w300 mb-0 text-center">
                        Rp{{$np->net_prof}}
                    </p>
                    @endforeach
                    <p class="text-info text-center">IDR</p>
                </div>
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Net Profit Growth</h3>
                    </div>
                    <div class="block-content">
                        <div class="block-content text-center">
                            <img src="<?php echo $dm->assets_folder; ?>/media/charts/bars-chart.png">
                        </div>
                    </div>
                </div>
                <div class="block block-rounded">
                    <div class="notif">
                        <div class="progress push">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <div class="flex-00-auto">
                                <button type="button" class="btn btn-block btn-danger" data-toggle="popover" data-animation="true"
                                data-trigger="click" data-placement="top" title="Net Profit"
                                data-content="Represents the amount of earnings remaining after all expenses has been deducted from
                                total revenue based on current period.">
                                <i class="fa fa-fw fa-exclamation-circle"></i></button>
                            </div>
                            <div class="flex-fill ml-3">
                                <p class="mb-0"><a class="alert-link" href="np_growth">See what happened</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="block block-rounded block-bordered">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Margin</h3>
                </div>
                <div class="block-content">
                    @foreach($margin as $mrgn)
                    <p class="font-size-h2 font-w300 mb-0 text-center">
                        {{$mrgn->margin}}%
                    </p>
                    @endforeach
                    <p class="text-info text-center">Margin</p>  
                </div>
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Margin Growth</h3>
                    </div>
                    <div class="block-content">
                        <div class="block-content text-center">
                            <img src="<?php echo $dm->assets_folder; ?>/media/charts/bars-chart.png">
                        </div>
                    </div>
                </div>
                <div class="block block-rounded">
                    <div class="notif">
                        <div class="progress push">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <div class="flex-00-auto">
                                <button type="button" class="btn btn-block btn-danger" data-toggle="popover" data-animation="true"
                                data-trigger="click" data-placement="top" title="Margin"
                                data-content="Represents the ratio of net profit to revenue based on current period.">
                                <i class="fa fa-fw fa-exclamation-circle"></i></button>
                            </div>
                            <div class="flex-fill ml-3">
                                <p class="mb-0"><a class="alert-link" href="mr_growth">See what happened</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="block block-rounded block-bordered">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Average Order Value</h3>
                </div>
                <div class="block-content">
                    @foreach($aov as $ov)
                    <p class="font-size-h2 font-w300 mb-0 text-center">
                        Rp{{$ov->aov}}
                    </p>
                    @endforeach
                    <p class="text-info text-center">Average Order Value</p>  
                </div>
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">AOV Growth</h3>
                    </div>
                    <div class="block-content">
                        <div class="block-content text-center">
                            <img src="<?php echo $dm->assets_folder; ?>/media/charts/bars-chart.png">
                        </div>
                    </div>
                </div>
                <div class="block block-rounded">
                    <div class="notif">
                        <div class="progress push">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <div class="flex-00-auto">
                                <button type="button" class="btn btn-block btn-danger" data-toggle="popover" data-animation="true"
                                data-trigger="click" data-placement="top" title="Average Order Value"
                                data-content="Represents the average of customer spend on each transaction based on current period.">
                                <i class="fa fa-fw fa-exclamation-circle"></i></button>
                            </div>
                            <div class="flex-fill ml-3">
                                <p class="mb-0"><a class="alert-link" href="aov_growth">See what happened</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2 class="content-heading">Customer</h2>
    <div class="row row-deck">
        <div class="col-sm-3">
            <div class="block block-rounded block-bordered">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Total<br>
                    Customer</h3>
                </div>
                <div class="block-content">
                    @foreach($totalCust as $tc)
                    <p class="font-size-h2 font-w300 mb-0 text-center">
                        {{$tc->cust_count}}
                    </p>
                    @endforeach
                    <p class="text-info text-center">Customer</p>
                </div>
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Customer Growth</h3>
                    </div>
                    <div class="block-content">
                        <div class="block-content text-center">
                            <img src="<?php echo $dm->assets_folder; ?>/media/charts/line-chart.png">
                        </div>
                    </div>
                </div>
                <div class="block block-rounded">
                    <div class="notif">
                        <div class="progress push">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <div class="flex-00-auto">
                                <button type="button" class="btn btn-block btn-success" data-toggle="popover" data-animation="true"
                                data-trigger="click" data-placement="top" title="Total Customer"
                                data-content="Represents your total number of customer based on current period.">
                                <i class="fa fa-fw fa-exclamation-circle"></i></button>
                            </div>
                            <div class="flex-fill ml-3">
                                <p class="mb-0"><a class="alert-link" href="cust_growth">Target reached!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="block block-rounded block-bordered">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Average Order Quantity</h3>
                </div>
                <div class="block-content">
                    @foreach($aoq as $oq)
                    <p class="font-size-h2 font-w300 mb-0 text-center">
                        {{$oq->aoq}}
                    </p>
                    @endforeach
                    <p class="text-info text-center">Unit per Customer</p>
                </div>
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">AOQ Growth</h3>
                    </div>
                    <div class="block-content">
                        <div class="block-content text-center">
                            <img src="<?php echo $dm->assets_folder; ?>/media/charts/line-chart.png">
                        </div>
                    </div>
                </div>
                <div class="block block-rounded">
                    <div class="notif">
                        <div class="progress push">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <div class="flex-00-auto">
                                <button type="button" class="btn btn-block btn-danger" data-toggle="popover" data-animation="true"
                                data-trigger="click" data-placement="top" title="Average Order Quantity"
                                data-content="Represents your average product sold in one transaction based on current period.">
                                <i class="fa fa-fw fa-exclamation-circle"></i></button>
                            </div>
                            <div class="flex-fill ml-3">
                                <p class="mb-0"><a class="alert-link" href="aoq_growth">See what happened</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="block block-rounded block-bordered">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Average Order Frequency</h3>
                </div>
                <div class="block-content">
                    @foreach($aof as $of)
                    <p class="font-size-h2 font-w300 mb-0 text-center">
                        {{$of->aof}}
                    </p>
                    @endforeach
                    <p class="text-info text-center">Order per Customer</p>
                </div>
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">AOF Growth</h3>
                    </div>
                    <div class="block-content">
                        <div class="block-content text-center">
                            <img src="<?php echo $dm->assets_folder; ?>/media/charts/line-chart.png">
                        </div>
                    </div>
                </div>
                <div class="block block-rounded">
                    <div class="notif">
                        <div class="progress push">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <div class="flex-00-auto">
                                <button type="button" class="btn btn-block btn-danger" data-toggle="popover" data-animation="true"
                                data-trigger="click" data-placement="top" title="Average Order Frequency"
                                data-content="Represents your average amount of order placed by each customer based on current period.">
                                <i class="fa fa-fw fa-exclamation-circle"></i></button>
                            </div>
                            <div class="flex-fill ml-3">
                                <p class="mb-0"><a class="alert-link" href="aof_growth">See what happened</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="block block-rounded block-bordered">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Average Customer Lifetime Value</h3>
                </div>
                <div class="block-content">
                    <p class="font-size-h2 font-w300 mb-0 text-center">
                    350+
                    </p>
                    <p class="text-info text-center">IDR per Customer</p>  
                </div>
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">CLV Growth</h3>
                    </div>
                    <div class="block-content">
                        <div class="block-content text-center">
                            <img src="<?php echo $dm->assets_folder; ?>/media/charts/bars-chart.png">
                        </div>
                    </div>
                </div>
                <div class="block block-rounded">
                    <div class="notif">
                        <div class="progress push">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <div class="flex-00-auto">
                                <button type="button" class="btn btn-block btn-danger" data-toggle="popover" data-animation="true"
                                data-trigger="click" data-placement="top" title="Average Customer Lifetime Value"
                                data-content="Represents your average amount of total net profit from each customer based on current period.
                                It also indicates how much money customer has spent overtime.">
                                <i class="fa fa-fw fa-exclamation-circle"></i></button>
                            </div>
                            <div class="flex-fill ml-3">
                                <p class="mb-0"><a class="alert-link" href="clv">See what happened</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="block block-rounded block-bordered">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Customer Retention</h3>
                </div>
                <div class="block-content">
                    @foreach($retention as $ret)
                    <p class="font-size-h2 font-w300 mb-0 text-center">
                        {{$ret->reten}}
                    </p>
                    @endforeach
                    <p class="text-info text-center">Loyal & Returning Customer</p>  
                </div>
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Customer Retention Growth</h3>
                    </div>
                    <div class="block-content">
                        <div class="block-content text-center">
                            <img src="<?php echo $dm->assets_folder; ?>/media/charts/bars-chart.png">
                        </div>
                    </div>
                </div>
                <div class="block block-rounded">
                    <div class="notif">
                        <div class="progress push">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <div class="flex-00-auto">
                                <button type="button" class="btn btn-block btn-danger" data-toggle="popover" data-animation="true"
                                data-trigger="click" data-placement="top" title="Customer Retention"
                                data-content="Represents the percentage of customer the company has retained based on current period.">
                                <i class="fa fa-fw fa-exclamation-circle"></i></button>
                            </div>
                            <div class="flex-fill ml-3">
                                <p class="mb-0"><a class="alert-link" href="cp_cust_category">See what happened</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="block block-rounded block-bordered">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Customer Churn</h3>
                </div>
                <div class="block-content">
                <p class="font-size-h2 font-w300 mb-0 text-center">
                    350+
                    </p>
                    <p class="text-info text-center">Lost<br>
                    Customer</p>  
                </div>
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Customer Churn Growth</h3>
                    </div>
                    <div class="block-content">
                        <div class="block-content text-center">
                            <img src="<?php echo $dm->assets_folder; ?>/media/charts/bars-chart.png">
                        </div>
                    </div>
                </div>
                <div class="block block-rounded">
                    <div class="notif">
                        <div class="progress push">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <div class="flex-00-auto">
                                <button type="button" class="btn btn-block btn-danger" data-toggle="popover" data-animation="true"
                                data-trigger="click" data-placement="top" title="Customer Churn"
                                data-content="Represents the percentage of customer the company has lost based on current period.">
                                <i class="fa fa-fw fa-exclamation-circle"></i></button>
                            </div>
                            <div class="flex-fill ml-3">
                                <p class="mb-0"><a class="alert-link" href="cp_cust_category">See what happened</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Quick Stats -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php';?>
<?php require 'inc/_global/views/footer_start.php';?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/jquery-sparkline/jquery.sparkline.min.js');?>
<?php $dm->get_js('js/plugins/chart.js/Chart.bundle.min.js');?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/be_pages_dashboard.min.js');?>

<!-- Page JS Helpers (jQuery Sparkline plugin) -->
<script>jQuery(function(){ Dashmix.helpers('sparkline'); });</script>

<script>jQuery(function(){ Dashmix.layout('sidebar_style_dark'); });</script>

<?php require 'inc/_global/views/footer_end.php';?>
