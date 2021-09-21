<?php
if(isset($_GET['user']) == null){
    header("Location: http://www.jrupiter.com/index.php");
}else{
    //stay here
    include("headr.php");
    include('mailthis.php');
    
    $to = $_GET['user'];
    
    mail($to,$subject2,$msg2,$headers);
}

?>
<body>


<header class="intro2">
<nav><strong>jrupiter</strong></nav>




<p>Vibrate on your frequency.</p>
</header>

<section>
    <h2>awareness</h2>
    <p>
           Using color theory and astrology, we develop insights into what kind of character you have. With that, the discovery of what's significant to you is that much more possible.
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
