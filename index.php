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

<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>

<html lang="en">
<head>
	<title>IAT 352 Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="CSS/content_page.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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

         <!-- LOGGED IN MEMBERS - DISPLAY FAVORITED LISTINGS -->
         <?php if (isset($_SESSION['email'])) : ?>
          <?php 
          
        //reference the favorited_properties
          $query = "SELECT * ";
          $query .= "FROM property p ";
          $query .= "INNER JOIN ";
          $query .= "favorited_properties fp ";
          $query .= "WHERE '$email' = fp.email ";
          $query .= "AND p.listing_id = fp.property_listing_id ";
          $query .= "LIMIT 10 ";
          
          $query .= $queryParameter;

          $result = mysqli_query($db, $query);

          if (!$result) {
            die("Database query failed.");
          }

          echo '<div style="text-align: center";>';
          echo '<h1>Your favorited properties!</h1>';
          echo '</div>';
          echo '<div class="col-6">';

          if($row = mysqli_fetch_row($result)){
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


            while($row = mysqli_fetch_row($result)) {
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
            echo '<div style="text-align: center";>';
            echo "<h3>No favorited properties yet!</h3>";
            echo '</div>';
          }

          echo "</div>";

          ?>

        <?php endif ?>


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

   <!-- Search bar (AJAX) -->
   <div class="container">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-sm-6 bg-white" padding: 1rem;>
        <div style="padding: 2rem; opacity: 1.0;">
          <form>
            <div class="form-group">
              <label for="usr"><b>Search by City:</b></label>
              <input id="searchBar" type="text" class="form-checking" id="usr" onkeyup="show(this.value)">
              <input type="submit" class="checking" value="Search">
            </div>
          </form>
          <p><b>Suggestions: </b><span id="txtHint">Surrey, Vancouver, North Vancouver, Burnaby, New Westminster</span></p> 
        </div>
      </div>
      <div class="col-3"></div>
    </div>
    
  </div>
  
  <!-- FILTERING SIDE-MENU -->
  <!-- Javascript for suggestions -->
  <script>
    function show(str) {
      var xhttp;
      if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "Surrey, Vancouver, North Vancouver, Burnaby, New Westminster";
        return;
      }
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "gethint.php?q="+str, true);
      xhttp.send();   
    }
  </script>
  

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
                <label><input type="checkbox" class="checking" id="type_house" name="type_house" value="1"> House</label>
              </div>
              <div class="checkbox">
                <label><input type="checkbox" class="checking" id="type_condo" name="type_condo" value="1"> Condo</label>
              </div>
              <div class="checkbox">
                <label><input type="checkbox" class="checking" id="type_townhouse" name="type_townhouse" value="1"> Townhouse</label>
              </div>

              <h6>Price Range:</h6> 
              <div class="checkbox">
                <label><input type="checkbox" class="checking" id="price_500" name="price_500" value="1"> Under $500k</label>
              </div>
              <div class="checkbox">
                <label><input type="checkbox" class="checking" id="price_1m" name="price_1m" value="1"> $500k - $1mill</label>
              </div>
              <div class="checkbox">
                <label><input type="checkbox" class="checking" id="price_1over" name="price_1over" value="1"> Over $1mill</label>
              </div>
              <br>
              <div class="box">
              </div>
            </form>
          </div>
        </div>
      </nav>
    </div>  
  </div>
</div>
<div id="records" class="col-6">
  <?php
                    // Building Query request
  $send_sql = "SELECT * FROM PROPERTY ";
  $send_sql .= "LIMIT 10 ";

  $resultTable = mysqli_query($db, $send_sql);

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

<script type="text/javascript"> 

  $(function(){ 

    $(".checking").on('click', function(){ 
      
      var type_house = 1;
      if (document.getElementById('type_house').checked) 
      {
        type_house = 1;
      } else type_house = 0;

      var type_condo = 0;
      if (document.getElementById('type_condo').checked) 
      {
        type_condo = 1;
      } else type_condo = 0;

      var type_townhouse = 1;
      if (document.getElementById('type_townhouse').checked) 
      {
        type_townhouse = 1;
      } else type_townhouse = 0;

      var price_500 = 0;
      if (document.getElementById('price_500').checked) 
      {
        price_500 = 1;
      } else price_500 = 0;

      var price_1m = 1;
      if (document.getElementById('price_1m').checked) 
      {
        price_1m = 1;
      } else price_1m = 0;

      var price_1over = 0;
      if (document.getElementById('price_1over').checked) 
      {
        price_1over = 1;
      } else price_1over = 0;

      var searchVal = document.getElementById("searchBar").value;
      if(searchVal == "")
      {
        searchVal = null;
      }

      console.log(searchVal);

      $.ajax({ 

        method: "GET", 
        
        url: "getrecords_ajax.php",

        data: {type_house:type_house, type_condo: type_condo, type_townhouse:type_townhouse, price_500: price_500, price_1m: price_1m, price_1over: price_1over, searchVal: searchVal}

      }).done(function( data ) { 

        console.log(data);

        var result= $.parseJSON(data); 

        var string='';

        if(result == null)
        {
          string += "<h3>No Results</h3>";
        }

        
        
        /* from result create a string of data and append to the div */
        
        $.each( result, function( key, value ) { 
          
          string += "<div class=\"card flex-md-row mb-4 box-shadow h-md-250\">\
          <img class=\"card-img-left d-none d-md-block\" src=\"Images/" + value['listing_id'] + "/" + value['listing_id'] + "_1.jpg\" alt=\"Card image cap\" width=\"40%\">\
          <div class=\"card-body d-flex flex-column align-items-start\">\
          <h3 class=\"mb-0\">\
          <a class=\"text-dark\" href=\"content_page.php?varname=" + value['listing_id'] + "\">$" + value['price'] + "</a> </h3>\
          <strong class=\"d-inline-block mb-2 text-primary\">" + value['city'] + ", " + value['address'] + "</strong>\
          <div class=\"mb-1 text-muted\">" + value['beds'] + " BED | " + value['baths'] + " BATH</div>\
          <p class=\"card-text mb-auto\">" + value['sqft'] + " SQFT | " + value['type'] + "</p>\
          <a href=\"content_page.php?varname=" + value['listing_id'] + "\">View Listing</a>\
          </div>\
          </div>" 
        }); 

        $("#records").html(string); 
      }); 
    }); 
  }); 
</script> 

<div class="col-1"></div>
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

<!-- FOOTER -->
<footer class="footer">
 <p>Team: $teamname</p>
 <p>Justin Lau, Eric Lee, Lucy Huang</p>
</footer>

<?php
	// 4. Release returned data
mysqli_free_result($result);
?>

</body>
</html>

<?php
  // 5. Close database connection
mysqli_close($db);
?>