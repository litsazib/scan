<?php 
error_reporting(0);
session_start();
require 'confing.php';
?>
<html lang="en-gb">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Login System</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="bootstrap/style.css" type="text/css"  />
</head>
<body>
<?php 
if(isset($_SESSION['user_id'])) {
  $records=$conn->prepare('select id,username,email,password FROM users WHERE id = :id');
  $records->bindParam(':id',$_SESSION['user_id']);
  $records->execute();
  $result =$records->fetch(PDO::FETCH_ASSOC);
  $user=NULL;
  if(count($result)>0){
    $user=$result;
  }
}
?>
<script>
var msg = new SpeechSynthesisUtterance('Welcome to Dashbord');
window.speechSynthesis.speak(msg);
</script>
<?php if(!empty($user)): ?>
  <div class="container main">
    <div class="row">    
    <div class="col-md-12">
      <div class="showlog">
        <h4>UserName:<strong><?php echo $user['username']; ?></strong></h4>
        <h4>Email:<strong><?php echo $user['email']; ?></strong></h4>
        <a href="logout.php">Logout?</a>
      </div>
    </div>
    <div class="col-md-12">
      <h4 class="text-center">ジャコス　JCSシステム</h4>
      <div class="clock">
        <p>メンテナンスのお知らせ<br>
        ２０１６年１０月１日AM１：００から２：００の時間帯でメンテナンスを行います。
        </p>
      </div>
    </div>
      <div class="col-md-12">
       <div class="navbutton">
           <li><a href="#">確定ピッキング</a></li>
           <li><a href="#">手書き入力</a></li>
           <li><a href="#">データ出力</a></li>
           <li><a href="#">請求業務</a></li>
           <li><a href="logout.php">ログアウト</a></li>           
       </div>
      </div>
    </div>        
  </div>
<?php else: ?>
  <?php header("Location:/login/index.php"); ?>
  <h1>404 Page not found! </h1>
<?php endif; ?>
</div>
</body>
</html>