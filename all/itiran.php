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
  $result = $dbmng->getDevices();
  $names = [];
  foreach($name , )
  ?>
  <nav class="navbar navbar-expand navbar-dark" style="background: #232f3e;margin-bottom:30px;height:auto;" aria-label="2 番目のナビゲーション バーの例">
    <div class="container-fluid">
      <img src="../img/rogo.png"  width="80" height="30" class="img-fluid">
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
    <div class="col-4">
      <div class="card">
        <a href="syosai.php">
          <img class="card-img-top itiran-card-size" src="./img/ゲーミングキーボード1.png">
          <div class="card-body">
            <p class="card-title">キーボード1</p>
            <p class="text-warning">30,000</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <a href="https://www.youtube.com/">
          <img class="card-img-top itiran-card-size" src="./img/ゲーミングキーボード2.png">
          <div class="card-body">
            <p class="card-title">キーボード２</p>
            <p class="text-warning">30,000</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <a href="https://www.youtube.com/">
          <img class="card-img-top itiran-card-size" src="./img/ゲーミングキーボード3.png">
          <div class="card-body">
            <p class="card-title">キーボード３</p>
            <p class="text-warning">30,000</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <a href="https://www.youtube.com/">
          <img class="card-img-top itiran-card-size" src="./img/ゲーミングヘッドフォン1.png">
          <div class="card-body">
            <p class="card-title">ヘッドフォン1</p>
            <p class="text-warning">30,000</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <a href="https://www.youtube.com/">
          <img class="card-img-top itiran-card-size" src="./img/ゲーミングヘッドフォン2.png">
          <div class="card-body">
            <p class="card-title">ヘッドフォン2</p>
            <p class="text-warning">30,000</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <a href="https://www.youtube.com/">
          <img class="card-img-top itiran-card-size" src="./img/ゲーミングヘッドフォン3.png">
          <div class="card-body">
            <p class="card-title">ヘッドフォン3</p>
            <p class="text-warning">30,000</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <a href="https://www.youtube.com/">
          <img class="card-img-top itiran-card-size" src="./img/ゲーミングマウス1.png">
          <div class="card-body">
            <p class="card-title">マウス1</p>
            <p class="text-warning">30,000</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <a href="https://www.youtube.com/">
          <img class="card-img-top itiran-card-size" src="./img/ゲーミングマウス2.png">
          <div class="card-body">
            <p class="card-title">マウス2</p>
            <p class="text-warning">30,000</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <a href="https://www.youtube.com/">
          <img class="card-img-top itiran-card-size" src="./img/ゲーミングマウス3.png">
          <div class="card-body">
            <p class="card-title">マウス3</p>
            <p class="text-warning">30,000</p>
          </div>
        </a>
      </div>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
      