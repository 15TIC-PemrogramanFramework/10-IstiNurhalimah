<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard | Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/admin/baru/images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo base_url() ?>assets/admin/baru/images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>assets/admin/baru/images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>assets/admin/baru/images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/admin/baru/styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/admin/baru/styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/admin/baru/styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/admin/baru/styles/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/admin/baru/styles/all.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/admin/baru/styles/main.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/admin/baru/styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/admin/baru/styles/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/admin/baru/styles/pace.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/admin/baru/styles/jquery.news-ticker.css">
</head>
<body>
    <div>

        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">Toko Kelontong</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
                    <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"></a>

                        <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
                           
                        </form>
                        <ul class="nav navbar navbar-top-links navbar-right mbn">
                            <li><a href="<?php echo base_url()."Welcome/logoutadmin"?>"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!--BEGIN MODAL CONFIG PORTLET-->

                <!--END TOPBAR-->
                <div id="wrapper">
                    <!--BEGIN SIDEBAR MENU-->
                    <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                    data-position="right" >
                    <div class="sidebar-collapse menu-scroll">
                        <ul id="side-menu" class="nav">
                            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                            data-position="right" class="navbar-default navbar-static-side">
                            <div class="sidebar-collapse menu-scroll">
                                <ul id="side-menu" class="nav">
                                    <li><?php echo generate_sidemenu();?></li>
                                </ul>
                            </div>
                        </nav>
                    </ul>
                </div>
            </nav>
            <!--END SIDEBAR MENU-->

            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                


