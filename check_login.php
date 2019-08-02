<?php
session_start();
include 'configdb.php';
$strSQL = "SELECT * FROM member WHERE username ='$_POST[txtUsername]'AND pass = '$_POST[txtPassword]'";
$objQuery = mysqli_query($conn, $strSQL);
$objResult = mysqli_fetch_assoc($objQuery);
if (!$objResult) {
	echo "<script type=\"text/javascript\">";
	echo "alert(\"Username and Password Incorrect!\");";
	echo "window.history.back();";
	echo "</script>";
	exit();
} else {
	$_SESSION["user_id"] = $objResult["user_id"];
	$_SESSION["status"] = $objResult["status"];
	if ($objResult["status"] == "admin") {
		header("location:admin_page.php");
	} else {
		header("location:admin_login.php");
	}
}
?>