<?php include('dashboard.php');?>

<head>
  <title>FSKIK Student Lecturer Appointment System</title>
  <link rel="stylesheet" href="../../CSS/bootstrap.min.css" />
  <script
    src="https://kit.fontawesome.com/9a81059403.js"
    crossorigin="anonymous"
  ></script>
  <link rel="stylesheet" href="../../CSS/style.css" />
</head>

<?php
	$conn = new mysqli('localhost', 'root', '', 'final');
    $result = $conn->query("SELECT * FROM student") or die($conn->error());
?>



<?php
$result = mysqli_query($mysqli, "SELECT studentname FROM booking");
if($result){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if($row)
        $login_session = $row['studentname'];

}
 if (isset ($_POST['update'])){
     $matric = $_POST ['matric'];
     $name = $_POST ['studentname'];
     $email = $_POST ['studentemail'];
     $status= 0;


    if ($status == "0"){

        $result = mysqli_query($mysqli, "INSERT into student(matric, name, email, status) VALUES ('$matric', '$name', '$email', '$status')");



                if($result){

                    echo "<script>alert (\"Pending\");
                    window.location.href = \"viewappointment.php\";

                    </script>";
                }
            }  
        }
    else if ($status == "1"){

            $result2 = mysqli_query($mysqli, "INSERT into student(matric, name, email, status) VALUES ('$matric', '$name', '$email', '$status')");

            if($result2){

                echo "<script>alert (\"Approved successfully\");
                window.location.href = \"viewappointment.php\";

                </script>";
            }
        }
    else if ($status == "2"){
        $result2 = mysqli_query($mysqli, "DELETE FROM booking WHERE username = '$matric'");

          
        if ($result2){

            echo "<script>alert (\"Reject successfully\");
            window.location.href = \"viewappointment.php\";

            </script>";

        }
    }

 else {

    echo "<script>alert (\"Failed to update\");
    window.location.href = \"viewappointment.php\";

    </script>";
 }
?>
