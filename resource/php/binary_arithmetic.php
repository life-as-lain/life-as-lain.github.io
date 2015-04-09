<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">-->
<link rel="stylesheet" type="text/css" href="resource/css/main.css">

<?php
  function get_binary_nums() {
    $bin[0] = decbin(rand(0,128));
    $bin[1] = decbin(rand(0,128));
    return $bin;
  }
  function add(){
    list($bin[0],$bin[1]) = get_binary_nums();
    echo "<form method=\"post\" >$bin[0] + $bin[1] = <input type=\"text\" name=\"answer\"><input type=\"submit\" value=\"Submit\"></form>";
    $answer = $_POST["answer"];
    if ((bindec($bin[0]) + bindec($bin[1])) == bindec($answer)) {
      echo "your answer $answer is right";
    } else {
      echo "Try Again, your answer $answer is wrong";
    }
  }
  add();
?>
