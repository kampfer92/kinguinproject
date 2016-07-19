<?php
namespace App\Models\SignUp;
class SignupModel
{
    private $username;
    private $password;
    private $pass;
    public  $activationcode;
    
    public function __construct($email,$password,$pass2) {
        $this->username = $email;
        $this->password = $password;
        $this->pass = $pass2;
    }
    public function validateEmail()
    {
        $email= trim($this->username);
        $email= filter_var($email,FILTER_SANITIZE_EMAIL);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)=== false) {
            return true;
        }else{
        return false;
    }
    }
    public function passCheck()
    {
      
      $password= trim($this->password);
      $pass2= trim($this->pass);
      $len=  strlen($password);
      $pattern = "/[a-zA-Z0-9]/";
        if($len > 5 && $len < 21)
        {
        if (preg_match($pattern, $password))
         {
            if ($password === $pass2)
            {
                return true;
            }
         }
        }
        return false;
    }
      public function checkDB()
    {
        $app= \Yee\Yee::getInstance();
        $app->db['default']->where("username",$this->username);
        $data=$app->db['default']->getOne('users');
        
           if($data === NULL)
           {
             return false;
           }
            return true;
    }
    public function register() {
        $app= \Yee\Yee::getInstance();
        $db= $app->db['default'];
        $this ->activationcode= $this ->activationCode();
        $data = array
        (
            "username"=> $this->username,
            "password"=> $this->password,
            "active"=> 1,
            "signupdate"=> date("Y-m-d H:i:s"),
            "activationcode"=> $this->activationcode,
        );
       
        $db->insert("users", $data );
    }
    public function activationCode()
    {
        return md5($this->username);
    }
} 