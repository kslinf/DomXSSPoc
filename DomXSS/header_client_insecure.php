Demo page for DOM XSS
<BR><BR>
Hello from server
<?php
  echo htmlspecialchars($_COOKIE["Tempstore"]);
?>
<BR><BR>
Hello from client
<!-- <script src="insecureJS.js"></script> -->
<script>
  document.write(unescape(document.cookie));
</script>
