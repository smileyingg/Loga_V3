<?php
require "check_login.php";
include('configdb.php');
$id = $_REQUEST['id'];
$query = "DELETE FROM answers WHERE id=$id";
$result = mysqli_query($conn, $query);
if (!$_SESSION["user_id"]) {
  Header("Location: admin_page.php");
}
