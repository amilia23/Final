<?php 
include_once("../config.php"); 
include('dashboard.php'); 
?>

<head>
  <title>FSKIK Student Lecturer Appointment System</title>
  <link rel="stylesheet" href="../CSS/bootstrap.min.css" />
  <script
    src="https://kit.fontawesome.com/9a81059403.js"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../CSS/style.css" />
</head>

<?php
	$result = mysqli_query($mysqli, "SELECT * FROM student");
	?>

<?php

	$result = mysqli_query($mysqli, "SELECT * FROM student WHERE id= '".$_SESSION['id']."'");
if($result){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if($row)
        $login_session = $row['id'];
?>


<html>

    <center>
	<h1>Student Detail</h1><br>
    <div style="margin-left:400px;">
	<fieldset>
		<form action = "insertData.php" method  = "POST" >  
		<table class="table">
		<tr>
			<td>
                <label for="matric">Matric</label>
				</td>
                <td width="2%">:</td>
                <td>
                <input type="text" id="matric" name="matric" size="50" value="<?php echo $row['matric']?>" disabled><br><br>
			</td>
		</tr>
		<tr>
			<td><br>
				<label for="name">Name</label>
				</td>
                <td width="2%">:</td>
                <td>
				<input type="text" id="name" name="name" size="50" value="<?php echo $row['name']?>" disabled><br><br>
			</td>
		</tr>
		<tr>
			<td>
				<label for="email">Email</label>
				</td>
                <td width="2%">:</td>
                <td>
                <input type="text" id="email" name="email" size="50" value="<?php echo $row['email']?>"><br><br>
			</td>
		</tr>
		<tr>
			<td>
				<label for="subject">Password</label>
				</td>
                <td width="2%">:</td>
                <td>
                <input type="text" id="password" name="password" size="50" value="<?php echo $row['password']?>"><br><br>
			</td>
		</tr>
		<tr>
			<td>
				<label for="phone">No Phone</label>
				</td>
                <td width="2%">:</td>
                <td>
				<input type="text" id="phone" name="phone" size="50" value="<?php echo $row['phone']?>"><br><br>
			</td>
		</tr>
		<tr>
			<td colspan="3">
			<button type = "submit" class = "btn btn-primary" name = "update">Update</button>
			</td>
		</tr>
		</table>
		 </form>
		 </fieldset>
		 </center>
</body>
</html>
<?php
}
?>