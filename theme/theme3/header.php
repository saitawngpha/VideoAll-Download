     <!-- Main navigation -->
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php"><?php echo $config["site_name"]; ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_ust"
                    aria-controls="nav_ust" aria-expanded="false" aria-label="Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="nav_ust">
                    <ul class="navbar-nav mr-auto smooth-scroll">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#page-top"><?php echo $lang["home"] ?>
                            </a>
                        </li>                    

 <? if ($config["site_services"]===true) { ?>
    
      <li class="nav-item">
                  <a class="nav-link " data-offset="90" href="index.php?#services"><?php echo $lang["services"] ?></a>
              </li>
      <?php } ?>            
            <li class="nav-item">
              <a class="nav-link " data-offset="90" href="index.php?page=sss"><?php echo $lang["sss"] ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " data-offset="90" href="index.php?page=terms"><?php echo $lang["terms"] ?></a>
            </li>           
            <li class="nav-item">
              <a class="nav-link" data-offset="90" href="index.php?page=contact"><?php echo $lang["contact"] ?></a>
            </li>
            


                    </ul>
                    <!-- Social Icon  -->
                    <ul class="navbar-nav nav-flex-icons">
                       <a href="#" class="nav-link js-scroll-trigger dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language <span class="caret"></span></a>
                         <ul class="dropdown-menu lang_menu">

                  <?php echo get_language_list(); ?>
                  
                 
                </ul>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->
        <!-- Full Page Intro -->
        <div id="intro-section" class="view">
            <video class="video-intro" poster="https://mdbootstrap.com/img/Photos/Others/background.jpg" playsinline
                autoplay muted loop>
                <source src="" type="video/mp4">
            </video>
            <!-- Mask & flexbox options-->
            <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="container px-md-3 px-sm-0">
                    <!--Grid row-->
                    <div class="row wow fadeIn">
                        <!--Grid column-->
                        <div class="intro-text">
            <form action="index.php#down" method="get">
                <img src="img/logo.png" class="rounded mx-auto d-block" alt="<?php echo $config["site_name"]; ?>">

                <div class="input-group mb-3 mt-3 input-group-lg">
                    <input type="url" name="url" required class="form-control" placeholder="Enter your Video Link Here..." aria-label="Enter your Video Link Here..." aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button  class="btn btn-warning" type="submit"><i class="fa fa-download"></i><b class="d-sm-block d-none"> <?php echo $lang["download"] ?></b></button>
                    </div>
                </div>
                </form>
                <div class="rounded mx-auto d-block">
                <? if ($config["site_ads"]===true) { 
                   include("system/ads/728-ads.php");
                } ?>
              </div>

              
</div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
        </div>
        <!-- Full Page Intro -->
    </header>

 
   

  




