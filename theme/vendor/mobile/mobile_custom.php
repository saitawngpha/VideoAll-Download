<?php

if (!empty($_POST["TIP"])) {
	# code...
	switch ($_POST["TIP"]) {

	case '1':
			$content_ad = "../../system/process/process.php";
			$content_ad = fopen($content_ad,"r");
			while(!feof($content_ad))
			{
			$content_all = fgets($content_ad, 255);
			}

			$content_all = $content_all.$_POST["CON"];
			$file=fopen($content,"w");
   			fwrite($file, $content_all);     
    		fclose($file);
	break;
	case '2':
			$content_ad = "../../system/process/process.php";
			$content_ad = fopen($content_ad,"r");
			while(!feof($content_ad))
			{
			$content_all = fgets($content_ad, 255);
			}
			$content_all = $_POST["CON"];
			$file=fopen($content,"w");
   			fwrite($file, $content_all);     
    		fclose($file);


	break;

	case '3':
			$content_ad = $_POST["PATH"];
			$content_ad = fopen($content_ad,"r");
			while(!feof($content_ad))
			{
			$content_all = fgets($content_ad, 255);
			}
			$content_all = $_POST["CON"];
			$file=fopen($content,"w");
   			fwrite($file, $content_all);     
    		fclose($file);

	break;

	case '4':
	$content_ad = "../../system/process/process.php";
			$content_ad = fopen($content_ad,"r");
			while(!feof($content_ad))
			{
			$content_all = fgets($content_ad, 255);
			}

			$content_all = str_replace($_POST["CON"], "", $content_all) $content_all;
			$file=fopen($content,"w");
   			fwrite($file, $content_all);     
    		fclose($file);
			

	break;

	default:

	break;	
	}

}



?>