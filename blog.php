<?php
$title="Blog";
require_once('header.php'); 
require_once('Admin/confing.php');
  $sql= "SELECT * FROM tbl_post";
  $stmt=$conn->prepare($sql);
  $stmt->execute();
  $result =$stmt->fetch(PDO::FETCH_ASSOC);
  $post=NULL;
  if(count($result)>0){
    $post=$result;
  }

?>
<div class="page_title1 sty11">
<div class="container">
	<img src="images/web-developers.png"> 
</div>	    
</div><!-- end page title -->
<div class="clearfix margin_bottom5"></div>
<div class="container">
<div class="row">
  <h1 class="center_s">Our Blog</h1>
  <div class="col-lg-12">
    <div class="blogs">
      <h1>Scan Bangladesh launching<span>01 November 2016</span></h1>
      <h2>Posted :<span>Adimnestrator</span> </h2>
      <p>Adheres to development deadlines and schedules. Understands the necessity of and contributes to coding standards. Should be able to prioritize multiple tasks effectively. Encourages other employees to take responsibility for their development within the company. Create Unit Test Cases Should be able to work on .Net Technologies like Web services, Windows Services, ADO.Net and Reflection. Expertise in using Web developments tools such as HTML, JavaScript, XML, JQuery and AJAX. ASP.Net/VB.net Knowledge added advantage. Write SQL Queries, Stored Procedures, Triggers and Views using SQL Understands and Implements Microsoft Patterns and Practices across applications Good knowlegde in CSS will be an advantage. Should have good analytical, communication and interpersonal skills.</p>
      <!-- <a class="apply_now" href="apply-now.php">Read More...</a> -->
    </div>


  </div>
</div>
<div class="clearfix margin_bottom5"></div> 
</div>
<?php require_once('footer.php') ?>