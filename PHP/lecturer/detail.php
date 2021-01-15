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
	$result = mysqli_query($mysqli, "SELECT * FROM lecturer");
	?>

<?php

	$result = mysqli_query($mysqli, "SELECT * FROM lecturer WHERE id= '".$_SESSION['id']."'");
if($result){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if($row)
        $login_session = $row['id'];
?>


<html>

    <center>
	<h1>Lecture Detail</h1><br>
    <div style="margin-left: 250px;">
		<form action = "insertData.php" method  = "POST">  
		<table class="table">
		<tr>
			<td>
                <label for="name">Name</label>
				</td>
                <td width="2%">:</td>
                <td>
                <input type= "text" id="name" name="name" value="<?php echo $row['name']?>" readonly><br><br>
			</td>
		</tr>
		<tr>
			<td><br>
				<label for="email">Email</label>
				</td>
                <td width="2%">:</td>
                <td>
                <input value="<?php echo $row['email'] ?>" type="text" id="email" name="email" class="form-control" placeholder="Update email here">
			</td>
		</tr>
		<tr>
			<td>
				<label for="password">Password</label>
				</td>
                <td width="2%">:</td>
                <td>
                <input  value="<?php echo $row['password'] ?>" type="text" id="password" name="password" class="form-control" placeholder="Update password here">
			</td>
		</tr>
		<tr>
			<td>
				<label for="subject">Subject 1</label>
				</td>
                <td width="2%">:</td>
                <td>
                <input  value="<?php echo $row['subject1'] ?>" type="text" id="subject1" name="subject1" class="form-control" placeholder="Update subject 1 here">
			</td>
		</tr>
		<tr>
			<td>
				<label for="subject">Subject 2</label>
				</td>
                <td width="2%">:</td>
                <td>
                <input  value="<?php echo $row['subject2'] ?>" type="text" id="subject2" name="subject2" class="form-control" placeholder="Update subject 2 here">
			</td>
		</tr>
		<tr>
			<td>
				<label for="phone">No Phone</label>
				</td>
                <td width="2%">:</td>
                <td>
                <input  value="<?php echo $row['phone'] ?>" type="text" id="password" name="phone" class="form-control" placeholder="Update no phone here">
			</td>
		</tr>
		<tr>
			<td>
				<label for="role">Role</label>
				</td>
                <td width="2%">:</td>
                <td>
                <input type= "text" id="role" name="role" value="<?php echo $row['role']?>" readonly><br><br>
			</td>
		</tr>
		<tr>
			<td colspan="3">
			<button type = "submit" class = "btn btn-primary" name = "update">Update</button>
			</td>
		</tr>
		</table>
		 </form>
		 </div>
		 </center>
</body>
</html>
<?php
}
?>