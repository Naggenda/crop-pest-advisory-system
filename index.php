<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Advisory System on Crop Pests and Diseases</title>

    <!-- Favicon icons -->
    <link href="./Dashboard/img/favicon.png" rel="icon" />
    <link href="./Dashboard/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Bootstrap core CSS -->
    <link
      href="./Dashboard/lib/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!--external css-->
    <link
      href="./Dashboard/lib/font-awesome/css/font-awesome.css"
      rel="stylesheet"
    />
    <!-- <link rel="stylesheet" type="text/css" href="./Dashboard/css/zabuto_calendar.css" /> -->
    <link
      rel="stylesheet"
      type="text/css"
      href="./Dashboard/lib/gritter/css/jquery.gritter.css"
    />
    <!-- Custom styles for this template -->
    <link href="./Dashboard/css/styles.css" rel="stylesheet" />
    <link href="./Dashboard/css/style-responsive.css" rel="stylesheet" />
    <script src="./Dashboard/lib/chart-master/Chart.js"></script>
  </head>

  <body>
    <!--=================start header area===================================== -->
    <header class="header-area">
      <div class="navbar-section">
        <div class="container">
          <div class="navbar">
            <div class="logo-sect">
              <a href="index.html">
                <span>MyLogo</span>
              </a>
            </div>
            <div class="navbar-Links">
              <span class="humberg">
                <i class="fa fa-bars" onclick="myfunction()"></i>
              </span>
              <div class="navlinks" id="navlinks">
                <div class="search-area">
                  <form action="search.php" method="POST">
                    <input
                      type="search"
                      name="search"
                      id=""
                      placeholder="my search..."
                    />
                    <button type="submit" style="border: none" name="submit-search">
                      <i class="fa fa-search"></i>
                    </button>
                  </form>
                </div>
                <a href="index.html" class="link">Login</a>
                <a href="#" class="link">Register</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--=================end header area===================================== -->
    <!-- ================Main content area=================================== -->
    <section class="main-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 left">
            <h2>
              Lorem ipsum dolor sit amet consectetur.
            </h2>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Assumenda enim accusantium, perspiciatis voluptatum illo suscipit
              odio!
            </p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12"></div>
        </div>
      </div>
    </section>
    <!-- ================Main content area=================================== -->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="./Dashboard/js/script.js"></script>
    <script src="./Dashboard/lib/jquery/jquery.min.js"></script>

    <script src="./Dashboard/lib/bootstrap/js/bootstrap.min.js"></script>
    <script
      class="include"
      type="text/javascript"
      src="./Dashboard/lib/jquery.dcjqaccordion.2.7.js"
    ></script>
    <script src="./Dashboard/lib/jquery.scrollTo.min.js"></script>
    <script
      src="./Dashboard/lib/jquery.nicescroll.js"
      type="text/javascript"
    ></script>
    <script src="./Dashboard/lib/jquery.sparkline.js"></script>
    <!--common script for all pages-->
    <script src="./Dashboard/lib/common-scripts.js"></script>
    <script
      type="text/javascript"
      src="./Dashboard/lib/gritter/js/jquery.gritter.js"
    ></script>
    <script
      type="text/javascript"
      src="./Dashboard/lib/gritter-conf.js"
    ></script>
    <!--script for this page-->
    <script src="./Dashboard/lib/sparkline-chart.js"></script>
    <script src="./Dashboard/lib/zabuto_calendar.js"></script>
  </body>
</html>
