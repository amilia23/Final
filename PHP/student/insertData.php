<?php include('dashboard.php'); ?>

<head>
  <title>FSKIK Student Lecturer Appointment System</title>
  <link rel="stylesheet" href="../../CSS/bootstrap.min.css" />
  <script
    src="https://kit.fontawesome.com/9a81059403.js"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../../CSS/style.css" />
</head>

<?php
	$conn = new mysqli('localhost', 'root', '', 'final');
	$result = $conn->query("SELECT * FROM student") or die($conn->error());
	?>

<?php

$result = mysqli_query($mysqli, "SELECT * FROM student WHERE id= '".$_SESSION['id']."'");
if($result){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if($row) {
        $login_session = $row['id'];
    }

        //receive input from the form
    $matric = $_POST['matric'];
    $name = $_POST ['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    

    //send it to the database---insert into
    $result = mysqli_query($mysqli, "UPDATE student SET matric= '$matric', name='$name', email='$email', password = '$password', phone='$phone', role = '$role'" " WHERE id='$login_session'");
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

