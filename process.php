<?php
    // process.php
    include 'includes/utility.php';
	$requestMethod = $_SERVER["REQUEST_METHOD"];

    if ($requestMethod == "POST") {
        if (isset($_POST["request"]) && !empty($_POST["request"]) && isset($_POST['uid']) && !empty($_POST['uid'])) {
            $raw =  (object) question($_POST['request'], $gen_obj, $cal_obj);
            if ($regis = $questionregis_obj->regisquestion($raw, $_POST['uid'], $_POST['request'])) {
                echo json_encode($questionregis_obj->getquestion($regis));
            }
        }
        if (isset($_POST["action"]) && !empty($_POST["action"])) {
            if ($_POST["action"] == "login") {
                if (!empty($_POST["loginName"]) || !empty($_POST["loginPassword"])) {
                    $message = $user_obj->login($_POST["loginName"], $_POST["loginPassword"]);
                    if (isset($message["error"])) {
                        echo $message["error"];
                    }
                    else {
                        echo true;
                    }
                }
                else {
                    echo "กรุณากรอกข้อมูลให้ครบ";
                }
            }
            if ($_POST["action"] == "register") {
                if (!empty($_POST["registerEmail"]) || !empty($_POST["registerPassword"]) || !empty($_POST["registerName"])) {
                    $message =  $user_obj->register($_POST["registerEmail"], $_POST["registerPassword"], $_POST["registerName"]);
                    if (isset($message["error"])) {
                        echo $message["error"];
                    }
                    else {
                        echo true;
                    }
                }
                else {
                    echo "กรุณากรอกข้อมูลให้ครบ";
                }
            }
        }

    }
    else {
        header("HTTP/1.1 404 Not Found");
    }
?>