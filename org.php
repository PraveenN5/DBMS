<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>People Connect</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
  <style>
    .height10 {
      height: 10px;

    }

    .mtop10 {
      margin-top: 10px;

    }

    .modal-label {
      position: relative;
      top: 7px;

    }

    nav.main-menu {
      float: right;
      margin-left: 0;
      margin-top: 15px;
    }

    .menu-area-main li:hover a,
    .menu-area-main li:focus a {
      color: #000;
    }

    .menu-area-main li.active a {
      color: #000;
    }

    .main-menu ul>li nth:child(5) a {
      padding-right: 0px;
    }

    .mean-container .mean-nav {
      margin-top: 0px;
      position: absolute;
      top: 100%;
    }

    .main-menu ul>li>ul>li>a {
      background: none !important;
    }

    main-menu ul>li .sub-down li a::before {}

    .main-menu ul>li .sub-down li a:hover {
      color: #111111;
    }

    .main-menu ul>li .sub-down li a:hover::before {}

    .main-menu ul li:first-child {
      margin-left: 0;
    }

    .main-menu ul li:last-child a {
      padding-right: 0;
    }

    .sub-down li {
      background: #ffffff;
    }

    .main-menu {
      text-align: center;
    }

    .main-menu ul {
      margin: 0;
      list-style-type: none;
    }

    .main-menu ul>li {
      display: inline-block;
      position: relative;
    }

    .main-menu ul>li a {
      padding: 6px 25px 0 25px;
      line-height: 20px;
      font-size: 17px;
      display: block;
      font-weight: 500;
      color: #fff;
    }

    .main-menu ul>li .sub-down li a {
      color: #114c7d;
      font-size: 15px;
      text-transform: capitalize;
      font-weight: 300;
      padding: 12px 5px;
      position: relative;
      border-bottom: solid #eee 1px;
    }

    .main-menu ul>li>ul {
      opacity: 0;
      position: absolute;
      text-align: left;
      top: 100%;
      -webkit-transform: scaleY(0);
      transform: scaleY(0);
      -webkit-transform-origin: 0 0 0;
      transform-origin: 0 0 0;
      -webkit-transition: all 0.3s ease 0s;
      transition: all 0.3s ease 0s;
      visibility: hidden;
      width: 240px;
      z-index: 999;
      background: #fff;
      -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
      box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
    }

    .main-menu>ul>li:hover>ul {
      -webkit-transform: scaleY(1);
      transform: scaleY(1);
      visibility: visible;
      opacity: 1;
    }

    .main-menu ul>li>ul>li {
      margin: 0px;
      position: relative;
      display: block;
    }

    .main-menu ul>li>ul>li:hover>ul {
      -webkit-transform: scaleY(1);
      transform: scaleY(1);
      visibility: visible;
      opacity: 1;
      left: 100%;
      top: 10px;
    }

    .main-menu ul>li {
      position: inherit;
      display: inline-block;
      vertical-align: middle;
    }

    .header {
      background: #fc4311;
      padding: 40px 0px;
      padding-bottom: 35px;
    }
  </style>
  <link rel="stylesheet" href="css/style.css"> 
  <link rel="stylesheet" href="ft/css/responsive.css">
  <link rel="icon" href="ft/images/fevicon.png" type="image/gif" />

  <link rel="stylesheet" href="ft/css/jquery.mCustomScrollbar.min.css">

    <script src=""></script>
  <script src="ft/js/jquery.min.js"></script>
  <script src="ft/js/popper.min.js"></script>
  <script src="ft/js/bootstrap.bundle.min.js"></script>
  <script src="ft/js/jquery-3.0.0.min.js"></script>
  <script src="ft/js/plugin.js"></script>

  <script src="ft/js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  <script src="ft/js/custom.js"></script>
</head>

<body>
  <!-- <div class="loader_bg">
        <div class="loader"><img src="../images/loading.gif" alt="#" /></div>
    </div> -->
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
            <div class="full">
              <div class="center-desk">
                <div class="logo"> <a href="landing_page.php"><img src="../icon/logo.png"
                      style="height: 80px;width: 250px;"></a> </div>
              </div>
            </div>
          </div>
          <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
            <div class="menu-area">
              <div class="limit-box">
                <nav class="main-menu">
                  <ul class="menu-area-main">
                  <li class="active"> <a href="../index.php">SIGN UP</a> </li>
                              <li> <a href="../login.php">LOG IN</a> </li>
                              <li> <a href="../users.php"> USERS</a> </li>
                              <li> <a href="orgk.php">STATS</a> </li>
                              <li> <a href="#contact">Contact us</a> </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end header inner -->
  </header>
  <div class="container">







    <?php
    require "Chart.php";
    use Antoineaugusti\EasyPHPCharts\Chart;

    ?>
    <!doctype html>
    <html lang="en">

    <head>
      <meta charset="utf-8">
      <title>Charts</title>
      <link rel="stylesheet" href="chart.css">
      <style>
        * {
          margin: 0;
          padding: 0;
        }

        @import url(http://fonts.googleapis.com/css?family=Roboto);

        body {
          background: lightgray;
          font-family: 'Roboto', sans-serif;
          font-weight: 400
        }

        #content {
          background: #ffffff;
          width: 1000px;
          padding: 20px;
          margin: 0 auto
        }

        h2 {
          color: #4081BD;
          margin-bottom: 20px;
          font-weight: 400
        }

        .clearBoth:after {
          width: 300px;
          border: 1px solid #EEE;
          margin: 50px 0;
          display: block;
        }

        .containerChartLegend {
          width: 480px;
          padding-left: 20px
        }
      </style>
      <script src="ChartJS.min.js"></script>
    </head>

    <body>

      <div id="content">
        <center>
          <h1>ORGANISATION STATS</h1>
        </center>
        <br>
        <?php
        /*
        //	A basic example of a pie chart
        */
        $pieChart = new Chart('pie', 'examplePie');
        $pieChart->set('data', array(200000, 300000, 400000, 100000, 150000));
        $pieChart->set('legend', array('Humane Society', 'Global Giving', 'Impact Hub', 'Show of Empathy', 'Iron Fists'));
        $pieChart->set('displayLegend', true);
        echo $pieChart->returnFullHTML();
        ?>
      </div>
      <div id="content">
        <center>
          <h1>LABOUR STATS</h1>
        </center>
        <br>
        <?php

        /*
        //	An example of a doughnut chart with legend in percentages
        */
        $doughnutChart = new Chart('doughnut', 'exampleDoughnut');
        $doughnutChart->set('data', array(50, 30, 19, 5));
        $doughnutChart->set('legend', array('APPLIED WORKERS', 'WORKING', 'WAITING LIST', 'REJECTED'));
        $doughnutChart->set('displayLegend', true);
        $doughnutChart->set('legendIsPercentage', true);
        echo $doughnutChart->returnFullHTML();

        ?>
      </div>
      <div id="content">
        <center>
          <h1>STATE AVAILED SCHEMES</h1>
        </center>
        <br>
        <?php

        /*
        //	An example of a bar chart with multiple datasets
        */
        $barChart = new Chart('bar', 'examplebar');
        $barChart->set('data', array(array(2, 10, 16, 30, 42), array(42, 30, 16, 10, 2)));
        $barChart->set('legend', array('01/01', '01/02', '01/03', '01/04', '01/05'));
        // We don't to use the x-axis for the legend so we specify the name of each dataset
        $barChart->set('legendData', array('TAMIL NADU', 'GUJARAT'));
        $barChart->set('displayLegend', true);
        echo $barChart->returnFullHTML();


        ?>
      </div>

















  </div>
  </div>
  </div>
  </div>
  <?php include('add_modal.php') ?>

  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="datatable/jquery.dataTables.min.js"></script>
  <script src="datatable/dataTable.bootstrap.min.js"></script>
  <!-- generate datatable on our table -->
  <script>
    $(document).ready(function () {
      //inialize datatable
      $('#myTable').DataTable();

      //hide alert
      $(document).on('click', '.close', function () {
        $('.alert').hide();
      })
    });
  </script>
</body>

</html>