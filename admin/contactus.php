<?php include('dashboard.php'); ?>

<head>
  <title>FSKIK Student Lecturer Appointment System</title>
  <link rel="stylesheet" href="../CSS/bootstrap.min.css" />
  <script
    src="https://kit.fontawesome.com/9a81059403.js"
    crossorigin="anonymous"
  ></script>
  <link rel="stylesheet" href="../CSS/style.css" />
</head>

<?php
	$conn = new mysqli('localhost', 'root', '', 'final');
	$result = $conn->query("SELECT * FROM contactus") or die($conn->error());
?>
<div class="main">
<div class = "container text-center">
		<div class = "d-flex table-data">
		<table class ="table table-striped table-light">
			<thead class ="bg-info">
				 <tr>
                    <th>#</th>
				 	<th>Name</th>
	                <th>Email</th>
	                <th>Message</th>
	                <th colspan="1">Action</th>
           		</tr>
			</thead>
			
        <?php 
        $i = 0;
            while ($row = $result->fetch_assoc()): 
            $i++;   ?>
				<tr>
                    <td><?php echo $i; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['message']; ?></td>
       
     

				<form action="" method = "post">
					<input type="hidden" name="name" value="<?php echo $row['name']?>">
					<td> <input type="submit" name="delete" class="btn btn-danger" value="Delete" ></td>
				</form>
				</tr>
			<?php endwhile; ?>
		</table>
	</div>
</div>
<?php

	function pre_r( $array ) {
		echo '<pre>';
		print_r($array);
		echo '</pre>';
}
?>
<?php
include '../config.php';

if(isset($_POST['delete']))
{
	$name = $_POST['name'];

	$sql = "DELETE FROM contactus WHERE name='$name' ";
	$sql_run = mysqli_query($conn, $sql);

	if($sql_run)
	{
		echo "<script type=\"text/javascript\">window.alert('Message deleted.'); window.location.href = 'contactus.php';</script>";  
	}
	else
	{
		echo "<script type=\"text/javascript\">window.alert('Data not deleted.'); window.location.href = 'contactus.php';</script>"; 

	}
}
?>