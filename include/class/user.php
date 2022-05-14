<?php
//user.php
class user
{
    protected $db;
    public function __construct($dbconn)
    {
        $this->db = $dbconn;
    }
    /*
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
            $sql = "INSERT INTO user(email,pass,name) VALUES(?,?,?)";
            $regis = $this->db->prepare($sql);
            if($regis->execute([$t_email,$newpass,$t_name]))
            {
                header('location:logout.php');
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
    */
    public function login($email,$pass)
    {
        $t_email = trim($email);
        $t_pass = trim($pass);
        $check_sql = "SELECT * from user where email = ?";
        $check = $this->db->prepare($check_sql);
        $check->execute([$t_email]);
        if($check->rowCount() == 1)
        {
            $user = $check->fetch();
            if(password_verify($t_pass,$user['pass']))
            {
                $_SESSION['bweb'] = [
                    'uid' => $user['uid'],
                    'email' =>$user['email'],
                    'name' =>$user['name'],
                    'profile'=>$user['profile'],
                    'stats'=>$user['stats']
                ];
                header('location:home.php');
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
        $user = $find->fetch();
        return $user['name'];
    }
}



?>