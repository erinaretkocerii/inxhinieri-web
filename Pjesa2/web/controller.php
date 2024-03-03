<?php
include_once 'UserRepo.php';
include_once 'user.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['name']) || 
    empty($_POST['username'])||
    empty($_POST['email'])||
    empty($_POST['password'])){
        echo "Fill all fields!";
    }
    else{
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $id = $emri.rand(100,999);

        $user = new User($id,$name,$username,$email,$password);
        $userRepo = new UserRepo();

        $userRepo->insertUser($user);
    }
}




?>