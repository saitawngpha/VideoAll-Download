

    <nav class="navbar navbar-expand-lg navbar-light bg-light static-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php"><?php echo $config["site_name"]; ?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
           <li class="nav-item active">
        <a class="nav-link" href="index.php"><?php echo $lang["home"] ?> <span class="sr-only">(current)</span></a>
      </li>
      <? if ($config["site_services"]===true) { ?>
      <li class="nav-item">
        <a class="nav-link" href="index.php?#services"><?php echo $lang["services"] ?></a>
      </li>
      <?php } ?>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=sss"><?php echo $lang["sss"] ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=terms"><?php echo $lang["terms"] ?></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="index.php?page=contact"><?php echo $lang["contact"] ?></a>
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



<!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
          <img src="theme/<?php echo $config["site_theme"]; ?>/img/logo.png" class="img-fluid"  alt="<?php echo $config["site_name"]; ?>">
            <h1 class="mb-5"><?php $config["site_name"]; ?></h1>
          </div>
          <div class="col-md-10 col-lg-10 col-xl-10 mx-auto">
            <form action="index.php#down"  method="get">
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="url" name="url" required class="form-control form-control-lg" placeholder="Enter your Video Link Here...">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-success"> <i class="fa fa-download"></i> <?php echo $lang["download"] ?></button>
         
                </div>

              </div>
               <? if ($config["site_ads"]===true) { ?>
 <div class="form-row">
                <div class="col-12 col-md-12 mt-3">
         <?  include("system/ads/728-ads.php");?>
         
         </div>
         </div>
       <?  } ?>

            </form>
          </div>
        </div>
      </div>
    </header>