<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/style.css">
    
  </head>
  <body>
    <div class="container">
      <center>
      <div class="m-5 p-3 border rounded bg-white">
        <div><img src="src/images/lg1.png" alt="" srcset="" width="15%"></div>
        <div><h3>แบบประเมินความผิดปกติของเต้านม</h3></div>
        <hr>
        <h3 class="row" id="questions">
            <div class="col-2">คำถามที่ : 1 </div>
            <div class="col-9 text-left">เวลาให้นมลูกมีอาการปวด บวม ของเต้านมบ้างส่วน ซึ่งอาจเกิดจาก อุดตันของท่อน้ำนม โดยทำให้เต้านมอักเสบได้</div>
        </h3>
        <div class="container-fulid">
          <div class="row px-5 py-3 d-flex justify-content-center text-center btn-group btn-group-toggle" id="choices_box">
          <div class="btn-group-toggle row w-50"  data-toggle="buttons">
              <?php 
              $arr_topup = array(
                100,200,500,1000,3000
            );
                  foreach($arr_topup as $key_topup=>$value_topup){ // BEGIN LOOP
                        $active_state = (isset($default_value) && $default_value==$value_topup)?" btn-info active":"btn-light";
                        $check_state = (isset($default_value) && $default_value==$value_topup)?" checked":"";
                        if(isset($default_value) && $default_value==$value_topup && is_null($initial_value)){
                            $initial_value = true;  
                        }
              ?>
              <label class="btn btn-sm col-4 mt-2 shadow-sm btn-c-topup <?=$active_state?>">
                <input type="radio" name="topup" id="topup_<?=$key_topup?>" autocomplete="off"
                value="<?=$value_topup?>" required <?=$check_state?>> <?=number_format($value_topup,0)?>
              </label>
              <?php
                  } // END LOOP
              ?>
            </div>       
            <?php for ($i = 0; $i < 0; $i++) { ?>
          <!---------------------------------------------------------------->
          <div class="col-lg-5 btn btn-secondary p-2 text_form mx-4 my-2 text-justify break-text text-center" data-toggle="buttons">
            <p class="m-0">sadsdad</p>
          </div>
          <!---------------------------------------------------------------->
          <?php }?>
          </div>
        </div>
        <div id="clock"></div>
      </div>
      </center>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" >
        function date_time(id) {
            date = new Date;
            year = date.getFullYear();
            month = date.getMonth();
            months = new Array('มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม');
            d = date.getDate();
            day = date.getDay();
            days = new Array('อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์');
            h = date.getHours();
            if (h < 10) {
                h = "0" + h;
            }
            m = date.getMinutes();
            if (m < 10) {
                m = "0" + m;
            }
            s = date.getSeconds();
            if (s < 10) {
                s = "0" + s;
            }
            result = 'วัน' + days[day] + ' ' + d + ' ' + months[month] + ' ' + (year+543) + ' - ' + h + ':' + m + ':' + s +' น.';
            document.getElementById(id).innerHTML = result;
            setTimeout('date_time("' + id + '");', '1000');
            return true;
        }

        date_time("clock");
    </script></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="src/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>