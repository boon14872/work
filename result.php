<?php
include 'includes/init.php';
  if (!isset($_SESSION['games'])) {
    header('location:login.php');
  }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>RESULT</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/mdb/css/mdb.min.css">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
  </head>
  <body>
    <div class="container">
      <div class="m-5 p-3 border rounded bg-white text_font3">
        <div class="row justify-content-center text-center">
            <div class="text-danger fs-1 bg-success bg-opacity-50 shadow-1 rounded">ผลการเล่น</div>
        </div>
        <hr class="divider-horizontal-blurry" />
        <div class="container mt-2">
            <div class="row text-center shadow-1 rounded my-1 py-2 bg-secondary bg-opacity-50">
                <div class="col-lg-1">
                    ข้อ
                </div>
                <div class="col-lg-3">
                    โจทย์
                </div>
                <div class="col-lg-6">
                    ตัวเลือก
                </div>
                <div class="col-lg-2">
                    ผลลัพธ์
                </div>
            </div>

            <div id="result">

            </div>

            <div class="row text-center shadow-1 rounded my-1 p-0 justify-content-center fs-4">
                <div class="col-lg-6 bg-info bg-opacity-50 p-0 m-0 rounded-left p-1">
                    เวลา : <span id="time_count"></span> วินาที
                </div>
                <div class="col-lg-6 row p-0 m-0">
                    <div class="col bg-success bg-opacity-50 p-1">ถูก <span id="truecount" class="m-0 p-0"></span> ข้อ</div>
                    <div class="col bg-danger bg-opacity-50 p-1 rounded-right">ผิด <span id="falsecount" class="m-0 p-0"></span> ข้อ</div>
                </div>
            </div>
            <div class="p-3 text-center row justify-content-center">
                <a name="" id="" class="btn btn-success fs-3 col-lg-3 mx-2" href="index.php" role="button">หน้าหลัก</a>
                <a name="" id="retry" class="btn btn-secondary fs-3 col-lg-3 mx-2" href="" role="button">เล่นอีกครั้ง</a>
            </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
    <script>
    <?php
        if (isset($_GET['log_id']) && !empty($_GET['log_id'])) {
            $log_id = $_GET['log_id'];
            $uid = isset($_GET['uid']) ? $_GET['uid'] : $_SESSION['games']['uid'];
            $log = $questionregis_obj->log_get($log_id, true);
            $data_send = new stdClass();
            $data_send->id = $log->q_id;
            $data_send->time = $log->time;
            $data_send->data = $log->detail;
            if (!$log) return;
            $question = $questionregis_obj->getquestion($log->q_id);
            ?>
            var questions = JSON.stringify(<?php echo json_encode($question);?>);
            var data_send = JSON.stringify(<?php echo json_encode($data_send);?>);
            <?php
        }
        else {
            ?>
            var questions = sessionStorage.games_data_question;
            var data_send = sessionStorage.games_data_send;
            <?php
        }
    ?>
    
    var true_count = 0;
    var false_count = 0;
    $(document).ready(function() {
        request = $.ajax({
            url: "process.php",
            type: 'post',
            data: {action : 'result', questions: questions, data: data_send},
        });
        request.done(function(response, textStaus) {
            $('div#result').html(response);
            true_count = data_true_count;
            false_count = data_false_count;
            $('span#truecount').html(true_count);
            $('span#falsecount').html(false_count);
            $('span#time_count').html(JSON.parse(sessionStorage.games_data_send).time);
            var retry = 'page.php?request='+JSON.parse(sessionStorage.games_data_question).q_detail;
            $('div > a#retry').attr('href', retry);
            // console.log(textStaus);
            // console.log(response);

        });
    });
</script>
  </body>
</html>