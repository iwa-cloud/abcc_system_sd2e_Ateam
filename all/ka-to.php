<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./css/style.css">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>カート試作</title>
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
    // $syosai = $_POST['device'];
    // echo "<h1>".$syosai."</h1>";
    require_once '../DBManager.php';
    $dbmng = new DBManager();
    $deviceInfomationAll = $dbmng->deviceSearchAll();
    $device_id;
    $photos;
    $device_names;
    $default_prices;
    $sale_prices;
    $manufacturers;
    $brands;
    $connection_methods;
    $recommended_uses;
    $deviceEvaluationValues;
    $deviceEvaluationNumbers;
    $gokei = 0;
    foreach ($deviceInfomationAll as $row) {
        $device_id[] = $row['device_id'];
        $photos[] = $row['photo'];
        $device_names[] = $row['device_name'];
        $default_prices[] = $row['default_price'];
        $sale_prices[] = $row['sale_price'];
        $manufacturers[] = $row['manufacturer'];
        $brands[] = $row['brand'];
        $connection_methods[] = $row['connection_method'];
        $recommended_uses[] = $row['recommended_use'];
        $deviceEvaluationValues[] = $row['evaluation_value'];
        $deviceEvaluationNumbers[] = $row['number_of_evaluation'];
    }

    // unset($_SESSION['devices']);
    if (isset($_POST['device_id']) && !isset($_POST['deleteDevice'])) {
        //index番号を格納
        $_SESSION['devices'][count($_SESSION['devices'])] = $_POST['device_id'] - 1;
        $_POST['device_id'] = null;
        // $_SESSION['devices'][count($_SESSION['devices'])] = 2;
        // echo "<h1>".$_SESSION['devices'][count($_SESSION['devices'])]."</h1>";
    }else if(isset($_POST['deleteDevice'])){
      $index = array_search($_POST['deleteDevice'],$_SESSION['devices']);
      unset($_SESSION['devices'][$index]);
      $_SESSION['devices'] = array_values($_SESSION['devices']);
      $_POST['deleteDevice'] = null;
    //   $_POST['device_id'] = null;
    //   header('Location: ./ka-to.php');
    }
    ?>

    <nav class="navbar navbar-expand navbar-dark" style="background: #232f3e;" aria-label="2 番目のナビゲーション バーの例">
        <div class="container-fluid">
            <a class="nav-link" href="./itiran.php">
                <img src="./img/rogo.png" width="80" height="30" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="ナビゲーションを切り替える">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample02">
                <ul class="navbar-nav me-auto">
                </ul>
                <form role="search">
                    <a class="nav-link" href="./ka-to.php"><img src="./img/カート.png" width="80" height="30" class="img-fluid"></a>
                </form>
            </div>
        </div>
    </nav>


    <!-- <form action="?????" method="post"></form> -->
    <div name="maindiv">
        <div>
            <h1 style="text-align: center;margin: 30px;">カート</h1>
        </div>
    </div>

    <div name="maindiv" class="container-fluid">
        <div class="row">
            <?php
            for ($i = 0; $i < count($_SESSION['devices']); $i++) {
                $price;
                if ($sale_prices[$_SESSION['devices'][$i]] == 0) {
                    $price = $default_prices[$_SESSION['devices'][$i]];
                } else {
                    $price = $sale_prices[$_SESSION['devices'][$i]];
                }
                echo '<div class="col-sm-4 col-xs-6">';
                echo '<div class="card itiran-card-margin" style="height: 550px; margin-bottom:20px;">';
                echo '<img class="card-img-top itiran-photo-size" src="./img/' . $photos[$_SESSION['devices'][$i]] . '">';
                echo '<div class="card-body">';
                echo '<form action="./syosai.php" method="post" name="a_form' . ($_SESSION['devices'][$i] + 1) . '">';
                echo '<input type="hidden" name="device" value="' . ($_SESSION['devices'][$i] + 1) . '">';
                echo '<a href="javascript:a_form' . ($_SESSION['devices'][$i] + 1) . '.submit();" style="text-decoration:none;">';
                echo '<p class="card-title text-height" style="flex-grow: 1;">';
                echo $device_names[$_SESSION['devices'][$i]];
                echo '</p>';
                echo '<p>';
                echo '<span class="star5_rating" data-rate="' . $deviceEvaluationValues[$_SESSION['devices'][$i]] . '"></span>';
                echo '<span style="margin-left: 10px;">' . number_format($deviceEvaluationNumbers[$_SESSION['devices'][$i]]) . '</span>';
                echo '</p>';
                echo '<span class="text-danger">';
                echo "￥" . number_format($price);
                echo '</span>';
                echo '</a>';
                echo '</form>';
                echo '</div>';
                echo '</div>';echo '<span class="text-danger">';
                echo '<form action="./ka-to.php" method="post">';
                echo '<input type="hidden" name="deleteDevice" value="';
                echo $_SESSION['devices'][$i];
                echo '">';
                echo '<input class="btn btn-warning btn-lg text-dark" type="submit" value="削除">';
                echo '</form>';
                echo '</span>';
                echo '</div>';
                $gokei += $price;
            }
            ?>
        </div>
        <div class="text-right">
            <h2>合計金額:
                <?php
                echo "￥" . number_format($gokei);
                ?>
            </h2>
            <button class="btn btn-warning btn-lg text-dark" type="button" onclick="location.href='end.php'">購入を確定</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>