<?php
  $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

  $forbiddenWord = $_GET["badWord"];

  $text = str_replace($forbiddenWord, '***', $text)


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>First steps with PHP</title>
  </head>
  <body>

    <p><?php echo ($text); ?></p>
    <span>String length:</span> <b><?php echo strlen($text); ?></b>

  </body>
</html>
