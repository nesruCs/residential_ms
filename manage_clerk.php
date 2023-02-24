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
background:#7F8C8D;
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
            <li><a href="Admin_home.php?lang=en">English</a></li>
            <li><a href="Admin_home.php?lang=fr">አማርኛ </a></li>
       </ul>
 
</li>
<li class="active"><a href="home.php"><?= __('LogOut')?></a>
</li>
    </ul><br></div></div>
    <center >
      <div style=" background: white; width: 900px;height: 550px;">
        <div style="background-color:#33FF99;width: 900px;height: 50px;
     font-family:Arial, Helvetica, sans-serif;  padding:20px; "> 
 <div style="float:left;"><p align="center" >

 <font color="black" size="5px" face="algerian" style="align-items:center;">
 <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <?= __('Data Table')?></h2></font></div>
 <div style="display: inline-block; ">
 <a href="#" onClick="window.print()";return false;><img width="30px";height="50px"; src="icons/print_icon.jfif" title="print"></a></div>
 <div style="float:right; align-items: center;">

 <a href="Admin_home.php" title="<?= __('Close')?>"><img src="images/close.jpg"></a></div>
 </div> <br>
     <div>
      <table align='center' border='1'>
                             <thead>
                                <tr style="background-color:grey;">
                                    <th style="text-align:center; "><b>User_id</b></th>
                                    <th style="text-align:center;"><b>Privilege</b></th>
                                    <th style="text-align:center;"><b>User_Name </b></th>
                                    <th style="text-align:center;"><b>Phone</b></th>
                                    <th style="text-align:center;"><b>State</b></th>
                                    <th style="text-align:center;"><b>Action</b></td >
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            $db = mysqli_connect("localhost","root","") or die ("Error connecting to database.");
                           mysqli_select_db($db,"rms_db") or die("Couldn't select the database.");  
                                $result= mysqli_query($db,"select * from clerk_acc order by phone_no" ) or die (mysqli_error());
                                while ($row= mysqli_fetch_array ($result) ){
                $id=$row['phone_no'];
                                ?>
                                <tr style="background-color:white;">
                                <td style="text-align:center; word-break:break-all; width:100px;"> <?php echo $row ['user_Id']; ?></td>
                                <td style="text-align:center; word-break:break-all; width:100px;"> <?php echo $row ['privilege']; ?></td>
                                <td style="text-align:center; word-break:break-all; width:100px;"> <?php echo $row ['username']; ?></td>
                                <td style="text-align:center; word-break:break-all; width:100px;"> <?php echo $row ['phone_no']; ?></td>
                                <td style="text-align:center; word-break:break-all; width:100px;"> <?php echo $row ['state']; ?></td>
                                
                                <td style="text-align:center; width:150px;">
                                    <a href="account.php<?php echo '?id='.$id; ?>" class="btn btn-info">
                                    <font style="background-color:yellowgreen;"color="green" size="4"><b>Edit</b></a></font>
                                        &nbsp; &nbsp; &nbsp;
                                     <a href="#delete<?php echo $id;?>"  data-toggle="modal"  
                                     class="btn btn-danger"  ><font  style="background-color:pink;" color="red" size="4"><b>Delete</b></a>    
                                </td>

                            <?php } 
                            ?>

                            </tbody>
                        </table>
                                    
                                </div> </fieldset>   </dv> </div></div>


        <footer style="position: fixed; bottom: 0;width: 100%; height: 60px;   /* Height of the footer */ background: #1B2631;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <a href="http://www.google.com" target="_blank"><img src="images/google-map.png" title="Google" width="30" height="25"></a>
        <a href="http://youtube.com"><img src="images/youtube.png" id="youtube" width="30"></a>
        <a href="http://facebook.com"><img src="images/facebook.png" id="facebook" width="40"></a> 
        <a href="http://tweeter.com"><img src="images/tweeter.png" id="tweeter"></a><b><font face="Elephant" color="white"size="3">Copyright &copy; Andinet  Kebele Resident Management System  2015/2023 </font></b>    
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