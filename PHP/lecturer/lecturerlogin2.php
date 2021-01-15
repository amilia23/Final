<?php
include("../config.php");
session_start();

$error ="";

if (isset($_POST['login'])) {
    $email =$_POST['email'];
    $password =$_POST['password'];

    $sql = "SELECT id FROM lecturer WHERE email = '$email' and password ='$password'";
    $result = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['lecturerlogin'] = $email;
        header("location: dashboard.php");
    } else {
        $error = " Your Email or Password is invalid";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>FSKIK Student Lecturer Appointment System</title>
    <link rel="stylesheet" href="../../CSS/bootstrap.min.css" />
    <link rel="stylesheet" href="../../CSS/login.css" />
    <script src="https://code.jquery.com/jquery.js"></script>
  </head>
    
<body>
 <div>
      <img src="../../images/banner.png" alt="banner" width="100%" />
    </div>
    <div class="container">
    <div class="box-login">
        <div class="header-box">Lecturer Login</div>
        <br><br>
        <center>
            <form action="" method="post">
                Email :<br>
                <input type="email" name="email" /><br>
                Password :<br>
                <input type="password" name="password" /><br><br>
                <input type="submit" name="login" value="Login" />
            </form>
            
        </center>
    </div>
</div>
</body>
</html>