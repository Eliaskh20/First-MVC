<?php

namespace App\controller;
require_once 'BaseControlle.php';
require_once __DIR__.'/../model/User.php';
use App\Model\User;
use App\Model;

class UserController extends BaseController{
    public function index()
    {
        $table = "users";
       $users =User::getAllUsers($this->conn);
       require 'views/layout.php';
    }

    public function create()
    {
        if($_SERVER['REQUEST_METHOD']== 'POST'){
            $user = new User();
            $user->setName($_POST['name']);
            $user->setEmail($_POST['email']);
            $user->save($this->conn);
            header('Location: /Darrebni/HOme%20Task/user-mvcacc/');

        }else{
            // echo __DIR__;
            require_once __DIR__ .  '/../../views/user/create.php';
        }
    }

    public function edit()
    {
        $id = $_GET['id'];
        $user = User::getUserId($this->conn,$id);
        require 'views/user/edit.php';
    }
    public function update(){
        $id = $_GET['id'];
        $user = User::getUserId($this->conn,$id);
        $user->setName($_POST['name']);
        $user->setEmail($_POST['email']);
        $user->save($this->conn);
        header('Location:/Darrebni/HOme Task/user-mvcacc/');
        exit;


    }

    public function delete ()
    {
        $id = $_GET['id'];
        $user = User::getUserId($this->conn, $id);
        $user->delete($this->conn);
        header('Location:/Darrebni/HOme%20Task/user-mvcacc/');
        exit;
    }
    
}