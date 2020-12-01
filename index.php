<?php

include ('server.php'); 

// set initial values
$fname = "";
$lname = "";
$email = "";
$queryParameter = "";
if(isset($_SESSION['email'])){
    $session_email = $_SESSION['email'];
    //perform query to get the user's data from the database
    $query = "SELECT * ";
    $query .= "FROM members ";
    $query .= "WHERE members.email = '{$session_email}'";
    $query .= $queryParameter;

    $result = mysqli_query($db, $query);

    if (!$result) {
      die("Database query failed.");
  }

  while($row = mysqli_fetch_array($result))
  {
      $fname = $row['fname'];
      $lname = $row['lname'];
      $email = $row['email'];
  }
}

// close php tag
?>

<html lang="en">
<head>
    <title>IAT 352 Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/content_page.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>

    <!-- NAVIGATION BAR -->
    <div class="topnav">
      <div class="topnav-right">
        <a href="index.php#home">Home</a>
           <!--  <a href="signup.php">Sign Up</a>
            <a href="login.php">Log In</a> -->
            
            <?php if (!isset($_SESSION['email'])) : ?>
              <div style="display: flex">
                 <a href="signup.php">Sign Up</a>
                 <a href="login.php">Log In</a>
             </div>

         <?php endif ?>

         <!-- if the user logs in print information about them -->
         <?php if (isset($_SESSION['email'])) : ?>
            <div style="display: flex">
              <p style="color:white">Welcome <strong><?php echo $fname; ?></strong></p>
              <a href="profile.php" style="color:white">Edit Profile</a>
              <a href="logout.php" style="color:red">Logout</a>
          </div>

      <?php endif ?>
  </div>
</div>

    <!-- CAROUSEL -->
<div class="container">
    <div class="col-6"></div>

    <div class="col-12">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="Images/Home-1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Images/Home-2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Images/Home-3.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="col-6"></div>

</div>

<br>
<br>

<!-- Search bar Under construction -->
<!--    <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-sm-6 bg-white" padding: 1rem;>
                    <div style="padding: 2rem; opacity: 1.0;">
                        <form>
                            <div class="form-group">
                                <label for="usr">Search by City/Neighbourhood:</label>
                                <input type="text" class="form-control" id="usr">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
            
        </div> -->
        

        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-4">
                    <div class="container-fluid">
                        <div class="row">
                            <nav class="col-md d-none d-md-block bg-light sidebar">
                                <div class="sidebar-sticky">


                                    <div class="container-filter">
                                        <br>
                                        <h5>Filter:</h5>
                                        <form method="post" action="index.php">

                                            <h6>Property type:</h6> 
                                            <div class="checkbox">
                                                <label><input type="checkbox" id="type_house" name="type_house" value="1"> House</label>
                                                <!-- <label><input type="checkbox" id="type_house" name="type_house" value="<?php echo $type_house; ?>"> House</label> -->
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" id="type_condo" name="type_condo" value="1"> Condo</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" id="type_townhouse" name="type_townhouse" value="1"> Townhouse</label>
                                            </div>

                                            <h6>Price Range:</h6> 
                                            <div class="checkbox">
                                                <label><input type="checkbox" id="price_500" name="price_500" value="1"> Under $500k</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" id="price_1m" name="price_1m" value="1"> $500k - $1mill</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" id="price_1over" name="price_1over" value="1"> Over $1mill</label>
                                            </div>
<!--
                                        <h6>City:</h6> 
                                        <div class="checkbox">
                                            <label><input type="checkbox" id="city_vancouver" name="city_vancouver" value="1"> Vancouver</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" id="city_burnaby" name="city_burnaby" value="1"> Burnaby</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" id="city_richmond" name="city_richmond" value="1"> Richmond</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" id="city_surrey" name="city_surrey" value="1"> Surrey</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" id="city_coquitlam" name="city_coquitlam" value="1"> Coquitlam</label>
                                        </div>
                                    -->
                                    <br>
                                    <div class="box">
                                        <div class="container">
                                            <input type="submit" value="Search">
                                        </div>
                                    </div>

                                </form>
                            </div>


                                    <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                                        <span>Sort by</span>
                                        <a class="d-flex align-items-center text-muted" href="#">
                                            <span data-feather="plus-circle"></span>
                                        </a>
                                    </h6> -->



                                    <!-- <ul>
                                        <div class="dropdown" style ="padding: 1rem">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Property Type
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Houses</a>
                                                <a class="dropdown-item" href="#">Condos</a>
                                                <a class="dropdown-item" href="#">Townhouses</a>
                                            </div>
                                        </div>


                                        <div class="dropdown" style ="padding: 1rem"> 
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Price
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Under $100k</a>
                                                <a class="dropdown-item" href="#">$100k-$500k</a>
                                                <a class="dropdown-item" href="#">$500k-$1mill</a>
                                                <a class="dropdown-item" href="#">Over $1mill</a>
                                            </div>
                                        </div>


                                        <div class="dropdown" style ="padding: 1rem">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Extra Filters
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>

                                    </ul> -->
                                </div>

                            </nav>
                        </div>  
                    </div>
                </div>

                <?php

                    // PHP code for when the form is submitted as POST
                if($_SERVER["REQUEST_METHOD"] == "POST") {

                        // Validate checkboxes and its fields
                    $type_house = $_POST['type_house'] ?? '0';
                    $type_condo = $_POST['type_condo'] ?? '0';
                    $type_townhouse = $_POST['type_townhouse'] ?? '0';

                    $price_500 = $_POST['price_500'] ?? '0';
                    $price_1m = $_POST['price_1m'] ?? '0';
                    $price_1over = $_POST['price_1over'] ?? '0';

                        /*
                        $city_vancouver = $_POST['city_vancouver'] ?? '0';
                        $city_burnaby = $_POST['city_burnaby'] ?? '0';
                        $city_richmond = $_POST['city_richmond'] ?? '0';
                        $city_surrey = $_POST['city_surrey'] ?? '0';
                        $city_coquitlam = $_POST['city_coquitlam'] ?? '0'; 
                        */
                    }

                    $type_house = $_POST['type_house'] ?? '0';
                    $type_condo = $_POST['type_condo'] ?? '0';
                    $type_townhouse = $_POST['type_townhouse'] ?? '0';

                    $price_500 = $_POST['price_500'] ?? '0';
                    $price_1m = $_POST['price_1m'] ?? '0';
                    $price_1over = $_POST['price_1over'] ?? '0';


                    // Building Query request
                    $send_sql = "SELECT * FROM PROPERTY";


                    // Including checkbox field
                    if($type_house == 1 || $type_condo == 1 || $type_townhouse == 1) {
                        $send_sql .= " WHERE TYPE IN (";
                        if($type_house == 1) {
                            $send_sql .= "'House'";
                            if($type_condo == 1 || $type_townhouse == 1) {
                                $send_sql .= " , ";
                            }
                        }
                        if($type_condo == 1) {
                            $send_sql .= " 'Condo' ";
                            if($type_townhouse == 1) {
                                $send_sql .= " , ";
                            }
                        }
                        if($type_townhouse == 1) {
                            $send_sql .= " 'Townhouse' ";
                        }
                        $send_sql .= ")";
                    }

                    if($price_500 == 1 || $price_1m == 1 || $price_1over == 1) {

                        if($price_500 == 1 && $price_1m == 1 && $price_1over == 1) {

                        } else {
                            if($type_house == 1 || $type_condo == 1 || $type_townhouse == 1) {
                                $send_sql .= " AND (PRICE";
                            } else {
                                $send_sql .= " WHERE (PRICE";
                            }

                            if($price_500 == 1 && $price_1m == 0 && $price_1over == 0) {
                                $send_sql .= " < 500000)";
                            }

                            if($price_500 == 0 && $price_1m == 1 && $price_1over == 0) {
                                $send_sql .= " >= 500000 && PRICE <= 1000000)";
                            }

                            if($price_500 == 0 && $price_1m == 0 && $price_1over == 1) {
                                $send_sql .= " > 1000000)";
                            }

                            if($price_500 == 1 && $price_1m == 1 && $price_1over == 0) {
                                $send_sql .= " < 1000000)";
                            }
                            if($price_500 == 0 && $price_1m == 1 && $price_1over == 1) {
                                $send_sql .= " > 500000)";
                            }
                            if($price_500 == 1 && $price_1m == 0 && $price_1over == 1) {
                                $send_sql .= " < 500000 || > 1000000)";
                            }

                        }

                    }

                    $send_sql .= ";";

                    $resultTable = mysqli_query($db, $send_sql);

                    //echo $send_sql;
                    
                    ?>


                    <div class="col-6">

                        <?php

                        if($row = mysqli_fetch_row($resultTable)){
                            echo "<div class=\"card flex-md-row mb-4 box-shadow h-md-250\">
                            <img class=\"card-img-left d-none d-md-block\" src=\"Images/" . $row[0] . "/" . $row[0] . "_1.jpg\" alt=\"Card image cap\" width=\"40%\">
                            <div class=\"card-body d-flex flex-column align-items-start\">
                            <h3 class=\"mb-0\">
                            <a class=\"text-dark\" href=\"content_page.php?varname=" . $row[0] . "\">$" . $row[7] . "</a>
                            </h3>

                            <strong class=\"d-inline-block mb-2 text-primary\">" . $row[5] . ", " . $row[6] . "</strong>
                            <div class=\"mb-1 text-muted\">" . $row[1] . " BED | " . $row[2] . " BATH</div>
                            <p class=\"card-text mb-auto\">" . $row[3] . " SQFT | " . $row[8]. "</p>
                            <a href=\"content_page.php?varname=" . $row[0] . "\">View Listing</a>
                            </div>
                            </div>";
                            

                            while($row = mysqli_fetch_row($resultTable)) {
                                echo "<div class=\"card flex-md-row mb-4 box-shadow h-md-250\">
                                <img class=\"card-img-left d-none d-md-block\" src=\"Images/" . $row[0] . "/" . $row[0] . "_1.jpg\" alt=\"Card image cap\" width=\"40%\">
                                <div class=\"card-body d-flex flex-column align-items-start\">
                                <h3 class=\"mb-0\">
                                <a class=\"text-dark\" href=\"content_page.php?varname=" . $row[0] . "\">$" . $row[7] . "</a>
                                </h3>

                                <strong class=\"d-inline-block mb-2 text-primary\">" . $row[5] . ", " . $row[6] . "</strong>
                                <div class=\"mb-1 text-muted\">" . $row[1] . " BED | " . $row[2] . " BATH</div>
                                <p class=\"card-text mb-auto\">" . $row[3] . " SQFT | " . $row[8]. "</p>
                                <a href=\"content_page.php?varname=" . $row[0] . "\">View Listing</a>

                                </div>
                                </div>";
                                
                            }
                        } else {
                           echo "<h3>No Results</h3>";
                       }



                       ?>

                   </div>
                   <div class="col-1"></div>
               </div>
           </div>

           <div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-sm-6 bg-white" style="opacity: 0.9; padding: 1rem;">

                </div>
                <div class="col-3"></div>
            </div>
        </div>

        <?php 
        ?>
    </body>
    </html>
