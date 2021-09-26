<?php
set_time_limit(0);

if (!empty($_POST["url"]) && !strstr($_POST["url"], ".php") && $_POST["type"] !="php") {
        # code...



$url = $_POST["url"];
$title=$_POST["title"];
$type=$_POST["type"];




  try {
    include 'system/down_func.php';

force_download(strip_tags($url), $title, $type);

  } catch (Exception $e) {
    
    header("Location: ".$url);
  }



}else{
  echo "<h2>Invalid Video Url !</h2>";
  header('Refresh: 3; Location: '. $_SERVER['HTTP_REFERER']);
}


                

?>

