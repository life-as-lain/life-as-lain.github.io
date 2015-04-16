<?php
  $link = mysqli_connect('setapproject.org','csc412','csc412', 'csc412');
  if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

    $author = $_POST['author'];
    $joke = $_POST['joke'];
    $author = mysqli_real_escape_string($link,$author);
    $joke = mysqli_real_escape_string($link,$joke);
    $result = mysqli_query($link,"INSERT INTO iain_table (Author,Quote) VALUES ('$author','$joke')");
    if ($result) {
      echo 'Thank You!';
    }
    mysqli_close($link);
?>
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">-->


    <link rel="stylesheet" type="text/css" href="../css/main.css">
  </head>
  <body>
    <form action="random_joke.php"><input type="submit" value="Try Again"></form>
  </body>
</html>
