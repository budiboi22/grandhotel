<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- start: Meta -->
        <meta charset="utf-8">
        <title><?= $title; ?></title>
        <meta name="description" content="Grand Malioboro Dashboard">
        <meta name="author" content="Grand Malioboro">
        <meta name="keyword" content="Halaman Administrator Grand Malioboro Hotel">
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->

        <!-- start: CSS -->
        <link id="bootstrap-style" href="<?= base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/admin/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link id="base-style" href="<?= base_url(); ?>assets/admin/css/style.css" rel="stylesheet">
        <link id="base-style-responsive" href="<?= base_url(); ?>assets/admin/css/style-responsive.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
        <!-- end: CSS -->

        <!-- Grocery CRUD -->
        <?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
       <!-- Grocery End -->

        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <link id="ie-style" href="<?= base_url(); ?>assets/admin/css/ie.css" rel="stylesheet">
        <![endif]-->

        <!--[if IE 9]>
                <link id="ie9style" href="<?= base_url(); ?>assets/admin/css/ie9.css" rel="stylesheet">
        <![endif]-->

        <!-- start: Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico">
        <!-- end: Favicon -->
    </head>

    <body>
        <!-- start: Header -->
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="index.html"><span>Grand Malioboro Hotel Dashboard</span></a>

                    <?php
                    if ($this->session->userdata('logged_in') == NULL) {
                        echo "";
                    } else {
                        ?>
                        <!-- start: Header Menu -->                  
                        <div class="nav-no-collapse header-nav">
                            <ul class="nav pull-right">
                                <li class="dropdown hidden-phone">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="halflings-icon white tasks"></i>
                                    </a>
                                    <ul class="dropdown-menu notifications">
                                        <li class="dropdown-menu-title">
                                            <span>You have 11 notifications</span>
                                            <a href="#refresh"><i class="icon-repeat"></i></a>
                                        </li>	
                                        <li>
                                            <a href="#">
                                                <span class="icon blue"><i class="icon-user"></i></span>
                                                <span class="message">New user registration</span>
                                                <span class="time">1 min</span> 
                                            </a>
                                        </li>                
                                        <li class="dropdown-menu-sub-footer">
                                            <a>View all notifications</a>
                                        </li>	
                                    </ul>
                                </li>
                                <!-- start: Message Dropdown -->
                                <li class="dropdown hidden-phone">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="halflings-icon white envelope"></i>
                                    </a>
                                    <ul class="dropdown-menu messages">
                                        <li class="dropdown-menu-title">
                                            <span>You have 9 messages</span>
                                            <a href="#refresh"><i class="icon-repeat"></i></a>
                                        </li>	
                                        <li>
                                            <a href="#">
                                                <span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
                                                <span class="header">
                                                    <span class="from">
                                                        Dennis Ji
                                                    </span>
                                                    <span class="time">
                                                        6 min
                                                    </span>
                                                </span>
                                                <span class="message">
                                                    Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                                </span>  
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- end: Message Dropdown -->
                                <!-- start: User Dropdown -->
                                <li class="dropdown">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="halflings-icon white user"></i> 
                                        <?= $username; ?>
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-menu-title">
                                            <span>Account Settings</span>
                                        </li>
                                        <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                                        <li><a href="<?php echo base_url(); ?>admin/home/logout"><i class="halflings-icon off"></i> Logout</a></li>
                                    </ul>
                                </li>
                                <!-- end: User Dropdown -->
                            </ul>
                        </div>
                        <!-- end: Header Menu -->
                    <?php }
                    ?>

                </div>
            </div>
        </div>
        <!-- start: Header -->
        <noscript>
        <div class="alert alert-block span10">
            <h4 class="alert-heading">Warning!</h4>
            <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
        </div>
        </noscript>
