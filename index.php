<?php
include 'includes/init.php';
  if (!isset($_SESSION['games'])) {
    header('location:logout.php');
  }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/mdb/css/mdb.min.css">
  </head>
  <body>
    <div class="container">
      <div class="m-5 p-3 border rounded bg-white">
        <div class="row justify-content-end">
          <div class="col-lg-3 text-right mx-0 py-2 ">User : <?php echo $_SESSION["games"]["name"]; ?> </div>
          <div class="col-lg-2 text-right mx-0"><a name="" id="" class="btn btn-warning" href="#" role="button" onClick="confirmb('คุณต้องการออกจากระบบใช่หรือไม่')">ออกจากระบบ</a></div>
        </div>
        <hr class="divider-horizontal-blurry" />
        <div class="container-fulid">
          <div class="row">
            <div class="col-lg-6 back">
            <img src="src/images/banner.png" class="img-fluid row back" alt="" srcset="">
              <div class="row p-3 bottom-left col-9 back pt-5 mx-5 bg-success bg-opacity-25">
                  <div class="col-12 text-center p-1 text_header text_font2">
                    <h2>History board</h2>
                  </div>
                  <div class="hr-theme-slash-2 col-12">
                          <div class="hr-line"></div>
                          <img src="src/images/lg1.png" class="img-fluid hr-icon" width="10%" alt="" />
                          <div class="hr-line"></div>
                        </div>

                  <div id="logdata" class="logdataoverflow">

                  </div>

              </div>
            </div>
            <div class="col-lg-6 py-5">

              <div class="row my-3">  <!-- /.row -->

                <div class="col-md-6 row mx-auto">
                  <div class="col-3 py-2 back img_left bg-success mb-4 m-1 border rounded bg-opacity-50"><img src="src/images/plus.png" class="img-fluid w-100 back" alt=""></div>
                  <a name="" id="" class="btn col-8 text-center fs-2 p-1 text_font3 bg-warning bg-opacity-25 back m-1 justify-content-center" href="page.php?request=plus" role="button">
                    <div class="">
                      <p class="p-2 m-0">บวก</p>
                    </div></a>
                </div>
                <div class="col-md-6 row mx-auto">
                  <div class="col-3 py-2 back img_left bg-success mb-4 m-1 border rounded bg-opacity-50"><img src="src/images/minus.png" class="img-fluid w-100 back" alt=""></div>
                  <a name="" id="" class="btn col-8 text-center fs-2 p-1 text_font3 bg-warning bg-opacity-25 back m-1 justify-content-center" href="page.php?request=minus" role="button">
                    <div class="">
                      <p class="p-2 m-0">ลบ</p>
                    </div></a>
                </div>
                
              </div>  <!-- /.row -->
              <div class="row my-3"> <!-- /.row -->
                <div class="col-md-6 row mx-auto">
                    <div class="col-3 py-2 back img_left bg-success mb-4 m-1 border rounded bg-opacity-50"><img src="src/images/multi.png" class="img-fluid w-100 back" alt=""></div>
                    <a name="" id="" class="btn col-8 text-center fs-2 p-1 text_font3 bg-warning bg-opacity-25 back m-1 justify-content-center" href="page.php?request=multi" role="button">
                    <div class="">
                      <p class="p-2 m-0">คูณ</p>
                    </div></a>
                  </div>
                  <div class="col-md-6 row mx-auto">
                    <div class="col-3 py-2 back img_left bg-success mb-4 m-1 border rounded bg-opacity-50"><img src="src/images/div.png" class="img-fluid w-100 back" alt=""></div>
                    <a name="" id="" class="btn col-8 text-center fs-2 p-1 text_font3 bg-warning bg-opacity-25 back m-1 justify-content-center" href="page.php?request=div" role="button">
                    <div class="">
                      <p class="p-2 m-0">หาร</p>
                    </div></a>
                  </div>
              </div>  <!-- /.row -->
              <div class="row my-3"> <!-- /.row -->
                <div class="col-md-6 row mx-auto">
                    <div class="col-3 py-2 back img_left bg-success mb-4 m-1 border rounded bg-opacity-50 pt-3"><img src="src/images/basic.png" class="img-fluid w-100 back" alt=""></div>
                    <a name="" id="" class="btn col-8 text-center fs-2 p-1 text_font3 bg-warning bg-opacity-25 back m-1 justify-content-center" href="page.php?request=basic" role="button">
                    <div class="">
                      <p class="p-2 m-0">บวก-ลบ</p>
                    </div></a>
                  </div>
                  <div class="col-md-6 row  mx-auto">
                    <div class="col-3 py-2 back img_left bg-success mb-4 m-1 border rounded bg-opacity-50 pt-3"><img src="src/images/advanced.png" class="img-fluid w-100 back" alt=""></div>
                    <a name="" id="" class="btn col-8 text-center fs-2 p-1 text_font3 bg-warning bg-opacity-25 back m-1 justify-content-center" href="page.php?request=advanced" role="button">
                    <div class="">
                      <p class="p-2 m-0">คูณ-หาร</p>
                    </div></a>
                  </div>
              </div>  <!-- /.row -->
              <div class="row my-3"> <!-- /.row -->
                <div class="col-md-6 row mx-auto">
                    <div class="col-3 py-2 back img_left bg-success mb-4 m-1 border rounded bg-opacity-50 pt-3"><img src="src/images/all.png" class="img-fluid w-100 back" alt=""></div>
                    <a name="" id="" class="btn col-8 text-center fs-4 p-1 text_font3 bg-warning bg-opacity-25 back m-1 justify-content-center" href="page.php?request=all" role="button">
                    <div class="px-4">
                      <p class="p-2 m-0">บวก-ลบ-คูณ-หาร</p>
                    </div></a>
                  </div>
              </div>  <!-- /.row -->
              <div class="row my-3 justify-content-center"> <!-- /.row -->
                <div  class="col-6 mt-3"><button type="button" class="btn btn-dark fs-3 text-center mx-auto">วิธีการเล่น</button></div>
              </div>  <!-- /.row -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
    <?php
      echo "<script>var uid = ".$_SESSION['games']['uid'].";</script>";
    ?>
    <script src="src/js/indexscript.js"></script>
  </body>
</html>