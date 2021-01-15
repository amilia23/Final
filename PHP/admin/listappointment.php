<?php include('dashboard.php'); ?>

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
	$result = $conn->query("SELECT * FROM booking") or die($conn->error());
?>
<div class="main">
<div class = "container text-center">
<h3>List Appointments</h3>
			<div class = "d-flex table-data ">
			<table class ="table table-striped table-light table-sm text-sm">
				<thead class ="bg-info">
					<tr>
						<th>#</th>
						<th class="col-auto">Lecturer Name</th>
						<th class="col-auto">Lecturer Email</th>
						<th  class="col-md-auto">Subject</th>
                        <th  class="col-md-auto">Group</th>
                        <th>Student Name</th>
                        <th>Student Phone</th>
						<th>Student Email</th>
						<th>Date</th>
                        <th>Time</th>
                        <th>Reason</th>
						<th>Platform</th>
						<th colspan="2">Operation</th>
					</tr>
				</thead>
				
			<?php 
			$i = 0;
				while ($row = $result->fetch_array()):
					$lecturername = $row['lecturername']; 
                    $lectureremail = $row['lectureremail'];
                    $subject = $row['subject'];
                    $groupclass = $row['groupclass'];
                    $studentname = $row['studentname']; 
					$studentphone = $row['studentphone']; 
                    $studentemail = $row['studentemail'];
                    $date = $row['date']; 
                    $time = $row['time']; 
                    $reason = $row['reason']; 
                    $platform = $row['platform']; 
			$i++;
			?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $lecturername; ?></td>
						<td><?php echo $lectureremail ?></td>
                        <td><?php echo $subject; ?></td>
                        <td><?php echo $groupclass; ?></td>
						<td><?php echo $studentname ?></td>
                        <td><?php echo $studentphone; ?></td>
                        <td><?php echo $studentemail; ?></td>
						<td><?php echo $date ?></td>
                        <td><?php echo $time; ?></td>
                        <td><?php echo $reason ?></td>
                        <td><?php echo $platform; ?></td>
                        
                <td><button title="Update" type="button" class="btn btn-success" aria-label="Left Align" onclick="location.href='updateDataAdmin.php?id=<?php echo $row['id']?>'">
				<i class="fas fa-pencil-alt" aria-label="true"></i>
				</button>
				<td><button title="Delete" type="button" class="btn btn-danger" aria-label="Left Align" onclick="location.href='delete.php?id=<?php echo $row['id']?>'">
					<i class="fas fa-trash-alt" aria-label="true"></i>
				</button>
			    </td>
					</tr>
				<?php endwhile; ?>
			</table>
		</div>
</div>
<style>
td {
    max-width: 80px !important;
    
        text-overflow: ellipsis;

    
}
.table{
  font-size: 12px;
}
</style>