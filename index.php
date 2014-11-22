<?php

?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="assets/styles/styles.scss" />
  </head>
  <body>
    <header></header>
    <div id="content">
      <div class="notice-good">
        <p><?= $notice ?>
      </div>
      <div class="notice-error">
        <p><?= $notice ?>
      </div>
      <form method="POST">
        <input type="text" placeholder="Your Name" name="name" />
        <input type="email" placeholder="Your Email" name="email_address" />
        <input type="submit" value="Submit" name="submit" />
      </form>
    </div>
  </body>
</html>
