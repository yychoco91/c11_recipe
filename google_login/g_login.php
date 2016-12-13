<?php
session_start();

$redirect_uri_logged_in = 'http://localhost:8888/lfz/c11_recipe/jef_braintree/index.php';

if (isset($_SESSION['user'])) {
    $f_name = $_SESSION['user']['f_name'];
    $l_name = $_SESSION['user']['l_name'];
    $email = $_SESSION['user']['email'];
    header('Location: ' . filter_var($redirect_uri_logged_in, FILTER_SANITIZE_URL));
}
?>
<!DOCTYPE html>
<html>
<head>
<?php require_once "g_login_head.php"; ?>
</head>
<body>
    <div class="container">
        <div class="omb_login">
            <h3 class="omb_authTitle">Login or <a href="../index.php">Home</a></h3>
            <div class="row omb_row-sm-offset-3 omb_socialButtons">
                <div class="col-xs-4 col-sm-2">
                    <button class="btn btn-lg btn-block omb_btn-facebook fb-login-button" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="true"></button>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="g-signin2 btn btn-lg btn-block omb_btn-google" data-onsuccess="onSignIn">
                        <i class="fa fa-google-plus visible-xs"></i>
                        <span class="hidden-xs">Google+</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>