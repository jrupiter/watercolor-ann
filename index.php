<?php 

include('includes/headr.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
require('../connect.php');
$errors = array();

if(empty($_POST['fname'])){
$errorrs[] = "Enter your first name.";
}else{
$fn = mysqli_real_escape_string($dbc, trim($_POST['fname']));}

if(empty($_POST['lname'])){
$errorrs[] = "Enter your last name.";
}else{
$ln = mysqli_real_escape_string($dbc, trim($_POST['lname']));}
	
if(empty($_POST['emailaddr'])){
$errorrs[] = "Enter your email address.";
}else{
$e = mysqli_real_escape_string($dbc, trim($_POST['emailaddr']));}

if(empty($errors)){
$q = "SELECT userid FROM users WHERE email='$e'";
$r = mysqli_query($dbc,$q);
if(mysqli_num_rows($r) != 0){
$errors[] = 'Email address already registered. Thank You for Your Support';}
}

if(empty($errors)){
$q = "INSERT INTO prelaunch_users (firstname, lastname, email ) VALUES ('$fn', '$ln', '$e', SHA1('$p'), NOW() )";
$r = mysqli_query($dbc, $q); 

if($r){
echo'<h1>Registered</h1>
<p>You are now registered.</p>';
}

mysqli_close($dbc);
include('includes/footer.html');
exit();
	}else{
	echo '<h1>Error!</h1>
	<p id="err_msg">The following error(s) occurred:<br>';
	foreach($errors as $msg){
	echo " - $msg<br>";
	}
	echo 'Please try again.</p>';
	mysqli_close($dbc);
}

}?>

<body class="land">
<h1>jrupiter</h1>

<form class="login" method="post" action="includes/intro1.php">
<input type="text" value="<?php if(isset($_POST['fname'])) echo $_POST['fname']; ?>" name="fname" placeholder="firstname"/> <br>
<input type="text" value="<?php if(isset($_POST['lname'])) echo $_POST['lname']; ?>" name="lname" placeholder="lastname"/> <br>
<input type="email" value="<?php if(isset($_POST['emailaddr'])) echo $_POST['emailaddr'];?>" name="emailaddr" placeholder="email"/> <br>
<input class="button" type="submit" value="submit" name="submit" /> 

<?php include("footer.php"); ?>
<form>
</body>
</html>


