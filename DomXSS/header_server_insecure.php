Demo page for DOM XSS
<BR><BR>

Hello
<?php
  echo 'Your cookie value is :';
  echo ($_COOKIE['Tempstore']);
?>
