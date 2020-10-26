<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>File Upload</title>
  </head>
  <body>
    <form class="upload_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <input type="file" name="file" >
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
