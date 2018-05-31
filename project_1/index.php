<?php
    function fetchPage($name)
    {
        @$html = file_get_contents('https://github.com/'.$name);
        $newD= new DOMDocument();
        libxml_use_internal_errors(TRUE);
        if(!empty($html)){
           $newD->loadHTML($html);
            libxml_clear_errors();
            $pokemon_xpath = new DOMXPath($newD);
            $row = $pokemon_xpath->query('//li');
            foreach($row as $r)
                echo $r->nodeValue;
        }
    }
 if(isset($_POST['Uname'])){$name=$_POST['Uname'];}
?>

<?php
if(isset($name)){ fetchPage($name);}?>
    <form action="http://localhost:8080/scapper/webscrappingPractice/project_1/index.php" method="post">
    <input type="text" name="Uname" required/><input type="submit" value="submit">
</form>
