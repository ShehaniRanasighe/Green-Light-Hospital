<?php
session_start();
?>
<link href="bootstrap.min.css" rel="stylesheet">

<?php 
  include("header.php");
  include("library.php");
  noAccessIfLoggedIn();
?>
<div class="container">
 	<h1 style="font-size: 50px;">Green Light Hospital</h1>
    <p class="block-quote"></p>
    <p><?php include('slideshow.php');?></p>
</div> <br><br>   

<div>
<iframe src="Highlights.html" height="400" width="425"></iframe>
<iframe src="career.html" height="400" width="425"></iframe>
<iframe src="comiunity welness.html" height="400" width="425"></iframe><br><br>
<p> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62206.24722021342!2d79.94308255574994!3d6.587904364327314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2371ee59557e5%3A0x8b86ba840e8a7b51!2sKalutara!5e0!3m2!1sen!2slk!4v1536779694094" width="100%" height="600" frameborder="0" style="border:0" height="400" width=90%></iframe></p>
<iframe src="contact icon.html" height="600" width=100%></iframe>
</div>
 
<?php include("footer.php"); ?>


