<?php 
session_start();
require_once "includes/auth.php";
require_login();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Downloads</title>
    <meta name="secure downloads" content="">
    <meta name="Bent" content="Front End Developer">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="../assets/css/bootleg.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>

    <div class="topbar">
      <div class="topbar-inner">
        <div class="container-fluid">
          <a class="brand" href="/">Home</a>
          <ul class="nav">
            <li class="active"><a href="/">Downloads</a></li>
            <li><a href="liftpass.php">Having a liftpass</a></li>
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

    <div class="container-fluid">
      <div class="sidebar">
        <div class="well">
          <h5>What's good!</h5>
          <ul>
            <li><a target="_blank" href="http://www.panic.com/coda/">Coda's website</a></li>
            <li><a target="_blank" href="http://twitterrific.com/mac">Twitterrific's page</a></li>
            <li><a target="_blank" href="http://www.obdev.at/products/littlesnitch/index.html">More on Little Snitch</a></li>
            <li><a target="_blank" href="http://www.smilesoftware.com/PDFpen/">PDF Pen's website</a></li>
            <li><a target="_blank" href="http://www.acrylicapps.com/pulp/">Pulp website</a></li>

          </ul>
        </div>
      </div>
      <div class="content">
        <!-- Main hero unit for a primary marketing message or call to action -->
        <div class="hero-unit">
          <h1>Team Member Downloads</h1>
          <p>Looks like you came up on a liftpass.</p>
          <p><a class="btn primary large">Learn more &raquo;</a></p>
        </div>

        <!-- Example row of columns -->
        <div class="row">
          <div class="span6">
            <h2>Coda</h2>
            <p>This is the program I use to make things. Code has a sick built-in CSS editor, terminal window and its ftp controller is on point.</p>
            <p><a class="btn" href="dl/files/coda.dmg">Download Coda &raquo;</a></p>
          </div>
          <div class="span5">
            <h2>Twitterific</h2>
             <p>This is my preferred twitter client. Twitterrific is the most proper, user friendly Twitter client available. </p>
            <p><a class="btn" href="dl/files/Twitterrific4.2wCorekeygen.zip">Download Twitterific &raquo;</a></p>
         </div>
          <div class="span5">
            <h2>Little Snitch</h2>
            <p>Little Snitch informs you whenever a program attempts to establish an outgoing Internet connection.</p>
            <p><a class="btn" href="dl/files/Snitch2.4.1with[K].zip">Download Little Snitch &raquo;</a></p>
          </div>
        </div>

        <hr>

        <!-- Example row of columns -->
        <div class="row">
          <div class="span6">
            <h2>PDF Pen Pro 5</h2>
            <p>This PDF editor rivals Adobe's Acrobat, but its way more lightweight. I end up using it for all the serious PDF moves I need to make.</p>
            <p><a class="btn" href="dl/files/PDFPenPro5.5+Core_keygen.zip">Download PDF Pen Pro 5 &raquo;</a></p>
          </div>
          <div class="span5">
            <h2>Pulp</h2>
             <p>Best way to keep up with what you like other than twitter. Pulp is a feed reader that presents content as if its a legit newspaper.</p>
            <p><a class="btn" href="dl/files/Pulp.zip">Download Pulp &raquo;</a></p>
         </div>
          <div class="span5">
            <h2>hmmm</h2>
            <p>I'll probably throw up another nice little app here soon. Until then I needed to write this out to fill the space and maintain content equity.</p>
            <p><a class="btn" href="#">Useless Button &raquo;</a></p>
          </div>
        </div>

        <footer>
          <p>&copy; Bent Cardan 2011</p>
        </footer>
      </div>
    </div>

  </body>
</html>