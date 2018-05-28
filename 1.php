<?php
 $html = file_get_contents('http://pokemondb.net/evolution');// for gettingthe html 

 $pokemon_doc= new DOMDocument();
libxml_use_internal_errors(TRUE);//disable libxml errors
if(!empty($html)){//check whether tghe html is returned or not
    echo $html;
    
        }
    

?>