<?php
	session_start();
  include 'configdb.php';
	$strSQL = "SELECT * FROM member WHERE username ='$_POST[txtUsername]'AND pass = '$_POST[txtPassword]'";
	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_assoc($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["user_id"] = $objResult["user_id"];
			$_SESSION["status"] = $objResult["status"];

			session_write_close();
			
			if($objResult["status"] == "admin")
			{
				header("location:test_admin_page.php");
			}
			else
			{
				header("location:test_form_login.php");
			}
	}
	mysql_close();
?>