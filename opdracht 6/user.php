<?php 
class user{
    private $username;
    private $password; 
    public $email;
    private $role;

    public function registerUser($un, $password, $email, $role){
        
        $this->username = $un;
        $this->role = $role;
        $this->password = $password;
        $this->email = $email;
    }

}


?>