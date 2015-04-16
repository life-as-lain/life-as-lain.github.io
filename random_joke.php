<?php
  $link = mysqli_connect('setapproject.org','csc412','csc412', 'csc412');
  if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql = "SELECT * FROM iain_table";
  $result = mysqli_query($link,$sql);
  while($row = mysqli_fetch_array($result)) {
    echo $row[0] . " " . $row[1];
    echo "<br>";
  }
  mysqli_close($link);

?>
<html>
  <head>
    <title>Random Jokes</title>
    <link rel="shortcut icon" href="resource/img/favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">-->


    <link rel="stylesheet" type="text/css" href="resource/css/main.css">
  </head>
  <body>
    <form action="random_joke_handler.php" method="post">
      <input type="text" name="author" value="Author">
      <input type="text" name="joke" value="Joke">
      <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>
