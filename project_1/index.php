<?php
    function fetchPage($name)
    {
        @$html=file_get_contents("https://github.com/".$name);
        libxml_use_internal_errors(TRUE);
        if(!empty($html)){
            libxml_clear_errors(); 
            echo $html;
        }
    }
 if(isset($_POST['Uname'])){$name=$_POST['Uname'];}
?>
<form action="http://localhost:8080/scapper/webscrappingPractice/project_1/index.php" method="post">
    <input type="text" name="Uname" required/><input type="submit" value="submit">
</form>
<?php
if(isset($name)){ fetchPage($name);}?>
<body>
    <script>
        var box = document.getElementsByTagName("nav");
        box[0].style.visibility="hidden";
    </script>
</body>