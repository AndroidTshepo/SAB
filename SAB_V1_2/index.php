<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html >
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http - equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> SAB</title>
    <!--Fontawesome Core Css-->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <!--Bootstrap Core CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!--Custom Fonts-->
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <link
        href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!--Plugin CSS-->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!--Custom CSS-->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/sab.css">

    <!--Material Design for Bootstrap-->
    <link href="dist/css/roboto.min.css" rel="stylesheet">
    <link href="dist/css/material-fullpalette.min.css" rel="stylesheet">
    <link href="dist/css/ripples.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

    <!-- External ajax script -->
    <script type="text/javascript" src="js/ajax/data_processor.js"></script>


    <!-- External customised jquery script -->
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/app2.js"></script>

    <!-- jquery -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
</head>
<?php
if ($_SESSION['id'] > 0){
?>
<script>
    $(document).ready(function () {
        $("#signUP").hide();
        $("#sinIn").hide();

        $("#abt").show();
        $("#svc").show();
        $("#lgt").show();
    });
</script>
<body id="page-top">

<!--navigation-->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!--Brand and toggle get grouped for better mobile display-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data - toggle="collapse"
                    data - target="#bs-example-navbar-collapse-1">
                <span class="sr-only"> Toggle navigation </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">sab</a>

        </div>

        <!--Collect the nav links, forms, and other content for toggling-->
        <!--<div class="collapse navbar-collapse" id = "bs-example-navbar-collapse-1" > -->
        <ul class="nav navbar-nav navbar-right collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <li id="abt">
                <a class="page-scroll btn btn-danger btn-sm-small" href="#about"> About us </a>
            </li>
            <li id="svc">
                <a class="page-scroll btn btn-danger btn-sm-small" href="#services"> Services</a>
            </li>

            <li id="lgt">
                <a class="page-scroll btn btn-danger btn-sm-small" href="php/logout.php"> Logout</a>
            </li>
            <li id="signUP">
                <a class="btn btn-danger btn-sm-small" data-toggle="modal" href="#reg"> Sign up <i
                        class="fa fa-lock"></i></a>
            </li>
            <li id="sinIn">
                <a class="btn btn-danger btn-sm-small" data-toggle="modal" href="#log"> Login <i
                        class="fa fa-lock"></i></a>
            </li>
        </ul>
        <!--   </div > -->

    </div>

</nav>

<header>
    <div class="header-content">
        <div class="header-content-inner">
            <h1> Save As you Buy </h1>
            <hr>
            <h3><p>

                <div style="color:orangered"> The application that allows you to reach your financial goals as you spend
                    your money
                </div>
                </p ></h3>
            <a href="#about" id="main-btn" class="btn btn-primary btn-xl page-scroll"> Find Out More </a>
        </div>
    </div>
</header>

<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading"> We've got what you need!</h2>
                <hr class="light">
                <p class="text-faded">SAB app help you to save for the future while spending your money on daily and
                    monthly expenses(etc airtime,data,electricity,).Using Sab to purchases airtime,data,pay electricity
                    and water bill 10% of the amount spent goes to your active target savings account</p>
                <a href="#" class="btn btn-white btn-xl">sign up</a>
            </div>
        </div>
    </div>
</section>

<!--Service section-->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">At Your Service</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-shopping-cart wow bounceIn text-primary"></i>

                    <h3>Purchase</h3>

                    <p class="text-muted">Purchase airtime, water and electricity and save at the same time.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <a href="atms.html"><i class="fa fa-4x fa-street-view wow bounceIn text-primary"
                                           data-wow-delay=".1s"></i></a>

                    <h3>Find ABSA ATM</h3>

                    <p class="text-muted">You can find the nearest ATM to your current location, with a single
                        click.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-gift wow bounceIn text-primary" data-wow-delay=".2s"></i>

                    <h3>Paperbag</h3>

                    <p class="text-muted">Do your smart shopping list using paper bag.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-money wow bounceIn text-primary" data-wow-delay=".3s"></i>

                    <h3>Monitor savings</h3>

                    <p class="text-muted">Know how much your futures is worth as you make a purchase.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End service section -->


<!--footer goes here -->
<section id="contact" class="bg-dark">
    <div class="container">
        <div class="row">
            <h2 class="section-heading text-center">SAB</h2>
            <hr class="primary">


        </div>
        <div class="row text-center">

            <p class="links">
                <a href="#">About sab</a> | <a href="#">Terms of service</a> | <a href="#">Privacy Policy</a>
            </p>

        </div>
        <div class="row text-center">
            <a href="#" class="social"><i class="fa fa-2x fa-facebook-square"></i></a>
            <a href="#" class="social"><i class="fa fa-2x fa-twitter-square"></i></a>
            <a href="#" class="social">
                <li class="fa fa-2x fa-google-plus-square"></li>
            </a>
        </div>
        <div class="footer-bottom">

            <div class="text-center">
                © Copyright 2015 by <a style="cursor: pointer"> Devbytes</a>.All Rights Reserved.
            </div>
        </div>

    </div>
</section>
<!-- Footer section Ends here -->

<?php
} else {
?>
<script>
    $(document).ready(function () {
        $("#signUP").show();
        $("#sinIn").show();

        $("#abt").hide();
        $("#svc").hide();
        $("#lgt").hide();
    });

</script>
<body id="page-top">

<!--//navigation-->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!--Brand and toggle get grouped for better mobile display-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data - toggle="collapse"
                    data - target="#bs-example-navbar-collapse-1">
                <span class="sr-only"> Toggle navigation </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">sab</a>

        </div>

        <!--Collect the nav links, forms, and other content for toggling-->
        <!--<div class="collapse navbar-collapse" id = "bs-example-navbar-collapse-1" > -->
        <ul class="nav navbar-nav navbar-right collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <li id="abt">
                <a class="page-scroll btn btn-danger btn-sm-small" href="#about"> About us </a>
            </li>
            <li id="svc">
                <a class="page-scroll btn btn-danger btn-sm-small" href="#services"> Services</a>
            </li>

            <li id="lgt">
                <a class="page-scroll btn btn-danger btn-sm-small" href="#logout"> Logout</a>
            </li>
            <li id="signUP">
                <a class="btn btn-danger btn-sm-small" data-toggle="modal" href="#reg"> Sign up <i
                        class="fa fa-lock"></i></a>
            </li>
            <li id="sinIn">
                <a class="btn btn-danger btn-sm-small" data-toggle="modal" href="#log"> Login <i
                        class="fa fa-lock"></i></a>
            </li>
        </ul>
        <!--   </div > -->

    </div>

</nav>

<header>
    <div class="header-content">
        <div class="header-content-inner">
            <h1> Save As you Buy </h1>
            <hr>
            <h3><p>

                <div style="color:orangered"> The application that allows you to reach your financial goals as you spend
                    your money
                </div>
                </p ></h3>
            <a href="#about" id="main-btn" class="btn btn-primary btn-xl page-scroll"> Find Out More </a>
        </div>
    </div>
</header>

<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading"> We've got what you need!</h2>
                <hr class="light">
                <p class="text-faded">SAB app help you to save for the future while spending your money on daily and
                    monthly expenses(etc airtime,data,electricity,).Using Sab to purchases airtime,data,pay electricity
                    and water bill 10% of the amount spent goes to your active target savings account</p>
                <a href="#" class="btn btn-white btn-xl">sign up</a>
            </div>
        </div>
    </div>
</section>

<!--Service section-->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">At Your Service</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-shopping-cart wow bounceIn text-primary"></i>

                    <h3>Purchase</h3>

                    <p class="text-muted">Purchase airtime, water and electricity and save at the same time.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <a href="atms.html"><i class="fa fa-4x fa-street-view wow bounceIn text-primary"
                                           data-wow-delay=".1s"></i></a>

                    <h3>Find ABSA ATM</h3>

                    <p class="text-muted">You can find the nearest ATM to your current location, with a single
                        click.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-gift wow bounceIn text-primary" data-wow-delay=".2s"></i>

                    <h3>Paperbag</h3>

                    <p class="text-muted">Do your smart shopping list using paper bag.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-money wow bounceIn text-primary" data-wow-delay=".3s"></i>

                    <h3>Monitor savings</h3>

                    <p class="text-muted">Know how much your futures is worth as you make a purchase.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End service section -->


<!--footer goes here -->
<section id="contact" class="bg-dark">
    <div class="container">
        <div class="row">
            <h2 class="section-heading text-center">SAB</h2>
            <hr class="primary">


        </div>
        <div class="row text-center">

            <p class="links">
                <a href="#">About sab</a> | <a href="#">Terms of service</a> | <a href="#">Privacy Policy</a>
            </p>

        </div>
        <div class="row text-center">
            <a href="#" class="social"><i class="fa fa-2x fa-facebook-square"></i></a>
            <a href="#" class="social"><i class="fa fa-2x fa-twitter-square"></i></a>
            <a href="#" class="social">
                <li class="fa fa-2x fa-google-plus-square"></li>
            </a>
        </div>
        <div class="footer-bottom">

            <div class="text-center">
                © Copyright 2015 by <a style="cursor: pointer"> Devbytes</a>.All Rights Reserved.
            </div>
        </div>

    </div>
</section>
<!-- Footer section Ends here -->

<?php
}
?>

<!-- Modals section goes here -->
<!-- login modal -->
<div id="loginModal">
    <div class="modal fade" id="log">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
                            class="fa fa-times"></i>
                    </button>
                    <div class="modal-title">
                        <h4 class="modal-title">Login <i class="fa fa-unlock-alt"></i></h4>

                    </div>
                </div>
                <div class="modal-body">
                    <div id="msg"></div>
                    <form id="form-login" class="form-horizontal" method="post" action="php/login.php">
                        <label>username</label>
                        <input type="email" class="form-control" id="username" name="username"
                               placeholder="email@example.com"
                               required>

                        <label>password</label>
                        <input type="password" class="form-control" id="password" required="" name="password" required>


                        <button type="submit" name="login" id="login" value="submit" class="btn btn-success pull-right">
                            login
                        </button>
                        <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">cancel</button>


                    </form>

                    <div class="modal-footer">


                        <button class="btn btn-xs btn-warning pull-left" id="forgot_pass">forgot password</button>
                        <form id="FP_main" action="php/recover_password.php" method="post">
                            <div id="forgot"
                                 class="form-horizontal col-lg-8 col-md-8 col-sm-8 col-lg-offset-0 col-md-offset-0 col-sm-offset-0">
                                <input type="email" class="form-control col-md-6" name="reset-email" id="reset-email"
                                       placeholder="Enter your email address here!." required>


                                <button type="submit" id="submit-email" name="forgot" class="btn btn-xs btn-success">
                                    sent
                                </button>


                            </div>
                            <div id="fp_msg" class="col-lg-4 col-md-4 col-sm-4 "></div>
                        </form>
                    </div>


                </div>


            </div>
        </div>
    </div>
</div>


<!-- Registration modal -->

<div class="registration-modal modal fade" id="reg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="data">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i>
                </button>
                <h3 class="modal-tile">Customer registration <i class="fa fa-user-plus"></i></h3>

            </div>
            <div class="modal-body">
                <form id="form" class="form-horizontal" method="post" action="php/register.php">
                    <div id="error"></div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="first_name">First Name</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" id="first_name" name="first_name"
                                   placeholder="First Name" required/>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="last_name">Last Name</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" id="last_name" name="last_name"
                                   placeholder="Last Name" required/>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="email">Email Address</label>

                        <div class="col-md-6">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address"
                                   required/>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="acc_number">Account number</label>

                        <div class="col-md-6">
                            <input type="number" class="form-control" id="acc_number" name="account"
                                   placeholder="absa account number" required/>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="pin">Pin</label>

                        <div class="col-md-2">
                            <input type="number" class="form-control" id="pin" name="pin" placeholder="" maxlength="5"
                                   required/>

                        </div>


                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="password">Password</label>

                        <div class="col-md-5">
                            <input type="password" name="password" class="form-control" id="pass" maxlength="8"
                                   required/>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="pconfirm">Confirm password</label>

                        <div class="col-md-5">
                            <input type="password" class="form-control" name="pconfirm" id="pconfirm" length="8"
                                   required/>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox col-md-6 col-md-offset-3">
                            <label>
                                <input type="checkbox" required>I have read,understand and Agree with <a href="#">terms
                                    of service</a> and <a href="#">privacy policy</a>
                            </label>
                        </div>


                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <button type="button" class="btn btn-danger pull-left" name="cancel" data-dismiss="modal">
                                Cancel
                            </button>
                            <button type="submit" name="submit" value="submit" class="btn btn-success pull-right">sign
                                up
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>

</div>
<!-- Registration Modal Ends here -->

<!-- Internal Jquery script for validation -->
<script>
    $(document).ready(function () {
        $('#form').validate({
            rules: {
                first_name: {
                    minlength: 3,
                    maxlength: 15,
                    required: true
                },
                last_name: {
                    minlength: 3,
                    maxlength: 15,
                    required: true
                },
                email: {
                    email: true
                },
                account: {
                    minlength: 10,
                    maxlength: 10,
                    required: true
                },
                pin: {
                    minlength: 4,
                    maxlength: 4,
                    required: true


                },
                password: {
                    minlength: 6,
                    maxlength: 8,
                    required: true
                },
                pconfirm: {
                    equalTo: "#pass",
                    required: true

                }

            },
            messages: {
                pconfirm: "Enter the same password as above"
            },

            highlight: function (element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function (element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            errorElement: 'span',
            errorClass: 'help-block',
            errorPlacement: function (error, element) {
                if (element.parent('.input-group').length) {
                    error.insertAfter(element.parent());
                } else {
                    error.insertAfter(element);
                }
            }
        });


    });

</script>

<!--Ends here--->

</html>