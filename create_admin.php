<?php 

require 'lang.php';
$session_id="";
include('dbcon.php');
include('session.php'); 
$result=mysqli_query($con, "select * from users_acc where username='$session_id'")or 
die('Error In Session');
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<head>
<title>Residential Managemant System</title>
<link rel="stylesheet"  href="css/style_admin_home.css"/>
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
<li class="active"><a href="Admin_home.php"><i class="fa fa-house"></i><b><?= __('Home')?></b></b></a></li>
<li class="active"><a href="#.php"><b><?= __('CreateAccout')?></b></b></a>
  <div class="sub-menu-1">
       <ul>
            <li><a href="create_admin.php"><?= __('Admin')?></a></li>
            <li><a href="clerk_create.php"><?= __('Clerk')?></a></li>
            <li><a href="Resident_create.php"><?= __('Resident')?></a></li>
       </ul>
  </div>
</li>
<li class="active"><a href="#.php"></i><b><?= __('ManageUser')?></b></b></a>
<div class="sub-menu-1">
       <ul>
            <li><a href="#"><?= __('Clerk')?></a></li>
            <li><a href="#"><?= __('Resident')?></a></li>
       </ul>
  </div>
</li>
<li class="active"><a href="#.php"></i><b><?= __('View')?></b></b></a>
  <div class="sub-menu-1">
       <ul>
            <li><a href="#"><?= __('Message')?></a></li>
            <li><a href="#"><?= __('View Message')?></a></li>
            <li><a href="#"><?= __('View Reuest')?></a></li>
              <li><a href="#"><?= __('View Report')?></a></li>
            <li><a href="#"><?= __('View Feedback')?></a></li>
       </ul>
  </div>
</li>
<li class="active"><a href="#.php"></i><b><?= __('SendMessage')?></b></a></li>
<li class="active"><a href="#.php"><b><?= __('post news')?></b></a></li>
<li class="active"><a href="#.php"><b><?= __('services')?></b></a>
<div class="sub-menu-1">
       <ul>
            <li><a href="#"><?= __('Manage Id_card Info')?></a></li>
            <li><a href="#"><?= __('Manage Birth Info')?></a></li>
            <li><a href="#"><?= __('Manage Death Info')?></a></li>
              <li><a href="#"><?= __('Renew Id_card')?></a></li>
       </ul>
  </div>
</li>
<li class="active"><a href="#.php"></i><b><?= __('changePass')?></b></a></li>
<li class="active"><a href="#.php"><i class="fa fa-language"></i><b><?= __('Language')?></b></a>
<div class="sub-menu-1">
       <ul>
            <li><a href="create_admin.php?lang=en">English</a></li>
            <li><a href="create_admin.php?lang=fr">አማርኛ </a></li>
       </ul>
  </div>
</li>
<li class="active"><a href="home.php"><?= __('LogOut')?></a>
</li>
    </ul>
</div>

<!-- Create Account for new Users -->
               
      <center >
      <div style="background-color: #338FF0;width: 450px;height: 480px; margin-top: 50px;">
        <div style="background-color:#33FF99;width: 450px;height: 70px;
     font-family:Arial, Helvetica, sans-serif;  padding:20px; "> 
 <div style="float:left;"><p align="center">

 <font color="black" size="4px" face="algerian">
 <h2><?= __('Create Account for new Users')?></h2></font></div>
 <div style="float:right; align-items: center;">
 <a href="Admin_home.php" title="<?= __('Close')?>"><img src="images/close.jpg"></a></div>
 </div> <br>
     <div><center><form action="create_admin.php" method="post" onsubmit="return validate()">

     <label><b><?= __('User_ID')?></b></lable> <input type="text"  name="user_id"id="" size="30" color="silver" required title="<?= __('enter valid id number?')?>" placeholder= "<?= __('Enter a Unique Id number')?>"><br><br>
     
     <label><b><?= __('User_Name')?></b></label> <input type="text"  name="username"id="Kebele" size="30" color="silver" pattern="[A-Za-z]{3,}" required placeholder= "<?= __('Enter Name of the user')?>" ><br><br>
    
     <label><b><?= __('Phone number')?></b></label> <input type="phone"  name="phone" id="Kebele" size="30" color="silver" required pattern="[0-9]{10}" required title="<?= __('enter valid phone number?')?>"placeholder= "<?= __('Enter Phone number of the user')?>"><br><br>
     
     <label><b><?= __('Account Type')?></b></label>&nbsp;&nbsp;&nbsp;<select name="privilege" readonly="readonly"><option>Admin</option></select><br><br>

     <label><b><?= __('state')?></b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <select name="state" required>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <option>active</b></option><option>inactive</option> </select><br><br>

     <label><b><?= __('Password')?></b></label> <input type="password"  name="password"id="Kebele" size="30" color="silver" required placeholder= "<?= __('Enter Pssword')?>"><br><br>
             
     <input type="submit" value="<?= __('Create')?>" name="submit"style="background-color: #339900;border-radius: 40px;width: 120px;height: 35px;"  value="send">&nbsp;&nbsp;&nbsp; 
           
     <input type="reset" name="cancel" style="background-color: red;border-radius: 40px;width: 120px;height: 35px;" value="<?= __('cancel')?>"> <br><br><br>  <br><br>
</form>
   </div> </fieldset>    </div></div>
      
       <?php
       $db = mysqli_connect("localhost","root","") or die ("Error connecting to database.");
      mysqli_select_db($db,"rms_db");
              
        if (isset($_POST['submit'])){
               
           $username=$_POST['username'];
           $user_id=$_POST['user_id'];               
           $pri=$_POST['privilege'];
           $phone=$_POST['phone'];
           $state=$_POST['state'];
           $password=$_POST['password'];
           $qry= "select * from users_acc where user_Id='$user_id'";
           $results = mysqli_query($db,$qry) or die(mysqli_error());
           $count=mysqli_num_rows($results);
            if($count!='0'){
               ?>
     <script>
          alert(" <?= __('User already exist!!!!')?>");
     </script>
    
                         <?php
          }
         elseif($user_id== ""){
               ?>
     <script>
          alert(" <?= __('Please enter your  valid id number!!!!!')?>");
     </script>
    
                         <?php
          }
          elseif($username == ""){
               ?>
               <script>
               alert("<?= __('Please enter your name!')?>")
               </script> 
                         <?php
          }         
          else {

                            $password = $_POST['password'];
                            if (strlen($password) <= 3) {
                               ?>
               <script>
               alert("<?= __('Password Must Be Grater Than 3 Characters !')?>")
               </script> 
                         <?php
          }         

             mysqli_query($db,"insert into users_acc(user_Id,username,password,privilege,phone_no,state)
               values('$user_id','$username','$password','$pri','$phone','$state')")or die(mysqli_error());
           
                  ?>
               <script>
               alert("<?= __('The Account is Created successfully!')?>")
                    </script> 
                         <?php
   }
  }
          
 ?>
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