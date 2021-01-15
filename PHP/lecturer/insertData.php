<?php 
include_once("../config.php"); 
include('dashboard.php'); 
?>
<head>
  <title>FSKIK Student Lecturer Appointment System</title>
  <link rel="stylesheet" href="../../CSS/bootstrap.min.css" />
  <script
    src="https://kit.fontawesome.com/9a81059403.js"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../../CSS/style.css" />
</head>

<?php
	$result = mysqli_query($mysqli, "SELECT * FROM lecturer") or die($conn->error());
	?>

<?php

$result = mysqli_query($mysqli, "SELECT * FROM lecturer WHERE id= '".$_SESSION['id']."'");
if($result){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if($row) {
        $login_session = $row['id'];
    }

        //receive input from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    

    //send it to the database---insert into
    $sql = "UPDATE lecturer SET name='$name', email='$email', password = '$password', subject1 = '$subject', phone='$phone', role = '$role' WHERE id='$login_session'";
    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        echo 
        "<script>
        alert ('Data has been updated');
        window.location.href='dashboard.php';
        </script>";
    } else { 
        echo 
        "<script>
        alert ('Problem to update data');
        window.location.href='detail.php';
        </script>";
    }
}
?>

