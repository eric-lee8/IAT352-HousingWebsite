<html>
    <head>
        <title>IAT352</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-white static-top" style="opacity: 0.9;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <!--<img src="Images/Logo.png" alt="" style="width: 15rem;">-->
                </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link text-dark" href="Home.html">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                
                <li class="nav-item">
                <a class="nav-link text-muted" href="#Contact">Sign Up</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

        <div class="row">
        <div class="col-3"></div>
        <div class="col-sm-6 bg-white">
        <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
            <li data-target="#demo" data-slide-to="5"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="" alt="Img_1">
            </div>
            <div class="col-3"></div>
            </div>
        
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
        </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-sm-6 bg-white" padding: 1rem;">
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
                                <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">
                                    <span data-feather="home"></span>
                                    Dashboard <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                    <span data-feather="file"></span>
                                    Orders
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                    <span data-feather="shopping-cart"></span>
                                    Products
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                    <span data-feather="users"></span>
                                    Customers
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                    <span data-feather="bar-chart-2"></span>
                                    Reports
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                    <span data-feather="layers"></span>
                                    Integrations
                                    </a>
                                </li>
                                </ul>

                                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                                <span>Saved reports</span>
                                <a class="d-flex align-items-center text-muted" href="#">
                                    <span data-feather="plus-circle"></span>
                                </a>
                                </h6>
                                <ul class="nav flex-column mb-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Current month
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Last quarter
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Social engagement
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Year-end sale
                                    </a>
                                </li>
                                </ul>
                            </div>
                            </nav>
                        </div>  
                    </div>
                </div>
                <div class="col-6">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">World</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Featured post</a>
                            </h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            <a href="#">Continue reading</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
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
        echo "Hello!";
        echo "<br/>";
        echo "<p>Current date and time: " . date("r") . "<p>"; 
        echo "Konichiwa";
        ?>
    </body>
</html>
