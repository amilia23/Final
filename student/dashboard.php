<html>
<head>
  <title>FSKIK Student Lecturer Appointment System</title>
  <link rel="stylesheet" href="../CSS/bootstrap.min.css" />
  <script
    src="https://kit.fontawesome.com/9a81059403.js"
    crossorigin="anonymous"
  ></script>
  <link rel="stylesheet" href="../CSS/dashboard.css" />
  <link rel="stylesheet" href="../CSS/style.css" />
</head>
<body>
    <div class="area">
    <div class="main"><br>
    <?php 
		session_start();
		echo $_SESSION['name'];
		?>
		<br>You are login as
		<?php 
		echo $_SESSION['role'];
    ?><br><br>
<?php
include_once("../config.php");

$result = mysqli_query($mysqli, "SELECT * FROM student WHERE id= '".$_SESSION['id']."'");
while ($row = mysqli_fetch_array($result)) {
    $name = $row['name'];
    $profile = $row['profile'];
    
}
?>
</div>
<center>
<h1>Welcome <?php echo $name; ?>! </h1>
</center>
  <body>
    <div class="area">
    <nav class="main-menu">
    
    <header class="avatar">
		<img src="profile/<?php echo $profile ?>" alt="">
    <h2><?php echo $name?></h2>  <!-- Call session profile -->
    </header>
      <li class="has-subnav">
            <i class="fa fa-user fa-2x"></i>
            <span class="nav-text"> Student Dashboard </span>
          </a>
        </li>
        <li>
          <a href="dashboard.php">
            <i class="fa fa-home fa-2x"></i>
            <span class="nav-text"> Home </span>
          </a>
        </li>
        <li class="has-subnav">
          <a href="detail.php">
            <i class="fa fa-id-card fa-2x"></i>
            <span class="nav-text"> Student Details </span>
          </a>
        </li>
        <li class="has-subnav">
          <a href="#">
            <i class="fa fa-calendar-plus fa-2x"></i>
            <span class="nav-text"> Booking Appointments </span>
          </a>
        </li>
        <li class="has-subnav">
          <a href="listappointment.php">
            <i class="fa fa-calendar-check fa-2x"></i>
            <span class="nav-text"> View Appointments </span>
          </a>
        </li>
      </ul>
      <ul class="logout">
        <li>
          <a href="../logout.php">
            <i class="fa fa-power-off fa-2x"></i>
            <span class="nav-text"> Logout </span>
          </a>
        </li>
      </ul>
    </nav>
  </body>
</html>