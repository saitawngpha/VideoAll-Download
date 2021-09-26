<?php
require_once(__DIR__ . "/../../pages/".$_GET["file"].".php");

if (!empty($_POST["page_content"])) {     

        
        $content .=$_POST["page_content"];
        
    $dosya = "../pages/".$_GET["file"].".php";
 
    $dosya=fopen($dosya,"w");
    fwrite($dosya, $content);     
    fclose($dosya);

   /* if ($_GET["file"] != $_POST["page_name"] ) {
        $old = "../pages/".$_GET["file"].".php";
        $new = "../pages/".$_POST["page_name"].".php";
        rename($old, $new);

    }*/

    header("Location:index.php?page=6");
}


$file = "../pages/".$_GET["file"].".php";
$file = fopen($file,"r");

while(!feof($file))
{
$page_content = fgets($file, 255);

}

?>


<div class="col-md-12">
<div class="white-box">
<form method="post"  enctype="multipart/form-data">

<h2 class="text-center"><?php echo $_GET["file"]." PAGE EDIT";  ?></h2>
<?php /*
<div class="form-group">
<label>PAGE NAME </label>
<input type="text" name="page_name" class="form-control form-control-lg"  value="<?php echo $_GET["file"];  ?>">
</div>
<div class="form-group">
<label>SUPPORT SERVICES </label>
<input type="text" name="support-services" class="form-control form-control-lg">
</div>
*/?>

<div class="form-group">
<label>PAGE CONTENT </label>
<textarea id="page_content" name="page_content"> <?php echo $page_content; ?> </textarea>

</div>




<div class="form-group m-b-0">
<button type="submit" name="submit" class="btn btn-success pull-right">
<i class="fa fa-check-square-o"></i> Update
</button>
</div>
</form>
</div>
</div>
<script>
      $('#page_content').summernote({
        placeholder: 'text',       
        height: 300
      });
    </script>