<?php 
//connection
require_once($_SERVER['DOCUMENT_ROOT'].'/config/ConnString.php');
//Email
require($_SERVER['DOCUMENT_ROOT'].'/lib/phpmailer/PHPMailerAutoload.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>011631736572 | Products</title>
    <link href="/img/logo/favicon.png" rel="shortcut icon" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha256-916EbMg70RQy9LHiGkXzG8hSg9EdNy97GazNG/aiY1w=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha256-ZT4HPpdCOt2lvDkXokHuhJfdOKSPFLzeAJik5U/Q+l4=" crossorigin="anonymous" >
    <link rel="stylesheet" href="css/w3howto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/css/dataTables.bootstrap.min.css" integrity="sha256-TihKTLoy3iBCO16p5bOOdNJiNbl+sUEYZlSZvMzaK6E=" crossorigin="anonymous" />
  <style>
    /* Navbar Fixed Header and It's Home content*/
    .navbar-default {background: none; border: none;}
    .navbar a {color: #fff !important; }
    .navbar a:hover{color: #d65050 !important;}
    #Footer {padding-top:20px;height:100%;color: #fff; background-color: #202529;}
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" style="margin-top: 50px;">
  <!-- Fixed Top navbar -->
  <div class="navbar navbar-default navbar-fixed-top" style="color: red !important; background-color: #202529 !important;">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="http://www.rituraj.com/">
          <img src="/img/logo/rtgi_logo.png" alt="rtgi_logo" style="margin-top: -10px; width: 90px; height: 45px;">
        </a>
      </div><!--/.navbar-header -->
      <!-- Collapsible Menu -->
      <div class="collapse navbar-collapse pull-right">
        <ul class="nav navbar-nav">
          <li><a href="http://www.rituraj.com/#Home">Home</a></li>
          <li><a href="http://www.rituraj.com/#About">About</a></li>
          <li><a href="http://www.rituraj.com/#Mission">Mission</a></li>
          <li><a href="http://www.rituraj.com/#Products">Products</a></li>
          <li><a href="http://www.rituraj.com/#Gallery">Gallery</a></li>
          <li><a href="http://www.rituraj.com/#Clients">Clients</a></li>
          <li><a href="http://www.rituraj.com/#Contact">Contact</a></li>
          <li><a href="http://www.rituraj.com/#Career">Career Opportunities</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
  </div><!--/ .navbar-fixed-top -->
  <!--
<div class="container">
  <a class="navbar-brand row" href="http://www.rituraj.com/">
    <img src="/img/logo/rtgi_logo.png" alt="rtgi_logo" style="margin-top: -10px; width: 90px; height: 45px;">
  </a>
</div>
-->
<div class="container">
<div class="page-header">
  <h3>Products</h3>
</div>

<div>
  <h4>Cotton Craft Ultra Soft 6 Pack Hand Towels 16x28 Light Blue weighs 6 Ounces each - 100% Pure Ringspun Cotton - Luxurious Rayon trim - Ideal for everyday use - Easy care machine wash</h4>
  <div class="col-sm-6">
    <img src="/products/011631736572-IMG01.jpg" alt="Main Image">
  </div>
  <div class="col-sm-6">
    <legend>Product Description</legend>
    <p>Our 100% pure ringspun cotton hand towels are woven on state of the art super luxury towel looms. These hand towels are highly absorbent and will last a long time. Ideal for everyday use, these are highly versatile and can also be used as kitchen towels. We recommend to launder before first use. Easy to care for, just throw them in your washing machine. They will grow softer and fluffier with each wash.</p>
    <legend>Product Details</legend>
    <table class="table table-condensed table-bordered small">
      <tr>
        <th class="info">UPC: </th><td class="text-primary">011631736572</td>
      </tr>
      <tr>
        <th class="info">Size: </th><td>16x28 Inches</td>
      </tr>
      <tr>
        <th class="info">Color: </th><td>Light Blue</td>
      </tr>
      <tr>
        <th class="info">Packaging: </th><td>6 Pack Set</td>
      </tr>
      <tr>
        <th class="info">Material Type: </th><td>100% Pure Ringspun Cotton</td>
      </tr>
    </table>
    <legend>Authorization</legend>

    <p class="text-mute">We have authorized <a href="">Orient Originals, Inc.</a> to sell this product under the brand name <a href="https://www.amazon.com/dp/B00X17TGRW">Cotton Craft</a> in any e-commerce websites.</p>
  </div>
</div>

<!-- Terms & Privacy Policy -->
 <!-- Terms modal -->
  <div id="modPrivacy" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Privacy Policy</h2>
        </div>
        <div class="modal-body">
          <?php 
            include('/home/content/88/13967188/html/privacy.html');
          ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Terms modal -->
  <div id="modTerms" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Terms &amp; Conditions</h2>
        </div>
        <div class="modal-body">
          <?php 
            include('/home/content/88/13967188/html/terms.html');
          ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">I Agree</button>
        </div>
      </div>
    </div>
  </div>  
</div>
<!-- javascript links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha256-U5ZEeKfGNOja007MMD3YBI0A3OSZOQbeG6z2f2Y0hu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/1.2.1/bootstrap-filestyle.min.js" integrity="sha256-D9HtfjDqQvTcNZ9GzvTPh57clN8z8B6x53d1lI8LaJo=" crossorigin="anonymous"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTXJ8EHNl5nTitOHnHXUJWIDRvXd2KbKY&callback=initMap"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.min.js" integrity="sha256-8G/BdtcUMWw3c6j5nBvVtzaoj3sq/kX6xNN2FQ0w0MY=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/js/jquery.dataTables.min.js" integrity="sha256-j007R7R6ijEWPa1df7FeJ6AFbQeww0xgif2SJWZOhHw=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/js/dataTables.bootstrap.min.js" integrity="sha256-X/58s5WblGMAw9SpDtqnV8dLRNCawsyGwNqnZD0Je/s=" crossorigin="anonymous"></script>
</body>
<!-- Footer -->
<footer id="Footer">
  <div class="container-fluid">
    <div class="row" style="padding-top: 15px; padding-bottom: 15px;">
      <div class="col-sm-3"><p>&copy; 2017-2018 Rituraj Textiles. All rights reserved.</p></div>
      <div class="col-sm-3">
        <!--
        <a href="">Feedback</a>&nbsp;&nbsp;&nbsp;
        -->
        <a href="" data-toggle="modal" data-target="#modPrivacy">Privacy</a>&nbsp;&nbsp;&nbsp;
        <a href="" data-toggle="modal" data-target="#modTerms">Site Terms</a>
      </div>
      <div class="col-sm-3"></div>
      <div class="col-sm-3"></div>
    </div><!-- / .row -->
  </div><!-- / .container-fluid -->
</footer><!-- @End Footer -->
</html>
<!-- $sql_get_cand = $conn->query("SELECT ") -->

