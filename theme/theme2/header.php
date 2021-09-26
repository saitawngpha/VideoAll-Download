  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php"><?php echo $config["site_name"]; ?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#page-top"><?php echo $lang["home"] ?></a>
            </li>
            <? if ($config["site_services"]===true) { ?>
    
      <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="index.php?#services"><?php echo $lang["services"] ?></a>
              </li>
      <?php } ?>            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php?page=sss"><?php echo $lang["sss"] ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php?page=terms"><?php echo $lang["terms"] ?></a>
            </li>           
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php?page=contact"><?php echo $lang["contact"] ?></a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link js-scroll-trigger dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language <span class="caret"></span></a>
                <ul class="dropdown-menu lang_menu">

                  <?php echo get_language_list(); ?>
                  
                 
                </ul>
              </li>


          </ul>
        </div>
      </div>
    </nav>



  
  
  <!-- Header -->
   <header class="masthead">
      <div class="container">
        <div class="intro-text">
            <form action="index.php#down" method="get">
                <img src="img/logo.png" class="img-fluid" alt="<?php echo $config["site_name"]; ?>">

                <div class="input-group mb-3 mt-3 input-group-lg">
                    <input type="url" name="url" required class="form-control" placeholder="Enter your Video Link Here..." aria-label="Enter your Video Link Here..." aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button  class="btn btn-primary" type="submit"><i class="fa fa-download"></i><b class="d-sm-block d-none"> <?php echo $lang["download"] ?></b></button>
                    </div>
                </div>
                </form>
                <? if ($config["site_ads"]===true) { 
                   include("system/ads/728-ads.php");
                } ?>

               
                  
                   

              
</div>
      </div>
    </header>



