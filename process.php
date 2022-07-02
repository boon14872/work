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

                }
            }
            if ($_POST["action"] == "register") {

            }
        }
    }
    else {
        header("HTTP/1.1 404 Not Found");
    }
?>