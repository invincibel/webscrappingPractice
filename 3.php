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