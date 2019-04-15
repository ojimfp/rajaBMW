<?php
/**
 * dashboards/messages/config.php
 *
 * Author: pixelcave
 *
 * Messages dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_side_overlay           = '';
$dm->inc_sidebar                = 'inc/dashboards/messages/views/inc_sidebar.php';
$dm->inc_header                 = '';
$dm->inc_footer                 = '';


// **************************************************************************************************
// GENERIC
// **************************************************************************************************

$dm->theme                      = 'xsmooth';


// **************************************************************************************************
// SIDEBAR & SIDE OVERLAY
// **************************************************************************************************

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
        'name'  => 'Inbox',
        'icon'  => 'fa fa-inbox text-info',
        'badge' => array(5, 'info'),
        'url'   => 'db_messages.php'
    ),
    array(
        'name'  => 'Starred',
        'icon'  => 'fa fa-star text-warning',
        'url'   => ''
    ),
    array(
        'name'  => 'Sent Mail',
        'icon'  => 'far fa-paper-plane text-danger',
        'url'   => ''
    ),
    array(
        'name'  => 'All Mail',
        'icon'  => 'fa fa-box text-success',
        'url'   => ''
    ),
    array(
        'name'  => 'Labels',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Personal',
        'icon'  => 'fa fa-tag',
        'url'   => ''
    ),
    array(
        'name'  => 'Work',
        'icon'  => 'fa fa-tag',
        'url'   => ''
    ),
    array(
        'name'  => 'Friends',
        'icon'  => 'fa fa-tag',
        'url'   => ''
    ),
    array(
        'name'  => 'Trips',
        'icon'  => 'fa fa-tag',
        'url'   => ''
    ),
    array(
        'name'  => 'Accounting',
        'icon'  => 'fa fa-tag',
        'url'   => ''
    ),
    array(
        'name'  => 'More',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Categories',
        'icon'  => 'fa fa-list',
        'sub'   => array(
            array(
                'name'  => 'Social',
                'url'   => ''
            ),
            array(
                'name'  => 'Promotions',
                'url'   => ''
            ),
            array(
                'name'  => 'Updates',
                'url'   => ''
            ),
            array(
                'name'  => 'Forums',
                'url'   => ''
            ),
            array(
                'name'  => 'Newsletters',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Settings',
        'icon'  => 'fa fa-cog',
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
