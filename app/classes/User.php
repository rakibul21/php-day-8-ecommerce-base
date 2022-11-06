<?php


namespace App\classes;
class User
{

    public $email;
    protected $password;
    private $userType;

    public function __construct()
    {
        $this->email = 'user@gmail.com';
        $this->password = '123456';
        $this->userType = 'Admin';
    }

    public function getEmail()
    {
        return $this->email;
    }
    protected function getPassword()
    {
        return $this->password;
    }
    private function getUserType()
    {
        return $this->userType;
    }


//    public $email;
//    protected $password;
//    private $userType;
////    static
//
//    public function __construct()
//    {
//        $this->email = 'user@gmail.com';
//        $this->password = '123456';
//        $this->userType = 'Admin';
//    }
//
//    public function getEmail()
//    {
//        return $this->email;
//    }
//    public function getUserType()
//    {
//        return $this->userType;
//    }
//
//    public function getPassword()
//    {
//        return $this->password;
//    }

}