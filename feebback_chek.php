<?php 

require 'lang.php';

?>
<?php
         $conn=mysqli_connect("localhost","root","");
         mysqli_select_db($conn,"rms_db");
         if (isset($_POST['submit'])){
            
             $name=$_POST['name'];
             $email=$_POST['email'];            
             $Kebele=$_POST['Kebele'];
             $comment=$_POST['comment'];
            $pattern="/[\w\.]{6,}\@[a-zA_Z]{3,}\.[a-zA-Z\.]{2,}[^\.]$/";
        if($name== ""){
            ?>
    <script>
        alert(" <?= __('Please enter your name!!!!!')?>");
    </script>
    <?php   
        }
        elseif(is_numeric($name)){
            ?>
            <script>
            alert("<?= __('Name can not be numeric!')?>")
            </script>   
                    <?php
        }

        elseif($email == ""){
            ?>
            <script>
            alert("<?= __('Please enter your email!')?>")
            </script>   
    <?php
        }
        elseif(!preg_match($pattern,$email)){
            ?>
            <script>
            alert("<?= __('Please use valid email address !')?>")
            window.location.href='feedback.php';
            </script> 
        <?php 
       }
        
        else{
                     $conn=mysqli_connect("localhost","root","");
     mysqli_select_db($conn,"rms_db");
             mysqli_query($conn,"insert into comment(name,email,Kebele,comment)
               values('$name','$email','$Kebele','$comment')")or die(mysqli_error());
               ?>
               <script>
            alert("<?= __('your Comment has been  successfully sent!')?>")
            window.location.href='feedback.php';

                </script>   
            <?php
             }
        } 
          ?>