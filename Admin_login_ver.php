<?php
require 'lang.php';
session_start();

if (isset($_POST['Login']))
		{
$privilege=$_POST["privilege"];
$username=$_POST["username"];
$password= $_POST["password"];
$crypt_pass = md5($password);
$db = mysqli_connect("localhost","root","") or die ("Error connecting to database.");
if(!$db){
echo "no connection established"; 
}
mysqli_select_db($db,"rms_db") or die("Couldn't select the database.");
$qry= "select * from users_acc where username='$username' and password='$password 'and privilege='$privilege'";
$results = mysqli_query($db,$qry) or die(mysqli_error());
$count=mysqli_num_rows($results);
			
if($count<='0'){
	?>
	<font color="white">
	
<script>
					window.alert('<?= __('Please Enter a valid username and/or password')?>');
					window.location.href='Admin_log.php';
				</script>

<?php }

else
{
     
while ($row = mysqli_fetch_array($results)) {

$_SESSION['username']=$row['username'];	
 
  $state=$row['state'];
  if($state=="active")
  {

if($privilege=="Admin"){

echo'<br>';
echo'<br>';
echo'<br>';
echo'<br>';
echo'<br>';
echo'<br>';?>
<script>
					
					window.location.href='Admin_home.php';
				</script>
				<?php
}  }
else
{
	$error="<?= __('this Account is deactivated or inactive')?>";
	//header('location:Admin_log.php');
	include("Admin_log.php");
	?>
	</font>
	<?php 
}

}}}
?>

