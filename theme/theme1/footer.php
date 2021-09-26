 <!-- Footer -->
 <footer class="footer bg-light" style="background: #EEEEEE !important;">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
             
             
              
             
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; <?php echo $config["site_name"]; ?> 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="<?php echo $config["site_facebook"]; ?>">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="<?php echo $config["site_twitter"]; ?>">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="<?php echo $config["site_instagram"]; ?>">
                  <i class="fa fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
               <li class="list-inline-item">
                <a href="<?php echo $config["site_youtube"]; ?>">
                  <i class="fa fa-youtube fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="theme/vendor/jquery/jquery.min.js"></script>
    <script src="theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- Plugin JavaScript -->
   <script src="theme/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact form JavaScript -->
<script src="theme/vendor/js/jqBootstrapValidation.js"></script>
<script src="theme/vendor/js/contact.js"></script>


<script src="theme/<?php echo $config["site_theme"] ?>/js/theme.js"></script>
<script src="system/process/process.js"></script>

<?php echo $analytics["code"]; ?>


  </body>

</html>
