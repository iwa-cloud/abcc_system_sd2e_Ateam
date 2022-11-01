<?php
class DBManager{
    private function dbConnect(){
        $pdo = new PDO('mysql:host=localhost;dbname=webdb;charset=utf8','webuser','abccsd2');

        return $pdo;
    }

    public function getUserTblByName($getid,$getpass){
        $result = "";
        $pdo = $this->dbConnect();
        $sql = "SELECT username FROM user_tbl WHERE id = ? AND pass = ?";

        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $getid ,PDO::PARAM_INT);
        $ps->bindValue(2, $getpass ,PDO::PARAM_STR);
        $ps->execute();

        $search = $ps->fetch();
        if(!(empty($search))){
            $result = "ようこそ！". $search['username']."さん";
        }else{
            $result = "ログインに失敗しました";
        }
        return $result;
    }

    public function getPlace($getplace){
        $result = "";
        $pdo = $this->dbConnect();
        $sql = "SELECT username , address FROM user_tbl WHERE address LIKE ?";

        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, '%'.$getplace.'%' ,PDO::PARAM_STR);
        $ps->execute();

        $search = $ps->fetchAll();
        if(!(empty($search))){
            $result = $search;
        }else{
            $result = null;
        }
        return $result;
    }

    public function writeTweet($getTweet){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO tweet_tbl (tweet_data , user_id , tweet) VALUES (CURDATE() , 1 , ?)";

        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $getTweet ,PDO::PARAM_STR);
        $ps->execute();
    }

    public function getAllTweet(){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM tweet_tbl";

        $ps = $pdo->query($sql);
        $ps->execute();
    
        $result = $ps->fetchAll();
        return $result;
    }

    // public function findTweet(){
    //     $pdo = $this->dbConnect();
    //     $sql = "SELECT * FROM tweet_tbl WHERE tweet LIKE ?";

    //     $ps = $pdo->prepare($sql);
    //     $ps->bindValue(1, '%'.$_POST['finds'].'%' ,PDO::PARAM_STR);
    //     $ps->execute();
    // }
}
?>