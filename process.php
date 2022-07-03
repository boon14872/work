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

            if ($_POST['action'] == 'result') {
                $question = json_decode($_POST['questions']);
                $data = json_decode($_POST['data']);
                $data_true_count = 0;
                $data_false_count = 0;
                foreach ($question->data as $key => $value) {
                    ?>
                    <div class="row text-center shadow-1 rounded my-1 p-1 bg-primary bg-opacity-50 justify-content-center">
                        <div class="col-lg-1 my-auto">
                            <?php echo $key+1; ?>
                        </div>
                        <div class="col-lg-3 my-auto bg-white rounded">
                            <div class="col bg-white bg-opacity-50 m-1 p-1 rounded">
                                <?php echo $value->number1.' '.$value->operator.' '.$value->number2; ?>
                            </div>
                        </div>
                        <div class="col-lg-6 row my-auto text-white">
                            <?php
                            foreach ($value->choice as $choice) {
                                $data_id = $data->data[$key];
                                if ($data_id->data == $choice->qc_number) {
                                ?>
                                    <div class="col bg-danger bg-opacity-50 m-1 p-2 rounded"><?php echo $choice->qc_number;?></div>
                                <?php
                                }
                                else {
                                    ?>
                                    <div class="col bg-dark bg-opacity-50 m-1 p-2 rounded"><?php echo $choice->qc_number;?></div>
                                <?php
                                }
                            }
                            ?>
                            
                        </div>
                        <?php
                        if ($value->answer == $data->data[$key]->data) {
                            $data_true_count += 1;
                            ?>
                                <div class="col-lg-2 my-auto bg-success bg-opacity-100 m-1 p-2 rounded text-white">ถูก</div>
                            <?php
                        }
                        else {
                            $data_false_count += 1;
                            ?>
                                <div class="col-lg-2 my-auto bg-danger bg-opacity-100 m-1 p-2 rounded text-white">ผิด</div>
                            <?php
                        }
                        ?>
                        
                    </div>
                    <?php
                }
                if (!$questionregis_obj->log_save($data->id, $_SESSION['games']['uid'])) {
                    echo "log not saved";
                }

            }
            ?>
            <script>
                var data_true_count = <?php echo $data_true_count;?>;
                var data_false_count = <?php echo $data_false_count;?>;
            </script>
            <?php
        }

    }
    else {
        header("HTTP/1.1 404 Not Found");
    }
?>