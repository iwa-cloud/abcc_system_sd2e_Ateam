<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample</title>
</head>
<body>
    <?php
    $dsn = 'mysql:host=mysql207.phy.lolipop.lan;dbname=LAA1418438-gamingsite;charset=utf8';
    $user = 'LAA1418438';
    $password = 'gahaha182';


    try {
        $pdo = new PDO($dsn, $user, $password);
        print('connected to the database!!<br><br>');
    } catch (PDOException $e) {
        print('Error:'.$e->getMessage());
        die();
    }

    //SELECT TEST
    $sql = "SELECT * FROM sample_tbl";
    $ps = $pdo->prepare($sql);
    $ps->execute();
    $search = $ps->fetchAll();
    foreach ($search as $row) {
        echo $row['id']."と".$row['name']."<br>";
    }
    echo "<br>";

    //INSERT TEST
    $sql = "INSERT INTO sample_tbl VALUES (2,?);";
    $ps = $pdo->prepare($sql);
    $ps->bindValue(1, "サンプル２" ,PDO::PARAM_STR);
    $ps->execute();

    //SELECT TEST
    $sql = "SELECT * FROM sample_tbl";
    $ps = $pdo->prepare($sql);
    $ps->execute();
    $search = $ps->fetchAll();
    foreach ($search as $row) {
        echo $row['id']."と".$row['name']."<br>";
    }
    echo "<br>";

    //DELETE TEST
    $sql = "DELETE FROM sample_tbl WHERE id = ?";
    $ps = $pdo->prepare($sql);
    $ps->bindValue(1, 1 ,PDO::PARAM_INT);
    $ps->execute();

    //SELECT TEST
    $sql = "SELECT * FROM sample_tbl";
    $ps = $pdo->prepare($sql);
    $ps->execute();
    $search = $ps->fetchAll();
    foreach ($search as $row) {
        echo $row['id']."と".$row['name']."<br>";
    }

    // 最後の処理（セキュリティ）
    $pdo = null;
    ?>
</body>
</html>