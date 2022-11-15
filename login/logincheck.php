<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=webdb;charset=utf8',
                'webuser', 'abccsd2');
$sql = "SELECT * FROM user_tbl WHERE id = ? AND pass = ?";
$ps = $pdo->prepare($sql);
$ps->bindValue(1, $_POST['uid'], PDO::PARAM_INT);
$ps->bindValue(2, $_POST['psw'], PDO::PARAM_STR);
$ps->execute();
$searchArray = $ps->fetchAll();
    foreach($searchArray as $row){
$_SESSION['mail'] = $row['mail'];
$_SESSION['pas'] = $row['pas'];
    header('Location: ../itiran/itiran.php');
}
if(count($searchArray)==0){
    header('Location: login.php');
}
?>