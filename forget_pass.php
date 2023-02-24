<?php 

require 'lang.php';

?>
<!DOCTYPE html>
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
</head>
<body>
    <div class="menu-bar">
     <ul>
<li class="active"><a href="home.php"><i class="fa fa-house"></i><?= __('Home')?></a></li>
<li class="active"><a href="#.php"><i class="fa fa-user"></i><?= __('AboutUs')?></a>
  <div class="sub-menu-1">
       <ul>
            <li><a href="#"><?= __('Vision')?></a></li>
            <li><a href="#"><?= __('Mission')?></a></li>
            <li><a href="#"><?= __('Team')?></a></li>
            <li><a href="#"><?= __('Gallery')?></a></li>
       </ul>
  </div>
</li>
<li class="active"><a href="#.php"><i class="fa fa-phone"></i><?= __('ContactUs')?></a></li>
<li class="active"><a href="#.php"><i class="fa fa-newspaper"></i><?= __('News')?></a></li>
<li class="active"><a href="#.php"><i class="fa fa-comment"></i><?= __('Feedback')?></a></li>
<li class="active"><a href="#.php"><i class="fa fa-right-to-bracket"></i><?= __('Login')?></a>
<div class="sub-menu-1">
       <ul>
            <li><a href="Admin_log.php"><?= __('Admin')?></a></li>
            <li><a href="Clerk_log.php"><?= __('Clerk')?></a></li>
            <li><a href="Resident_log.php"><?= __('Resident')?></a></li>
       </ul>
  </div>
</li>
<li class="active"><a href="#.php"><i class="fa fa-language"></i><?= __('Language')?></a>
<div class="sub-menu-1">
       <ul>
            <li><a href="forget_pass.php?lang=en">English</a></li>
            <li><a href="forget_pass.php?lang=fr">አማርኛ </a></li>
       </ul>
  </div>
</li>
    </ul><center>
</div>
<div class="forget_form">
                  <font color ="green" face="Times New Roman"><br><br>
                     <h2><b><?= __('Account Information')?></b></h2></font>  <hr/>
                        <form action="forget_pass.php" onsubmit='return formValidator()' method='POST'>
                        <table>
                            <tr>
                                <td class="search"><font color="blue"><?= __('Enter Your Id Number:')?> </td></tr>
<br><tr><td>
<input type="text" name="searchs" size="40px" placeholder="<?= __('Provide Here...')?>" /></td>
                                <td><input type="submit" title="<?= __('Submit user_Id')?>" value="<?= __('Submit')?>" name="search" style="cursor:pointer;"/></td>
                            </tr>
                        </table>
                        </form></font>
          <?php
                    $conn=mysqli_connect("localhost","root","");
                     mysqli_select_db($conn,"rms_db");
                    if(isset($_POST['search'])) {
                    $idno=$_POST['searchs'];
                    $sql= "SELECT * FROM users_acc WHERE user_Id='{$idno}'";
                    $result=mysqli_query($conn,$sql);
                    $count=mysqli_num_rows($result);
                    if($count<1)
                    {
                    die('<font color="red" face="Times New Roman">Please Enter a Valid ID Number and try agian correctly?</font>');     
                    }
                    else
                    {
                    echo"&nbsp;&nbsp;";
                    echo "<table border='2' color='green' style='width:350px;border-radius:10px;' align='center'>
<tr>
<th>Your ID.</th>
<th>User Name</th>
<th>Password</th>
</tr>";
while($row = mysqli_fetch_array($result))
  {
  $ctrl = $row['user_Id'];
  print ("<tr>");
   print ("<td>" . $row['user_Id'] . "</td>");
   print ("<td>" . $row['username'] . "</td>");
   print ("<td>" . $row['password'] . "</td>");  print ("</tr>");
  }
print( "</table>");
echo"</center>";
}
}
mysqli_close($conn);
?>
                    
            <a href = 'Admin_log.php?'>
                <button  class="check_btn" title="<?= __('You can Check')?> ">
                    <?= __('Check')?></button></a>                  
            
                </div></td></div></center>
                 <footer style="position: fixed; bottom: 0;width: 100%; height: 60px;   /* Height of the footer */ background: #1B2631;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <a href="http://www.google.com" target="_blank"><img src="images/google-map.png" title="Google" width="30" height="25"></a>
        <a href="http://youtube.com"><img src="images/youtube.png" id="youtube" width="30"></a>
        <a href="http://facebook.com"><img src="images/facebook.png" id="facebook" width="40"></a> 
        <a href="http://tweeter.com"><img src="images/tweeter.png" id="tweeter"></a><b><font face="Elephant" color="white"size="3">Copyright &copy; Andinet  Kebele Resident Management System  2015/2024  </font></b>    
                    </footer>
</body>
<script>
    
    var sub-menu-1 = document.querySelectorAll(".sub-menu-1");

    for (var i = 0; i < sub-menu-1.length; i++) {
        
        sub-menu-1[i].addEventListener('click',function(e){

            for (var x = 0; x < sub-menu-1.length; x++) {
                sub-menu-1[x].querySelector(".dropdown-content").classList.add("hide");
            }

            e.currentTarget.querySelector(".dropdown-content").classList.toggle("hide");
        });
    }

</script>
</html>