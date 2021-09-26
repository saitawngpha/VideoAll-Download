<?php
require_once(__DIR__ . "/../../system/language/".$_GET["language"].".php");

if (!empty($_POST["download"])) {



        
        $content = "<?php ";
        $content .='$lang["download"] = "'.$_POST["download"].'";';
        $content .='$lang["support-services"] = "'.$_POST["support-services"].'";';
        $content .='$lang["support-services-desc"] = "'.$_POST["support-services-desc"].'";';
        $content .='$lang["success-image"] = "'.$_POST["success-image"].'";';
        $content .='$lang["success-video"] = "'.$_POST["success-video"].'";';
        $content .='$lang["download-video"] = "'.$_POST["download-video"].'";';
        $content .='$lang["share-social-media"] = "'.$_POST["share-social-media"].'";';
        $content .='$lang["other-video"] = "'.$_POST["other-video"].'";';
        $content .='$lang["Quality"] = "'.$_POST["Quality"].'";';
        $content .='$lang["Format"] = "'.$_POST["Format"].'";';
        $content .='$lang["Size"] = "'.$_POST["Size"].'";';
        $content .='$lang["Downloads"] = "'.$_POST["Downloads"].'";';
        $content .='$lang["no-videos"] = "'.$_POST["no-videos"].'";';
        $content .='$lang["unknown"] = "'.$_POST["unknown"].'";';
        $content .='$lang["home"] = "'.$_POST["home"].'";';
        $content .='$lang["services"] = "'.$_POST["services"].'";';
        $content .='$lang["sss"] = "'.$_POST["sss"].'";';
        $content .='$lang["terms"] = "'.$_POST["terms"].'";';
        $content .='$lang["contact"] = "'.$_POST["contact"].'";';
        
             
        $content .='?>';

    $dosya = "../system/language/".$_GET["language"].".php";
 
    $dosya=fopen($dosya,"w");
    fwrite($dosya, $content);     
    fclose($dosya);

    header("Location:index.php?page=4");
}


?>


<div class="col-md-12">
<div class="white-box">
<form method="post"  enctype="multipart/form-data">

<h2 class="text-center"><?php echo $_GET["language"]." LANGUAGE EDIT";  ?></h2>
<div class="form-group">
<label>DOWNLOAD </label>
<input type="text" name="download" class="form-control form-control-lg"  value="<?php echo $lang["download"]; ?>">
</div>
<div class="form-group">
<label>SUPPORT SERVICES </label>
<input type="text" name="support-services" class="form-control form-control-lg"  value="<?php echo $lang["support-services"]; ?>">
</div>
<div class="form-group">
<label>SUPPORT SERVICES DESCRIPTION </label>
<input type="text" name="support-services-desc" class="form-control form-control-lg"  value="<?php echo $lang["support-services-desc"]; ?>">
</div>
<div class="form-group">
<label>SUCCESS IMAGE </label>
<input type="text" name="success-image" class="form-control form-control-lg"  value="<?php echo $lang["success-image"]; ?>">
</div>
<div class="form-group">
<label>SUCCESS VIDEO </label>
<input type="text" name="success-video" class="form-control form-control-lg"  value="<?php echo $lang["success-video"]; ?>">
</div>
<div class="form-group">
<label>DOWNLOAD VIDEO</label>
<input type="text" name="download-video" class="form-control form-control-lg"  value="<?php echo $lang["download-video"]; ?>">
</div>
<div class="form-group">
<label>SHARE SOCIAL MEDIA </label>
<input type="text" name="share-social-media" class="form-control form-control-lg"  value="<?php echo $lang["share-social-media"]; ?>">
</div>
<div class="form-group">
<label>OTHER VIDEO & DOWNLOAD </label>
<input type="text" name="other-video" class="form-control form-control-lg"  value="<?php echo $lang["other-video"]; ?>">
</div>
<div class="form-group">
<label>Quality </label>
<input type="text" name="Quality" class="form-control form-control-lg"  value="<?php echo $lang["Quality"]; ?>">
</div>
<div class="form-group">
<label>Format </label>
<input type="text" name="Format" class="form-control form-control-lg"  value="<?php echo $lang["Format"]; ?>">
</div>
<div class="form-group">
<label>Size </label>
<input type="text" name="Size" class="form-control form-control-lg"  value="<?php echo $lang["Size"]; ?>">
</div>
<div class="form-group">
<label>Downloads </label>
<input type="text" name="Downloads" class="form-control form-control-lg"  value="<?php echo $lang["Downloads"]; ?>">
</div>
<div class="form-group">
<label>No Videos </label>
<input type="text" name="no-videos" class="form-control form-control-lg"  value="<?php echo $lang["no-videos"]; ?>">
</div>
<div class="form-group">
<label>unknown </label>
<input type="text" name="unknown" class="form-control form-control-lg"  value="<?php echo $lang["unknown"]; ?>">
</div>

<div class="form-group">
<label>Home </label>
<input type="text" name="home" class="form-control form-control-lg"  value="<?php echo $lang["home"]; ?>">
</div>
<div class="form-group">
<label>Services </label>
<input type="text" name="services" class="form-control form-control-lg"  value="<?php echo $lang["services"]; ?>">
</div>
<div class="form-group">
<label>S.S.S </label>
<input type="text" name="sss" class="form-control form-control-lg"  value="<?php echo $lang["sss"]; ?>">
</div>
<div class="form-group">
<label>Terms Of Service </label>
<input type="text" name="terms" class="form-control form-control-lg"  value="<?php echo $lang["terms"]; ?>">
</div>
<div class="form-group">
<label>Contact </label>
<input type="text" name="contact" class="form-control form-control-lg"  value="<?php echo $lang["contact"]; ?>">
</div>


<div class="form-group m-b-0">
<button type="submit" name="submit" class="btn btn-success pull-right">
<i class="fa fa-check-square-o"></i> Update
</button>
</div>
</form>
</div>
</div>