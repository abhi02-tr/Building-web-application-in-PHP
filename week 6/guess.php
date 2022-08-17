<html>
<head>
<title>Abhi Trivedi</title>
</head>
<body>
<h1>Welcome to my guessing game</h1>
<p>
<?php

  $correctNumber = 42;
  if ( ! isset($_GET['guess']) ) { 
    echo("Missing guess parameter");
  } else if ( strlen($_GET['guess']) < 1 ) {
    echo("Your guess is too short");
  } else if ( ! is_numeric($_GET['guess']) ) {
    echo("Your guess is not a number");
  } else if ( $_GET['guess'] < $correctNumber ) {
    echo("Your guess is too low");
  } else if ( $_GET['guess'] > $correctNumber ) {
    echo("Your guess is too high");
  } else if( $_GET['guess'] === $correctNumber){
    echo("Congratulations - You are right");
  }
  else {
    echo "Your guess is too short";
  }
?>
</p>
</body>
</html>
  
