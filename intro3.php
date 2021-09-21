<?php

if(isset($_GET['user']) == null){
    header("Location: index.php");
}else{
    //stay here
    include("headr.php");
    include('mailthis.php');
    
    $to = $_GET['user'];
    
    mail($to,$subject2,$msg2,$headers);
}

?>
<body>


<header class="intro3">
<nav><strong>jrupiter</strong></nav>




<p>Socialize & Discover.</p>
</header>

<section>
    <h2>Compatibility</h2>
    <p>
            When stars align and find they are compatible, there is a twinkle in the sky. Find how similar you are to friend and others. Gain insights on what it would be like to be more than friends.
    </p>
    
</section>
<section class="alternate">
    <h2>What you Will Get</h2>
    <div>1. Comparisons of You & Your Friends</div>
     <div>2. Find Similarities</div>
      <div>3. Discover Love</div>
</section>
<footer>jrupiter 2021</footer>
</body>
<html>
