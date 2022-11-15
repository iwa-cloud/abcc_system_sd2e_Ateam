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
   $_SESSION['syosai'] = "syosai";
   ?>
   <?php
   session_start();
   $syosai=$_SESSION['syosai'];
   ?>  
    <nav class="navbar navbar-expand navbar-dark" style="background: #232f3e;" aria-label="2 番目のナビゲーション バーの例">
        <div class="container-fluid">
          <img src="img/rogo.png"  width="80" height="30" class="img-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="ナビゲーションを切り替える">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav me-auto">
            </ul>
            <form role="search">
                <a class="nav-link" href="ka-to.php"><img src="img/カート.png"  width="80" height="30" class="img-fluid"></a>
            </form>
          </div>
        </div>
      </nav>

      <div class="box">
        <div class="box-img">
          <img src="img/ゲーミングキーボード1.png" class="img">
        </div>
          <div class="box-text">
            <h1>商品1</h1>
            <p>参考価格：￥30,000<br>
               セール特価：￥28,900<br>
               OFF：￥1,100<br>
              <br>
              
               商品詳細
               <br>
               <br>
               メーカー<br>
               ブランド<br>
            </p>
       

            <button class="btn btn-warning btn-lg text-dark" type="button" onclick="location.href='ka-to.php'">カートに入れる</button>
          </div>
      </div>