<?php
 @$html = file_get_contents('https://www.google.com/search?q=---the thing i want to search---');// for getting the htmlusing @ on starting to avoid warnings 

 $pokemon_doc= new DOMDocument();
libxml_use_internal_errors(TRUE);//disable libxml errors
if(!empty($html)){//check whether the html is returned or not
       echo $html;   
        }
    

?>