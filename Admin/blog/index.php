<?php 
session_start();
require_once('config.php');

if(isset($_POST["submit_btn"])){
	 $post_title=mysqli_escape_string($connect,$_POST["post_title"]);
	 $post_text=mysqli_escape_string($connect,$_POST["post_text"]);


	 $post_title=htmlentities($_POST["post_title"]);
	 //$post_text=htmlentities($_POST["post_text"]);

	 $sql= "INSERT INTO tbl_post(post_title,post_text,post_url) VALUES ('".$post_title."','".$post_text."','".php_slug($post_title)."')";


	if(mysqli_query($connect,$sql)){
		header("location:post/".php_slug($post_title)."");
	 	//header("location:post.php?post_url=".php_slug($post_title)."");
	

	}else{
		echo '<h2>Post Insert Failld...</h2>';
	}
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
  	      <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	      <script type="text/javascript" src="plugins/tinymce/tinymce.min.js"></script>
	      <script type="text/javascript" src="plugins/tinymce/init-tinymce.js"></script>
</head>
<body>
<div class="container">
<h3 align="center">Scan bangladesh Blog</h3>
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


</body>
</html>