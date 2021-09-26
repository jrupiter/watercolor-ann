<?php

include('headr.php');

if(isset($_POST['submit'])){
$firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['emailaddr'];
   
  if($firstname && $lastname && $email != nulll){
    trim($firstname);
    trim($lastname);
    trim($email);

require('connect.php');
mysqli_query($dbc, "INSERT INTO prelaunch_users(fname, lname, email) VALUES($firstname, $lastname, $email)");
    
    mysqli_close($dbc);
    exit();
    
    echo("Thanks for Registering!");
    
    //send email
    include('mailthis.php');
    mail($to,$subject1,$msg1,$headers);

}else{
header("Location: https://www.jrupiter.com");
}
    
}else{
header("Location: https://www.jrupiter.com");
}


?>



<body>
<header class="intro1">
<nav><strong>jrupiter</strong></nav>
<p>Vibrate on your frequency.</p>
</header>
<section>
    <h2>zen</h2>
    <p>
          Discover your true nature and realize all things you. What we offer is a comprehensive study of who you are. BUT what we don't do is astrology.
    </p>
</section>
<section class="alternate">
    <h2>What you Will Get</h2>
    <div>1. Personal Insights</div>
     <div>2. Colorful Temperaments</div>
      <div>3. Mood Studies</div>
</section>
<footer>jrupiter 2021</footer>
</body>
</html>
