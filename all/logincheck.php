<?php
session_start();
unset($_SESSION['user_id']);
require_once '../DBManager.php';
$dbmng = new DBManager();
$user = $dbmng->userSearch($_POST['mail'],$_POST['pas']);
// $_SESSION['array'] = $searchArray;

if($user==null){
    header('Location: login.php');
}else{
    foreach($user as $row){
        $_SESSION['user_id'] = $row['user_id'];
    }
    // $_SESSION['user_id'] = $user;
    header('Location: ./itiran.php');
}
?>