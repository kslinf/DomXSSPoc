Demo page for DOM XSS
<BR><BR>

Hello
<?php
  echo htmlspecialchars($_COOKIE["Tempstore"]);
?>
