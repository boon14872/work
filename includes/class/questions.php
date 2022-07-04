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

    public function getquestion_choice($id, $all = true) {
        if (!$all) {
            $sql = "Select * from questions_choice where qc_id = ?";
            $q = $this->db->prepare($sql);
            if ($q->execute([$id])) return $q->fetch(PDO::FETCH_OBJ);
            return false;
        }
        $sql = "Select * from questions_choice where qd_id = ?";
        $q = $this->db->prepare($sql);
        if ($q->execute([$id])) return $q->fetchAll(PDO::FETCH_OBJ);
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

    public function getquestion($qset_id, $getdata = true) {
        $sql = "Select * from questions_set where q_id = ?";
        $q = $this->db->prepare($sql);
        if ($q->execute([$qset_id])) {
            if ($getdata) {
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
            else return $q->fetch(PDO::FETCH_OBJ);
            
        }
        return false;
    }

    public function log_save($qset_id, $uid, $time, $ctrue, $cfalse,object $q_choice) {
        $c_sql = "select * from history_log where q_id = ? and uid = ?";
        $check = $this->db->prepare($c_sql);
        if ($check->execute([$qset_id, $uid])) {
            if ($check->rowCount() > 0) {
                return true;
            }
        }
        $sql = "Insert into history_log(q_id, uid, time, count_true, count_false) values(?, ?, ?, ?, ?)";
        $log = $this->db->prepare($sql);
        if ($log->execute([$qset_id, $uid, $time, $ctrue, $cfalse])) {
            $last_id = $this->db->lastInsertId();
            foreach ($q_choice->data as $choice) {
                $d_sql = "insert into history_log_detail(log_id, qc_id) values(?, ?)";
                $detail = $this->db->prepare($d_sql);
                if (!$detail->execute([$last_id, $choice->qc_id])) return false;
            }
            return true;
        }
        return false;
    }

    public function log_get_detail($log_id) {
        $sql = "select * from history_log_detail where log_id = ?";
        $q = $this->db->prepare($sql);
        if ($q->execute([$log_id])) {
            $data = $q->fetchAll(PDO::FETCH_OBJ);
            $send = array();
            foreach ($data as $row) {
                $result = new stdClass();
                $result->id = $row->id;
                $result->log_id = $row->log_id;
                $result->qc_id = $row->qc_id;
                $result->data = $this->getquestion_choice($row->qc_id ,false);
                array_push($send,$result);
            }
            
            return json_decode(json_encode($send), FALSE);;
        }
        return false;
    }

    public function log_get($id, $log_id = false) {
        if ($log_id) {
            $sql = "Select * from history_log where id = ?";
            $q = $this->db->prepare($sql);
            if ($q->execute([$id])) {
                $data = $q->fetch(PDO::FETCH_OBJ);
                $data->detail = $this->log_get_detail($data->id);
                if ($q->rowCount() == 0) return false;
                return $data;
            }
            return false;
        }
        $sql = "Select * from history_log where uid = ? ORDER BY id DESC";
        $q = $this->db->prepare($sql);
        if ($q->execute([$id])) {
            return $q->fetchAll(PDO::FETCH_OBJ);
        }
        return false;
    }
}



?>