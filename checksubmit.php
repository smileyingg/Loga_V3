<?php

if (
  isset($_POST['q1']) && isset($_POST['q2'])  && isset($_POST['q3_province']) && isset($_POST['q3_amphur'])
  && isset($_POST['q4']) && isset($_POST['q5']) &&
  isset($_POST['q6']) && isset($_POST['q7']) && isset($_POST['q8']) && isset($_POST['q9_email']) && isset($_POST['q9_telephone'])
) {
  include 'configdb.php';
  $multiple_Q2 = "";
  for ($i = 0; $i < count($_POST['q2']); $i++) {
    $multiple_Q2 .= $_POST["q2"][$i]." ";
  }
  $multiple_Q5 = "";
  for ($i = 0; $i < count($_POST['q5']); $i++) {
    $multiple_Q5 .= $_POST["q5"][$i]." ";
  }
  $multiple_Q6 = "";
  for ($i = 0; $i < count($_POST['q6']); $i++) {
    $multiple_Q6 .= $_POST["q6"][$i]." ";
  }
  $multiple_Q7 = "";
  for ($i = 0; $i < count($_POST['q7']); $i++) {
    $multiple_Q7 .= $_POST["q7"][$i]." ";
  }
  $multiple_Q8 = "";
  for ($i = 0; $i < count($_POST['q8']); $i++) {
    $multiple_Q8 .= $_POST["q8"][$i]." ";
  }


  $maker_province = $_POST['q3_province'];
  $province = "SELECT province_name  FROM province where province_id=$maker_province";
  $result_province = mysqli_query($conn, $province);
  $province_Q3 = $result_province->fetch_array(MYSQLI_NUM);

  $maker_amphur = $_POST['q3_amphur'];
  $amphur = "SELECT amphur_name	 FROM amphur where amphur_id=$maker_amphur";
  $result_amphur = mysqli_query($conn, $amphur);
  $amphur_Q3 = $result_amphur->fetch_array(MYSQLI_NUM);

  $Answer3 = $province_Q3[0] . $amphur_Q3[0];


  $q1 = $_POST['q1'];
  $q2 = $multiple_Q2;
  $q3 = $Answer3;
  $q4 = $_POST['q4'];
  $q5 = $multiple_Q5;
  $q6 = $multiple_Q6;
  $q7 = $multiple_Q7;
  $q8 = $multiple_Q8;
  $q9_email = $_POST['q9_email'];
  $q9_telephone = $_POST['q9_telephone'];
  $another_Q1 = $_POST['txt_q1_c5'];
  $another_Q2 = $_POST['txt_q2_c7'];
  $another_Q4 = $_POST['txt_q4_c5'];
  $another_Q6 = $_POST['txt_q6_c4'];
  $another_Q7 = $_POST['txt_q7_c5'];
  $another_Q8 = $_POST['txt_q8_c4'];
  
  $sql = "INSERT INTO answers (q1, detail_q1, q2, detail_q2, q3, q4, detail_q4, q5, q6, detail_q6, q7, detail_q7, q8, detail_q8 , email, tel) VALUES 
('$q1', '$another_Q1', '$q2', '$another_Q2', '$q3', '$q4', '$another_Q4', '$q5', '$q6', '$another_Q6', '$q7', '$another_Q7', '$q8', '$another_Q8', '$q9_email', '$q9_telephone')";

  $result = mysqli_query($conn, $sql);


  if ($result === TRUE) {
    echo ('1');
  } else {
    echo ("0");
  }
  $conn->close();
} else {
  echo ('0');
}
