<?php

if($_FILES["file"]["name"] != '')
{
 $test = explode('.', $_FILES["file"]["name"]);
 $ext = end($test);
 $name = $_FILES["file"]["name"];
 $location = 'img/'.$name;  
 move_uploaded_file($_FILES["file"]["tmp_name"], $location);
 echo '<embed src="'.$location.'"  class="img-thumbnail" style="width:200px;"/></embed>';
}
?>