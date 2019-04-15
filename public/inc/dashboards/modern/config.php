<?php
/**
 * dashboards/modern/config.php
 *
 * Author: pixelcave
 *
 * Modern dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_side_overlay           = 'inc/dashboards/modern/views/inc_side_overlay.php';
$dm->inc_sidebar                = 'inc/dashboards/modern/views/inc_sidebar.php';
$dm->inc_header                 = 'inc/dashboards/modern/views/inc_header.php';
$dm->inc_footer                 = 'inc/dashboards/modern/views/inc_footer.php';


// **************************************************************************************************
// SIDEBAR & SIDE OVERLAY
// **************************************************************************************************

$dm->l_sidebar_dark             = true;


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$dm->l_header_style             = 'light';


// **************************************************************************************************
// MAIN CONTENT
// **************************************************************************************************

$dm->l_m_content                = 'narrow';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$dm->main_nav                   = array(
    array(
        'name'  => 'Dashboard',
        'icon'  => 'si si-bar-chart',
        'badge' => array(3, 'primary'),
        'url'   => 'db_modern.php'
    ),
    array(
        'name'  => 'Manage',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Projects',
        'icon'  => 'si si-docs',
        'sub'   => array(
            array(
                'name'  => 'New',
                'icon'  => 'si si-plus',
                'url'   => ''
            ),
            array(
                'name'  => 'Active',
                'icon'  => 'si si-star',
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'icon'  => 'si si-pencil',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Customers',
        'icon'  => 'si si-user',
        'sub'   => array(
            array(
                'name'  => 'New',
                'icon'  => 'si si-plus',
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'icon'  => 'si si-pencil',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Invoices',
        'icon'  => 'si si-doc',
        'sub'   => array(
            array(
                'name'  => 'New',
                'icon'  => 'si si-plus',
                'url'   => ''
            ),
            array(
                'name'  => 'Pending',
                'icon'  => 'si si-hourglass',
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'icon'  => 'si si-pencil',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Payments',
        'icon'  => 'si si-check',
        'sub'   => array(
            array(
                'name'  => 'Pending',
                'icon'  => 'si si-hourglass',
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'icon'  => 'si si-pencil',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Marketing',
        'icon'  => 'si si-eyeglasses',
        'sub'   => array(
            array(
                'name'  => 'Articles',
                'icon'  => 'si si-book-open',
                'url'   => ''
            ),
            array(
                'name'  => 'SEO',
                'icon'  => 'si si-globe',
                'url'   => ''
            ),
            array(
                'name'  => 'Feedback',
                'icon'  => 'si si-directions',
                'url'   => ''
            ),
            array(
                'name'  => 'Analytics',
                'icon'  => 'si si-graph',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Support',
        'icon'  => 'si si-support',
        'sub'   => array(
            array(
                'name'  => 'Open Tickets',
                'icon'  => 'si si-fire',
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'icon'  => 'si si-pencil',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Settings',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Profile',
        'icon'  => 'si si-moustache',
        'badge' => array(4, 'primary'),
        'url'   => ''
    ),
    array(
        'name'  => 'Messages',
        'icon'  => 'si si-envelope-open',
        'badge' => array(9, 'success'),
        'url'   => ''
    ),
    array(
        'name'  => 'Account',
        'icon'  => 'si si-user',
        'badge' => array(3, 'warning'),
        'url'   => ''
    ),
    array(
        'name'  => 'Security',
        'icon'  => 'si si-lock',
        'badge' => array(1, 'danger'),
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
