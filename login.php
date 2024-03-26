<?php
include 'header.php';
?>
<!-- Navbar End -->

<div class="container-sm signup ">
  <div class="signup-form d-flex">
    <div class="form-img">
      <img src="img/signup.jpg" class="img-fluid" alt="">
    </div>
    <div class="signup-content">
      <div class="form-content py-4">
        <h3 class=" text-center">coder.com</h3>
        <p class=" text-center">Welcome Back!</p>
        <form action="login.php" method="get">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          </div>
          <input type="submit" value="Login" name="login" class="btn btn-dark text-center my-4" style="width: 100%;">
          <a href="signup.php" class="text-black text-center">OR SIGN UP</a>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
if (isset($_GET['login'])){

  include 'dbconnect.php';
  $email=$_GET['email'];
  $password=$_GET['password'];

  date_default_timezone_set("Asia/Calcutta");
  $datetime = date('Y-m-d H:i:s');

  $query = "insert into login_record(email,password,datetime) values('$email','$password','$datetime')";

  if (mysqli_query($con, $query)) {
    // header('location:user.php');
  //   echo "hello";
}}
?>

<!-- footer  -->

<?php
include 'footer.php';
?>