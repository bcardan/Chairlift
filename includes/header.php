<?php 
session_start();
require_once "includes/auth.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Chairlift Development</title>
    <meta name="Chairlift Development Home" content="Chairlift Development">
    <meta name="Bent" content="Front End Developer">

    <!-- HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- steeze -->
    <link href="assets/css/bootleg.css" rel="stylesheet">
    <link href="assets/css/blossom.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- javascript -->
    <script src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
    <script src="http://autobahn.tablesorter.com/jquery.tablesorter.min.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>
    <script>$(function () { prettyPrint() })</script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-twipsy.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/application.js"></script>
    <script src="assets/js/bootstrap-tabs.js"></script>

    <!-- fav and touch icons -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon" href="assets/ico/bootstrap-apple-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/ico/bootstrap-apple-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/ico/bootstrap-apple-114x114.png">
  </head>

  <body>

    <!-- Topbar
    ================================================== -->
    <div class="topbar" data-scrollspy="scrollspy" >
      <div class="topbar-inner">
        <div class="container">
			         
          <ul class="nav"><img class="brand" src="assets/img/dopelogo.png" alt="Chairlift Development" /> 
            <li class="active"><a href="#overview">Welcome</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#work">Work</a></li>
            <li><a href="#contact">Contact</a></li>
            <?php if(current_user()):?><li><a href="dl.php">Downloads</a></li><?php endif; ?>
          </ul>
          <?php if(current_user()):?><p class="pull-right">Logged in as <a href="#"><?php echo current_user();?></a> <a href="logout.php">logout</a></p>
          <?php else: ?><form action="authenticate.php" method="POST" class="pull-right">
            <input class="input-small" type="text" placeholder="Username" name="username" id="username">
            <input class="input-small" type="password" placeholder="Password" name="password" id="password">
            <button class="btn" type="submit" value="Log In">Sign in</button>
          </form> 
          <?php endif; ?>
        </div>
      </div>
    </div>
<?php if($_GET['error'] == '1'): ?>
    <div class="alert-message error" data-alert="alert" >
            <a class="close" href="index.php">&times;</a>
            <p><strong>Oh snap! Wrong login/pass combo!</strong> Try re-typing your login and password.</p><br/>
          </div>
<?php endif ?>

