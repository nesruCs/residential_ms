<?php 

require 'lang.php';

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
<li class="active"><a href="Clerk_home.php"><i class="fa fa-house"></i><?= __('Home')?></a></li>
<li class="active"><a href="#.php"></i><?= __('Send Report')?></a></li>
<li class="active"><a href="#.php"></i><?= __('Request')?></a>
<div class="sub-menu-1">
       <ul>
            <li><a href="#"><?= __('CerteficateRequest')?></a></li>
            <li><a href="#"><?= __('WithdrawalRequest')?></a></li>
       </ul>
  </div>
</li>
<li class="active"><a href="#.php"></i><?= __('View')?></a>
  <div class="sub-menu-1">
       <ul>  <li><a href="#"><?= __('my information')?></a></li>
            <li><a href="#"><?= __('Id Certeficate')?></a></li>
            <li><a href="#"><?= __('Birth Certeficate')?></a></li>
            <li><a href="#"><?= __('Death Certeficate')?></a></li>
            <li><a href="#"><?= __('WithdrawalCerteficate')?></a></li>
       </ul>
  </div>
</li>
</li></li><li class="active"><a href="#.php"></i><?= __('changePassword')?></a></li>
<li class="active"><a href="#.php"><i class="fa fa-language"></i><?= __('Language')?></a>
<div class="sub-menu-1">
       <ul>
            <li><a href="Resident_home.php?lang=en">English</a></li>
            <li><a href="Resident_home.php?lang=fr">አማርኛ </a></li>
       </ul>
  </div>
</li>
<li class="active"><a href="home.php"><i class="fa fa-left-to-bracket"></i><?= __('LogOut')?></a>
</li>
    </ul>
</div><div class="content">
  <h1><?= __('Well come to')?><br><span><?= __('Resident Page')?><br></span> </h1>
            
                </div>
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