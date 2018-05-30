<?php
 //first initialise session
$ch= curl_init();
//set option
curl_setopt($ch,CURLOPT_URL,"https://namanvashistha.github.io/");
//execute session
curl_exec($ch);
//closing curl
curl_close($ch);
?>
<html>
    <body>
        >Hello World!</p>

<p>The DOM is very useful.</p>
<p>This example demonstrates the <b>getElementsByTagName</b> method</p>

<p id="demo"></p>
        <script>
var x = document.getElementsByTagName("p");
document.getElementById("demo").innerHTML = 
'The first paragraph (index 0) is: ' + x[0].innerHTML;
        </script>
    </body>
</html>