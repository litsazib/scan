<?php
//post.php
$connect=mysqli_connect("localhost","root","","scan");
$post_url=$_GET["post_url"];
$sql= "SELECT * FROM tbl_post WHERE post_url='".$post_url."'";
$result=mysqli_query($connect,$sql);
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
</head>
<body>
<div class="container">
<h3 align="center">Scan bangladesh Blog</h3>
</div>
	    <?php 
	    if (mysqli_num_rows($result)>0) {
	    	while($row=mysqli_fetch_array($result)){
	    		echo '<h3>'.$row["post_title"].'</h3>';
	    		echo '<p>'.$row["post_text"].'</p>';
	    	}
	    }else{
	    	echo '404 Page not found...';
	    }

	     ?> 
</body>
</html>