<?php 



$id=$_GET["id"];

$server ="localhost";
$username="root";
$password="123456";
$dbname="snapshots";
   
$conn=mysqli_connect($server,$username,$password,$dbname);

$sql="select * from regusers where id=$id";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_assoc($result);

mysqli_close($conn);



?>



<!-- /*
* Template Name: Snap
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link
      href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600, 700,900|Oswald:400,700"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="fonts/icomoon/style.css" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/fancybox.min.css" />

    <link rel="stylesheet" href="css/style.css" />
    <title>Snap Shots</title>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">
    <div class="site-wrap">
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

     <!-- <header
        class="header-bar d-flex d-lg-block align-items-center site-navbar-target"
        data-aos="fade-right"
      >
        <div class="site-logo">
          <a href="home.html">SNAP</a>
        </div>

        <div
          class="d-inline-block d-lg-none ml-md-0 ml-auto py-3"
          style="position: relative; top: 3px"
        >
          <a href="#" class="site-menu-toggle js-menu-toggle"
            ><span class="icon-menu h3"></span
          ></a>
        </div>

        <div class="main-menu">
          <ul class="js-clone-nav">
            <li><a href="home.html" class="nav-link">Home</a></li>
            <li><a href="photos.html" class="nav-link">Photos</a></li>
            <li><a href="about.html" class="nav-link">About</a></li>
            <li>
              <a href="testimonial.html" class="nav-link">Testimonial</a>
            </li>
            <li><a href="blog.html" class="nav-link">Blog</a></li>
            <li><a href="contactus.html" class="nav-link">Contact</a></li>
            <li><a href="#section-reg" class="nav-link">Registration</a></li>
            <li><a href="admin.html" class="nav-link">Admin</a></li>
          </ul>
          <ul class="social js-clone-nav">
            <li>
              <a href="#"><span class="icon-instagram"></span></a>
            </li>
            <li>
              <a href="#"><span class="icon-facebook"></span></a>
            </li>
            <li>
              <a href="#"><span class="icon-twitter"></span></a>
            </li>
            <li>
              <a href="#"><span class="icon-linkedin"></span></a>
            </li>
          </ul>
        </div>
      </header>-->
      <main class="main-content">
       
          <section class="site-section" id="section-reg">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-8">
                  <h2 class="mb-5 heading">Edit User</h2>

                  <form action="editu.php" method="post">
                  
                  <div class="row form-group">
    <div class="col-md-6 mb-3 mb-md-0">
        <!-- Hidden label for the 'id' field -->
        <label class="sr-only" for="fname">Id</label>
        
        <!-- Hidden input field for the 'id' value -->
        <input type="hidden" class="form-control" name="id" id="fname" value='<?php echo "{$rows['id']}"; ?>' aria-describedby="helpId" placeholder="">
    </div>
</div>


                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="" for="fname">Name</label>
                            <input type="text"
            class="form-control" name="name" id="fname" value='<?php echo"{$rows['name']}"?>' aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                
                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="" for="fname">Username</label>
                            <input type="text" id="fname" name="uname" value='<?php echo"{$rows['username']}"?>' class="form-control" />
                        </div>
                    </div>
                
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label class="" for="email">Email</label>
                            <input type="email" id="email" name="email" value='<?php echo"{$rows['email']}"?>' class="form-control" />
                        </div>
                    </div>
                
                    <div class="row form-group">
                        <div class=" col-md-6 ">
                            <label class="" for="password">Password</label>
                            <input type="password" id="fname" name="pass" value='<?php echo"{$rows['password']}"?>' class="form-control" />
                        </div>
                    </div>
                
                    <!-- Move the button inside the password row -->
                    <div class="row form-group">
                        <div class="col-md-6">
                            <input type="submit" value="Register" class="btn btn-primary btn-md" />
                        </div>
                    </div>


                    

                    
                </form>
                
                </div>
              </div>
            </div>
          </section>

         <!-- <div class="row justify-content-center">
            <div class="col-md-12 text-center py-5">
              <p>
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                . All Rights Reserved. &mdash; Designed with love by
                <a href="https://untree.co">Untree.co</a> Distributed By
                <a href="https://themewagon.com">ThemeWagon</a
                ><!-- License information: https://untree.co/license/ 
              </p>
            </div>
          </div>-->
        </div>
      </main>
    </div>
    <!-- .site-wrap -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/lozad.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
  </body>
</html>


