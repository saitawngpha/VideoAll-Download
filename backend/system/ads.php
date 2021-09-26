<?php
if (!empty($_POST["ads728"])) {

   
    if ($config["site_services"]== true) {
        $site_services = "true";

    }else {
        $site_services = "false";
    }
    if ($config["site_share_social_media"]== true) {
        $site_share_social_media = "true";

    }else {
        $site_share_social_media = "false";
    }
    if ($_POST["site_ads"] == "true") {
        $site_ads = "true";

    }else {
        $site_ads = "false";
    }

        $content = "<?php ";
        $content .='$config["site_name"] = "'.$config["site_name"].'";';
        $content .='$config["site_desc"] = "'.$config["site_desc"].'";';
        $content .='$config["site_keyword"] = "'.$config["site_keyword"].'";';
       
        $content .='$config["site_share_social_media"] = '.$site_share_social_media.';';
        $content .='$config["site_services"] = '.$site_services.';';


        $content .='$config["site_theme"] = "'.$config["site_theme"].'";';
        $content .='$config["site_lang"] = "'.$config["site_lang"].'";';
        $content .='$config["site_ads"] = '. $site_ads.';';

        $content .='$config["site_facebook"] = "'.$config["site_facebook"].'";';
        $content .='$config["site_twitter"] = "'.$config["site_twitter"].'";';
        $content .='$config["site_youtube"] = "'.$config["site_youtube"].'";';
        $content .='$config["site_instagram"] = "'.$config["site_instagram"].'";';

      
        $content .='?>';

    $dosya = "../system/config/config.php";
 
    $dosya=fopen($dosya,"w");
     
    fwrite($dosya, $content);
     
    fclose($dosya);

    //728 ads
    $dosya = "../system/ads/728-ads.php";
 
    $dosya=fopen($dosya,"w");
     
    fwrite($dosya,$_POST["ads728"] );
     
    fclose($dosya);
 //336 ads
 $dosya = "../system/ads/336-ads.php";
 
 $dosya=fopen($dosya,"w");
  
 fwrite($dosya,$_POST["ads336"] );
  
 fclose($dosya);



 header("Location:index.php?page=2");

}


$ads336 = "../system/ads/336-ads.php";
$ads336 = fopen($ads336,"r");
while(!feof($ads336))
{
$ads336_content = fgets($ads336, 255);

}
$ads728 = "../system/ads/728-ads.php";
$ads728 = fopen($ads728,"r");
while(!feof($ads728))
{
$ads728_content = fgets($ads728, 255);

}


?>



<div class="col-md-12">
<div class="white-box">

<div class="col-lg-12">
                    <h1 class="page-header">Ads Manager</h1>
                </div>


<form method="post"  enctype="multipart/form-data">

<div class="form-group">
<label>Show Ads</label>
<div>
<select name="site_ads" class="form-control form-control-lg">
  <option value="true" <? if ($config["site_ads"] === true ){?> selected <?php } ?> > YES / SHOW </option>
  <option value="false" <? if ($config["site_ads"] === false){?> selected <?php } ?> > NO / NOT SHOWING </option>
</select>
  
</div>
</div>

<div class="form-group">
<label>728x90 ADS CODE HERE</label>
<textarea name="ads728" class="form-control form-control-lg"  rows="4"><?php echo $ads728_content; ?></textarea>
</div>
<div class="form-group">
<label>336x90 ADS CODE HERE</label>
<textarea name="ads336" class="form-control form-control-lg"  rows="4"><?php echo $ads336_content; ?></textarea>
</div>


<div class="form-group m-b-0">
<button type="submit" name="submit" class="btn btn-success pull-right">
<i class="fa fa-check-square-o"></i> Update
</button>
</div>
</form>
</div>
</div>