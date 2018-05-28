<?php
 $html = file_get_contents('http://pokemondb.net/evolution'); 

 $pokemon_doc= new DOMDocument();
libxml_use_internal_errors(TRUE);
if(!empty($html)){
    echo $html;
    
        }
    

?>