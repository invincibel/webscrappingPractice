<?php
 @$html = file_get_contents('http://pokemondb.net/evolution');// for getting the htmlusing @ on starting to avoid warnings 

 $pokemon_doc= new DOMDocument();
libxml_use_internal_errors(TRUE);//disable libxml errors
if(!empty($html)){//check whether the html is returned or not
    echo $html;
    
        }
    

?>