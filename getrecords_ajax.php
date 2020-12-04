<?php 

$host = "localhost";
$username = "root";
$password = "";
$dbname = "justin_lau";

$result_array = array();
/* Create connection */
$conn = new mysqli($host, $username, $password, $dbname);

/* Check connection  */
if ($conn->connect_error) {
   die("Connection to database failed: " . $conn->connect_error);
}

$type_house = $_GET['type_house'];
$type_condo = $_GET['type_condo'];
$type_townhouse = $_GET['type_townhouse'];

$price_500 = $_GET['price_500'];
$price_1m = $_GET['price_1m'];
$price_1over = $_GET['price_1over'];

$city_val = $_GET['searchVal'];

 //   echo "console.log($type_house);";
 //   echo "console.log($type_condo);";

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
            $send_sql .= " < 500000 OR PRICE > 1000000)";
        }

    }
}

if($city_val != null) {

    if($type_house == 1 || $type_condo == 1 || $type_townhouse == 1 || $price_500 == 1 || $price_1m == 1 || $price_1over == 1){
        if(!($price_500 == 1 && $price_1m == 1 && $price_1over == 1)){
            $city_val = strtolower($city_val);
            $send_sql .= " AND (CITY = '$city_val')";
        } else {
            $city_val = strtolower($city_val);
            $send_sql .= " WHERE (CITY = '$city_val')";
        }
    } else  {
        $city_val = strtolower($city_val);
        $send_sql .= " WHERE (CITY = '$city_val')";
    }
}

   // echo "console.log($send_sql);";

$result = $conn->query($send_sql);
/* If there are results from database push to result array */

    //echo "console.log($result);";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($result_array, $row);
    }
}
/* send a JSON encded array to client */
echo json_encode($result_array);

$conn->close();