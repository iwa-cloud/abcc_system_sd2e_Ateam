<?php
class DBManager{
    private function dbConnect(){
        $dsn = 'mysql:host=mysql207.phy.lolipop.lan;dbname=LAA1418438-gamingsite;charset=utf8';
        $user = 'LAA1418438';
        $password = 'gahaha182';
        $pdo = new PDO($dsn, $user, $password);

        return $pdo;
    }

    //商品テーブルから商品名を取得
    public function getDeviceNames(){
        $pdo = $this->dbConnect();
        $sql = "SELECT device_name FROM device_information";
        // $sql = "SELECT device_name, default_price, evaluation_value FROM device_information";

        $ps = $pdo->query($sql);
        $ps->execute();
    
        $result = $ps->fetchAll();
        return $result;
    }

    // 商品テーブルから参考価格を取得
    public function getDevicePrices(){
        $pdo = $this->dbConnect();
        $sql = "SELECT default_price FROM device_information";

        $ps = $pdo->query($sql);
        $ps->execute();
    
        $result = $ps->fetchAll();
        return $result;
    }

    // public function getUserTblByName($getid,$getpass){
    //     $result = "";
    //     $pdo = $this->dbConnect();
    //     $sql = "SELECT username FROM user_tbl WHERE id = ? AND pass = ?";

    //     $ps = $pdo->prepare($sql);
    //     $ps->bindValue(1, $getid ,PDO::PARAM_INT);
    //     $ps->bindValue(2, $getpass ,PDO::PARAM_STR);
    //     $ps->execute();

    //     $search = $ps->fetch();
    //     if(!(empty($search))){
    //         $result = "ようこそ！". $search['username']."さん";
    //     }else{
    //         $result = "ログインに失敗しました";
    //     }
    //     return $result;
    // }

    // public function getPlace($getplace){
    //     $result = "";
    //     $pdo = $this->dbConnect();
    //     $sql = "SELECT username , address FROM user_tbl WHERE address LIKE ?";

    //     $ps = $pdo->prepare($sql);
    //     $ps->bindValue(1, '%'.$getplace.'%' ,PDO::PARAM_STR);
    //     $ps->execute();

    //     $search = $ps->fetchAll();
    //     if(!(empty($search))){
    //         $result = $search;
    //     }else{
    //         $result = null;
    //     }
    //     return $result;
    // }

    // public function writeTweet($getTweet){
    //     $pdo = $this->dbConnect();
    //     $sql = "INSERT INTO tweet_tbl (tweet_data , user_id , tweet) VALUES (CURDATE() , 1 , ?)";

    //     $ps = $pdo->prepare($sql);
    //     $ps->bindValue(1, $getTweet ,PDO::PARAM_STR);
    //     $ps->execute();
    // }

    // public function getAllTweet(){
    //     $pdo = $this->dbConnect();
    //     $sql = "SELECT * FROM tweet_tbl";

    //     $ps = $pdo->query($sql);
    //     $ps->execute();
    
    //     $result = $ps->fetchAll();
    //     return $result;
    // }

}
?>