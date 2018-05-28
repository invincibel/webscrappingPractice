<?php
 @$html = file_get_contents('https://www.google.com/search?q=hritik');// for getting the htmlusing @ on starting to avoid warnings 

 $pokemon_doc= new DOMDocument();
libxml_use_internal_errors(TRUE);//disable libxml errors
if(!empty($html)){//check whether the html is returned or not  
    //if i need all anchor tags only
     $pokemon_doc->loadHTML($html);
	libxml_clear_errors(); //remove errors for yucky html
	
	$pokemon_xpath = new DOMXPath($pokemon_doc);

	//get all the h2's with an id
	$pokemon_row = $pokemon_xpath->query('//a');

	if($pokemon_row->length > 0){
		foreach($pokemon_row as $row){
			echo $row->nodeValue . "<br/>";
		}
	}
        }
    

?>