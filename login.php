
<!doctype html>
<html lang="en">
  <head>
    <title>LOGIN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/mdb/css/mdb.min.css">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

  </head>
  <body>
    <div class="container text_font3 py-3 p-5">
      <div class="m-5 p-5 border rounded bg-white text-center">
        <!-- Pills navs -->
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="nav-login-tab" data-toggle="pill" href="#nav-login" role="tabp"
            aria-controls="nav-login" aria-selected="true">เข้าสู่ระบบ</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="nav-register-tab" data-toggle="pill" href="#nav-register" role="tab"
            aria-controls="nav-register" aria-selected="false">สมัครสมาชิก</a>
        </li>
        </ul>
        <!-- Pills navs -->

        <!-- Pills content -->
        <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">

            <form action="#" method="post" id="FormLogin">
            <input type="hidden" name="action" value="login">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="loginName" class="form-control" name="loginName" required />
                <label class="form-label" for="loginName">Email</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="loginPassword" class="form-control" name="loginPassword" required />
                <label class="form-label" for="loginPassword">Password</label>
            </div>

            <!-- 2 column grid layout -->
            <div class="row mb-4">
                

                <div class="col-md-12 d-flex justify-content-center">
                <!-- Simple link -->
                <!--  <a href="#!">Forgot password?</a> -->
                </div>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-success btn-block mb-4">เข้าสู่ระบบ</button>

            <!-- Register buttons -->

            </form>
        </div>
        <div class="tab-pane fade" id="nav-register" role="tabpanel" aria-labelledby="nav-register">
        <form action="#" method="post" id="FormReister">
            <input type="hidden" name="action" value="register">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="registerEmail" class="form-control" name="registerEmail" required />
                <label class="form-label" for="registerEmail">Email</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="registerPassword" class="form-control" name="registerPassword" required />
                <label class="form-label" for="registerPassword">Password</label>
            </div>

            <!-- Repeat Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="registerRepeatPassword" class="form-control" name="registerRepeatPassword" required />
                <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                <span id='message' class="text-left"></span>
            </div>

            <!-- Name input -->
            <div class="form-outline mb-4">
                <input type="text" id="registerName" class="form-control" name="registerName" required />
                <label class="form-label" for="registerName">Name</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked required
                aria-describedby="registerCheckHelpText" />
                <label class="form-check-label" for="registerCheck">
                I have read and agree to the terms
                </label>
            </div>

            <!-- Submit button -->
            <button type="submit" id="registerSubmit" class="btn btn-secondary btn-block mb-3">สมัครสมาชิก</button>
            </form>
        </div>
        </div>
        <!-- Pills content -->
        <div>

        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('div.form-outline').each(function(i, e) {
                //console.log(e);
                $(e).find('input').on('change', function() {
                    $(this).addClass('active');
                });
            });
            $('#registerPassword, #registerRepeatPassword, #registerSubmit').on('keyup', function () {
                $('#registerSubmit').prop("disabled", () => {
                    if ($('#registerPassword').val() == $('#registerRepeatPassword').val()) {
                        $('#message').html('Matching').css('color', 'green');
                        return false;
                    } else 
                        $('#message').html('Not Matching').css('color', 'red');
                        return true;
                    });
                });
            
            $('#FormLogin').on('submit', (e) => {
                e.preventDefault();
                $.LoadingOverlay("show");
                var serializedData= $("#FormLogin").serialize();
                $.post('process.php',serializedData,(data) => {
                    $.LoadingOverlay("hide");
                    if (data == 1) {
                        $.LoadingOverlay("show");
                        window.location.replace('index.php');
                    }
                    else {
                        bootbox.alert(data);
                    }
                });
            });
            $('#FormReister').on('submit', (e) => {
                e.preventDefault();
                $.LoadingOverlay("show");
                var serializedData= $("#FormReister").serialize();
                $.post('process.php',serializedData,(data) => {
                    $.LoadingOverlay("hide");
                    if (data == 1) {
                        bootbox.alert("กรุณาล็อคอิน", () => {
                            window.location.replace('login.php');
                        });
                    }
                    else {
                        bootbox.alert(data);
                    }
                });
            });
            
        });
    </script>
  </body>
</html>