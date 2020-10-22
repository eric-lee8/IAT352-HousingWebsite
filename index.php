<html>
    <head>
        <title>IAT352</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/index.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>

    <!-- NAVIGATION BAR -->
    <div class="topnav">
        <div class="topnav-right">
        <a href="#home">Home</a>
        <a href="signin.php">Sign In</a>
        <a href="signup.php">Sign Up</a>
        </div>
    </div>


    <!-- Carousel (Under Construction) -->
    
    <!-- <div class="row">
        <div class="col-3"></div>
        <div class="col-6 bg-white">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <!--<ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                    <li data-target="#demo" data-slide-to="4"></li>
                </ul>
                
                <!-- The slideshow -->
                <!--<div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Images/Home-1.png" alt="Img_1" width="100%" height="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="Images/Home-2.png" alt="Img_2">
                    </div>
                    <div class="carousel-item">
                        <img src="Images/Home-3.png" alt="Img_3">
                    </div>
                    <div class="carousel-item">
                        <img src="Images/Home-4.png" alt="Img_4">
                    </div>
                    <div class="carousel-item">
                        <img src="Images/Home-5.png" alt="Img_5">
                    </div>
                    
                </div>
                
                <!-- Left and right controls -->
                <!--<a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
-->
        <div class="container">
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
            
        </div>

        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-4">
                    <div class="container-fluid">
                        <div class="row">
                            <nav class="col-md d-none d-md-block bg-light sidebar">
                            <div class="sidebar-sticky">

                                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                                <span>Sort by</span>
                                <a class="d-flex align-items-center text-muted" href="#">
                                    <span data-feather="plus-circle"></span>
                                </a>
                                </h6>
                                <ul>
                                    <div class="dropdown" style ="padding: 1rem">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Property Type
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                
                                
                                    <div class="dropdown" style ="padding: 1rem"> 
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Price
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
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
                                
                                </ul>
                            </div>
                            </nav>
                        </div>  
                    </div>
                </div>
                <div class="col-6">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <img class="card-img-left flex-auto d-none d-md-block" data-src="Images/house_1.jpg" alt="Card image cap">
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
                        <img class="card-img-left flex-auto d-none d-md-block" data-src="Images/house_1.jpg" alt="Card image cap">
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
                        <img class="card-img-left flex-auto d-none d-md-block" data-src="Images/house_1.jpg" alt="Card image cap">
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
