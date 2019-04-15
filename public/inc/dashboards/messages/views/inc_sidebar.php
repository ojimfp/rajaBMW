<?php
/**
 * dashboards/messages/views/inc_sidebar.php
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
    <div class="content-header">
        <!-- Logo -->
        <a class="link-fx font-size-lg text-dual" href="index.php">
            <span class="smini-visible">
                <span class="text-white-75">D</span><span class="text-white">M</span>
            </span>
            <span class="smini-hidden">
                <span class="text-white-75">Dashmix</span>
                Messages
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
    <!-- END Side Header -->

    <!-- Side Actions -->
    <div class="content-side content-side-full bg-black-10 smini-hidden">
        <button type="button" class="btn btn-block btn-hero-sm btn-hero-primary mb-3">
            <i class="fa fa-plus mr-1"></i> New Message
        </button>
        <div class="d-flex justify-content-center text-center">
            <a class="item item-circle item-tiny border border-2x border-white-op mr-1 bg-default" data-toggle="theme" data-theme="default" href="#"></a>
            <a class="item item-circle item-tiny border border-2x border-white-op mr-1 bg-xwork" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xwork.min.css" href="#"></a>
            <a class="item item-circle item-tiny border border-2x border-white-op mr-1 bg-xmodern" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xmodern.min.css" href="#"></a>
            <a class="item item-circle item-tiny border border-2x border-white-op mr-1 bg-xeco" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xeco.min.css" href="#"></a>
            <a class="item item-circle item-tiny border border-2x border-white-op mr-1 bg-xsmooth" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xsmooth.min.css" href="#"></a>
            <a class="item item-circle item-tiny border border-2x border-white-op mr-1 bg-xinspire" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xinspire.min.css" href="#"></a>
            <a class="item item-circle item-tiny border border-2x border-white-op mr-1 bg-xdream" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xdream.min.css" href="#"></a>
            <a class="item item-circle item-tiny border border-2x border-white-op mr-1 bg-xpro" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xpro.min.css" href="#"></a>
            <a class="item item-circle item-tiny border border-2x border-white-op bg-xplay" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xplay.min.css" href="#"></a>
        </div>
    </div>
    <!-- END Side Actions -->

    <!-- Side Navigation -->
    <div class="content-side">
        <ul class="nav-main">
            <?php $dm->build_nav(); ?>
        </ul>
    </div>
    <!-- END Side Navigation -->
</nav>
<!-- END Sidebar -->
