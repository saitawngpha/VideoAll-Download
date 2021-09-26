
<?php
if (!empty($_POST["site_name"])) {

    if ($_POST["site_services"]== "true") {
        $site_services = "true";

    }else {
        $site_services = "false";
    }
    if ($_POST["site_share_social_media"]== "true") {
        $site_share_social_media = "true";

    }else {
        $site_share_social_media = "false";
    }
    if ($config["site_ads"] == "true") {
        $site_ads = "true";

    }else {
        $site_ads = "false";
    }
       


        $content = "<?php ";
        $content .='$config["site_name"] = "'.$_POST["site_name"].'";';
        $content .='$config["site_desc"] = "'.$_POST["site_desc"].'";';
        $content .='$config["site_keyword"] = "'.$_POST["site_keyword"].'";';
       
        $content .='$config["site_share_social_media"] = '.$site_share_social_media.';';
        $content .='$config["site_services"] = '.$site_services.';';


        $content .='$config["site_theme"] = "'.$_POST["site_theme"].'";';
        $content .='$config["site_lang"] = "'.$config["site_lang"].'";';
        $content .='$config["site_ads"] = '.$site_ads.';';




        $content .='$config["site_facebook"] = "'.$_POST["site_facebook"].'";';
        $content .='$config["site_twitter"] = "'.$_POST["site_twitter"].'";';
        $content .='$config["site_youtube"] = "'.$_POST["site_youtube"].'";';
        $content .='$config["site_instagram"] = "'.$_POST["site_instagram"].'";';

      
        $content .='?>';

    $dosya = "../system/config/config.php";
 
    $dosya=fopen($dosya,"w");
     
   
     
    fwrite($dosya, $content);
     
    fclose($dosya);
    header("Location:index.php?page=1");
}



?>


<div class="col-md-12">
<div class="white-box">
<div class="col-lg-12">
                    <h1 class="page-header">General Settings</h1>
                </div>



<form method="post"  enctype="multipart/form-data">
<div class="form-group">
<label>Site Name</label>
<input type="text" name="site_name" class="form-control form-control-lg"  value="<?php echo $config["site_name"]; ?>">
</div>
<div class="form-group">
<label>Site Description</label>
<textarea name="site_desc" class="form-control form-control-lg"  rows="4"><?php echo $config["site_desc"]; ?></textarea>
</div>
<div class="form-group">
<label>Site Keywords</label>
<textarea name="site_keyword" class="form-control form-control-lg"  rows="4"><?php echo $config["site_keyword"]; ?></textarea>
</div>
<div class="form-group">
<label>Show Services</label>
<div>

<select name="site_services" class="form-control form-control-lg">
  <option value="true" <? if ($config["site_services"] === true ){?> selected <?php } ?> > YES / SHOW </option>
  <option value="false" <? if ($config["site_services"] === false){?> selected <?php } ?> > NO / NOT SHOWING </option>
</select>
</div>
</div>
<div class="form-group">
<label>Show Share Social Media</label>
<div>
<select name="site_share_social_media" class="form-control form-control-lg">
  <option value="true" <? if ($config["site_share_social_media"] === true ){?> selected <?php } ?> > YES / SHOW </option>
  <option value="false" <? if ($config["site_share_social_media"] === false){?> selected <?php } ?> > NO / NOT SHOWING </option>
</select>
  
</div>
</div>

<div class="form-group">
<label>Site Theme</label>
<div>
<select name="site_theme" class="form-control form-control-lg">
  <option value="theme1" <? if ($config["site_theme"] === "theme1"){?> selected <?php } ?> > Theme 1 </option>
  <option value="theme2" <? if ($config["site_theme"] === "theme2"){?> selected <?php } ?> > Theme 2 </option>
</select>


</div>
</div>


<div class="form-group">
<label>Facebook </label>
<input type="text" name="site_facebook" class="form-control form-control-lg"  value="<?php echo $config["site_facebook"]; ?>">
</div>
<div class="form-group">
<label>Twitter </label>
<input type="text" name="site_twitter" class="form-control form-control-lg"  value="<?php echo $config["site_twitter"]; ?>">
</div>
<div class="form-group">
<label>Instagram </label>
<input type="text" name="site_instagram" class="form-control form-control-lg"  value="<?php echo $config["site_instagram"]; ?>">
</div>
<div class="form-group">
<label>Youtube </label>
<input type="text" name="site_youtube" class="form-control form-control-lg"  value="<?php echo $config["site_youtube"]; ?>">
</div>




<div class="form-group m-b-0">
<button type="submit" name="submit" class="btn btn-success pull-right">
<i class="fa fa-check-square-o"></i> Update
</button>
</div>
</form>
</div>
</div>