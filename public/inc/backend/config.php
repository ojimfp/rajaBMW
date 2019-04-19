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

$dm->inc_side_overlay           = 'inc/backend/views/inc_side_overlay.php';
$dm->inc_sidebar                = 'inc/backend/views/inc_sidebar.php';
$dm->inc_header                 = 'inc/backend/views/inc_header.php';
$dm->inc_footer                 = 'inc/backend/views/inc_footer.php';


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
        'icon'  => 'fa fa-chart-bar',
        // 'badge' => array(5, 'success'),
        'url'   => 'dashboard'
    ),
    array(
        'name'  => 'Financial',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Product Profitability',
        'icon'  => 'fa fa-box-open',
        'sub'   => array(
            array(
                'name'  => 'Product Sold',
                'url'   => 'product_sold'
            )
        )
    ),
    array(
        'name'  => 'Cost & Financial',
        'icon'  => 'fa fa-money-bill-wave',
        'sub'   => array(
            array(
                'name'  => 'Revenue',
                'url'   => 'revenue'
            ),
            array(
                'name'  => 'Cost of Goods Sold',
                'url'   => 'cogs'
            ),
            array(
                'name'  => 'Net Profit',
                'url'   => 'net_profit'
            ),
            array(
                'name'  => 'Average Margin',
                'url'   => 'margin'
            ),
            array(
                'name'  => 'Average Order Value',
                'url'   => 'order_value'
            )
        )
    ),
    array(
        'name'  => 'Account Receivable',
        'icon'  => 'fa fa-money-check-alt',
        'url'   => 'receivable'
    ),
    array(
        'name'  => 'Account Payable',
        'icon'  => 'fa fa-money-check',
        'url'   => 'payable'
    ),
    array(
        'name'  => 'Customer',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Customer Profitability',
        'icon'  => 'fa fa-user',
        'sub'   => array(
            array(
                'name'  => 'Total Customer',
                'url'   => 'total_cust'
            ),
            array(
                'name'  => 'Average Customer Lifetime Value',
                'url'   => 'clv'
            )
        )
    ),
    array(
        'name'  => 'Customer Conversion',
        'icon'  => 'fa fa-user-friends',
        'sub'   => array(
            array(
                'name'  => 'Conversion Rate',
                'url'   => 'conversion_rate'
            )
        )
    ),
    array(
        'name'  => 'Customer Loyalty',
        'icon'  => 'fa fa-heart',
        'sub'   => array(
            array(
                'name'  => 'Customer Retention Rate',
                'url'   => 'cust_retention'
            ),
            array(
                'name'  => 'Customer Churn Rate',
                'url'   => 'cust_churn'
            ),
            array(
                'name'  => 'Average Customer Order Frequency',
                'url'   => 'cust_order_freq'
            )
        )
    ),
    array(
        'name'  => 'Customer Spend',
        'icon'  => 'fa fa-dollar-sign',
        'sub'   => array(
            array(
                'name'  => 'Average Customer Order Quantity',
                'url'   => 'cust_order_quantity'
            ),
            array(
                'name'  => 'Average Customer Order Frequency',
                'url'   => 'cust_order_freq'
            )
        )
    )
);
