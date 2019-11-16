<?php if(!class_exists('Rain\Tpl')){exit;}?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/res/admin/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/res/admin/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
Lonely
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="/res/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/res/admin/assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS STYLE -->
  <link rel="stylesheet" href="/res/admin/assets/lonely/demo.css">
  <link href="/res/admin/assets/lonely/sidebarconfig.css" rel="stylesheet" />
  <link href="/res/admin/assets/lonely/ferramentas.css" rel="stylesheet" />
  <!-- CSS loader -->
  <link rel="stylesheet" href="/res/admin/assets/loader2.0/loader.css">
</head>

<body class="">
    <md-backdrop class="md-opaque drawer-backdrop gf-scroll-trap"></md-backdrop>
    <div id="preloader">
        <div class="loader"></div>
    </div>
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="/res/admin/assets/img/faces/luca.jpg">
          </div>
        </a>
        <a href="/admin/profile" class="simple-text logo-normal">
          LUCA NEGRETTE
          <!-- <div class="logo-image-big">
            <img src="/res/admin/assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          
          <li class='<?php echo getCurrentHost("/admin"); ?>'>
            <a href="/admin">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class='<?php echo getCurrentHost("/"); ?>'>
            <a href="#">
              <i class="nc-icon nc-diamond"></i>
              <p>Programas</p>
            </a>
          </li>
          <li class='<?php echo getCurrentHost("/"); ?>'>
            <a href="./user.html">
              <i class="nc-icon nc-layout-11"></i>
              <p>Modelos</p>
            </a>
          </li>
          <li class='<?php echo getCurrentHost("/"); ?>'>
            <a href="./tables.html">
              <i class="nc-icon nc-tile-56"></i>
              <p>Documentacao</p>
            </a>
          </li>
          <li class='<?php echo getCurrentHost("/admin/administracao"); ?>'>
            <a href="/admin/administracao">
              <i class="nc-icon nc-circle-10"></i>
              <p>Administracao</p>
            </a>
          </li>
          
          <li >
            <a href="https://lonelydes.zendesk.com/chat/agent#home">
              <i class="nc-icon nc-globe"></i>
              <p>Zendesk</p>
            </a>
          </li>
          <li class='<?php echo getCurrentHost("/admin/lembretes"); ?>'>
            <a href="/admin/lembretes">
              <i class="nc-icon nc-caps-small"></i>
              <p>Lembretes</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="#">
              <i class="nc-icon nc-spaceship"></i>
              <p>GITHUB</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!--  -->
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="/">Lonely</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="#pablo">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a data-settings_per="show" class="nav-link btn-rotate" href="#pablo">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar  ss-->

      <!-- Config -->
      <div class="offset-area-per">
          <div class="offset-close"><i class="nc-icon nc-simple-remove"></i></div>
          <ul class="nav offset-menu-tab">
              <li><a class="" data-toggle="tab" href="#activity">Activity</a></li>
              <li><a data-toggle="tab" href="#settings" class="active show">Settings</a></li>
          </ul>
          <div class="offset-content tab-content">
              <div id="activity" class="tab-pane fade in">
               </div>
              <div id="settings" class="tab-pane fade active show">
                  <div class="offset-settings">
                      <h4>General Settings</h4>
                      <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: calc(100vh - 158px);"><div class="settings-list" style="overflow: hidden; width: auto; height: calc(100vh - 158px);">
                          <div class="s-settings">
                              <div class="s-sw-title">
                                  <h5>Notifications</h5>
                                  <div class="s-swtich">
                                      <input type="checkbox" id="switch1">
                                      <label for="switch1">Toggle</label>
                                  </div>
                              </div>
                              <p>Keep it 'On' When you want to get all the notification.</p>
                          </div>
                          <div class="s-settings">
                              <div class="s-sw-title">
                                  <h5>Show recent activity</h5>
                                  <div class="s-swtich">
                                      <input type="checkbox" id="switch2">
                                      <label for="switch2">Toggle</label>
                                  </div>
                              </div>
                              <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                          </div>
                          <div class="s-settings">
                              <div class="s-sw-title">
                                  <h5>Show your emails</h5>
                                  <div class="s-swtich">
                                      <input type="checkbox" id="switch3">
                                      <label for="switch3">Toggle</label>
                                  </div>
                              </div>
                              <p>Show email so that easily find you.</p>
                          </div>
                          <div class="s-settings">
                              <div class="s-sw-title">
                                  <h5>Show Task statistics</h5>
                                  <div class="s-swtich">
                                      <input type="checkbox" id="switch4">
                                      <label for="switch4">Toggle</label>
                                  </div>
                              </div>
                              <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                          </div>
                          <div class="s-settings">
                              <div class="s-sw-title">
                                  <h5>Notifications</h5>
                                  <div class="s-swtich">
                                      <input type="checkbox" id="switch5">
                                      <label for="switch5">Toggle</label>
                                  </div>
                              </div>
                              <p>Use checkboxes when looking for yes or no answers.</p>
                          </div>
                      </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 569.376px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                  </div>
              </div>
          </div>
      </div>