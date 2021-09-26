<?php

if (!empty($_POST["backend_email"]) && !empty($_POST["backend_password"])) {

        $content = "<?php ";
        $content .='$backend_config["email"] = "'.$_POST["backend_email"].'";';
        $content .='$backend_config["password"] = "'.$_POST["backend_password"].'";';

        $content .='?>';

    $dosya = "../system/config/backend-config.php";
 
    $dosya=fopen($dosya,"w");
     
    fwrite($dosya, $content);
     
    fclose($dosya);


 header("Location:index.php?page=3");

}



?>


<div class="col-md-12">
<div class="white-box">

<div class="col-lg-12">
                    <h1 class="page-header">Login Manager</h1>
                </div>

<form method="post"  enctype="multipart/form-data">


<div class="form-group">
<label>LOGIN EMAIL ADDRESS</label>
<input type="text" name="backend_email" class="form-control form-control-lg"  value="<?php echo $backend_config["email"]; ?>">

</div>
<div class="form-group">
<label>LOGIN PASSWORD</label>
<input type="password" name="backend_password" class="form-control form-control-lg">

</div>


<div class="form-group m-b-0">
<button type="submit" name="submit" class="btn btn-success pull-right">
<i class="fa fa-check-square-o"></i> Update
</button>
</div>
</form>
</div>
</div>