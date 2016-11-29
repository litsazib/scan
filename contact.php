<?php 
$title="Contact";
require_once('header.php'); ?>
<div class="page_title1 sty11">
<div class="container">
	<img src="images/contact_us.png"> 
</div>	    
</div>
<div class="clearfix margin_bottom5"></div>
<div class="container">
      <div class="two_third">      
        <p>Feel free to talk to our online representative at any time you please using our Live Chat system on our website or one of the below instant messaging programs.</p>
        <br>
        <p>Please be patient while waiting for response.</p>
        <br><br>
        
        <div class="cforms">       
        <div id="form_status" style="color: green;"></div>
        <div id="form_error" style="color: red;"></div>
      <form method="post" action="#">
          <label class="label">Name <em>*</em></label>
          <label class="input">
              <input required="" pattern="[A-Za-z]+" name="name" id="name" type="text">
          </label>          
          <div class="clearfix"></div>          
          <label class="label">E-mail <em>*</em></label>
          <label class="input">
              <input required="" name="email" id="email" type="email">
          </label>
          <div class="clearfix"></div>  
          <label class="label">Message <em>*</em></label>
          <label class="textarea">
              <textarea rows="5" required="" name="message" id="message"></textarea>
          </label>
          <div class="clearfix"></div>      
         <input name="submit" value="Send Message" class="button" type="submit">          
      </form>     
        </div>
      </div>      
      <div class="one_third last">      
        <div class="address_info two">        
          <h4 class="caps" style="color:#ccc">Scan Bangladesh Office</h4>
          <ul>
            <li> <strong>Scan bangladesh (P) LTD</strong><br>
              House No.4,Road No.3 Pc-Culture,Mohamadpur<br>
              Telephone: 01724-255853<br>              
              E-mail: info@scanbd.com<br>
              Website: www.scanbangladesh.com</li>
          </ul>          
        </div>        
        <div class="address_info two">
        
          <h4 class="caps" style="color:#ccc">Head Office</h4>
          <ul>
            <li> <strong>Scan bangladesh (P) LTD</strong><br>
              House No.4,Road No.3 PC Culture,Mohamadpur<br>
              Telephone: +01724-255853<br>
              E-mail: info@scanbd.com<br>
              Website: www.scanbangladesh.com</li>
          </ul>          
        </div>
     <div class="address_info two">        
          <h4 class="caps" style="color:#ccc">US Sale Office</h4>
          <ul>
            <li>
              HLI Systems
        6085 King Dr.Suite #102<br> Ventura, CA 93003<br>
              Telephone: (805) 277-0799<br>
              E-mail: sales@hli.net<br>
              </li>
          </ul>          
        </div>        
    </div>        
  </div>
<div class="clearfix margin_bottom7"></div>
<div class="one_full">
<!-- Add Google map code hear -->
</div>
<?php require_once('footer.php') ?>