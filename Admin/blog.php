<?php 
session_start();
require 'confing.php';
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

if(isset($_POST["submit_btn"])){
	
	 $post_title=htmlentities($_POST["post_title"]);
	 $post_text=htmlentities($_POST["post_text"]);

	if(!empty($post_title) && !empty($post_text)):
	$sql="INSERT INTO tbl_post (post_title,post_text,post_url) VALUES (:post_title, :post_text,:post_url)";
	$stmt = $conn->prepare($sql);
	$stmt->bindvalue(':post_title', $post_title);
	$stmt->bindvalue(':post_text',  $post_text);
	$stmt->bindvalue(':post_url',   php_slug($post_title));
  	$stmt->execute();

	if($stmt->execute()):
		//header("location:/scan/blog/".php_slug($post_title)."");
		//header("location:/scan/blog.php?post_url=".php_slug($post_title)."");
	echo '<h1>Post publish sucesfull</h1>';
	else:
		echo '<h1>Post publish faild</h1>';
	endif;






else:
	echo 'INPUT FIELD EAMPTY NOT ALLOWED';
 endif;
}

function php_slug($string){
	$slug=preg_replace('/[^a-z0-9-]+/', '-', strtolower($string));
	return $slug;
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<style>
		.container{
			width: 800px;
			margin: 0 auto;
			border: 1px solid #ccc;
			padding: 16px;
		}
		.form_text{
			width: 100%;
			padding: 6px;
		}
		.blog_fro{
			width: 840px;
			margin: 0 auto;
		}
	</style>
<!--   <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script> -->
  	      <script type="text/javascript" src="Admin/js/jquery-3.1.1.min.js"></script>
	      <script type="text/javascript" src="blog/plugins/tinymce/tinymce.min.js"></script>
	      <script type="text/javascript" src="plugins/tinymce/init-tinymce.js"></script>
</head>
<body>
<?php if(!empty($user)): ?>
<div class="container">
<h3 align="center">Scan bangladesh Blog</h3>
      <h4>UserName:<strong><?php echo $user['username']; ?></strong></h4>
        <h4>Email:<strong><?php echo $user['email']; ?></strong></h4>
        <li><a href="logout.php">Logout</a></li>   
</div>
	      <form name="submit_from" action="" method="post" class="blog_fro">
	      	<p>Post Title
	      		<input type="text" name="post_title" class="form_text" maxlength="200">
	      	</p>
	      	<p>Post Text
	      		<textarea name="post_text" class="form_text tinymce" rows="10"></textarea>
	      	</p>
	      	<p>
	      		<input type="submit" name="submit_btn" value="Submit">
	      	</p>
	      </form>  
<?php else: ?>
  <?php //header("Location:/login/index.php"); ?>
  <div class="container">
  	  <img src="not.png" alt="">
  </div>

<?php endif; ?>

</body>
</html>