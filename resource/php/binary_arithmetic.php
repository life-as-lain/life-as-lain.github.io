<?php session_start(); ?>
<?php
  function get_binary_num() {
    $bin = decbin(rand(0,16));
    return $bin;
  }
  $_SESSION["bin1"] = get_binary_num();
  $_SESSION["bin2"] = get_binary_num();
?>
<head>
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
<form method="post" action="binary_ar_handler.php"> <?php echo $_SESSION["bin1"] . "+". $_SESSION["bin2"];?> = <input type="text" autocomplete="off" name="answer"><input name="sumbit" type="submit" value="Submit"></form>
</body>
