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
background:#515A5A;
}
</style>
</head>
<body>
    <div class="menu-bar">
     <ul>
<li class="active"><a href="Clerk_home.php" title="Home"><i class="fa fa-house"></i><?= __('Home')?></a></li>
<li class="active"><a href="register_resident.php" title="Register Resident"><?= __('Reg_Resident')?></a></li>
<li class="active"><a href="#.php" title="send Message"></i><?= __('sendMessage')?></a></li>
<li class="active"><a href="#.php" title="Manage Resident"></i><?= __('Manage_Res')?></a>
<div class="sub-menu-1">
       <ul>
            <li><a href="#"><?= __('search Resident')?></a></li>
            <li><a href="#"><?= __('clearance info')?></a></li>
       </ul>
  </div>
</li>
<li class="active"><a href="#.php" title="view"></i><?= __('View')?></a>
  <div class="sub-menu-1">
       <ul>  <li><a href="#"><?= __('Message')?></a></li>
            <li><a href="#"><?= __('View Feedback')?></a></li>
            <li><a href="#"><?= __('Withdrawal request')?></a></li>
       </ul>
  </div>
</li>
</li></li><li class="active"><a href="#.php" title="change Password"></i><?= __('change_Pass')?></a></li>
<li class="active"><a href="#.php" ><i class="fa fa-language"></i><?= __('Language')?></a>
<div class="sub-menu-1">
       <ul>
            <li><a href="Admin_home.php?lang=en">English</a></li>
            <li><a href="Admin_home.php?lang=fr">አማርኛ </a></li>
       </ul>
  </div>
</li>
<li class="active"><a href="home.php"><i class="fa fa-left-to-bracket"></i><?= __('LogOut')?></a>
</li></ul></div>
  <center>
 <div style="background-color:#33FF99;width: 800px;height: 50px;
     font-family:Arial, Helvetica, sans-serif; color:#000000;  padding:20px; "> 
 <div style="float:left;"><p align="center">
 <font color="black" size="5px" face="algerian">
 <h2 style="margin-left: 250px;"><?= __('Add')?></h2></font></div>
 <div style="float:right; align-items: center;">
 <a href="clerk_home.php" title="<?= __('Close')?>"><img src="images/close.jpg"></a></div>
 </div>   
    <div style="background-color:#fff; width:800px;height:1000px;">
      <form class="Res-reg-form" action="#" method="post" onclick=""><br>
        <label style="color:#3a87ad; margin-right: 20px;"><b>First_Name</b></label><input type="text" name="fname" placeholder="Enter your first name"><br><br>
        <label style="color:#3a87ad; margin-right: 20px;"><b>Middle_Name</b></label><input type="text" name="mname"  placeholder="Enter your middle name"><br><br>
        <label style="color:#3a87ad; margin-right: 20px;"><b>Last_Name</b></label><input type="text"  name="lname"  placeholder="Enter your last name"><br><br>
        <label style="color:#3a87ad; margin-right: 20px;"><b>Age</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number"  name="age"  placeholder="age" min='0'required pattern="[0-9]{1,}"/><br><br>
          <tr>
              <td><label style="color:#3a87ad; font-size:18px;">Sex</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td width="30"></td>
              <td><select name="sex" style="background-color:#Green;" width="25">
                <option>Male</option>
                <option>Female</option>
                </select></td>
            </tr><br><br>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">nationality</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td width="15"></td>
              <td><select name="nationality" style="background-color:#Green;" width="25" required>
                 <option>Ethiopian  </option>
                <option>America</option>
                <option>Sudan </option>
                <option>Kenya</option>
                <option>other </option>
                </select></td>
            </tr><br><br>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">region</label></td>
              <td width="30"></td>
              <td><select name="region" style="background-color:#Green;" width="25">
                <option>Tigray</option>
                <option>Amhara</option>
                <option>Afar</option>
                <option>Oromia</option>
                <option>Somalie</option>
                <option>SNNP</option>
                <option>Benshangul</option>
                <option>Gambela</option>
                <option>Harer</option>
                </select></td>
            </tr><br><br>
               
              <label style="color:#3a87ad; font-size:18px;">Religion</label>
              
              <select name="religion" style="background-color:#Green;" width="25">
                <option>Orthodox </option>
                <option>Protstant</option>
                <option>Islam</option>
                <option>Catholic</option>
            <option>Other</option>
                          </select><br><br>
            <label style="color:#3a87ad; font-size:18px;">Martial Status:</label>
                <select name="martial" style="background-color:#Green;" width="25">
                <option>UnMarried</option>
                  <option>Married</option>
                  <option>Divorced</option></select>
                  <br><br>
            <label style="color:#3a87ad; font-size:18px;">Mother Tongue:</label>
                <input type="text" name="language" pattern="[A-Za-z]{3,}" required placeholder="language"><br><br>
          <label style="color:#3a87ad; font-size:18px;">Zone</label>
                <input type="text" name="zone" placeholder="Zone" required /><br><br>
            <label style="color:#3a87ad; font-size:18px;">Woreda</label></td>
              <td width="30">
                <input type="text" name="woreda" id="span9001" placeholder="Woreda" required pattern="[A-Z a-z]{3,}"/><br><br>
            <label style="color:#3a87ad; font-size:18px;">Kebele:</label>
                <input type="text" name="kebele" id="span9001" placeholder="kebele" required pattern="[A-Z a-z]{3,}"/><br><br>
            <label style="color:#3a87ad; font-size:18px;">House type:</label>
                <select name="type" style="background-color:#Green;" width="25">
                <option>Private</option>
                <option>Kebele</option> <option>Tenants</option>
                </select>
            </tr> <br><br>
             <label style="color:#3a87ad; font-size:18px;">Date Of Birth</label>
              <input type="date" name="dateofbirth" placeholder="Date of Birth" required /><br>
              <label style="color:#3a87ad; font-size:18px;">Place Of Birth</label>
                <input type="text" name="placeofbirth" id="span9001" placeholder="Place of Birth" required pattern="[A-Z a-z]{3,}"/><br><br>
          
              <td><label style="color:#3a87ad; font-size:18px;">HouseNo</label>
                <input type="text" name="houseno" id="span9001" placeholder="HouseNo" required pattern="['a-z A-Z 0-9']{2,}" />
            </tr><br><br>
    
            <label style="color:#3a87ad; font-size:18px;">Occupation</label>
              <input type="text" name="occupation" id="span9001" placeholder="Occupation " required pattern="[A-Z a-z]{3,}"> 
                 <br><br>
            <tr>
              <td><label style="color:#3a87ad; font-size:18px;">Phone</label></td>
              <td width="30"></td>
              <td><input type="text" name="phone" id="span9001" placeholder="Phone" required pattern="[0&9]{2}[0-9]{8}"/></td>
            </tr><br><br>
           <tr>
              <td><label style="color:#3a87ad; font-size:18px;">Date Of Regi</label></td>
              <td width="30"></td>
              <td><input type="date" name="dateofreg" placeholder="Date of regis" required /></td>
            </tr><br><br>
            <label style="color:#3a87ad; font-size:18px;">Image</label>
                <input type="file" name="image"  />
            </tr><br><br>
          <label style="color:#3a87ad; font-size:18px;">Resion to Reg:</label>
                <input type="text" name="reason" placeholder="reason" required /><br><br>
              <label style="color:#3a87ad; font-size:18px;">Approved By:</label>
              <input type="text" name="approve" placeholder="approved by Full name" required /><br><br>

    <button type="submit" name="Submit" ><h2>Register</h2></button>
    <button   type="reset" value="reset" ><h2>Clear</h2></button>
     
   
        

        
      </form>
        
      
    </div>
  </center>






        
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