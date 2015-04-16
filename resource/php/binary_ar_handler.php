<?php session_start(); ?>
<?php
  add($_SESSION["bin1"],$_SESSION["bin2"]);
  function add($bin1,$bin2){
      $answer = $_POST["answer"];
      $dec1 = bindec($bin1);
      $dec2 = bindec($bin2);
      $dec_answer = bindec($answer);
      if (($dec1 + $dec2) == $dec_answer) {
        echo "Good Job! $bin1 + $bin2 = $answer is correct!";
      } else if (($dec1 + $dec2) != $dec_answer){
      echo "Try Again, your answer  $bin1 + $bin2 = $answer is wrong";
      } else {
        echo "Give it a shot!";
      }
  }
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
<form action="binary_arithmetic.php"><input type="submit" value="Try Again"></form>
</body>
