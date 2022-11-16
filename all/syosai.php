<!DOCTYPE html>
<?php
session_start();
?>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>商品詳細試作</title>
    <style>
    </style>
    <script type="text/javascript">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <?php
    // session_start();
    // $syosai = $_SESSION['syosai'];
    $syosai = $_POST['device'];
    // echo "<h1>".$syosai."</h1>";
    require_once '../DBManager.php';
    $dbmng = new DBManager();
    $deviceInfomation = $dbmng->deviceSearch($syosai);
    $photo;$device_name;$default_price;$sale_price;$manufacturer;$brand;$connection_method;$recommended_use;
    foreach($deviceInfomation as $row){
        $photo = $row['photo'];
        $device_name = $row['device_name'];
        $default_price = $row['default_price'];
        $sale_price = $row['sale_price'];
        $manufacturer = $row['manufacturer'];
        $brand = $row['brand'];
        $connection_method = $row['connection_method'];
        $recommended_use = $row['recommended_use'];
    }
    ?>
    <nav class="navbar navbar-expand navbar-dark" style="background: #232f3e;" aria-label="2 番目のナビゲーション バーの例">
        <div class="container-fluid">
            <img src="img/rogo.png" width="80" height="30" class="img-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="ナビゲーションを切り替える">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample02">
                <ul class="navbar-nav me-auto">
                </ul>
                <form role="search">
                    <a class="nav-link" href="ka-to.php"><img src="img/カート.png" width="80" height="30" class="img-fluid"></a>
                </form>
            </div>
        </div>
    </nav>

    <div class="box">
        <div class="box-img">
            <?php
            echo '<img src="img/'.$photo.'" class="img">';
            ?>
        </div>
        <div class="box-text">
            <h1>
                <?php
                $device_name;
                ?>
            </h1>
            <p>参考価格：
                <?php
                $default_priceStr = "￥" . number_format($default_price);
                echo $default_priceStr;
                ?><br>
                セール特価：
                <?php
                $sale_priceStr = "￥" . number_format($sale_price);
                echo $sale_priceStr;
                ?><br>
                OFF：
                <?php
                $priceStr = "￥".number_format($default_price - $sale_price);
                echo $priceStr;
                ?><br>
                <br>

                商品詳細
                <?php
                // echo '"￥".number_format($default_price - $sale_price)';
                ?>
                <br>
                <br>
                メーカー:
                <?php
                echo $manufacturer;
                ?><br>
                ブランド:
                <?php
                echo $brand;
                ?><br>
                接続方法:
                <?php
                echo $connection_method;
                ?><br>
                商品推奨用途:
                <?php
                echo $recommended_use;
                ?><br>
            </p>


            <button class="btn btn-warning btn-lg text-dark" type="button" onclick="location.href='ka-to.php'">カートに入れる</button>
        </div>
    </div>