<?php
    // process.php
    include 'includes/utility.php';
	$requestMethod = $_SERVER["REQUEST_METHOD"];

    if ($requestMethod == "POST") {
        if (isset($_POST["request"]) && !empty($_POST["request"])) {

            $raw = question($_POST['request'], $gen_obj, $cal_obj);
        }
        echo json_encode($raw);
    }
    else {
        header("HTTP/1.1 404 Not Found");
    }
?>