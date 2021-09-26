<?php

if (!empty($_POST["new_lang_name"])) {

    $new_lang_name = "../system/language/".$_POST["new_lang_name"].".php";
 
if(file_exists($new_lang_name)){



}
else{
    touch($new_lang_name);
    header("Location:index.php?page=4");

}

}

if (!empty($_GET["delete"]) && !empty($_GET["language"])) {

    $new_lang_name = "../system/language/".$_GET["language"].".php";
    unlink($new_lang_name);
    header("Location:index.php?page=4");

}



?>


<div class="col-md-12">
<div class="white-box">

<div class="col-lg-12">
                    <h1 class="page-header">Language Manager</h1>
                </div>

<form method="post"  enctype="multipart/form-data">


<div class="form-group">
<label>NEW LANGUAGE NAME</label>
<input type="text" name="new_lang_name" class="form-control form-control-lg"  >

</div>


<div class="form-group m-b-0">
<button type="submit" name="submit" class="btn btn-success pull-right">
<i class="fa fa-check-square-o"></i> ADD LANGUAGE
</button>
</div>
</form>
<br>
<br>

 <!-- DataTables Example -->
 <div class="form-group mt-3">
         
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>LANGUAGE</th>                      
                      <th>EDIT</th>
                    </tr>
                  </thead>                  
                  <tbody>

                   
                        <?php
                        
                        $languages = "../system/language/";
 
$lang = opendir($languages);
 
while(gettype($lang_name=readdir($lang))!=boolean)
{
    if (strstr($lang_name, ".php")) {
        $lang_name = str_replace(".php","",$lang_name);
  echo " <tr>";
    echo "<td>".$lang_name."</td>";
    echo ' <td><a class="btn btn-warning" href="index.php?page=5&language='.$lang_name.'"><i class="fa fa-edit"></i> EDIT </a>
    <a class="btn btn-danger" href="index.php?page=4&language='.$lang_name.'&delete=1"><i class="fa fa-close"></i> DELETE </a></td>';
   
    echo " </tr>"; 
 

    }
   
}
 
closedir($lang);                       
                        
                        ?>
                     

                                  
                    </tr>

                    </tbody>
                    </table>
                    </div>
                   





</div>
</div>