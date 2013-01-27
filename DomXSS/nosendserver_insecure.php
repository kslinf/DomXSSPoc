Demo page for DOM XSS
<BR><BR>
Hello from server
<?php
  echo htmlspecialchars($_GET["name"]);
?>
<BR><BR>
Hello from client
<!-- <script src="insecureJS.js"></script> -->
<script>
var queryString = window.location.hash.substring(1);
var keyValues = queryString.split('&'); 

for(var i in keyValues) { 
    var key = keyValues[i].split('=');
    if (key[0] == 'name') {
      document.write(decodeURIComponent(key[1]));
    }
}
</script>
