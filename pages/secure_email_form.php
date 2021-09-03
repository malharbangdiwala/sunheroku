<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Us</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<script>
  function mapWidth() {
    let box = document.getElementById('map');
    let width = box.offsetWidth;
    return width;
  }
  </script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-XEGJ3SN0S1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', 'G-XEGJ3SN0S1');
  </script>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="../index.html">Sun Logo</a></h1>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li><strong>Sun:</strong><br>
          +00 (123) 456 7890</li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li><a href="../index.html">Home</a></li>
      <li><a class="drop" href="./product-range.html">Product Range</a>
        <ul>
          <li><a href="range1.html">Range 1</a></li>
          <li><a href="range2.html">Range 2</a></li>
          <li><a href="range3.html">Range 3</a></li>
        </ul>
      </li>
      <li><a href="about-us.html">About Us</a></li>
      <li class="active"><a href="#">Contact Us</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');">
  <section id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h6 class="heading">Contact Us</h6>
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="../index.html">Home</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <div id="comments" class="one_half first">
        <h2>Write To Us</h2>
        <form method="post" action="#">
          <div class="one_half first">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name" value="" size="22" required>
          </div>
          <div class="one_half">
            <label for="email">Mail <span>*</span></label>
            <input type="email" name="email" id="email" value="" size="22" required>
          </div>
          <div class="block clear">
            <label for="product">Product Number</label>
            <input type="text" name="product" id="product" value="" size="22">
          </div>
          <div class="block clear">
            <label for="comment">Your Comment<span>*</span></label>
            <textarea name="comment" id="comment" cols="25" rows="10" required></textarea>
          </div>
          <div>
            <input type="submit" name="submit" value="Submit Form">
            &nbsp;
            <input type="reset" name="reset" value="Reset Form">
          </div>
        </form>
        <div id="feedback">
<!-- Heading Of The Form -->
<div class="head">
<h3>FeedBack Form</h3>
<p>This is feedback form. Send us your feedback !</p>
</div>
<!-- Feedback Form -->
<form action="#" id="form" method="post" name="form">
<input name="vname" placeholder="Your Name" type="text" value="">
<input name="vemail" placeholder="Your Email" type="text" value="">
<input name="sub" placeholder="Subject" type="text" value="">
<label>Your Suggestion/Feedback</label>
<textarea name="msg" placeholder="Type your text here..."></textarea>
<input id="send" name="submit" type="submit" value="Send Feedback">
</form>
<h3><?php include "secure_email_code.php"?></h3>
</div>
      </div>
      <div id= "map" class="one_half">
      <h1>Address</h1>
      <p>C-1 Shiv Kutir, Veer Savarkar Marg</p>
      <p>Dadar West, Mumbai -400028</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.831460536151!2d72.82357531472745!3d18.938852787166724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1e0f0a26a81%3A0x87d6e47e04df3916!2sWankhede%20Stadium%20Mumbai!5e0!3m2!1sen!2sin!4v1630389950528!5m2!1sen!2sin" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <!-- ################################################################################################ -->
   
      
    <!-- ################################################################################################ -->
    <!-- / main body -->
  </div>
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4 bgded overlay">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="heading">Address</h6>
      <p>Nunc phasellus nec sem ac ligula elementum cursus fusce in augue blandit ligula pharetra.</p>
      <p>Mattis aliquam erat volutpat vestibulum porta aliquam erat volutpat mauris at tellus at sapien elementum luctus.</p>
    </div>


    <div class="one_half">
      <h6 class="heading">Links</h6>
      <ul class="nospace linklist">
        <li><a href="../index.html">Home</a></li>
        <li><a href="./product-range.html">Product Range</a></li>
        <li><a href="about-us.html">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
    <div class="one_quarter ">
      <h6 class="heading">Social Media</h6>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">Domain Name</a></p>

    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
