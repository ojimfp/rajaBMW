<?php
/**
 * dashboards/tasks/config.php
 *
 * Author: pixelcave
 *
 * Tasks dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_side_overlay           = '';
$dm->inc_sidebar                = 'inc/dashboards/tasks/views/inc_sidebar.php';
$dm->inc_header                 = 'inc/dashboards/tasks/views/inc_header.php';
$dm->inc_footer                 = 'inc/dashboards/tasks/views/inc_footer.php';


// **************************************************************************************************
// GENERIC
// **************************************************************************************************

$dm->theme                      = 'xwork';


// **************************************************************************************************
// SIDEBAR
// **************************************************************************************************

$dm->l_sidebar_mini             = true;
$dm->l_sidebar_dark             = true;


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$dm->l_header_fixed             = false;
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
        'name'  => 'Projects Overview',
        'icon'  => 'si si-pin',
        'url'   => ''
    ),
    array(
        'name'  => 'Acme Inc',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Tasks',
        'icon'  => 'si si-note',
        'url'   => 'db_tasks.php'
    ),
    array(
        'name'  => 'Timeline',
        'icon'  => 'si si-clock',
        'url'   => ''
    ),
    array(
        'name'  => 'People',
        'icon'  => 'si si-users',
        'url'   => ''
    ),
    array(
        'name'  => 'Communication',
        'icon'  => 'si si-bubbles',
        'url'   => ''
    ),
    array(
        'name'  => 'Files',
        'icon'  => 'si si-social-dropbox',
        'url'   => ''
    ),
    array(
        'name'  => 'Options',
        'icon'  => 'si si-wrench',
        'url'   => ''
    ),
    array(
        'name'  => 'Active Projects',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Acme Inc',
        'icon'  => 'si si-folder-alt text-success-light',
        'url'   => ''
    ),
    array(
        'name'  => 'Example.com',
        'icon'  => 'si si-folder-alt text-warning-light',
        'url'   => ''
    ),
    array(
        'name'  => 'Test Ltd',
        'icon'  => 'si si-folder-alt text-info-light',
        'url'   => ''
    ),
    array(
        'name'  => 'Store Inc',
        'icon'  => 'si si-folder-alt text-danger-light',
        'url'   => ''
    ),
    array(
        'name'  => 'Account',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Personal',
        'icon'  => 'si si-pencil',
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
