<!-- ภานุวัฒน์ ไคร้อุดม รหัสนักศึกษา 60050231 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASS4-ภานุวัฒน์ ไคร้อุดม รหัสนักศึกษา 60050231</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
</head>
<body>
    <div class="main container mt-3">
    <h5>
    กิจกรรมที่ 4 
    </h5>
    <span>ให้นักศึกษาเขียนโปรแกรมคิดเกรด โดยรับค่าคะแนนเข้ามาแล้วคำนวณเกรด โดยใช้คำสั่ง IF...Else... ตรวจสอบเงื่อนไขหลายทางเลือก</span>
    <div class="name mt-5">
    <p>ผู้จัดทำ</p>
        <span>นาย ภานุวัฒน์ ไคร้อุดม รหัสนักศึกษา 60050231</span>
    </div>
    </div>
    <div class="container">
    <table class="table mt-5 text-center">
        <thead>
            <tr>
                <th scope="col">ช่วงคะแนน</th>
                <th scope="col">ผลการเรียน</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>80-100</td>
                <td>4</td>
            </tr>
            <tr>
                <td>70-79</td>
                <td>3</td>
            </tr>
            <tr>
                <td>60-69</td>
                <td>2</td>
            </tr>
            <tr>
                <td>50-59</td>
                <td>1</td>
            </tr>
            <tr>
                <td>0-49</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>

<form method="post">
        <div class="row mt-5 mx-3">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">กรุณากรอกคะแนน</span>
            </div>
            <input
                id="replyNumber" 
                min="0" 
                data-bind="value:replyNumber"
                name="num"
                type="number"
                class="form-control"
                aria-label="num"
                aria-describedby="basic-addon1"
            />
          </div>
        </div>
        <div class="row justify-content-center">
          <button
            type="submit"
            name="submit"
            id="cal"
            class="btn btn-success mx-4"
          >
            ตรวจสอบ
          </button>
          <button type="reset" class="btn btn-secondary" >ยกเลิก</button>
        </div>
      </form>
</div>

<?php 
   if (isset($_POST['submit'])) { 
     $num = $_POST['num'];
    $score = 0;
    if(($num>100)||($num<0)){
         $score= " ไม่สามารถคิดเกรดได้"; 
     }
     else if (($num>=80)&&($num<=100)) { $score= "4"; }
    else if (($num>=70)&&($num<=79)) { $score= "3" ; }
    else if (($num>=60)&&($num<=69)) { $score= "2" ; }
    else if (($num>=50)&&($num<=59)) { $score= "1" ; }
    else if (($num>=0)&&($num<=49)) { $score= "0" ; }

  ?> <div class="text-center">
    <div class="row my-5 justify-content-center">
        <div class="card w-75">
          <div class="card-body">
            <h5 class="card-title">สรุปผลคะแนน</h5>
            <p class="card-text">
              คุณได้คะแนนรวม = <?php echo $num?> คะแนน
            </p>
            <h5 class="card-text" style="color: green;">
              ผลการเรียนอยู่ในช่วงระดับ = <?php echo $score?>
            </h5>
          </div>
        </div>
      </div>
      </div>
    <?php	} ?>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
        }
</script>
</body>
</html>