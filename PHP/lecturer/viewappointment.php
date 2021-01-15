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
	$result = $conn->query("SELECT * FROM student") or die($conn->error());
?>
<div class="main">
<div class = "container text-center">
<h3>List of Appointment</h3>
			<div class = "d-flex table-data">
			<table class ="table table-striped table-light">
				<thead class ="bg-info">
          <tr>
            <th>#</th>
            <th class="col-auto">No Matric</th>
            <th class="col-auto">Student Name</th>
            <th class="col-auto">Student Email</th>
            <th class="col-auto">Student No Phone</th>
            <th class="col-auto">Subject</th>
            <th class="col-auto">Group Class</th>
            <th class="col-auto">Date</th>
            <th class="col-auto">Time</th>
            <th class="col-auto">Reason</th>
            <th class="col-auto">Platform</th>
            <th>Status</th>
            <th>Update</th>
          </tr>
        </thead>

        <?php
    $result = mysqli_query($mysqli, "SELECT studentname FROM booking");
    if($result){
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if($row)
            $login_session = $row['studentname'];

        $i = 1;
         {

    ?>

    <form action = "update.php" method  = "POST">   
      <tr>
         <td>
             <?php
               echo $i;
          ?>
          </td>
          <td>
        <input type = "hidden"  name = "matric" value = "<?php echo $row['matric']; ?>">
        <?php echo $row['matric']; ?>
      </td>
          <td>
        <input type = "hidden"  name = "studentname" value = "<?php echo $row['studentname']; ?>">
        <?php echo $row['studentname']; ?>
      </td>
      <td>
        <input type = "hidden"  name = "studentemail" value = "<?php echo $row['studentemail'];?>">
        <?php echo $row['studentemail'];?>
      </td>
      <td>
        <input type = "hidden"  name = "studentphone" value = "<?php echo $row['studentphone'];?>">
        <?php echo $row['studentphone'];?>
      </td>
      <td>
        <input type = "hidden"  name = "subject" value = "<?php echo $row['subject'];?>">
        <?php echo $row['subject'];?>
      </td>
      <td>
        <input type = "hidden"  name = "groupclass" value = "<?php echo $row['groupclass'];?>">
        <?php echo $row['groupclass'];?>
      </td>
      <td>
        <input type = "hidden"  name = "date" value = "<?php echo $row1['date'];?>">
        <?php echo $row1['date'];?>
      </td>
      <td>
        <input type = "hidden"  name = "time" value = "<?php echo $row1['time']; ?>">
        <?php echo $row1['time']; ?>
      </td>
      <td>
        <input type = "hidden"  name = "reason" value = "<?php echo $row['reason']; ?>">
        <?php echo $row['reason']; ?>
      </td>
      <td>
        <input type = "hidden"  name = "platform" value = "<?php echo $row['platform']; ?>">
        <?php echo $row['platform']; ?>
      </td>
      <td>
         <?php if($row['status'] == "0"){
              echo "Pending"; } 
         ?>
          <br>
          <select name = "status">
          <option value = "1">Approve</option>
          <option value = "2">Reject</option>
         </select>
        </td>
        <td>
            <input type ="submit"  name = "update" value = "update">
        </td>

      </tr> 
    </form>

    <?php
    $i++;
    }}
?>
</table>


        
