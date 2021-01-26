 <!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" /> 
  <title>Biolink | <?php echo $title ?></title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/logo.png" />
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/bootstrap.css" type="text/css" />
  
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/animate.css" type="text/css" />
  <!-- <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/font-awesome.min.css" type="text/css" /> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/font.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>js/calendar/bootstrap_calendar.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/app.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>sweetalert/sweetalert2.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>js/datatables/datatables.css" type="text/css"/>
  <link href="<?php echo base_url('assets/') ?>css/bootstrap-toggle.min.css" rel="stylesheet">

  <script src="<?php echo base_url('assets/') ?>js/jquery.min.js"></script>  
  
</head> 
<body>
  <section class="vbox">
    <header class="bg-dark dk header navbar navbar-fixed-top-xs">
      <div class="navbar-header aside-md">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
          <i class="fa fa-bars"></i>
        </a>
        <a href="#" class="navbar-brand" data-toggle="fullscreen"><img src="<?php echo base_url('assets/') ?>images/logo.png" class="m-r-sm"><span class="text-white">BIOLINK</span></a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
          <i class="fa fa-cog"></i>
        </a>
      </div>
          
      <!--profile-->
      <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="thumb-sm avatar pull-left">
              <?php if ($this->session->userdata('user_foto') == null): ?>
                <img src="<?php echo base_url('assets/images/avatar_default.jpg') ?>">
              <?php else: ?>
                <img src="<?php echo base_url('assets/images/user/').$this->session->userdata('user_foto'); ?>">
              <?php endif ?>
            </span>
            <?php echo $this->session->userdata('user_nama'); ?> <b class="caret"></b>
          </a> 
          <ul class="dropdown-menu animated fadeInRight">
            <span class="arrow top"></span>
            <!-- <li>
              <a href="<?php echo base_url('setting') ?>">Settings</a>
            </li>  -->
            <li>
              <a href="<?php echo base_url('profile') ?>">Profile</a>
            </li>
            
            <li class="divider"></li>
            <li>
              <a onclick="logout('<?php echo base_url("login/logout") ?>')" href="#">Logout</a>
            </li>
          </ul>
        </li>
      </ul> 
      <!--endptofile-->

    </header>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <aside class="bg-dark lter aside-md hidden-print" id="nav">          
          <section class="vbox">
            
            <section class="w-f scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                
                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                  <ul class="nav">

                    <?php if ($this->session->userdata('user_level') == 1): ?>

                    <li  <?php echo @$registration_active ?>>
                      <a href="<?php echo base_url('registrasi') ?>" >
                        <i class="fa fa-sitemap icon">
                          <b class="bg-light dker"></b>
                        </i>
                        <span>Registration</span>
                      </a>
                    </li>

                    <li  <?php echo @$user_active ?>>
                      <a href="<?php echo base_url('user') ?>" >
                        <i class="fa fa-users icon">
                          <b class="bg-light dker"></b>
                        </i>
                        <span>User Control</span>
                      </a>
                    </li>

                    <li  <?php echo @$preset_active ?>>
                      <a href="<?php echo base_url('preset') ?>" >
                        <i class="fa fa-photo icon">
                          <b class="bg-light dker"></b>
                        </i>
                        <span>Preset</span>
                      </a>
                    </li>

                    <li  <?php echo @$iklan_active ?>>
                      <a href="<?php echo base_url('iklan') ?>" >
                        <i class="fa fa-chain-broken icon">
                          <b class="bg-light dker"></b>
                        </i>
                        <span>Iklan</span>
                      </a>
                    </li>

                    <li <?php echo @$notifikasi_active ?>>
                      <a href="<?php echo base_url('notifikasi') ?>"  >

                        <?php $idx = $this->session->userdata('user_id'); ?>
                        <?php $not = $this->db->query("SELECT * FROM t_notifikasi WHERE NOT notifikasi_view LIKE '$idx,%' AND NOT notifikasi_view LIKE '%,$idx,%'")->num_rows(); ?> 

                        <?php if (@$not > 0): ?>
                          <b class="badge bg-danger pull-right"><?php echo $not ?></b>
                        <?php endif ?>
                        
                        <i class="fa fa-bell icon">
                          <b class="bg-light dker"></b>
                        </i>
                        <span>Notification</span>
                      </a>
                    </li>

                    <?php endif ?>

                    <li  <?php echo @$age_active ?>>
                      <a href="<?php echo base_url('age') ?>" >
                        <i class="fa fa-clock-o icon">
                          <b class="bg-light dker"></b>
                        </i>
                        <span>Age Calculator</span>
                      </a>
                    </li>

                    <li  <?php echo @$profile_active ?>>
                      <a href="<?php echo base_url('profile') ?>" >
                        <i class="fa fa-user icon">
                          <b class="bg-light dker"></b>
                        </i>
                        <span>Profile</span>
                      </a>
                    </li>

                  <?php if ($this->session->userdata('user_level') == 2): ?>
                    
                    <li  <?php echo @$setting_active ?>>
                      <a href="<?php echo base_url('setting') ?>" >
                        <i class="fa fa-cog icon">
                          <b class="bg-light dker"></b>
                        </i>
                        <span>Settings</span>
                      </a>
                    </li>

                  <?php endif ?>
                    
                  </ul>

                </nav>
                <!-- / nav -->
              </div>
            </section>
            
            <footer class="footer lt hidden-xs b-t b-dark">
              <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon">
                <i class="fa fa-angle-left text"></i>
                <i class="fa fa-angle-right text-active"></i>
              </a>
              <div class="btn-group hidden-nav-xs">
                <a href="<?php echo current_url(); ?>"><button type="button" class="btn btn-icon btn-sm btn-dark"><i class="fa fa-refresh"></i></button></a>
              </div>
            </footer>
          </section>
        </aside>