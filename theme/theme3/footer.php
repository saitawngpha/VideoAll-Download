
    <!-- Footer -->
    <footer class="page-footer font-small pt-4">

        <!-- Footer Elements -->
        <div class="container">
    
        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
            <a  href="<?php echo $config["site_facebook"]; ?>" class="btn-floating btn-fb mx-1">
                <i class="fab fa-facebook"> </i>
            </a>
            </li>
            <li class="list-inline-item">
            <a href="<?php echo $config["site_twitter"]; ?>" class="btn-floating btn-tw mx-1">
                <i class="fab fa-twitter"> </i>
            </a>
            </li>
            <li class="list-inline-item">
            <a href="<?php echo $config["site_instagram"]; ?>" class="btn-floating btn-gplus mx-1">
                <i class="fab fa-instagram"> </i>
            </a>
            </li>
            <li class="list-inline-item">
            <a href="<?php echo $config["site_youtube"]; ?>" class="btn-floating btn-li mx-1">
                <i class="fab fa-youtube"> </i>
            </a>
            </li>
           
        </ul>
        <!-- Social buttons -->
    
        </div>
        <!-- Footer Elements -->
    
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
           Copyright © <?php echo $config["site_name"]; ?> 2019. All Rights Reserved.
       
        </div>
        <!-- Copyright -->
        
      </footer>



   <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>

       
     
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