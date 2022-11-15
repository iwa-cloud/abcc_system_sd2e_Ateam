<!DOCTYPE html>
<html>

<head>
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
    
    <nav class="navbar navbar-expand navbar-dark" style="background: #232f3e;" aria-label="2 番目のナビゲーション バーの例">
        <div class="container-fluid">
          <img src="./img/rogo.png"  width="80" height="30" class="img-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="ナビゲーションを切り替える">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav me-auto">
            </ul>
            <form role="search">
                <a class="nav-link" href="./ka-to.php"><img src="./img/カート.png"  width="80" height="30" class="img-fluid"></a>
            </form>
          </div>
        </div>
      </nav>


    <form action="?????" method="post"></form>
<div name="maindiv">
	<div>
        <h1 style="text-align: center;margin: 30px;">カート</h1>
    </div>
</div>

<div name="maindiv" class="container">
    <div class="row">
      <div class="col-sm-4 col-xs-6">
        <div class="card">
          <a href="syosai.php">
            <img class="card-img-top" src="./img/ゲーミングキーボード1.png">
            <div class="card-body">
                <p class="card-title">Logicool G ロジクールゲーミングキーボードG913 TKL</p>
                <p class="text-warning">30,000</p>
           </div>
          </a>
        </div>
      </div>
  
      <div class="col-sm-4 col-xs-6">
        <div class="card">
          <a href="../商品詳細試作/商品詳細試作.html">
            <img class="card-img-top" src="./img/ゲーミングヘッドフォン1.png">
            <div class="card-body">
                <p class="card-title">SOMIC ゲーミングヘッドセット 猫耳ヘッドホン ワイヤレスヘッドセット オーバーイヤーヘッドホン マイク付き 50ｍｍ ドラ...</p>
                <p class="text-warning">8999</p>
           </div>
          </a>
        </div>
      </div>
  
      <div class="col-sm-4 col-xs-6">
        <div class="card">
          <a href="../商品詳細試作/商品詳細試作.html">
            <img class="card-img-top" src="./img/ゲーミングマウス1.png">
            <div class="card-body">
                <p class="card-title">Razer Basilisk Ultimate</p>
                <p class="text-warning">9980</p>
           </div>
          </a>
        </div>
      </div>
    </div>
<div class="text-right">
    <h2>合計金額:</h2>
    <button class="btn btn-warning btn-lg text-dark" type="button" onclick="location.href='end.php'">購入を確定</button>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>