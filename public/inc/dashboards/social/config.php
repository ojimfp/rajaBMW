<?php
/**
 * dashboards/social/config.php
 *
 * Author: pixelcave
 *
 * Social dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_side_overlay           = 'inc/dashboards/social/views/inc_side_overlay.php';
$dm->inc_sidebar                = 'inc/dashboards/social/views/inc_sidebar.php';
$dm->inc_header                 = 'inc/dashboards/social/views/inc_header.php';
$dm->inc_footer                 = 'inc/dashboards/social/views/inc_footer.php';


// **************************************************************************************************
// GENERIC
// **************************************************************************************************

$dm->theme                      = 'xmodern';


// **************************************************************************************************
// SIDEBAR & SIDE OVERLAY
// **************************************************************************************************

$dm->l_sidebar_dark             = true;


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$dm->l_header_style             = 'dark-glass';


// **************************************************************************************************
// MAIN CONTENT
// **************************************************************************************************

$dm->l_m_content                = 'boxed';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$dm->main_nav                   = array(
    array(
        'name'  => 'My Profile',
        'icon'  => 'far fa-user-circle',
        'url'   => 'db_social.php'
    ),
    array(
        'name'  => 'Notifications',
        'icon'  => 'far fa-bell',
        'badge' => array(6, 'info'),
        'url'   => ''
    ),
    array(
        'name'  => 'Messages',
        'icon'  => 'far fa-envelope-open',
        'badge' => array(1, 'info'),
        'url'   => ''
    ),
    array(
        'name'  => 'Home',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'News Feed',
        'icon'  => 'far fa-newspaper',
        'url'   => ''
    ),
    array(
        'name'  => 'Marketplace',
        'icon'  => 'far fa-gem',
        'url'   => ''
    ),
    array(
        'name'  => 'Explore',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Events',
        'icon'  => 'far fa-calendar-alt',
        'url'   => ''
    ),
    array(
        'name'  => 'Groups',
        'icon'  => 'fa fa-users',
        'url'   => ''
    ),
    array(
        'name'  => 'Pages',
        'icon'  => 'far fa-file-alt',
        'badge' => array(32, 'danger'),
        'url'   => ''
    ),
    array(
        'name'  => 'On This Day',
        'icon'  => 'far fa-clock',
        'url'   => ''
    ),
    array(
        'name'  => 'Pages Feed',
        'icon'  => 'far fa-newspaper',
        'url'   => ''
    ),
    array(
        'name'  => 'Photos',
        'icon'  => 'far fa-images',
        'badge' => array(14, 'warning'),
        'url'   => ''
    ),
    array(
        'name'  => 'Games',
        'icon'  => 'fa fa-gamepad',
        'badge' => array(25, 'success'),
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
