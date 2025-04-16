<?php
require_once __DIR__ . '/../../Controller/userController.php';
require_once __DIR__ . '/../../Model/user.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $user = new user($First_Name, $Last_Name, $email, $pwd);
    $userController = new userController();
    $userController->addUser($user);

    header('Location: ../../View/showUsers.php');
    exit();
}
?>