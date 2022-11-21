<?php 
include('db_conn.php');
include('session.php'); 

$row=mysqli_fetch_array($result);

 ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="form-wrapper"> 
    <center><h3>Welcome: <?php echo $row['name']; ?> </h3></center>
	 <div class="reminder">
    <p><a href="php/logout.php">Log out</a></p>
  </div>
</div>

</body>
</html>