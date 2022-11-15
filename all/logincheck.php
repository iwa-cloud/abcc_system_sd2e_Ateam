<?php
session_start();
require_once '../DBManager.php';
$dbmng = new DBManager();
$searchArray = $dbmng->userSearch();

if(count($searchArray)==0){
    header('Location: login.php');
}else{
    foreach($searchArray as $row){
        $_SESSION['mail'] = $row['mail'];
        $_SESSION['pas'] = $row['pas'];
    }
    header('Location: ./itiran.php');
}
?>