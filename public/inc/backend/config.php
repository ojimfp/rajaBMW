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
        'name' => 'Product Profitability',
        'icon' => 'fa fa-box-open',
        'url' => 'pp_menu',
    ),
    array(
        'name' => 'Cost & Financial',
        'icon' => 'fa fa-money-bill-wave',
        'url' => 'cf_menu',
    ),
    array(
        'name' => 'Customer',
        'type' => 'heading',
    ),
    array(
        'name' => 'Customer Profitability',
        'icon' => 'fa fa-user',
        'url' => 'cp_menu',
    ),
    array(
        'name' => 'Customer Loyalty',
        'icon' => 'fa fa-heart',
        'url' => 'cl_menu',
    ),
    array(
        'name' => 'Customer Spend',
        'icon' => 'fa fa-dollar-sign',
        'url' => 'cs_menu',
    ),
);
