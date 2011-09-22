<?php include "includes/header.php"?>

<?php if($_GET['login_required'] == '1'): ?>
    <div class="alert-message error" data-alert="alert" >
            <a class="close" href="index.php">&times;</a>
            <style type="text/css">
      body {
        padding-top: 60px;
      }
    		</style>
            <p><strong>You must log in to view this page</strong> Try re-typing your login and password.</p><br/>
          </div>
<?php endif ?>

