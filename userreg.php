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
  

      
      <main class="main-content">
        <div
          class="container "
        >
        <div
          class="row justify-content-center align-items-center g-2"
        >
          <div class="col text-center mt-5">
            <h2 class="heading ">User Registration</h2></div>
          
        </div>
        
          <div
            class="row justify-content-center align-items-center g-2"
          >
            <div class="col">
            <?php
$server = "localhost";
$username = "root";
$password = "123456";
$dbname = "snapshots";

$conn = mysqli_connect($server, $username, $password, $dbname);

$sql = 'SELECT * FROM regusers';

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    echo "
    
    
    
                    <div class='table-responsive'>
                        <table class='table table-primary mx-auto'>
                            <thead>
                                <tr>
                                    <th scope='col'>Id</th>
                                    <th scope='col'>Name</th>
                                    <th scope='col'>Username</th>
                                    <th scope='col'>Email</th>
                                    <th scope='col'>Password</th>
                                    <th scope='col'>Action</th>
                                </tr>
                            </thead>
                            <tbody>";

    while ($rows = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td scope='row'>{$rows['id']}</td>
                <td>{$rows['name']}</td>
                <td>{$rows['username']}</td>
                <td>{$rows['email']}</td>
                <td>{$rows['password']}</td>
                <td>
                    <a name='' id='' class='btn btn-primary btn-warning' href='editform.php?id={$rows['id']}' role='button'>Edit</a>
                    <a name='' id='' class='btn btn-primary btn-danger' href='delu.php?id={$rows['id']}' role='button'>Delete</a>
                </td>
            </tr>";
    }

    echo "</tbody>
        </table>
    </div>

";
} else {
    echo "0 record found";
}

mysqli_close($conn);
?>
            </div>
            
          </div>
          
        </div>
        
     
        <div class="row justify-content-center">
            <div class="col-md-12 text-center py-5">
              <a
                name=""
                id=""
                class="btn btn-warning"
                href="adminpanel.php"
                role="button"
                >Back</a
              >
              
            </div>
          </div>



          

          <div class="row justify-content-center">
            <div class="col-md-12 text-center py-5">
              <p>
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                . All Rights Reserved. &mdash; Designed with love by
                <a href="https://untree.co">Untree.co</a> Distributed By
                <a href="https://themewagon.com">ThemeWagon</a
                ><!-- License information: https://untree.co/license/ -->
              </p>
            </div>
          </div>
        </div>
      </main>
    </div>
    <!-- .site-wrap -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/lozad.min.js"></script>

    <script src="js/jquery.fancybox.min.js"></script>

    <script src="js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
  </body>
</html>
 