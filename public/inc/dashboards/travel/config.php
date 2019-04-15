<?php
/**
 * dashboards/travel/config.php
 *
 * Author: pixelcave
 *
 * Travel dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_side_overlay           = 'inc/dashboards/travel/views/inc_side_overlay.php';
$dm->inc_sidebar                = 'inc/dashboards/travel/views/inc_sidebar.php';
$dm->inc_header                 = '';
$dm->inc_footer                 = '';


// **************************************************************************************************
// SIDEBAR & SIDE OVERLAY
// **************************************************************************************************

$dm->l_sidebar_mini             = true;
$dm->l_sidebar_dark             = true;


// **************************************************************************************************
// MAIN CONTENT
// **************************************************************************************************

$dm->l_m_content                = '';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$dm->main_nav                   = array(
    array(
        'name'  => 'Dashboard',
        'icon'  => 'fa fa-fire text-xinspire-light',
        'badge' => array(3, 'dark'),
        'url'   => 'db_travel.php'
    ),
    array(
        'name'  => 'Apartments',
        'icon'  => 'fa fa-building text-danger-light',
        'badge' => array(1, 'dark'),
        'url'   => ''
    ),
    array(
        'name'  => 'Houses',
        'icon'  => 'fa fa-home text-warning-light',
        'badge' => array(2, 'dark'),
        'url'   => ''
    ),
    array(
        'name'  => 'Experiences',
        'icon'  => 'far fa-smile-beam text-xsmooth-lighter',
        'badge' => array(5, 'dark'),
        'url'   => ''
    ),
    array(
        'name'  => 'Trips',
        'icon'  => 'fa fa-plane text-xeco-light',
        'badge' => array(4, 'dark'),
        'url'   => ''
    ),
    array(
        'name'  => 'Trips',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Hawaii',
        'icon'  => 'fa fa-suitcase text-muted',
        'url'   => ''
    ),
    array(
        'name'  => 'Iceland',
        'icon'  => 'fa fa-suitcase text-muted',
        'url'   => ''
    ),
    array(
        'name'  => 'New Zealand',
        'icon'  => 'fa fa-suitcase text-muted',
        'url'   => ''
    ),
    array(
        'name'  => 'Japan',
        'icon'  => 'fa fa-suitcase text-muted',
        'url'   => ''
    ),
    array(
        'name'  => 'Account',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Profile',
        'icon'  => 'fa fa-user-circle text-muted',
        'url'   => ''
    ),
    array(
        'name'  => 'Settings',
        'icon'  => 'fa fa-cog text-muted',
        'url'   => ''
    ),
    array(
        'name'  => 'Dashboards',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Go Back',
        'icon'  => 'si si-arrow-left text-muted',
        'url'   => 'be_pages_dashboard_all.php'
    )
);
