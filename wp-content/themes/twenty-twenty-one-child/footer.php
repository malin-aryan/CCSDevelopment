
<section class="w-100 Newsletter">
      <div class="custom-container">
        <div class="row">
          <div class="col-md-6">
            <div class="w-100 SubsLeft">
              <h5>Want to get updates?
                <span> Subscribe to our Newsletter</span>
              </h5>
            </div>
            <!--/.SubsLeft-->
          </div>
          <!--/.cols-->
          <div class="col-md-6">
            <!-- <div class="w-100 SubsRight"> -->


                <!-- <div class="tnp tnp-subscription"> -->
                  <form class="w-100 SubsRight" method="post" action="<?php echo get_site_url(); ?>?na=s">

                    <input type="hidden" name="nlang" value="">
                    <input class=" form-control subemail" type="email" name="ne" value="" placeholder="Example: xys@gmail.com" required>
                    <input class="tnp-submi t btn subbtn" type="submit" value="Subscribe" >
                                       
                  </form>
                <!-- </div> -->

                      <!-- <input type="text" class="form-control subemail" placeholder="Example: xys@gmail.com"> <button type="submit" class="btn subbtn">Subscribe</button> -->


            <!-- </div> -->
            <!--/.SubsRight-->
          </div>
          <!--/.cols-->
        </div>
        <!--/.row-->
      </div>
      <!--/.custom-container-->

    </section>

<footer class="w-100 FooterWrapper">
        <div class="w-100 TopFooter">
          <div class="custom-container">
              <div class="row">
                <div class="col-md-3">
                  <div class="w-100 FootBox">
                    <p>Quick Links</p>
                    <?php  
                      wp_nav_menu( array('container' => 'false', 'menu' => 'Footer quick link menu' ,'items_wrap'=>'<ul>%3$s</ul>') );
                    ?>
                   <!--  <ul>
                      <li> <a href="about-us.html">About Us</a></li>
                      <li> <a href="approach.html">Approach </a></li>
                      <li> <a href="projects.hmlt">Projects </a></li>
                      <li> <a href="testimonials.html">Testimonials</a></li>
                      <li> <a href="newsletters.html">Newsletters</a></li>
                      <li> <a href="vendor.html">Vendor</a></li>
                    </ul> -->
                  </div><!--/.FootBox-->                   
                </div><!--/.cols-->
                <div class="col-md-3">
                  <div class="w-100 FootBox">
                    <p>Information</p>
                    <?php  
                      wp_nav_menu( array('container' => 'false', 'menu' => 'footer information menu' ,'items_wrap'=>'<ul>%3$s</ul>') );
                    ?>
                    <!-- <ul>
                      <li> <a href="employment-opportunities.html">Employment Opportunities</a></li>
                      <li> <a href="contact-us.html">Contact Us </a></li>
                      <li> <a href="termsofuse.html"> Terms Of Use </a></li>
                      <li> <a href="privacy-statement.html">Privacy Statement </a></li>
                      <li> <a href="register.html">Register</a></li>

                    </ul> -->
                  </div><!--/.FootBox-->                   
                </div><!--/.cols-->
                <div class="col-md-3">
                  <div class="w-100 FootBox">
                    <p>Projects</p>
                    <?php  
                      wp_nav_menu( array('container' => 'false', 'menu' => 'footer projects menu' ,'items_wrap'=>'<ul>%3$s</ul>') );
                    ?>
                   <!--  <ul>
                      <li> <a href="commercial-projects.html">Commercial Projects</a></li>
                      <li> <a href="correctional-projects.html">Correctional Projects </a></li>
                      <li> <a href="educational-projects.html">Educational Projects </a></li>
                      <li> <a href="healthcare-projects.html">Healthcare Projects</a></li>
                      <li> <a href="industrial-projects.html">Industrial Projects</a></li>
                    </ul> -->
                  </div><!--/.FootBox-->                   
                </div><!--/.cols-->
                <div class="col-md-3">
                  <div class="w-100 FootBox">
                    <p class="address-head">CCS Mechanical, Inc.</p>
                    <?php
                      if(is_active_sidebar('sidebar-1')){
                      echo dynamic_sidebar('sidebar-1');
                      }
                    ?>
                    <!-- <p class="address">737 SW 57th Ave - Ocala, <br>
                      FL 34474  <br>
                      Phone: (352)237-6272  <br>
                      Fax: (352)237-6258</p>
                      <p class="office-hours">24 Hour Service<br>
                        Office Hours:<br>
                        Monday to Friday<br>
                        7:00 AM to 3:30 PM</p> -->
                    
                  </div><!--/.FootBox-->                   
                </div><!--/.cols-->
              </div> <!--/.cols-->
          </div><!--/.container-->
        </div> <!--/.TopFooter-->
        <div class="w-100 BotFooter">
            <div class="custom-container">
                <div class="row">
                    <div class="col-md-12">
                        <p>&#169; 2021 - CCS Mechanical - All Right Reserved </p>
                    </div>
                </div><!--/.row-->
            </div> <!--/.container-->
        </div> <!--/.BotFooter-->
    </footer>





  </div>
  <!--/.Wrapper-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



  <!-- <script src="<?php //bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
  <script src="<?php //bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php //bloginfo('template_directory'); ?>/js/script.js"></script> -->

  <?php wp_footer(); ?>
</body>

</html>















