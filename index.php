<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>inserting images to web form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="fo">
      <form method="post" action="upload.php" enctype="multipart/form-data">
      <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/><input name="uploadedfilee" type="file" style="height:35px;" /><br><br>
      <input type="submit" value="submit" name="submit">
      </form>
    </div>

  </body>
</html>
