<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
<?php include 'script_choice.php'; ?>
<style>
  .h-form .form-body .h-form-label {
    height: auto !important;
  }
</style>

<body>
  <?php include 'header.php'; ?>
  <div class="container-fluid">
    <div class="col s12">
      <h4 style="text-align:center;">ร่วมทำแบบสำรวจเพียง 3 นาที ลุ้นเข้าร่วมงานสัมมนาฟรี!</h4>
      <h4 style="text-align:center;">สัมมนาเพื่อกิจการเกี่ยวกับธุรกิจความงาม</h4><br />
      <h5 style="margin-left:20px;">โปรดเลือกเพียงคำตอบที่ตรงกับสภาพกิจการท่านมากที่สุด เพียงคำตอบเดียว</h5>
      <div class="card">

        <!-- Start Form -->
        <iframe id="iframe" name="iframe" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
        <form id="form_survey" method="POST">

          <!-- Q1. -->
          <div class="card-header">
            <h5>1. บทบาทของท่านคือ <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q1. -->
          <div class="card-body">
            <label class="container">
              <p>เจ้าของร้านมีร้านของตนเอง</p>
              <input class="One" type="checkbox" id="q1_c1" name="q1" value="เจ้าของร้านมีร้านของตนเอง" onclick="Q1()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>เจ้าของร้านกำลังวางแผนจะเปิดร้าน</p>
              <input class="One" type="checkbox" id="q1_c2" name="q1" value="เจ้าของร้านกำลังวางแผนจะเปิดร้าน" onclick="Q1()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ช่างประจำร้าน</p>
              <input class="One" type="checkbox" id="q1_c3" name="q1" value="ช่างประจำร้าน" onclick="Q1()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>พนักงานประจำร้าน</p>
              <input class="One" type="checkbox" id="q1_c4" name="q1" value="พนักงานประจำร้าน" onclick="Q1()">
              <span class="checkmark"></span>
            </label>
            <label class="container controls form-inline">
              <input class="One" type="checkbox" id="q1_c5" name="q1" value="อื่นๆ (โปรดระบุ)" onclick="Q1_C5()">
              <span class="checkmark"></span>
              <span class="label">อื่นๆ (โปรดระบุ)</span>
              <input type="text" class="form-control input-small" name="txt_q1_c5" id="txt_q1_c5" style="display:none">

            </label>
          </div>
          <!-- End Q1. -->

          <!-- Q2. -->
          <div class="card-header">
            <h5>2. ประเภทบริการ (เลือกได้มากกว่า 1 ข้อ) <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q2. -->
          <div class="card-body">
            <label class="container">
              <p>ร้านทำเล็บ</p>
              <input class="moreOne" type="checkbox" id="q2_c1" name="q2[]" value="ร้านทำเล็บ">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ร้านทำผม</p>
              <input class="moreOne" type="checkbox" id="q2_c2" name="q2[]" value="ร้านทำผม">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ทำสปา นวดหน้า/นวดตัว</p>
              <input class="moreOne" type="checkbox" id="q2_c3" name="q2[]" value="ทำสปา นวดหน้า/นวดตัว">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ต่อขนตา</p>
              <input class="moreOne" type="checkbox" id="q2_c4" name="q2[]" value="ต่อขนตา">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>แว็กซ์ขน</p>
              <input class="moreOne" type="checkbox" id="q2_c5" name="q2[]" value="แว็กซ์ขน">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ร้านสัก/เพ้นท์คิ้ว</p>
              <input class="moreOne" type="checkbox" id="q2_c6" name="q2[]" value="ร้านสัก/เพ้นท์คิ้ว">
              <span class="checkmark"></span>
            </label>
            <label class="container controls form-inline">
              <input class="moreOne" type="checkbox" id="q2_c7" name="q2[]" value="อื่นๆ (โปรดระบุ)" onclick="Q2_C7()">
              <span class="checkmark"></span>
              <span class="label">อื่นๆ (โปรดระบุ)</span>
              <input type="text" class="form-control input-small" name="txt_q2_c7" id="txt_q2_c7" style="display:none">
            </label>
          </div>
          <!-- End Q2. -->

          <!-- Q3. -->
          <div class="card-header">
            <h5>3. ทำเลที่ตั้ง <span class="required" style="color:red;">*</span></h5>
          </div>

           <!-- Choice Q3. -->
          <div class="card-body">
            <div class="container">
              <p>กรุณาเลือกจังหวัด</p>
              <div class="col-md-5">
                <div class="form-group">
                  <!-- แสดงตัวเลือก จังหวัด -->
                  <select class="form-control select2-single" id="province" name="q3_province">
                    <option id="province_list"> -- กรุณาเลือกจังหวัด --</option>
                  </select>
                </div>
              </div>

              <p>กรุณาเลือกอำเภอ</p>
              <div class="col-md-5">
                <div class="form-group">
                  <!-- แสดงตัวเลือก อำเภอ -->
                  <select class="form-control select2-single" id="amphur" name="q3_amphur">
                    <option id="amphur_list"> -- กรุณาเลือกอำเภอ --</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <!-- End Q3. -->
          
          <!-- Q4. -->
          <div class="card-header">
            <h5>4. สถานที่ <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q4. -->
          <div class="card-body">
            <label class="container">
              <p>ในห้างสรรพสินค้า/ศูนย์การค้า/คอมมูนิตี้มอลล์/ช้อปปิ้งมอลล์</p>
              <input class="Four" type="checkbox" id="q4_c1" name="q4" value="ในห้างสรรพสินค้า/ศูนย์การค้า/คอมมูนิตี้มอลล์/ช้อปปิ้งมอลล์" onclick="Q4()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>พื้นที่เช่าในแหล่งท่องเที่ยว</p>
              <input class="Four" type="checkbox" id="q4_c2" name="q4" value="พื้นที่เช่าในแหล่งท่องเที่ยว" onclick="Q4()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>พื้นที่เช่าในตลาดนัด</p>
              <input class="Four" type="checkbox" id="q4_c3" name="q4" value="พื้นที่เช่าในตลาดนัด" onclick="Q4()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>มีพื้นที่/หน้าร้าน/อาคารของตนเอง</p>
              <input class="Four" type="checkbox" id="q4_c4" name="q4" value="มีพื้นที่/หน้าร้าน/อาคารของตนเอง" onclick="Q4()">
              <span class="checkmark"></span>
            </label>
            <label class="container controls form-inline">
              <input class="Four" type="checkbox" id="q4_c5" name="q4" value="อื่นๆ (โปรดระบุ)" onclick="Q4_C5()">
              <span class="checkmark"></span>
              <span class="label">อื่นๆ (โปรดระบุ)</span>
              <input type="text" class="form-control input-small" name="txt_q4_c5" id="txt_q4_c5" style="display:none">
            </label>
          </div>
          <!-- End Q4. -->

          <!-- Q5. -->
          <div class="card-header">
            <h5>5. ประเภทอาชีพของลูกค้าที่มาใช้บริการมากที่สุด (เลือกได้ 2 คำตอบ) <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q5. -->
          <div class="card-body">
            <label class="container">
              <p>เจ้าของกิจการ/ผู้บริหาร</p>
              <input class="moreTwo" type="checkbox" id="q5_c1" name="q5[]"  onClick="just2_q5();" value="เจ้าของกิจการ/ผู้บริหาร" >
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>พนักงานออฟฟิศ</p>
              <input class="moreTwo" type="checkbox" id="q5_c2" name="q5[]" onClick="just2_q5();" value="พนักงานออฟฟิศ" >
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ชาวต่างชาติที่ทำงานในไทย</p>
              <input class="moreTwo" type="checkbox" id="q5_c3" name="q5[]" onClick="just2_q5();" value="ชาวต่างชาติที่ทำงานในไทย" >
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>นักท่องเที่ยวชาวต่างชาติ</p>
              <input class="moreTwo" type="checkbox" id="q5_c4" name="q5[]" onClick="just2_q5();" value="นักท่องเที่ยวชาวต่างชาติ" >
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>นักเรียน/นิสิต-นักศึกษา</p>
              <input class="moreTwo" type="checkbox" id="q5_c5" name="q5[]" onClick="just2_q5();" value="นักเรียน/นิสิต-นักศึกษา" >
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ไม่สามารถแยกประเภทลูกค้า เนื่องจากยังไม่เคยเก็บข้อมูล</p>
              <input class="moreTwo" type="checkbox" id="q5_c6" name="q5[]" onClick="just2_q5();" value="ไม่สามารถแยกประเภทลูกค้า เนื่องจากยังไม่เคยเก็บข้อมูล" >
              <span class="checkmark"></span>
            </label>
            
          </div>
          <!-- End Q5. -->

          <!-- Q6. -->
          <div class="card-header">
            <h5>6. ลูกค้าจ่ายค่าบริการโดยวิธีใดบ่อยที่สุด (เลือกได้ 2 คำตอบ) <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q6. -->
          <div class="card-body">
            <label class="container">
              <p>เงินสด</p>
              <input class="moreTwo" type="checkbox" id="q6_c1" name="q6[]" onClick="just2_q6();" value="เงินสด" >
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>โอนเงินผ่านมือถือ/อินเทอร์เน็ตแบงค์กิ้ง/พร้อมเพย์</p>
              <input class="moreTwo" type="checkbox" id="q6_c2" name="q6[]" onClick="just2_q6();" value="โอนเงินผ่านมือถือ/อินเทอร์เน็ตแบงค์กิ้ง/พร้อมเพย์" >
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>บัตรเครดิตธนาคาร</p>
              <input class="moreTwo" type="checkbox" id="q6_c3" name="q6[]" onClick="just2_q6();" value="บัตรเครดิตธนาคาร" >
              <span class="checkmark"></span>
            </label>
            <label class="container controls form-inline">
              <input class="moreTwo" type="checkbox" id="q6_c4" name="q6[]" onClick="just2_q6();" value="ตัดเครดิตเติมเงินกับแอปพลิเคชันของทางร้านเอง" onclick="Q6_C4()">
              <span class="checkmark"></span>
              <span class="label">ตัดเครดิตเติมเงินกับแอปพลิเคชันของทางร้านเอง (โปรดระบุชื่อแอปพลิเคชัน)</spanab>
              <input type="text" class="form-control input-small" name="txt_q6_c4" id="txt_q6_c4" style="display:none">
            </label>
           
          </div>
          <!-- End Q6. -->

          <!-- Q7. -->
          <div class="card-header">
            <h5>7. วิธีโปรโมทร้านที่ท่านใช้บ่อยที่สุด (เลือกได้ 2 คำตอบ) <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q7. -->
          <div class="card-body">
            <label class="container">
              <p>โพสต์บนเพจเฟซบุ๊ก</p>
              <input class="moreTwo" type="checkbox" id="q7_c1" name="q7[]" onClick="just2_q7();" value="โพสต์บนเพจเฟซบุ๊ก" >
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ส่งข้อความทางไลน์ให้ลูกค้ารายคน</p>
              <input class="moreTwo" type="checkbox" id="q7_c2" name="q7[]" onClick="just2_q7();" value="ส่งข้อความทางไลน์ให้ลูกค้ารายคน" >
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>สร้างไลน์กลุ่มลูกค้า แล้วส่งทางไลน์กลุ่ม/บรอดแคสเป็นกลุ่ม</p>
              <input class="moreTwo" type="checkbox" id="q7_c3" name="q7[]" onClick="just2_q7();" value="สร้างไลน์กลุ่มลูกค้า แล้วส่งทางไลน์กลุ่ม/บรอดแคสเป็นกลุ่ม" >
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>โทรหาลูกค้าโดยตรง</p>
              <input class="moreTwo" type="checkbox" id="q7_c4" name="q7[]" onClick="just2_q7();" value="โทรหาลูกค้าโดยตรง" >
              <span class="checkmark"></span>
            </label>
            <label class="container controls form-inline">
              <input class="moreTwo" type="checkbox" id="q7_c5" name="q7[]" value="ส่งข้อความผ่านแอปพลิชัน" onClick="just2_q7();">
              <span class="checkmark"></span>
              <span class="label">ส่งข้อความผ่านแอปพลิชัน (โปรดระบุชื่อแอปพลิเคชัน)</span>
              <input type="text" class="form-control input-small" name="txt_q7_c5" id="txt_q7_c5" style="display:none">
            </label>
           
          </div>
          <!-- End Q7. -->

          <!-- Q8. -->
          <div class="card-header">
            <h5>8. ลูกค้าส่วนใหญ่ของท่านมาใช้บริการโดย (เลือกได้ 2 คำตอบ) <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q8. -->
          <div class="card-body">
            <label class="container">
              <p>นัดหมายล่วงหน้า</p>
              <input class="moreTwo" type="checkbox" id="q8_c1" name="q8[]" onClick="just2_q8();" value="นัดหมายล่วงหน้า" >
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>วอล์คอิน/เข้าร้านมาโดยไม่ได้นัดหมายก่อน</p>
              <input class="moreTwo" type="checkbox" id="q8_c2" name="q8[]" onClick="just2_q8();" value="วอล์คอิน/เข้าร้านมาโดยไม่ได้นัดหมายก่อน" >
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>จองคิวด้วยระบบทิคเก็ต</p>
              <input class="moreTwo" type="checkbox" id="q8_c3" name="q8[]" onClick="just2_q8();" value="จองคิวด้วยระบบทิคเก็ต" >
              <span class="checkmark"></span>
            </label>
            <label class="container controls form-inline">
              <input class="moreTwo" type="checkbox" id="q8_c4" name="q8[]" onClick="just2_q8();" value="อื่นๆ (โปรดระบุ)" onclick="Q8_C4()">
              <span class="checkmark"></span>
              <span class="label">อื่นๆ (โปรดระบุ)</span>
              <input type="text" class="form-control input-small" name="txt_q8_c4" id="txt_q8_c4" style="display:none">
            </label>
          </div>
          <!-- End Q8. -->











          <!-- Q9  -->
          <div class="card-header">
            <h5>ขอบพระคุณที่สละเวลาทำแบบสำรวจนี้ เพื่อเข้าร่วมสัมมนาเกี่ยวกับร้านทำเล็บฟรี โปรดกรอกอีเมล/เบอร์โทรติดต่อ <span class="required" style="color:red;">*</span></h5>
          </div>

          <div class="card-body">
            <div class="row" style="">
              <div class="col" style="font-size:20px;">
                <div class="col-sm-6">
                  <div class="input-group mx-sm-5 mb-3">
                    <div class="input-group-prepend">
                      <span style="width: 80px;" class="input-group-text" id="inputGroup-sizing-default">อีเมล</span>
                    </div>
                    <input class="form-control" id="q9_email" name="q9_email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="example@example.com" type="email" pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*" title="กรุณาตรวจสอบรูปแบบ E-mail" required />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group mx-sm-5 mb-3">
                    <div class="input-group-prepend">
                      <span style="width: 80px;" class="input-group-text" id="inputGroup-sizing-default">โทรศัพท์</span>
                    </div>
                    <input type="tel" class="form-control" id="q9_telephone" name="q9_telephone" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="xxxxxxxxxx" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" title="กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง" required>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Q9  -->


          <!-- Button submit -->
          <div class="card-body">
            <div class="form-action" style="text-align:center;">
              <button class="btn btn-outline-success" type="submit" name="submit" value="submit">ส่งแบบสอบถาม</button>
            </div>
          </div>

        </form>
        <!-- End form -->

      </div>
    </div>
  </div><br />
  <!-- End container-fluid -->

  <?php include 'footer.php'; ?>

  <!-- script submit -->
  <script>
    $("#form_survey").on("submit", function(e) {

      e.preventDefault();

      $.ajax({
        url: "checksubmit.php",
        type: "post",
        data: $(this).serialize(),
        success: function(result) {
          jQuery("#form_survey input[type=checkbox]").prop("checked", false);
          console.log("result= " + result);
          if (result == "1") {
            swal({
              position: 'center',
              type: 'success',
              title: 'บันทึกข้อมูลเรียบร้อย',
              showConfirmButton: true,
            }).then((result) => {
              if (result.value) {
                window.location = "thankyou.php";
              }
            });
          } else {
            swal({
              position: 'center',
              type: 'warning',
              title: 'กรุณาใส่คำตอบให้ครบ',
              showConfirmButton: true,
            });
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          swal(
            'เกิดข้อผิดพลาด!',
            'ลองอีกครั้ง!',
            'error'
          );
        }
      });

    });
  </script>
  <!-- end script submit -->

</body>

</html>