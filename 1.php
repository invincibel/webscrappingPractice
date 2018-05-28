<?php
 $html = file_get_contents('http://pokemondb.net/evolution'); 

 $pokemon_doc= new DOMDocument();
libxml_use_internal_errors(TRUE);
if(!empty($html)){
    $pokemon_doc->loadHTML($html);
    libxml_clear_errors();
    $pokemon_xpath=new DOMPath($pokemon_doc);
    
    $pokemon_row=$pokemon_xpath->query('//h2[@id]');
    
    if($pokemon_row->length>0){
        foreach($pokemon_row as $row){
            echo $row->nodeValue."<br/>";
        }
    }
}
?>