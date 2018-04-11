
<?php require_once('head.php');
$page="about";
?>
<body>
  <div class="body">
    <?php require_once('header.php');?>
    <div role="main" class="main">
      <!--Page Content Goes Here-->
      <section class="page-header">
        <div class="container">

          <div class="row">
            <div class="col-md-12">
              <h1>Request a Quote</h1>
              <?php 
                if (isset($_SESSION['constat'])) {
                  $stat=$_SESSION['constat'];
                  if ($stat==1) {
                    echo "<h3>Thank You for your interest in us, Our representative will get back to you shortly</h3>";
                  }
                  if ($stat==0) {
                    echo "<h3>Sorry we are unable to register your request, please try later</h3>";
                  }
                  unset($_SESSION['constat']);
                }
                ?>
            </div>
          </div>
        </div>
      </section>

      <div class="container">

        <div class="row">

          <div class="col-md-11 col-md-offset-1">

            <div class="tab-pane" id="tabsNavigationSimpleIcons4">
              <div class="center">
                <p>
                  <form class="form-horizontal" method="post" action="submitContact">
                    <input type="hidden" name="type" value="quote">

                    <div class="form-group">
                      <label class="control-label col-md-4">Your Name</label>
                      <div class="col-md-4">
                        <input class="form-control" type="text" name="name" placeholder="Your Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4">Your Email</label>
                      <div class="col-md-4">
                        <input class="form-control" type="email" name="email" placeholder="Your Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4">Your Contact</label>
                      <div class="input-group col-md-4">

                        <span class="input-group-btn">
                          <select class="btn" name="countrycode">
                            <option value="+1">US (+1)</option>
                            <option value="+91">India (+91)</option>
                          </select>
                        </span>
                        <input class="form-control" type="text" name="phone">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4">Message *</label>
                      <div class="col-md-4">
                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
                      </div>
                    </div>
                    <div class="col-md-4 col-md-offset-4">
                      <button type="submit" class="btn btn-success">Get Quote</button>
                    </div>
                  </form>
                </p>
              </div>
            </div>




          </div>
        </div>
      </div>



      <hr class="tall">




    </div>



    <?php 
    require_once('footer.php');?>
  </div>
  <?php require_once('foot-scripts.php');?>
</body>
</html>