<?php
/**
 * dashboards/classic_boxed/config.php
 *
 * Author: pixelcave
 *
 * Classic Boxed dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_side_overlay           = 'inc/dashboards/classic_boxed/views/inc_side_overlay.php';
$dm->inc_header                 = 'inc/dashboards/classic_boxed/views/inc_header.php';
$dm->inc_footer                 = 'inc/dashboards/classic_boxed/views/inc_footer.php';


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$dm->l_header_fixed             = false;
$dm->l_header_style             = '';


// **************************************************************************************************
// MAIN CONTENT
// **************************************************************************************************

$dm->l_m_content                = 'boxed';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$dm->main_nav                   = array(
    array(
        'name'  => 'Dashboard',
        'icon'  => 'si si-cup',
        'url'   => 'db_classic_boxed.php'
    ),
    array(
        'name'  => 'Manage',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Orders',
        'icon'  => 'si si-bag',
        'url'   => ''
    ),
    array(
        'name'  => 'Customers',
        'icon'  => 'si si-users',
        'url'   => ''
    ),
    array(
        'name'  => 'Products',
        'icon'  => 'si si-puzzle',
        'url'   => ''
    ),
    array(
        'name'  => 'More',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Support',
        'icon'  => 'si si-support',
        'url'   => ''
    ),
    array(
        'name'  => 'Contact',
        'icon'  => 'si si-envelope',
        'url'   => ''
    ),
    array(
        'name'  => 'Personal',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Account',
        'icon'  => 'si si-user',
        'url'   => ''
    ),
    array(
        'name'  => 'Settings',
        'icon'  => 'si si-settings',
        'url'   => ''
    ),
    array(
        'name'  => 'Dashboards',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Go Back',
        'icon'  => 'si si-arrow-left',
        'url'   => 'be_pages_dashboard_all.php'
    )
);
