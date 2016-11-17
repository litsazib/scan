<?php 
session_start();
require 'confing.php';
if(!empty($_POST['email']) && !empty($_POST['password'])):	

$records=$conn->prepare('select id,username,email,password FROM users WHERE email = :email');
	
	$records->bindParam(':email', $_POST['email']);
	$records->execute();
	$results =$records->fetch(PDO::FETCH_ASSOC);
    $massage='';	
	if(count($results)> 0 && password_verify($_POST['password'],$results['password'])){
		$_SESSION['user_id']=$results['id'];
        header("Location:/scan/Admin/blog.php");
	}else{
		$massage='Sorry!Your Email or Password are Incorect..';       
	}	
endif;
?>
<html lang="en-gb">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Scan Bangladesh | Admin </title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="bootstrap/style.css" type="text/css"  />
</head>
<body>
<div class="signin-form">
	<div class="container">
       <form class="form-signin" method="post" id="login-form" action="index.php">      
        <h2 class="form-signin-heading text-center">Scan Bangladesh</h2><hr />
    <?php if(!empty($massage)): ?>
        <div id="error">
                <div class="alert alert-danger">
                   <i class="glyphicon glyphicon-warning-sign"></i>
                   <script>
                  var msg = new SpeechSynthesisUtterance('Please try again');
                  window.speechSynthesis.speak(msg);
                  </script>
                   <?php echo $massage; ?>
                </div>
        </div>
    <?php endif; ?>
        <div class="form-group">
        <label for="email">User ID</label>
        <input type="text" class="form-control" name="email" placeholder="Username or E mail ID" required />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Your Password" required />
        </div>
       
     	<hr />
        
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-default">
                	<i class="glyphicon glyphicon-log-in"></i> &nbsp; Sign In
            </button>
        </div>  
      	<br />
            <label>Don't have account yet ! <a href="http://localhost/scan/Admin/registar.php">Sign Up</a></label>
      </form>

    </div>
    
</div>

</body>
</html>