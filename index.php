<html>
    <head>
        <title>IAT352</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>

    <?php
            // Credentials
            define("DB_SERVER", "localhost");
            define("DB_USER", "root");
            define("DB_PASS", "");
            define("DB_NAME", "JUSTIN_LAU");

            // Creating database connection
            function db_connect() {
                $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
                return $connection;

                // Test is connection succeeded
                if(mysqli_connect_erro()) {
                    // if connection failed, skip the reest of PHP code and print error
                    die("Database connection failed: ". mysqli_connect_error() . " (" . mysqli_connect_errorno() . ")" );
                }
            }

            // Disconnecting Database connection
            function db_disconnect($connection) {
                if(!isset($connection)) {
                    mysqli_close($connection);
                }
            }

            // Query Functions:

            // Get all 
            function find_all_db() {
                global $db;
                
                $sql = "SELECT * FROM orders";
                $result = mysqli_query($db, $sql);
                return $result;
            }
        ?>

    <!-- NAVIGATION BAR -->
    <div class="topnav">
        <div class="topnav-right">
        <a href="#home">Home</a>
        <a href="signin.php">Sign In</a>
        <a href="signup.php">Sign Up</a>
        </div>
    </div>

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
                    <img class="d-block w-100" src="Images/house_1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="Images/house_1.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="Images/house_1.jpg" alt="Third slide">
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
                                    <h5>Filter:</h5>
                                    <form method="post">

                                        <h6>Property type:</h6> 
                                        <div class="checkbox">
                                            <label><input type="checkbox" id="type_house" name="type_house" value="1"> Houses</label>
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

                            </nav>
                        </div>  
                    </div>
                </div>

                <?php

                $db = db_connect();

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


                    // Building Query request
                    $send_sql = "SELECT * FROM PROPERTY";


                    // Including checkbox field
                    if($type_house == 1 || type_condo == 1 || type_townhouse == 1) {
                        $send_sql .= " WHERE (TYPE=";
                        if($type_house == 1) {
                            $send_sql .= "'House'";
                            if(type_condo == 1 || type_townhouse == 1) {
                                $send_sql .= " OR ";
                            }
                        }
                        if(type_condo == 1) {
                            $send_sql .= " 'Condo' ";
                            if(type_townhouse == 1) {
                                $send_sql .= " OR ";
                            }
                        }
                        if(type_townhouse == 1) {
                            $send_sql .= " 'Townhouse' ";
                        }
                        $send_sql .= ")";
                    }

                    if($price_500 == 1 || $price_1m == 1 || $price_1over == 1) {

                        if($type_house == 1 || type_condo == 1 || type_townhouse == 1) {
                            $send_sql .= " AND (PRICE";
                        } else {
                            $send_sql .= " WHERE (PRICE";
                        }

                        if($price_500 == 1 || $price_1m == 0 || $price_1over == 0) {
                            $send_sql .= " < 500000)";
                        }

                        if($price_500 == 0 || $price_1m == 1 || $price_1over == 0) {
                            $send_sql .= " >= 500000 && PRICE <= 1000000)";
                        }

                        if($price_500 == 0 || $price_1m == 0 || $price_1over == 1) {
                            $send_sql .= " > 1000000)";
                        }

                        if($price_500 == 1 || $price_1m == 1 || $price_1over == 0) {
                            $send_sql .= " < 1000000)";
                        }
                        if($price_500 == 0 || $price_1m == 1 || $price_1over == 1) {
                            $send_sql .= " > 500000)";
                        }
                        if($price_500 == 1 || $price_1m == 0 || $price_1over == 1) {
                            $send_sql .= " < 500000 || > 1000000)";
                        }
                    }

                    $resultTable = mysqli_query($db, $send_sql);

                    echo $send_sql;
                    
                ?>
                

                <div class="col-6">

                <?php   
                    // while($subject = mysqli_fetch_row($resultTable)) {
                    //     echo "<div class=\"card flex-md-row mb-4 box-shadow h-md-250\">"
                    //     echo "<img class=\"card-img-left flex-auto d-none d-md-block\" src=\"Images/house_1.jpg\" alt=\"Card image cap\" width=\"40%\">"
                    //     echo "<h3 class=\"mb-0\">
                    //             <a class=\"text-dark\" href=\"#\">$1,799,000</a>
                    //         </h3>"
                    //     echo "<strong class=\"d-inline-block mb-2 text-primary\">7 HATTFIELD PL|HAMILTON, ON, L9H 4J7</strong>
                    //             <div class=\"mb-1 text-muted\">4 BED | 3 FULL BATH | 1 HALF BATH</div>
                    //             <p class=\"card-text mb-auto\">2072 SQFT | HOUSE</p>
                    //             <a href=\"content_page.php\">View Listing</a></div></div><br>"

                    //     foreach($subject as $value) {
                    //         echo "<td>" . $value . "</td>";
                    //     }
                    // }

                ?>

                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <img class="card-img-left flex-auto d-none d-md-block" src="Images/house_1.jpg" alt="Card image cap" width="40%">
                        <div class="card-body d-flex flex-column align-items-start">
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">$1,799,000</a>
                            </h3>
                            <strong class="d-inline-block mb-2 text-primary">7 HATTFIELD PL|HAMILTON, ON, L9H 4J7</strong>
                            <div class="mb-1 text-muted">4 BED | 3 FULL BATH | 1 HALF BATH</div>
                            <p class="card-text mb-auto">2072 SQFT | HOUSE</p>
                            <a href="content_page.php">View Listing</a>
                        </div>
                    </div>

                    <br>
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <img class="card-img-left flex-auto d-none d-md-block" src="Images/house_1.jpg" alt="Card image cap" width="40%">
                        <div class="card-body d-flex flex-column align-items-start">
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">$1,799,000</a>
                            </h3>
                            <strong class="d-inline-block mb-2 text-primary">7 HATTFIELD PL|HAMILTON, ON, L9H 4J7</strong>
                            <div class="mb-1 text-muted">4 BED | 3 FULL BATH | 1 HALF BATH</div>
                            <p class="card-text mb-auto">2072 SQFT | HOUSE</p>
                            <a href="content_page.php">View Listing</a>
                        </div>
                    </div>
                    <br>
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <img class="card-img-left flex-auto d-none d-md-block" src="Images/house_1.jpg" alt="Card image cap" width="40%">
                        <div class="card-body d-flex flex-column align-items-start">
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">$1,799,000</a>
                            </h3>
                            <strong class="d-inline-block mb-2 text-primary">7 HATTFIELD PL|HAMILTON, ON, L9H 4J7</strong>
                            <div class="mb-1 text-muted">4 BED | 3 FULL BATH | 1 HALF BATH</div>
                            <p class="card-text mb-auto">2072 SQFT | HOUSE</p>
                            <a href="content_page.php">View Listing</a>
                        </div>
                    </div>
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
