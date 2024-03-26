<?php
include 'header.php';
?>

<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('1034286712318-kv0gapfqro1aijq84ed72r4aqqs8nan8.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('Dzq5Xd3olizoZkKjk_SJCWQ1');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/tutorial/php-login-using-google-demo/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>


index.php


<?php

//index.php

//Include Configuration File
include('config.php');

$login_button = '';

//This $_GET["code"] variable value received after user has login into their Google Account redirct to PHP script then this variable value has been received
if (isset($_GET["code"])) {
  //It will Attempt to exchange a code for an valid authentication token.
  $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

  //This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
  if (!isset($token['error'])) {
    //Set the access token used for requests
    $google_client->setAccessToken($token['access_token']);

    //Store "access_token" value in $_SESSION variable for future use.
    $_SESSION['access_token'] = $token['access_token'];

    //Create Object of Google Service OAuth 2 class
    $google_service = new Google_Service_Oauth2($google_client);

    //Get user profile data from google
    $data = $google_service->userinfo->get();

    //Below you can find Get profile data and store into $_SESSION variable
    if (!empty($data['given_name'])) {
      $_SESSION['user_first_name'] = $data['given_name'];
    }

    if (!empty($data['family_name'])) {
      $_SESSION['user_last_name'] = $data['family_name'];
    }

    if (!empty($data['email'])) {
      $_SESSION['user_email_address'] = $data['email'];
    }

    if (!empty($data['gender'])) {
      $_SESSION['user_gender'] = $data['gender'];
    }

    if (!empty($data['picture'])) {
      $_SESSION['user_image'] = $data['picture'];
    }
  }
}

//This is for check user has login into system by using Google account, if User not login into system then it will execute if block of code and make code for display Login link for Login using Google account.
if (!isset($_SESSION['access_token'])) {
  //Create a URL to obtain user authorization
  $login_button = '<a href="' . $google_client->createAuthUrl() . '" class="btn btn-outline-secondary"><img src="img/icon/google.png" class="mx-31" style="width:24px;" alt=""> Sign Up With Google</a>';

}

?>

<!-- Navbar End -->

<div class="container signup ">
  <div class="signup-form d-flex">
    <div class="form-img">
      <img src="img/signup.jpg" class="img-fluid" alt="">
    </div>
    <div class="signup-content">
      <div class="form-content py-4">
        <h3 class=" text-center">coder.com</h3>
        <p class=" text-center">Create An Account</p>
        <div class="container">
          <br />
          <div class="panel panel-default">
            <?php
            if ($login_button == '') {
              echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
              echo '<img src="' . $_SESSION["user_image"] . '" class="img-responsive img-circle img-thumbnail" />';
              echo '<h3><b>Name :</b> ' . $_SESSION['user_first_name'] . ' ' . $_SESSION['user_last_name'] . '</h3>';
              echo '<h3><b>Email :</b> ' . $_SESSION['user_email_address'] . '</h3>';
              echo '<h3><a href="logout.php">Logout</h3></div>';
            } else {
              echo '<div align="center">' . $login_button . '</div>';
            }
            ?>
          </div>
        </div>
        <form action="signup.php" method="post">

        <div class="mb-3" id="name">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName" required>
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3" id="password">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
          </div>

          <input type="submit" value="Create an Account" name="submit" class="btn btn-dark text-center my-4" style="width: 100%;">

        </form>
      </div>
    </div>
  </div>
</div>

<?php
if (isset($_POST['submit'])) {
  include 'dbconnect.php';

  $Name = $_POST['name'];
  $Email = $_POST['email'];
  $Password = $_POST['password'];

  date_default_timezone_set("Asia/Calcutta");
  $Datetime = date('Y-m-d H:i:s');

  $query = "insert into user_record(email,password,datetime,name) values('$Email','$Password','$Datetime','$Name')";

  if (mysqli_query($con, $query)) {
    // header('location:user.php');
  //   echo "hello";
  }
}
?>

<!-- footer  -->
<?php
include 'footer.php';
?>