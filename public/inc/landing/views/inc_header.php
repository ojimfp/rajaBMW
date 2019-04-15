<?php
/**
 * landing/views/inc_header.php
 *
 * Author: pixelcave
 *
 * The header of each page (Backend pages)
 *
 */
?>

<!-- Header -->
<header id="page-header" class="invisible" data-toggle="appear" data-class="animated fadeInDown" data-timeout="600">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="d-flex align-items-center">
            <!-- Logo -->
            <a class="link-fx font-size-lg font-w700 text-dark" href="index.php">
                Dash<span class="text-primary">mix</span> <small class="font-w600 text-black"><?php echo $dm->version; ?></small>
            </a>
            <!-- END Logo -->
        </div>
        <!-- END Left Section -->

        <!-- Center Section -->
        <div class="d-none d-lg-flex align-items-center">
            <!-- Menu -->
            <ul class="nav-main nav-main-horizontal nav-main-hover">
                <li class="nav-main-item">
                    <a class="nav-main-link" data-toggle="scroll-to" data-speed="750" href="#dm-dashboards">
                        <i class="nav-main-link-icon fa fa-compass"></i>
                        <span class="nav-main-link-name">Dashboards</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" data-toggle="scroll-to" data-speed="750" href="#dm-widgets">
                        <i class="nav-main-link-icon fa fa-puzzle-piece"></i>
                        <span class="nav-main-link-name">Widgets</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" data-toggle="scroll-to" data-speed="750" href="#dm-layout">
                        <i class="nav-main-link-icon fa fa-fire"></i>
                        <span class="nav-main-link-name">Layout</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" data-toggle="scroll-to" data-speed="750" href="#dm-toolkit">
                        <i class="nav-main-link-icon fab fa-node-js"></i>
                        <span class="nav-main-link-name">Toolkit</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" data-toggle="scroll-to" data-speed="750" href="#dm-features">
                        <i class="nav-main-link-icon fa fa-heartbeat"></i>
                        <span class="nav-main-link-name">Features</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-brush"></i>
                        <span class="nav-main-link-name">Themes</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme" data-theme="default" href="#">
                                <i class="nav-main-link-icon fa fa-circle text-default"></i>
                                <span class="nav-main-link-name">Default</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xwork.min.css" href="#">
                                <i class="nav-main-link-icon fa fa-circle text-xwork"></i>
                                <span class="nav-main-link-name">xWork</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xmodern.min.css" href="#">
                                <i class="nav-main-link-icon fa fa-circle text-xmodern"></i>
                                <span class="nav-main-link-name">xModern</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xeco.min.css" href="#">
                                <i class="nav-main-link-icon fa fa-circle text-xeco"></i>
                                <span class="nav-main-link-name">xEco</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xsmooth.min.css" href="#">
                                <i class="nav-main-link-icon fa fa-circle text-xsmooth"></i>
                                <span class="nav-main-link-name">xSmooth</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xinspire.min.css" href="#">
                                <i class="nav-main-link-icon fa fa-circle text-xinspire"></i>
                                <span class="nav-main-link-name">xInspire</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xdream.min.css" href="#">
                                <i class="nav-main-link-icon fa fa-circle text-xdream"></i>
                                <span class="nav-main-link-name">xDream</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xpro.min.css" href="#">
                                <i class="nav-main-link-icon fa fa-circle text-xpro"></i>
                                <span class="nav-main-link-name">xPro</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xplay.min.css" href="#">
                                <i class="nav-main-link-icon fa fa-circle text-xplay"></i>
                                <span class="nav-main-link-name">xPlay</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- END Menu -->
        </div>
        <!-- END Center Section -->

        <!-- Right Section -->
        <div class="d-flex align-items-center">
            <!-- Call to action -->
            <a class="btn btn-outline-primary" href="https://1.envato.market/r6y">
                <i class="fa fa-fw fa-shopping-bag mr-1 opacity-75"></i>
                <span class="font-w700 font-size-sm text-uppercase">Buy Now</span>
            </a>
            <!-- END Call to action -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

    <!-- Header Search -->
    <div id="page-header-search" class="overlay-header bg-primary">
        <div class="content-header">
            <form class="w-100" action="be_pages_generic_search.php" method="POST">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-primary" data-toggle="layout" data-action="header_search_off">
                            <i class="fa fa-fw fa-times-circle"></i>
                        </button>
                    </div>
                    <input type="text" class="form-control border-0" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                </div>
            </form>
       </div>
    </div>
    <!-- END Header Search -->

    <!-- Header Loader -->
    <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
    <div id="page-header-loader" class="overlay-header bg-primary-darker">
        <div class="content-header">
            <div class="w-100 text-center">
                <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->
</header>
<!-- END Header -->
