<?php
/**
 * backend/config.php
 *
 * Author: pixelcave
 *
 * Backend pages configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_side_overlay = 'inc/backend/views/inc_side_overlay.php';
$dm->inc_sidebar = 'inc/backend/views/inc_sidebar.php';
$dm->inc_header = 'inc/backend/views/inc_header.php';
$dm->inc_footer = 'inc/backend/views/inc_footer.php';

// **************************************************************************************************
// MAIN CONTENT
// **************************************************************************************************

$dm->l_m_content = 'narrow';

// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$dm->main_nav = array(
    array(
        'name' => 'Dashboard',
        'icon' => 'fa fa-chart-bar',
        'url' => 'dashboard',
    ),
    array(
        'name' => 'Financial',
        'type' => 'heading',
    ),
    array(
        'name' => 'Product Sold',
        'icon' => 'fa fa-box-open',
        'url' => 'ps_menu',
    ),
    array(
        'name' => 'Net Profit',
        'icon' => 'fa fa-money-bill-wave',
        'url' => 'np_menu',
    ),
    array(
        'name' => 'Margin',
        'icon' => 'fa fa-percent',
        'url' => 'mr_menu',
    ),
    array(
        'name' => 'Average Order Value',
        'icon' => 'fa fa-money-bill',
        'url' => 'aov_menu',
    ),
    array(
        'name' => 'Customer',
        'type' => 'heading',
    ),
    array(
        'name' => 'Total Customer',
        'icon' => 'fa fa-user',
        'url' => 'cust_menu',
    ),
    array(
        'name' => 'Average Order Quantity',
        'icon' => 'fa fa-heart',
        'url' => 'aoq_menu',
    ),
    array(
        'name' => 'Average Order Frequency',
        'icon' => 'fa fa-money-check',
        'url' => 'aof_menu',
    ),
    array(
        'name' => 'Average Customer Lifetime Value',
        'icon' => 'fa fa-dollar-sign',
        'url' => 'clv_menu',
    ),
    array(
        'name' => 'Customer Retention',
        'icon' => 'fa fa-user-friends',
        'url' => 'cust_category',
    ),
    array(
        'name' => 'Customer Churn',
        'icon' => 'fa fa-user-minus',
        'url' => 'cust_category',
    ),
);
