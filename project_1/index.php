<form action="http://localhost:8080/scapper/webscrappingPractice/project_1/index.php" method="post">
    <input type="text" name="Uname" required/><input type="submit" value="submit">
</form>
<?php
    function fetchPage($name)
    {
        @$html = file_get_contents('https://github.com/'.$name."?tab=repositories");
        @$html2 = file_get_contents('https://github.com/'.$name."?tab=stars");
        $newD= new DOMDocument();
               $newD2= new DOMDocument();
        libxml_use_internal_errors(TRUE);
        if(!empty($html) && !empty($html2)){
           $newD->loadHTML($html);$newD2->loadHTML($html2);
            libxml_clear_errors();
            $pokemon_xpath = new DOMXPath($newD);
            $pokemon_xpath2 = new DOMXPath($newD2);
            $row = $pokemon_xpath->query('//h3');
            $row2 = $pokemon_xpath2->query('//h3');
            echo "<h1>Your Repositries</h1><br>";
            foreach($row as $r){
                echo $r->nodeValue."<br>";}
            echo "<h1>Your stars repositries</h1><br>";
            foreach($row2 as $r){
                echo $r->nodeValue."<br>";}
        }
    }
 if(isset($_POST['Uname'])){$name=$_POST['Uname'];}
?>

<?php
if(isset($name)){ fetchPage($name);}?>
    
