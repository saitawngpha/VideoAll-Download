<?php

if (!empty($_POST["new_page_name"])) {

    $new_page_name = "../pages/".$_POST["new_page_name"].".php";
 
if(file_exists($new_page_name)){



}
else{
    touch($new_page_name);
    header("Location:index.php?page=6");

}

}

if (!empty($_GET["delete"]) && !empty($_GET["file"])) {

    $new_page_name = "../pages/".$_GET["file"].".php";
    unlink($new_page_name);
    header("Location:index.php?page=6");

}
/* <div class="form-group">
<label>NEW PAGE NAME</label>
<input type="text" name="new_page_name" class="form-control form-control-lg"  >

</div>


<div class="form-group m-b-0">
<button type="submit" name="submit" class="btn btn-success pull-right">
<i class="fa fa-check-square-o"></i> ADD PAGE
</button>
</div>
</form>
<br>
<br> */


?>


<div class="col-md-12">
<div class="white-box">
<div class="col-lg-12">
                    <h1 class="page-header">Page Manager</h1>
                </div>


<form method="post"  enctype="multipart/form-data">




 <!-- DataTables Example -->
 <div class="form-group mt-3">
         
              <div class="">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>PAGES</th>                      
                      <th>EDIT</th>
                    </tr>
                  </thead>                  
                  <tbody>

                   
                        <?php
                        
                        $dir = "../pages/";
 
$file_dir = opendir($dir);
 
while(gettype($file=readdir($file_dir))!=boolean)
{
    if (strstr($file, ".php")) {
        $file = str_replace(".php","",$file);
  echo " <tr>";
    echo "<td>".$file."</td>";
    echo ' <td><a class="btn btn-warning" href="index.php?page=7&file='.$file.'"><i class="fa fa-edit"></i> EDIT </a>
    <a class="btn btn-danger" href="index.php?page=6&file='.$file.'&delete=1"><i class="fa fa-close"></i> DELETE </a></td>';
   
    echo " </tr>"; 
 

    }
   
}
 
closedir($file_dir);                       
                        
                        ?>
                     

                                  
                    </tr>

                    </tbody>
                    </table>
                    </div>
                   





</div>
</div>