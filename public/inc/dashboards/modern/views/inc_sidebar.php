<?php
/**
 * dashboards/modern/views/inc_sidebar.php
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
    <!-- Side Header (mini Sidebar mode) -->
    <div class="smini-visible-block">
        <div class="content-header">
            <!-- Logo -->
            <a class="link-fx font-size-lg text-white" href="index.php">
                <span class="text-white-75">D</span><span class="text-white">M</span>
            </a>
            <!-- END Logo -->
        </div>
    </div>
    <!-- END Side Header (mini Sidebar mode) -->

    <!-- Side Header (normal Sidebar mode) -->
    <div class="smini-hidden">
        <div class="content-header justify-content-lg-center">
            <!-- Logo -->
            <a class="link-fx font-size-lg text-dual" href="index.php">
                <span class="text-white-75">Dashmix</span>
                Modern
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div class="d-lg-none">
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                    <i class="fa fa-times-circle"></i>
                </a>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
    </div>
    <!-- END Side Header (normal Sidebar mode) -->

    <!-- Side Actions -->
    <div class="content-side content-side-full bg-black-10 text-center">
        <div class="smini-hide">
            <button type="button" class="btn btn-sm btn-outline-secondary">
                <i class="fa fa-fw fa-user-circle"></i>
            </button>
            <button type="button" class="btn btn-sm btn-outline-secondary">
                <i class="fa fa-fw fa-pencil-alt"></i>
            </button>
            <button type="button" class="btn btn-sm btn-outline-secondary">
                <i class="fa fa-fw fa-file-alt"></i>
            </button>
            <button type="button" class="btn btn-sm btn-outline-secondary">
                <i class="fa fa-fw fa-envelope"></i>
            </button>
            <button type="button" class="btn btn-sm btn-outline-secondary">
                <i class="fa fa-fw fa-cog"></i>
            </button>
        </div>
    </div>
    <!-- END Side Actions -->

    <!-- Side Navigation -->
    <div class="content-side content-side-full">
        <ul class="nav-main">
            <?php $dm->build_nav(); ?>
        </ul>
    </div>
    <!-- END Side Navigation -->
</nav>
<!-- END Sidebar -->
