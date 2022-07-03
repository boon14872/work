<?php
//user.php
class User
{
    protected $db;
    public function __construct($dbconn)
    {
        $this->db = $dbconn;
    }

    public function register($email,$pass,$name)
    {
        $t_email = trim($email);
        $t_pass = trim($pass);
        $t_name = trim($name);
        $check_sql = "SELECT uid from user where email = ?";
        $check = $this->db->prepare($check_sql);
        $check->execute([$t_email]);
        if($check->rowCount() == 0)
        {
            $newpass = password_hash($t_pass,PASSWORD_DEFAULT);
            $sql = "INSERT INTO user(email,password,name) VALUES(?,?,?)";
            $regis = $this->db->prepare($sql);
            if($regis->execute([$t_email,$newpass,$t_name]))
            {
                return true;
            }
            else
            {
                return ['error'=>'สมัครล้มเหลว'];
            }
            
        }
        else
        {
            return ['error'=>'email นี้มีการใช้งานแล้ว'];
        }
    }

    public function login($email,$pass)
    {
        $t_email = trim($email);
        $t_pass = trim($pass);
        $check_sql = "SELECT * from user where email = ?";
        $check = $this->db->prepare($check_sql);
        $check->execute([$t_email]);
        if($check->rowCount() == 1)
        {
            $user = $check->fetch(PDO::FETCH_OBJ);
            if(password_verify($t_pass,$user->password))
            {
                $_SESSION['games'] = [
                    'uid' => $user->uid,
                    'email' =>$user->email,
                    'name' =>$user->name
                ];
                return true;
            }
            else
            {
                return ['error'=>'รหัสผ่านไม่ถูกต้อง'];
            }
        }
        else
        {
            return ['error'=>'ไม่อีเมลนี้ในระบบ'];
        }
    }
    
    public function getname($uid)
    {
        $sql = "SELECT name from user where uid = ?";
        $find = $this->db->prepare($sql);
        $find->execute([$uid]);
        $user = $find->fetch(PDO::FETCH_OBJ);
        return $user->name;
    }
}



?>