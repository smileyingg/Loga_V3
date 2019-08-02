<?php
	session_start();
	if($_SESSION['user_id'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['status'] != "admin")
	{
		echo "This page for Admin only!";
		exit();
	}	
?>
<!DOCTYPE html>
<html>
<?php
include('head.php');
include('header.php');
include('configdb.php');
?>
<style>
  .h-form .form-body .h-form-label {
    height: auto !important;
  }
</style>

<body>
  <?php

  $query = "SELECT * FROM answers order by id desc";
  $result = mysqli_query($conn, $query);
  ?>

  <div style="padding:10px;" align="right">
    <button id="exportExcel_Button" type="button" class="btn btn-success" onclick="exportExcel()">Export Excel</button>
    <a href="admin_login.php" id="logout_Button" value="submit" class="btn btn-outline-success">Logout</a>
  </div>

  <div style="overflow-x:auto;padding:10Px;">
    <table class="table table-hover table-striped table-bordered table-sm" id="dtHorizontalVerticalExample">
      <!-- หัวข้อตาราง -->
      <tr align='center' bgcolor='#CCCCCC'>
        <td>id</td>
        <td>เวลาที่กรอกข้อมูล</td>
        <td>ข้อ 1</td>
        <td>รายละเอียดข้อ 1</td>
        <td>ข้อ 2</td>
        <td>รายละเอียดข้อ 2</td>
        <td>ข้อ 3</td>
        <td>ข้อ 4</td>
        <td>รายละเอียดข้อ 4</td>
        <td>ข้อ 5</td>
        <td>ข้อ 6</td>
        <td>รายละเอียดข้อ 6</td>
        <td>ข้อ 7</td>
        <td>รายละเอียดข้อ 7</td>
        <td>ข้อ 8</td>
        <td>รายละเอียดข้อ 8</td>
        <td>Email</td>
        <td>Telephone</td>
        <td>ลบข้อมูล</td>
      </tr>

      <?php
      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] .  "</td> ";
        echo "<td>" . $row["date_time"] .  "</td> ";
        echo "<td>" . $row["q1"] .  "</td> ";
        echo "<td>" . $row["detail_q1"] .  "</td> ";
        echo "<td>" . $row["q2"] .  "</td> ";
        echo "<td>" . $row["detail_q2"] .  "</td> ";
        echo "<td>" . $row["q3"] .  "</td> ";
        echo "<td>" . $row["q4"] .  "</td> ";
        echo "<td>" . $row["detail_q4"] .  "</td> ";
        echo "<td>" . $row["q5"] .  "</td> ";
        echo "<td>" . $row["q6"] .  "</td> ";
        echo "<td>" . $row["detail_q6"] .  "</td> ";
        echo "<td>" . $row["q7"] .  "</td> ";
        echo "<td>" . $row["detail_q7"] .  "</td> ";
        echo "<td>" . $row["q8"] .  "</td> ";
        echo "<td>" . $row["detail_q8"] .  "</td> ";
        echo "<td>" . $row["email"] .  "</td> ";
        echo "<td>" . $row["tel"] .  "</td> ";
        //ลบข้อมูล
        echo "<td style='text-align: center;'><a href='admin_del.php?id=$row[0]' onclick=\"return confirm('คุณต้องการลบข้อมูลแถวนี้ใช่หรือไม่? !!!')\"><img src='assets/images/bin.png' style='width:25px;heigth:25px;' /></a></td> ";
        echo "</tr>";
      }
      echo "</table>";
      mysqli_close($conn);

      ?>
  </div>
  <script>
    $(document).ready(function() {
      $('#dtHorizontalExample').DataTable({
        "scrollX": true
      });
      $('.dataTables_length').addClass('bs-select');
    });
  </script>

  <style>
    .dtHorizontalExampleWrapper {
      max-width: 600px;
      margin: 0 auto;
    }

    #dtHorizontalExample th,
    td {
      white-space: nowrap;
    }

    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_desc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:before {
      bottom: .5em;
    }
  </style>


  <script>
    function exportExcel() {
      window.location = './exportExcel.php';
    }//  return confirm('คุณต้องการลบข้อมูลแถวนี้ใช่หรือไม่? !!!');

  </script>


</body>

</html>