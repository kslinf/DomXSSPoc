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
      split_str=key[1].split('');
      for(var j in split_str) {
        if(split_str[j] == '<') {
             split_str[j] = '&lt;';
         } else if(split_str[j] == '>') {
             split_str[j] = '&gt;';
         } else if(split_str[j] == "'") {
             split_str[j] = '&#39;'; 
         } else if(split_str[j] == '"') {
             split_str[j] = '&quot;';                        
         } else if(split_str[j] == '%') {
             split_str[j] = '&#x25;';                        
         }
      }
      //document.write(decodeURIComponent(split_str));
      for(var k in split_str) {
        //alert(split_str[k]);
        document.write(split_str[k]);
      }
    }
}
</script>
