<?php
/**
 * dashboards/wp_post/views/inc_sidebar.php
 *
 * Author: pixelcave
 *
 * The sidebar of each page
 *
 */
?>

<!-- Sidebar -->
<!--
    Sidebar Mini Mode - Display Helper classes

    Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
    Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
        If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

    Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
    Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
    Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
-->
<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="bg-header-dark">
        <div class="content-header bg-white-10">
            <!-- Logo -->
            <a class="link-fx font-w700 font-size-lg text-white" href="index.php">
                <span class="smini-visible">
                    <span class="text-white-75">
                        <i class="fab fa-wordpress"></i>
                    </span>
                </span>
                <span class="smini-hidden">
                    <span class="text-white-75">
                        <i class="fab fa-wordpress"></i>
                    </span>
                    <span class="text-white">WP Post</span>
                </span>
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div>
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                    <i class="fa fa-times-circle"></i>
                </a>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
    </div>
    <!-- END Side Header -->

    <!-- Side Navigation -->
    <div class="content-side content-side-full">
        <ul class="nav-main">
            <?php $dm->build_nav(); ?>
            <li class="nav-main-heading"></li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="javascript:void(0)" data-toggle="layout" data-action="sidebar_mini_toggle">
                    <i class="nav-main-link-icon fa fa-arrows-alt-h"></i>
                    <span class="nav-main-link-name">Toggle Sidebar</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- END Side Navigation -->
</nav>
<!-- END Sidebar -->
