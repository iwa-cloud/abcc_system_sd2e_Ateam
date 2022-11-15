<?php
session_start();
require_once '../DBManager.php';
$dbmng = new DBManager();
$searchArray = $dbmng->userSearch($_POST['mail'],$_POST['pas']);
// $_SESSION['array'] = $searchArray;

if($searchArray==null){
    header('Location: login.php');
}else{
    foreach($searchArray as $row){
        $_SESSION['mail'] = $row['id'];
        $_SESSION['pas'] = $row['pass'];
    }
    header('Location: ./itiran.php');
}
?>