<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>People Connect</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
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
                            <div class="logo"> <a href="landing_page.php">PEOPLE CONNECT</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                    <li class="active"> <a href="index.php">SIGN UP</a> </li>
                              <li> <a href="login.php">LOG IN</a> </li>
                              <li> <a href="crud_datatable_tcpdf/usersk.php"> USERS</a> </li>
                              <li> <a href="crud_datatable_tcpdf/orgk.php">STATS</a> </li>
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
    <!-- end header -->
    <section class="slider_section">
        <div class="bod">
            <div class="card">
                <div class="signup-form">
                    <center>

                        <!-- <img src="jpg.jfif" alt="" height="75px"> -->
                    </center>
                    <h1 style="position:center ;margin-left: 80px; "> LOGIN </h1>
                    <div class="txt">
                        <form action="process2.php" method="POST">
                            <i class="fa fa-user"></i>
                            <input type="text" placeholder="User Name" name="UserName">
                    </div>

                    <div class="txt">
                        <i class="fa fa-lock"></i>
                        <input type="password" placeholder="Password" name="Password">
                    </div>
                    <input type="submit" value="LOGIN" name="btn-login" class="btn">

                    </form>
                </div>
            </div>

        </div>
    </section>

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="js/custom.js"></script>

</body>
<style>
    .signup-form {
        width: 280px;
        color: white;
    }

    .signup-form h1 {

        float: left;
        font-size: 40px;
        color: white;
        border-bottom: 4px solid #fc4311;
        margin-bottom: 50px;
        padding: 13px 0px
    }

    .txt {
        width: 100%;
        overflow: hidden;
        font-size: 20px;
        padding: 8px 0px;
        margin: 8px 0px;
        border-bottom: 1px solid #fc4311;
    }

    .txt i {
        width: 26px;
        float: left;
        margin-top: 20px;
        text-align: center;
    }

    .txt input {
        border: none;
        outline: none;
        background: none;
        color: #fff;
        font-size: 18px;
        width: 80%;
        float: left;
        margin: 0 10px;
    }

    .btn {
        width: 100%;
        margin-bottom: 17%;
        background: #fc4311;
        border-radius: 200px;
        border: none;
        margin-top: 20px;
        color: #fff;
        padding: 10px 05px;
        cursor: pointer;
        font-size: 14px;
    }

    .card {
        align-items: center;
        width: 30%;
        left: 35%;
        top: 10%;
        border-radius: 50px;
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
    }

    .bod {
        right: 0;
        left: 0;
        bottom: 0;
        top: 18%;
        background-image: url('./images/banner2.jpg');
        position: absolute;
    }
</style>

</html>