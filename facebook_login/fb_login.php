<?php
# 1. Installation
    # a. Start Session
    session_start();
    # b. Include the auto-load file
    require_once __DIR__.'/../vendor/autoload.php';
    # c. FB object with parameters
    $fb = new \Facebook\Facebook{[
        'app_id'=> 'Put in app id',
        'app_secret' => 'put app secret here',
        'default_graph_version' => 'v2.5'
    ]};
    $redirect = 'YOUR_REDIRECT_PATH';

# 2. Base code
    $helper = $fb->getRedirectLoginHelper();
    try {
        $access_token = $helper->getAccessToken();
    } catch (Facebook\Exceptions\FacebookResponseException $e) {
        //When Graph returns an error
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        //When validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }

    # a. Print login url if no access code
if(!isset($access_token)){
    $permission = ['email'];
    $login_url = $helper->getLoginUrl($redirect,$permission);
    echo '<a href="'.$login_url.'">Login with Facebook!<a/>';
}
    # b. Else retrieve the data
else {
    $fb->setDefaultAccessToken($access_token);
    $fb->get('/me?fields=email,name');
}