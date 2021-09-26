<?php


if (!empty($_POST["page_content"])) {     

        
        $content .=$_POST["page_content"];
        
    $dosya = "../system/config/analytics.php";
 
    $dosya=fopen($dosya,"w");
    fwrite($dosya, $content);     
    fclose($dosya);


    header("Location:index.php?page=9");
}


$file = "../system/config/analytics.php";
$file = fopen($file,"r");

while(!feof($file))
{
$page_content = fgets($file, 255);

}

?>



<div class="col-md-12">
<div class="white-box">

<div class="col-lg-12">
                    <h1 class="page-header">Analytics Manager</h1>
                </div>


<form method="post"  enctype="multipart/form-data">



<div class="form-group">
<label>ANALYTICS CODE HERE</label>
<textarea name="page_content" class="form-control form-control-lg"  rows="4"><?php echo $page_content; ?></textarea>
</div>




<div class="form-group m-b-0">
<button type="submit" name="submit" class="btn btn-success pull-right">
<i class="fa fa-check-square-o"></i> Update
</button>
</div>
</form>
</div>
</div>