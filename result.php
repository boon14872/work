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

            <div class="row text-center shadow-1 rounded my-1 p-1 bg-primary bg-opacity-50 justify-content-center">
                <div class="col-lg-1 my-auto">
                    1
                </div>
                <div class="col-lg-3 my-auto">
                    1000-10
                </div>
                <div class="col-lg-6 row my-auto text-white">
                    <div class="col bg-danger bg-opacity-50 m-1 p-2 rounded">100</div>
                    <div class="col bg-dark bg-opacity-50 m-1 p-2 rounded">200</div>
                    <div class="col bg-dark bg-opacity-50 m-1 p-2 rounded">300</div>
                    <div class="col bg-dark bg-opacity-50 m-1 p-2 rounded">400</div>
                </div>
                <div class="col-lg-2 my-auto bg-success bg-opacity-100 m-1 p-2 rounded text-white">
                    ถูก
                </div>
            </div>
            <div class="row text-center shadow-1 rounded my-1 p-1 bg-primary bg-opacity-50 justify-content-center">
                <div class="col-lg-1 my-auto">
                    1
                </div>
                <div class="col-lg-3 my-auto">
                    1000-10
                </div>
                <div class="col-lg-6 row my-auto text-white">
                    <div class="col bg-danger bg-opacity-50 m-1 p-2 rounded">100</div>
                    <div class="col bg-dark bg-opacity-50 m-1 p-2 rounded">200</div>
                    <div class="col bg-dark bg-opacity-50 m-1 p-2 rounded">300</div>
                    <div class="col bg-dark bg-opacity-50 m-1 p-2 rounded">400</div>
                </div>
                <div class="col-lg-2 my-auto bg-success bg-opacity-100 m-1 p-2 rounded text-white">
                    ถูก
                </div>
            </div>

        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>

  </body>
</html>