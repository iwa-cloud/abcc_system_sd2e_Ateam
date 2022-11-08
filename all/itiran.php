<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>商品一覧試作</title>
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

  <?php
  require_once '../DBManager.php';
  $dbmng = new DBManager();
  $deviceNamesAll = $dbmng->getDeviceNames();
  $devicePricesAll = $dbmng->getDevicePrices();
  $deviceNamesArr;
  $devicePriceArr;
  $i = 0;

  //index番号で指定できるように配列に格納
  foreach ($deviceNamesAll as $row) {
    $deviceNamesArr[$i] = $row['device_name'];
    $i++;
  }
  $i = 0;
  foreach ($devicePricesAll as $row) {
    $devicePriceArr[$i] = $row['default_price'];
    $i++;
  }
  ?>
  
  <nav class="navbar navbar-expand navbar-dark" style="background: #232f3e;margin-bottom:30px;height:auto;" aria-label="2 番目のナビゲーション バーの例">
    <div class="container-fluid">
      <img src="./img/rogo.png"  width="80" height="30" class="img-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="ナビゲーションを切り替える">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav me-auto">
        </ul>
        <form role="search">
          <a class="nav-link" href="../ka-to/ka-to.php">
            <img src="./img/カート.png"  width="80" height="30" class="img-fluid">
          </a>
        </form>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
  <div class="row">
    <div class="col-4 itiran-card-margin">
      <div class="card itiran-card-size">
        <a href="./syosai.php">
          <?php
          //データベースにある商品情報のidを指定している
          session_start();
          $_SESSION['syosai'] = 1;
          ?>
          <img class="card-img-top itiran-photo-size" src="./img/ゲーミングキーボード1.png">
          <div class="card-body">
            <p class="card-title">
              <?php
              echo $deviceNamesArr[0];
              ?>
            </p>
            <p class="text-warning">
              <?php
              echo $devicePriceArr[0];
              ?>
            </p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-4 itiran-card-margin">
      <div class="card itiran-card-size">
        <a href="./syosai.php">
          <?php
          session_start();
          $_SESSION['syosai'] = 2;
          ?>
          <img class="card-img-top itiran-card-size" src="./img/ゲーミングキーボード2.png">
          <div class="card-body">
            <p class="card-title">
              <?php
              echo $deviceNamesArr[1];
              ?>
            </p>
            <p class="text-warning">
              <?php
              echo $devicePriceArr[1];
              ?>
            </p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-4 itiran-card-margin">
      <div class="card itiran-card-size">
        <a href="./syosai.php">
          <?php
          session_start();
          $_SESSION['syosai'] = 3;
          ?>
          <img class="card-img-top itiran-card-size" src="./img/ゲーミングキーボード3.png">
          <div class="card-body">
            <p class="card-title">
              <?php
              echo $deviceNamesArr[2];
              ?>
            </p>
            <p class="text-warning">
              <?php
              echo $devicePriceArr[2];
              ?>
            </p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-4 itiran-card-margin">
      <div class="card itiran-card-size">
        <a href="./syosai.php">
          <?php
          session_start();
          $_SESSION['syosai'] = 4;
          ?>
          <img class="card-img-top itiran-card-size" src="./img/ゲーミングヘッドフォン1.png">
          <div class="card-body">
            <p class="card-title">
              <?php
              echo $deviceNamesArr[3];
              ?>
            </p>
            <p class="text-warning">
              <?php
              echo $devicePriceArr[3];
              ?>
            </p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-4 itiran-card-margin">
      <div class="card itiran-card-size">
        <a href="./syosai.php">
          <?php
          session_start();
          $_SESSION['syosai'] = 5;
          ?>
          <img class="card-img-top itiran-card-size" src="./img/ゲーミングヘッドフォン2.png">
          <div class="card-body">
            <p class="card-title">
              <?php
              echo $deviceNamesArr[4];
              ?>
            </p>
            <p class="text-warning">
              <?php
              echo $devicePriceArr[4];
              ?>
            </p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-4 itiran-card-margin">
      <div class="card itiran-card-size">
        <a href="./syosai.php">
          <?php
          session_start();
          $_SESSION['syosai'] = 6;
          ?>
          <img class="card-img-top itiran-card-size" src="./img/ゲーミングヘッドフォン3.png">
          <div class="card-body">
            <p class="card-title">
              <?php
              echo $deviceNamesArr[5];
              ?>
            </p>
            <p class="text-warning">
              <?php
              echo $devicePriceArr[5];
              ?>
            </p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-4 itiran-card-margin">
      <div class="card itiran-card-size">
        <a href="./syosai.php">
          <?php
          session_start();
          $_SESSION['syosai'] = 7;
          ?>
          <img class="card-img-top itiran-card-size" src="./img/ゲーミングマウス1.png">
          <div class="card-body">
            <p class="card-title">
              <?php
              echo $deviceNamesArr[6];
              ?>
            </p>
            <p class="text-warning">
              <?php
              echo $devicePriceArr[6];
              ?>
            </p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-4 itiran-card-margin">
      <div class="card itiran-card-size">
        <a href="./syosai.php">
          <?php
          session_start();
          $_SESSION['syosai'] = 8;
          ?>
          <img class="card-img-top itiran-card-size" src="./img/ゲーミングマウス2.png">
          <div class="card-body">
            <p class="card-title">
              <?php
              echo $deviceNamesArr[7];
              ?>
            </p>
            <p class="text-warning">
              <?php
              echo $devicePriceArr[7];
              ?>
            </p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-4 itiran-card-margin">
      <div class="card itiran-card-size">
        <a href="./syosai.php">
          <?php
          session_start();
          $_SESSION['syosai'] = 9;
          ?>
          <img class="card-img-top itiran-card-size" src="./img/ゲーミングマウス3.png">
          <div class="card-body">
            <p class="card-title">
              <?php
              echo $deviceNamesArr[8];
              ?>
            </p>
            <p class="text-warning">
              <?php
              echo $devicePriceArr[8];
              ?>
            </p>
          </div>
        </a>
      </div>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
      