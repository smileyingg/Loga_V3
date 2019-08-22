<script type="text/javascript">
  // One
  $(document).ready(function() {
    $('.One').on('change', function() {
      $('.One').not(this).prop('checked', false);
      $('#result').html($(this).data("id"));
      if ($(this).is(":checked"))
        $('#result').html($(this).data("id"));
      else
        $('#result').html('Empty...!');
    });
  });

  // Four
  $(document).ready(function() {
    $('.Four').on('change', function() {
      $('.Four').not(this).prop('checked', false);
      $('#result').html($(this).data("id"));
      if ($(this).is(":checked"))
        $('#result').html($(this).data("id"));
      else
        $('#result').html('Empty...!');
    });
  });

  // Q1
  function Q1_C5() {
    var ck = document.getElementById('q1_c5');
    if (ck.checked == true) {
      document.getElementById('txt_q1_c5').style.display = "";
      document.getElementById('txt_q1_c5').focus();
      document.getElementById('txt_q1_c5').required = true;

    } else {
      document.getElementById('txt_q1_c5').style.display = "none";
      document.getElementById('txt_q1_c5').value = "";
      document.getElementById('txt_q1_c5').required = false;
    }
  }

  function Q1() {
    document.getElementById('txt_q1_c5').style.display = "none";
    document.getElementById('txt_q1_c5').value = "";
  }
  // End Q1

  // Q2
  function Q2_C7() {
    var ck = document.getElementById('q2_c7');
    if (ck.checked == true) {
      document.getElementById('txt_q2_c7').style.display = "";
      document.getElementById('txt_q2_c7').focus();
      document.getElementById('txt_q2_c7').required = true;
    } else {
      document.getElementById('txt_q2_c7').style.display = "none";
      document.getElementById('txt_q2_c7').value = "";
      document.getElementById('txt_q2_c7').required = false;
    }
  }
</script>

<!-- ดึงจังหวัดและอำเภอ -->
<!-- นำเข้า Javascript jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>

<script>
  $(function() {

    //เรียกใช้งาน Select2
    // $(".select2-single").select2();

    //ดึงข้อมูล province จากไฟล์ get_data.php
    $.ajax({
      url: "get_data.php",
      dataType: "json", //กำหนดให้มีรูปแบบเป็น Json
      data: {
        show_province: 'show_province'
      }, //ส่งค่าตัวแปร show_province เพื่อดึงข้อมูล จังหวัด
      success: function(data) {

        //วนลูปแสดงข้อมูล ที่ได้จาก ตัวแปร data
        $.each(data, function(index, value) {
          //แทรก Elements ใน id province  ด้วยคำสั่ง append
          $("#province").append("<option value='" + value.id + "'> " + value.name + "</option>");
          $("#amphur").text("");
        });
      }
    });

    //แสดงข้อมูล อำเภอ  โดยใช้คำสั่ง change จะทำงานกรณีมีการเปลี่ยนแปลงที่ #province
    $("#province").change(function() {

      //กำหนดให้ ตัวแปร province มีค่าเท่ากับ ค่าของ #province ที่กำลังถูกเลือกในขณะนั้น
      var province_id = $(this).val();

      $.ajax({
        url: "get_data.php",
        dataType: "json", //กำหนดให้มีรูปแบบเป็น Json
        data: {
          province_id: province_id
        }, //ส่งค่าตัวแปร province_id เพื่อดึงข้อมูล อำเภอ ที่มี province_id เท่ากับค่าที่ส่งไป
        success: function(data) {

          //กำหนดให้ข้อมูลใน #amphur เป็นค่าว่าง
          $("#amphur").text("");

          //วนลูปแสดงข้อมูล ที่ได้จาก ตัวแปร data  
          $.each(data, function(index, value) {

            //แทรก Elements ข้อมูลที่ได้  ใน id amphur  ด้วยคำสั่ง append
            $("#amphur").append("<option value='" + value.id + "'> " + value.name + "</option>");
          });
        }
      });

    });

    //คำสั่ง change จะทำงานกรณีมีการเปลี่ยนแปลงที่  #district 
    $("#district").change(function() {

      //นำข้อมูลรายการ จังหวัด ที่เลือก มาใส่ไว้ในตัวแปร province
      var province = $("#province option:selected").text();

      //นำข้อมูลรายการ อำเภอ ที่เลือก มาใส่ไว้ในตัวแปร amphur
      var amphur = $("#amphur option:selected").text();

    });
  });
  // จบดึงจังหวัดและอำเภอ
  // End Q2
</script>




<script>
  // Q4
  function Q4_C5() {
    var ck = document.getElementById('q4_c5');
    if (ck.checked == true) {
      document.getElementById('txt_q4_c5').style.display = "";
      document.getElementById('txt_q4_c5').focus();
      document.getElementById('txt_q4_c5').required = true;

    } else {
      document.getElementById('txt_q4_c5').style.display = "none";
      document.getElementById('txt_q4_c5').value = "";
      document.getElementById('txt_q4_c5').required = false;
    }
  }

  function Q4() {
    document.getElementById('txt_q4_c5').style.display = "none";
    document.getElementById('txt_q4_c5').value = "";
  }
  // End Q4
  // Q5

  function just2_q5() {
    var allInp = document.getElementsByName('q5[]');
    const MAX_CHECK_ = 2;
    var nbChk = 0;
    for (var i = 0; i < allInp.length; i++) {
      if (allInp[i].type.toLowerCase() == 'checkbox' && allInp[i].checked) {
        nbChk++;

        if (nbChk > MAX_CHECK_) {
          alert("ข้อ 5. เลือกได้เพียง 2 คำตอบค่ะ");
          allInp[i].checked = false;
        }

      }
    }
  }
  //End Q5

  // Q6
  function just2_q6() {
    var allInp = document.getElementsByName('q6[]');
    const MAX_CHECK_ = 2;
    var nbChk = 0;
    for (var i = 0; i < allInp.length; i++) {
      if (allInp[i].type.toLowerCase() == 'checkbox' && allInp[i].checked) {
        nbChk++;

        if (nbChk > MAX_CHECK_) {
          alert("ข้อ 6. เลือกได้เพียง 2 คำตอบค่ะ");
          allInp[i].checked = false;
        }

      }
    }
    var ck = document.getElementById('q6_c4');
    if (ck.checked == true) {
      document.getElementById('txt_q6_c4').style.display = "";
      document.getElementById('txt_q6_c4').focus();
      document.getElementById('txt_q6_c4').required = true;

    } else {
      document.getElementById('txt_q6_c4').style.display = "none";
      document.getElementById('txt_q6_c4').value = "";
      document.getElementById('txt_q6_c4').required = false;
    }
  }

  // End Q6

  // Q7
  function just2_q7() {
    var allInp = document.getElementsByName('q7[]');
    const MAX_CHECK_ = 2;
    var nbChk = 0;
    for (var i = 0; i < allInp.length; i++) {
      if (allInp[i].type.toLowerCase() == 'checkbox' && allInp[i].checked) {
        nbChk++;

        if (nbChk > MAX_CHECK_) {
          alert("ข้อ 7. เลือกได้เพียง 2 คำตอบค่ะ");
          allInp[i].checked = false;
        }

      }
    }
    var ck = document.getElementById('q7_c5');
    if (ck.checked == true) {
      document.getElementById('txt_q7_c5').style.display = "";
      document.getElementById('txt_q7_c5').focus();
      document.getElementById('txt_q7_c5').required = true;
    } else {
      document.getElementById('txt_q7_c5').style.display = "none";
      document.getElementById('txt_q7_c5').value = "";
      document.getElementById('txt_q7_c5').required = false;
    }
    var ck = document.getElementById('q7_c6');
    if (ck.checked == true) {
      document.getElementById('txt_q7_c6').style.display = "";
      document.getElementById('txt_q7_c6').focus();
      document.getElementById('txt_q7_c6').required = true;
    } else {
      document.getElementById('txt_q7_c6').style.display = "none";
      document.getElementById('txt_q7_c6').value = "";
      document.getElementById('txt_q7_c6').required = false;
    }
  }

  // End Q7

  // Q8
  function just2_q8() {
    var allInp = document.getElementsByName('q8[]');
    const MAX_CHECK_ = 2;
    var nbChk = 0;
    for (var i = 0; i < allInp.length; i++) {
      if (allInp[i].type.toLowerCase() == 'checkbox' && allInp[i].checked) {
        nbChk++;

        if (nbChk > MAX_CHECK_) {
          alert("ข้อ 8. เลือกได้เพียง 2 คำตอบค่ะ");
          allInp[i].checked = false;
        }

      }
    }
    var ck = document.getElementById('q8_c4');
    if (ck.checked == true) {
      document.getElementById('txt_q8_c4').style.display = "";
      document.getElementById('txt_q8_c4').focus();
      document.getElementById('txt_q8_c4').required = true;
    } else {
      document.getElementById('txt_q8_c4').style.display = "none";
      document.getElementById('txt_q8_c4').value = "";
      document.getElementById('txt_q8_c4').required = false;
    }
  }
  // End Q8
</script>