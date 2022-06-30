<?php
//questions.php
class questions
{
    protected $db;
    public function __construct($dbconn)
    {
        $this->db = $dbconn;
    }
    
    public function regisquestion($data, $uid, $detail)
    {   
        $sql_gr = "INSERT  INTO question_set(q_create_by, q_detail) value (?, ?)";
        $regis = $this->db->prepare($sql);
            if($regis->execute([$uid, $detail])) {

            }
        foreach($data as $quest) {
            $sql = "INSERT INTO question() VALUES(?, ?)";
        }

    }
}



?>