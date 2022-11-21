<?php session_start();
include('db_conn.php'); 
	if (isset($_POST['website']))
		{
			$username = mysqli_real_escape_string($con, $_POST['user']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);
			
			$query 		= mysqli_query($con, "SELECT * FROM register WHERE  upswd1='$password' and uname1='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			echo 'Combination';
			
			if ($num_row > 0) 
				{			
					header('location:php/home.php');
					
				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}
  ?>
