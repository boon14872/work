<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/mdb/css/mdb.min.css">
  </head>
  <body>
    <div class="container text_font3 py-3">
      <div class="m-5 p-3 border rounded bg-white pb-0 px-0 text-center">
        <div><img src="src/images/plus.png" class="img-fulid text-center" id="header_img" srcset="" width="15%"></div>
        <hr>
            <div class="col text-break fs-1 row justify-content-center text-center m-0" id="header">
              <div class="bg-secondary col-3 m-3 p-2 bg-opacity-25 rounded-pill" id="first_number"></div>
              <div class="bg-primary col-1 m-3 p-2 bg-opacity-25 rounded-pill" id="operator">+</div>
              <div class="bg-secondary col-3 m-3 p-2 bg-opacity-25 rounded-pill" id="last_number"></div>
            </div>
        <div class="container-fulid">
            <div class="row justify-content-center text-center px-5">

            <div class=" shadow-0 row justify-content-center" id="choice_box">
              <button type="button" class="btn btn-outline-success col-lg-5 py-4 rounded-0 m-1 fs-2 bg-opacity-50 text-dark" id="0"></button>
              <button type="button" class="btn btn-outline-success col-lg-5 py-4 rounded-0 m-1 fs-2 bg-opacity-50 text-dark" id="1"></button>
              <button type="button" class="btn btn-outline-success col-lg-5 py-4 rounded-0 m-1 fs-2 bg-opacity-50 text-dark" id="2"></button>
              <button type="button" class="btn btn-outline-success col-lg-5 py-4 rounded-0 m-1 fs-2 bg-opacity-50 text-dark" id="3"></button>
            </div>

            </div>
          </div>
          <div class="pt-5">
            <div class="progress" id="progress_bar">
              <div
                class="progress-bar progress-bar-striped bg-danger"
                role="progressbar"
                style="width: 10%;height: 100%;"
                aria-valuenow="0"
                aria-valuemin="0"
                aria-valuemax="100"
              ></div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="src/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>