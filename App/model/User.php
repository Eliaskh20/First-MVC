<?php
namespace App\Model;
use \PDO;

abstract class Model{
    protected $id;

    public function getId()
    {
       return $this->id;
    }

    abstract public function save($conn);
    abstract public function delete($conn);
    // public static function getAll($pdo,$user)
    // {
    //     $stmt = $pdo->query(" SELECT * FROM $user ");
    //     $users = array();

    //     while( $result = $stmt->fetchAll(PDO::FETCH_BOTH)){
    //         static $i = '0';
    //         echo $i;
    //         $user = new User();
    //         $user->id = $result[$i]['0'];
    //         $user->setName($result[$i]['1']);
    //         $user->setEmail($result[$i]['2']);
    //         $users[] = $user;
    //         $i+1;
    //     }
    //     return $users;
    // }
}


class User extends Model{
    private $name;
    private $email;
    private $password;

    public function getName()
    {
       return $this->name;
    }
    public function getEmail()
    {
       return $this->email;
    }
    public function getPassword()
    {
       return $this->password;
    }


    public function setName($name)
    {
        $this->name = $name;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }


    public static  function getAllUsers($pdo)
    {
        $stmt = $pdo->query(" SELECT * FROM `users`");
        $users = array();
        $result = $stmt->fetchAll(PDO::FETCH_BOTH);
          foreach($result as $row){
            $user = new User();
            $user->id = $row['0'];
            $user->setName($row['1']);
            $user->setEmail($row['2']);
            $users[] = $user;
        }
        return $users;
       
    }


    public static function getUserId($pdo,$id)
    {
        $stmt = $pdo->query("SELECT * FROM `users` WHERE id  = '$id' ");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
       $user  = new User();
       $user->id = $result['0']['id'];
       $user->setName($result['0']['name']);
       $user->setEmail($result['0']['email']);
    
    return $user;
    }

    public function save($pdo)
    {
        if($this->id){
            $stmt = $pdo->query("UPDATE `users` SET name = '$this->name' ,email = '$this->email'  WHERE id = '$this->id' ");
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        else{
            $stmt = $pdo->query("INSERT INTO  `users` (name,email) VALUES ('$this->name' ,'$this->email')");
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        }
    }

    public function delete($pdo)
    {
        $stmt = $pdo->query("DELETE FROM `users` WHERE id = '$this->id' ");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}