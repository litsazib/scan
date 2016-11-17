<?php 
error_reporting(0);
require 'confing.php';
$massage='';

if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])):
  
   $stmt = $conn->prepare("INSERT INTO users (username,email, password) VALUES (:username, :email,:password)");
	// $sql="INSERT INTO users(username,email,password) VALUES (:username,:email,:password)";
	// $stmt=$conn->prepare($sql);
	$stmt->bindParam(':username', $_POST['username']);
	$stmt->bindParam(':email',    $_POST['email']);
	$stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));
	if($stmt->execute()):
		 $massage='User Create Sucessfull';
	else:
		 $massage='User Create faild!';
	endif;
	
endif;
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
<div class="signin-form">
<div class="container">    	
        <form method="post" class="form-signin" action="">
            <h2 class="form-signin-heading">Sign up.</h2><hr />
                  <?php if(!empty($massage)): ?>
                 <div class="alert alert-info">
                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; <?php echo $massage;?>
                      <script>
                      var msg = new SpeechSynthesisUtterance('Your Registation Sucessfull');
                      window.speechSynthesis.speak(msg);
                      </script> 
                 </div>                
                <?php endif; ?>
            <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Enter Username" value="" />
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Enter E-Mail ID" value="" />
            </div>
            <div class="form-group">
            	<input type="password" class="form-control" name="password" placeholder="Enter Password" />
            </div>
            <div class="clearfix"></div><hr />
            <div class="form-group">
            	<button type="submit" class="btn btn-primary" name="btn-signup">
                	<i class="glyphicon glyphicon-open-file"></i>&nbsp;SIGN UP
                </button>
            </div>
            <br />
            <label>have an account ! <a href="index.php">Sign In</a></label>
        </form>
       </div>
</div>

</div>

</body>
</html>