<?php
 function cleanUrl($url){
     if(isset($url)){
        if(!empty($url)){
         return strip_tags($url);
        }
        }
     }
     //check whether the url is real
      function isUrl($url){
         $url=cleanUrl($url);
         if(isset($url)){
             if(filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED)){
                 return $url;
             }
         }
     }
     //get extension of url
      function returnExtension($url){
         if(isUrl($url)){
           @$end=end(preg_split("/[.]/",$url));
             if(isset($end))
                 return $end;
         }
     }
     //download file
      function downloadFile($url){
         if(isUrl($url)){
             $extension=returnExtension($url);
             if($extension)
             {
                 echo $url;
             }
         }
     }
 
if(isset($_POST['url'])){$url=$_POST['url']; }
?>
<form action="http://localhost:8080/scapper/webscrappingPractice/4.php" method="post">
    <input type="text" name="url">
    <input type="submit" value="download">
</form>
<?php
if(isset($url)){ downloadFile($url); }

?>