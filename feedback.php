<?php 

require 'lang.php';

?>
<HTML>
<head>
<title>Residential Managemant System</title>
<link rel="stylesheet"  href="css/style_home.css"/>
<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
<style type="text/css">
body
{   
background-image:url(images/png2.png);
}
</style>
<body>
    <div class="menu-bar">
     <ul>
<li class="active"><a href="home.php"><i class="fa fa-house"><b></i><?= __('Home')?></b></a></li>
<li class="active"><a href="#.php"><i class="fa fa-user"></i><b><?= __('AboutUs')?></b></a>
  <div class="sub-menu-1">
       <ul>
            <li><a href="#"><b><?= __('Vision')?></b></a></li>
            <li><a href="#"><b><?= __('Mission')?></b></a></li>
            <li><a href="#"><b><?= __('Team')?></b></a></li>
       </ul>
  </div>
</li>
<li class="active"><a href="#.php"><i class="fa fa-phone"></i><b><?= __('ContactUs')?></b></a></li>
<li class="active"><a href="#.php"><i class="fa fa-newspaper"></i><b><?= __('News')?></b></a></li>
<li class="active"><a href="#.php"><i class="fa fa-comment"></i><b><?= __('Feedback')?></b></a></li>
<li class="active"><a href="#.php"><i class="fa fa-right-to-bracket"></i><b><?= __('Login')?></b></a>
<div class="sub-menu-1">
       <ul>
            <li><a href="Admin_log.php"><b><?= __('Admin')?></b></a></li>
            <li><a href="Clerk_log.php"><b><?= __('Clerk')?></b></a></li>
            <li><a href="Resident_log.php"><b><?= __('Resident')?></b></a></li>
       </ul>
  </div>
</li>
<li class="active"><a href="#.php"><i class="fa fa-language"></i><b><?= __('Language')?></b></a>
<div class="sub-menu-1">
       <ul>
            <li><a href="feedback.php?lang=en">English</a></li>
            <li><a href="feedback.php?lang=fr">አማርኛ </a></li>
       </ul>
  </div>
</li>
    </ul></div>
    <!-- ---form for feebback----->
     


      <center >
      <div style="background-color: #338FF0;width: 350px;height: 500px;">
             <div style="background-color:#33FF99;width: 350px;height: 50px;
     font-family:Arial, Helvetica, sans-serif; color:#000000;  padding:20px; "> 
 <div style="float:left;"><p align="center">
 <font color="black" size="4px" face="algerian">
 <h2><?= __('Write your comment')?></h2></font></div>
 <div style="float:right; align-items: center;">
 <a href="home.php" title="<?= __('Close')?>"><img src="images/close.jpg"></a></div>
 </div> <br><br>

        
     <form id="send"action="feebback_chek.php" method="post" >
    
    <label><b><?= __('Name')?></label> <input type="text"  name="name"id="span9001"size="30" 
    required pattern="[A-Z a-z]{3,}"><br><br>
    
    <label><?= __('Email')?></label> <input type="text"  name="email"id="email" size="30" color="silver" required><br><br>
    
    <label><?= __('Kebele')?></label> <input type="text"  name="Kebele"id="Kebele" size="30" color="silver" required><br><br>
    
    <label><?= __('Your comment')?></label><br><textarea  name="comment"  rows="8"cols="40" id="comment" required> </textarea><br> <br>  
     
    <input type="submit" name="submit"style="background-color: green;border-radius: 40px;width: 120px;height: 35px;"  value="<?= __('send')?>"title="<?= __('send comment')?>">&nbsp;&nbsp;&nbsp; 
     
     <input type="reset" name="cancel" style="background-color: red;border-radius: 40px;width: 120px;height: 35px;" value="<?= __('cancel')?>" title="<?= __('clear all')?>">
          <br><br><br><br><br>  
                       </form>
                </div></center>
          
           <footer style="position: fixed; bottom: 0;width: 100%; height: 60px;   /* Height of the footer */ background: #1B2631;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <a href="http://www.google.com" target="_blank"><img src="images/google-map.png" title="Google" width="30" height="25"></a>
        <a href="http://youtube.com"><img src="images/youtube.png" id="youtube" width="30"></a>
        <a href="http://facebook.com"><img src="images/facebook.png" id="facebook" width="40"></a> 
        <a href="http://tweeter.com"><img src="images/tweeter.png" id="tweeter"></a><b><font face="Elephant" color="white"size="3">Copyright &copy; Andinet  Kebele Resident Management System  2015/2024  </font></b>    
                    </footer>

    </body>
</html>
