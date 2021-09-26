
   <!-- Footer -->
   <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-9 text-left">
            <span class="copyright">Copyright &copy; <?php echo $config["site_name"]; ?> 2018. All Rights Reserved.</span>
          </div>
          <div class="col-md-3">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="<?php echo $config["site_twitter"]; ?>">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="<?php echo $config["site_facebook"]; ?>">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="<?php echo $config["site_instagram"]; ?>">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="<?php echo $config["site_youtube"]; ?>">
                  <i class="fa fa-youtube"></i>
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