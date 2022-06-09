<?php
    //initialize facebook sdk
    require 'vendor/autoload.php';

    //start session
    session_start();
    $fb = new Facebook\Facebook([
    'app_id' => '1050420615831702', //fb app id
    'app_secret' => 'e49cc2039dc06856277e7934e9aea32d',// fb app secret id
    'default_graph_version' => 'v2.5', //graph version
    ]);

    $helper = $fb->getRedirectLoginHelper(); // get fb login helper
    $permissions = ['email']; // optional

    //try to catch exceptions when get access token from facebook
    try {
        if (isset($_SESSION['facebook_access_token'])) {
            $accessToken = $_SESSION['facebook_access_token']; // get access token from session
        } else {
            $accessToken = $helper->getAccessToken(); //get access token from fb login helper
        }
    } catch(Facebook\Exceptions\facebookResponseException $e) {
        // When Graph returns an error
        echo 'Graph returned an error: ' . $e->getMessage(); // print error message
        exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage(); // print error message
        exit;
    }


    if (isset($accessToken)) {
    if (isset($_SESSION['facebook_access_token'])) {
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    } else {
        // getting short-lived access token
        $_SESSION['facebook_access_token'] = (string) $accessToken;
        // OAuth 2.0 client handler
        $oAuth2Client = $fb->getOAuth2Client();
        // Exchanges a short-lived access token for a long-lived one
        $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
        $_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
        // setting default access token to be used in script
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    }

    // redirect the user to the profile page if it has "code" GET variable
    if (isset($_GET['code'])) {
        header('Location: profile.php');
    }

    // getting basic info about user
    try {
        $profile_request = $fb->get('/me?fields=name,first_name,last_name,email');
        $requestPicture = $fb->get('/me/picture?redirect=false&height=500'); //getting user picture
        $picture = $requestPicture->getGraphUser();
        $profile = $profile_request->getGraphUser();
        $fbid = $profile->getProperty('id');           // To Get Facebook ID
        $fbfullname = $profile->getProperty('name');   // To Get Facebook full name
        $fbemail = $profile->getProperty('email');    //  To Get Facebook email
        $fbpic = "<img src='".$picture['url']."' class='img-rounded'/>";
        # save the user information in session variable
        $_SESSION['fb_id'] = $fbid.'</br>';
        $_SESSION['fb_name'] = $fbfullname.'</br>';
        $_SESSION['fb_email'] = $fbemail.'</br>';
        $_SESSION['fb_pic'] = $fbpic.'</br>';
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        // When Graph returns an error
        echo 'Graph returned an error: ' . $e->getMessage();
        // session_destroy();
        // redirecting user back to app login page
        header("Location: index.php");
        exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }
    } else {
        // replace your website URL same as added in the developers.Facebook.com/apps e.g. if you used http instead of https and you used            
        $loginUrl = $helper->getLoginUrl('http://localhost/FB.Login/index.php', $permissions);
        $_SESSION['SERVER_NAME'] = $loginUrl;
    }
?>

<?php 
    //if access token already exists can not redirect to login-form
    if(isset($_SESSION['facebook_access_token']))
    header("Location:profile.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        .login-form {
            width: 340px;
            margin: 50px auto;
            font-size: 15px;
        }
        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }
        .btn {        
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="login-form">
    <form>
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="form-group">
            <a type="submit" class="btn btn-primary btn-block" href=<?php echo $_SESSION['SERVER_NAME']?>>Log in with Facebook</a>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="#">Create an Account</a></p>
</div>
</body>
</html>