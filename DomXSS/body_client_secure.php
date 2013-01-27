Demo page for DOM XSS
<BR><BR>
Hello from server
<?php
  echo htmlspecialchars($_POST["name"]);
?>
<BR><BR>
Hello from client
<!-- <script src="insecureJS.js"></script> -->
<script>
  document.write(escape(document.cookie.substring(0)));
</script>
