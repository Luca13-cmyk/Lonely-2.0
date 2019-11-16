<?php if(!class_exists('Rain\Tpl')){exit;}?>

<!--
=========================================================
 Paper Kit 2 - v2.2.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-kit-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-kit-2/blob/master/LICENSE.md)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<!DOCTYPE html>

<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/res/site/assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="/res/site/assets/img//favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Login | Lonely
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="/res/site/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/res/site/assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/res/site/assets/demo/demo.css" rel="stylesheet" />
  <!-- CSS  JS Loader -->
  <script src="/res/site/assets/loader/pace2/pace.min.js"></script>
  <link href="/res/site/assets/loader/pace2/themes/silver/pace-theme-minimal.css" rel="stylesheet" />
  
  <!-- <link href="/res/site/assets/loader/pace2/themes/blue/pace-theme-bounce.css" rel="stylesheet" /> -->
  <style>
  
  .card-register
  {

    background: #333333;



  }
  .aviso-per
  {
    margin-top: 20px;
    display: flex;
    justify-content: space-between;

  }
  .aviso-per b
  {
    color: #ff0000;
  }
  .nc-alert-circle-i
  {
    font-size: 24px;
    animation: pula 1.5s linear infinite 0.5s;
    
  }

  @keyframes pula{
    0%{
        opacity: 0;
        transform: scale(0);
    }
    1%{
        opacity: 0.5;
        transform: scale(0);
    }
    99%{
        opacity: 0.1;
        transform: scale(1.7);
    }
    100%{
        opacity: 0;
        transform: scale(0);
    }
}





  </style>
</head>

<body class="register-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="/" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom" target="_blank">
          Lonely
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          
          <!-- <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="#" target="_blank">
              <i class="fa fa-twitter"></i>
              <p class="d-lg-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="#" target="_blank">
              <i class="fa fa-facebook-square"></i>
              <p class="d-lg-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="#" target="_blank">
              <i class="fa fa-instagram"></i>
              <p class="d-lg-none">Instagram</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Star on GitHub" data-placement="bottom" href="#" target="_blank">
              <i class="fa fa-github"></i>
              <p class="d-lg-none">GitHub</p>
            </a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  
  <div class="page-header" style="background-image: url('/res/site/assets/img/login-image.jpg');">
    <div class="filter"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 ml-auto mr-auto">
          <div class="card card-register">
            <h3 class="title mx-auto"><i> Bem Vindo </i></h3>
           
            <form action="/admin/login" method="post" class="register-form">
              <label>Login</label>
              <input type="text" class="form-control" placeholder="Login" name="login">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Password" name="password">
              <div class="aviso-per"><i class="nc-icon nc-alert-circle-i"></i> <b> Senha ou Login invalido</b></div>
              <button type="submit" class="btn btn-danger btn-block btn-round">Entrar</button>
            </form>
            <div class="forgot">
              <a href="/admin/forgot" class="btn btn-link btn-danger">Esqueceu a senha ?</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer register-footer text-center">
      <h6>©
        <script>
          document.write(new Date().getFullYear())
        </script>, Feito com <i class="fa fa-heart heart"></i> Por Luca Negrette</h6>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="/res/site/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="/res/site/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="/res/site/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="/res/site/assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="/res/site/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="/res/site/assets/js/plugins/moment.min.js"></script>
  <script src="/res/site/assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
  <script src="/res/site/assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
</body>

</html>
