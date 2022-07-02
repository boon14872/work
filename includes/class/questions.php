<?php
//questions.php

class QuestionsRegis
{
    protected $db;
    public function __construct($dbconn)
    {
        $this->db = $dbconn;
    }
    
    public function regisquestion(object $data, $uid, $detail)
    {   
        $sql_gr = "INSERT INTO questions_set(q_create_by, q_detail) value (?, ?)";
        $regis = $this->db->prepare($sql_gr);
        $last_id_set;
        if($regis->execute([$uid, $detail])) {
            $last_id_set = $this->db->lastInsertId();
            foreach($data as $quest) {
                $sql_de = "INSERT INTO questions_detail(qs_id, number1, number2, q_operator, q_answer) VALUES(?, ?, ?, ?, ?)";
                $q_detail = $this->db->prepare($sql_de);
                if ($q_detail->execute([$last_id_set, $quest->number1, $quest->number2, $quest->operator, $quest->answer])) {
                    $last_id_q = $this->db->lastInsertId();
                    foreach($quest->choice as $choice) {
                        $sql_ch = "INSERT INTO questions_choice (qd_id, qc_number) values (?, ?)";
                        $q_choice = $this->db->prepare($sql_ch);
                        if (!$q_choice->execute([$last_id_q, $choice])) {
                            return false;
                        }
                    }
                }
            }
        }
        return $last_id_set;
    }

    public function getquestion_choice($q_id) {
        $sql = "Select * from questions_choice where qd_id = ?";
        $q = $this->db->prepare($sql);
        if ($q->execute([$q_id])) {
            return $q->fetchAll(PDO::FETCH_OBJ);
        }
        return false;
    }

    public function getquestion_detail($qset_id) {
        $sql = "Select * from questions_detail where qs_id = ?";
        $q = $this->db->prepare($sql);
        $datas = array();
        if ($q->execute([$qset_id])) {
            $q_data = $q->fetchAll(PDO::FETCH_OBJ);
            foreach ($q_data as $qs) {
                $data = new stdClass();
                $data->qd_id = $qs->qd_id;
                $data->number1 = $qs->number1;
                $data->number2 = $qs->number2;
                $data->operator = $qs->q_operator;
                $data->answer = $qs->q_answer;
                $data->choice = $this->getquestion_choice($qs->qd_id);
                array_push($datas, $data);
            }
            return $datas;
        }
        return false;
    }

    public function getquestion($qset_id) {
        $sql = "Select * from questions_set where q_id = ?";
        $q = $this->db->prepare($sql);
        if ($q->execute([$qset_id])) {
            $data_q = $this->getquestion_detail($qset_id);
            $qs = $q->fetch(PDO::FETCH_OBJ);
            $data = new stdClass();
            $data->q_id = $qs->q_id;
            $data->q_create_by = $qs->q_create_by;
            $data->q_create_at = $qs->q_create_at;
            $data->q_detail = $qs->q_detail;
            $data->data = $data_q;
            $data->length = count((array)$data_q);
            return $data;
        }
        return false;
    }

    public function log_save($qset_id, $uid) {
        $sql = "Insert into history_log(qset_id, uid) values(?, ?)";
        $log = $this->db->prepare($sql);
        if ($log->execute([$qset_id, $uid])) {
            return true;
        }
    }

    public function log_get($uid) {
        $sql = "Select * from history_log where uid = ?";
        $q = $this->db->prepare($sql);
        if ($q->execute([$uid])) {
            return $q->fetchAll(PDO::FETCH_OBJ);
        }
        return false;
    }
}



?>