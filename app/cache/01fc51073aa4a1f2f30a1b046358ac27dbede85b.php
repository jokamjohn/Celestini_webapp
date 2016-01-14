<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Celestini Project - Log In</title>

    <!-- Bootstrap -->
    <link href="<?php echo e(assets("/css/bootstrap.min.css")); ?>" rel="stylesheet">
    <link href="<?php echo e(assets("/css/styles.css")); ?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="background-color: #BBDEFB">

<nav id="home_nav" class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="homepage.blade.php">Celestini Project</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

            </ul>

        </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
</nav>


<form id="login_form" style="padding-top: 10px" class="form-horizontal" method="get">
    <div class="row">
        <h2 style="text-align: center; font-family: 'Nunito', sans-serif">LOG IN</h2>
    </div>
    <fieldset>
        <!-- Username input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput"></label>
            <div class="col-md-4">
                <input id="textinput" name="username" type="text" placeholder="Username" class="form-control input-lg"
                       required="">

            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="passwordinput"></label>
            <div class="col-md-4">
                <input id="passwordinput" name="password" type="password" placeholder="Password"
                       class="form-control input-lg" required="">

            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="login-button"></label>
            <div class="col-md-4">
                <button id="login-button" type="submit" name="login" class="btn btn-lg btn-block btn-danger">Sign In
                </button>
            </div>
        </div>
    </fieldset>
</form>

<?php


use Parse\ParseClient;
use Parse\ParseException;
use Parse\ParseSessionStorage;
use Parse\ParseUser;

        session_start();
        
    if (isset($_GET['login'])) {
        /*
         * escape function validates the characters entered in the fields.
         */
        $username = $_GET['username'];
        $password = $_GET['password'];

        // set session storage
        ParseClient::setStorage(new ParseSessionStorage());

        try {
            $user = ParseUser::logIn($username, $password);
            echo $user->getObjectId();
            // Do stuff after successful login.

            echo "<script>window.open('index.php','_self')</script>";
        } catch (ParseException $error) {
            // The login failed. Check error to see why.
            echo "<script>alert('Wrong username or password')</script>";
        }

        $currentUser = ParseUser::getCurrentUser();

        print_r($currentUser);
    }
    ?>

?>
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo e(assets("/js/bootstrap.min.js")); ?>"></script>
</body>
</html>