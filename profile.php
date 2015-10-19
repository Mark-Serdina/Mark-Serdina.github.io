<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>

<title>Restaurant</title>
<link rel="stylesheet" href="jquery.mobile-1.4.5.min.css" /><!--External CSS hosted privately-->
<script src="jquery-1.11.1.min.js"></script><!--External javascript hosted privately-->
<script src="jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<!--Start profile content-->
<section id="profile" data-role="page"><!---->
	<header data-role="header"><!---->
		<h1 style="text-align:center"></h1><!---->
	</header>
		<div data-role="ui-content" class="ui-content"><!---->
        <h1>Welcome to barteryouworld restaurant</h1>
         <div data-role="navbar"><!--creates two nav bar search and shopping cart-->
                <ul>
                      <li>
                        <a href="index.php#menu" class="ui-overlay-shadow">Menu</a>
                         <!--Pop up link for search input in the navbar, icon on the left side-->
                      </li>
                      <li>
                        <a href="index.php#gallery" class="ui-overlay-shadow">Galery</a>
                        <!--Pop up link for shopping cart in the navbar, no icon available for cart-->
                      </li>
                       <li>
                        <a href="index.php#profile" class="ui-overlay-shadow" data-rel="popup">My Profile</a>
                         <!--Pop up link for search input in the navbar, icon on the left side-->
                      </li>
                </ul>
                <ul>
                      <li>
                        <a href="#" class="ui-overlay-shadow">Career</a>
                         <!--Pop up link for search input in the navbar, icon on the left side-->
                      </li>
                       <li>
                        <a href="#" class="ui-overlay-shadow">Notification</a>
                         <!--Pop up link for search input in the navbar, icon on the left side-->
                      </li>
                      <li>
                        <a href="log-off.php" class="ui-overlay-shadow">Log out</a>
                        <!--Pop up link for shopping cart in the navbar, no icon available for cart-->
                      </li>
                </ul>
	      </div><!--End nav bar-->
          <hr style="color: rgba(196,196,196,1.00)"/>
          	<div id="pastorder">
                <a href="#" style="text-decoration:none">Past order</a>
             </div>
             <hr style="color: rgba(196,196,196,1.00)"/>
            <div id="order">
                <a href="#" style="text-decoration:none">Order now</a>
             </div>
             <hr style="color: rgba(196,196,196,1.00)"/>
             <div id="special">
                <a href="#" style="text-decoration:none">Our special dishes</a>
             </div>
             <hr style="color: rgba(196,196,196,1.00)"/>
             <div id="events">
                <a href="#" style="text-decoration:none">Restaurant events</a>
            </div> 
            <hr style="color: rgba(196,196,196,1.00)"/>
            <div id="events">
                <a href="#" style="text-decoration:none">Barteryourworld restaurant info</a>
                <hr style="color: rgba(196,196,196,1.00)"/>
                <a href="#" style="text-decoration:none">Barteryourworld website info</a>
            </div>
            <div id="profile-content">
            	 <h3 id="showresult">
                 <?php 
  /* Set oracle user login and password info */
  $dbuser = "mserdina";  /* your deakin login */
  $dbpass = "prouser23";  /* your deakin password */
  $db = "SSID"; 
  $connect = OCILogon($dbuser, $dbpass, $db); 
  if (!$connect)  {
    echo "An error occurred connecting to the database"; 
    exit; 
  }
	$dbtable="restaurantuser";//database table
	$salt="BarteryouworldRestaurant"; //salt is used here, which can be an arbitrary string

  //Extract variables
  //Adding html entities to make each extraction secure
  //Running on charset UTF-8 to make the site more secure
  $userName = htmlentities($_REQUEST['userName'], ENT_QUOTES, 'UTF-8' );
  $firstName = htmlentities($_REQUEST['firstName'], ENT_QUOTES, 'UTF-8');
  $lastName = htmlentities($_REQUEST['lastName'], ENT_QUOTES, 'UTF-8');
  $password = htmlentities($_REQUEST['password'], ENT_QUOTES, 'UTF-8');
  $email = htmlentities($_REQUEST['email'], ENT_QUOTES, 'UTF-8') ;
  $phoneNumber = htmlentities($_REQUEST['phoneNumber'], ENT_QUOTES, 'UTF-8') ;
  $streetNumber = htmlentities($_REQUEST['streetNumber'], ENT_QUOTES, 'UTF-8') ;
  $streetName = htmlentities($_REQUEST['streetName'], ENT_QUOTES, 'UTF-8' );
  $suburb =htmlentities( $_REQUEST['suburb'], ENT_QUOTES, 'UTF-8') ;
  $city = htmlentities($_REQUEST['city'], ENT_QUOTES, 'UTF-8' );
  $state = htmlentities($_REQUEST['state'], ENT_QUOTES, 'UTF-8') ;
  $country = htmlentities($_REQUEST['country'], ENT_QUOTES, 'UTF-8') ;
   
   
  global $salt; //salt creates md5 hashing value which is safer
  
  // count ID record in plants table and use id number $ID+1 for the new record
  $query_ID = "SELECT max(ID) FROM ".$dbtable;
  /* check the sql statement for errors and if errors report them */
  $stmt = OCIParse($connect, $query_ID); 
  if(!$stmt)  {
    echo "An error occurred in parsing the sql string.\n"; 
    exit; 
  }
  OCIExecute($stmt);
  if (OCIFetch($stmt))  {	
	$ID = OCIResult($stmt,1);//returns the data for column 1 
  } else {
	echo "An error occurred in retrieving order id.\n"; 
	exit; 
  }
  $ID++;
//echo $ID."</br>";
$pass = md5($salt.$password);
  // Create the SQL statement to add the data
  $query = "INSERT INTO ".$dbtable." (ID,Username,Firstname,Lastname,Password,Email,Phone,StreetNumber,StreetName,Suburb,City,State,Country)VALUES (".$ID.", '".$userName."', '".$firstName."', '".$lastName."', '".$pass."', '".$email."', '".$phoneNumber."', '".$streetNumber."', '".$streetName."', '".$suburb."', '".$city."', '".$state."', '".$country."')"; 
  /* check the sql statement for errors and if errors report them */
  $stmt = OCIParse($connect, $query); 
  if(!$stmt)  {
    echo "An error occurred in parsing the sql string.\n"; 
    exit;
  }
   OCIExecute($stmt);  
   //set up session
   /*
	$_SESSION['query_ID'] = $ID;
	$_SESSION['FirstName'] = htmlentities($FirstName);
	$_SESSION['Last_Name'] = htmlentities($Last_Name); 
	$_SESSION['Username'] = htmlentities($Username); 
	$_SESSION['Password'] = htmlentities($Password);//Recommend to turn off this session for security	
	$_SESSION['Email'] = htmlentities($Email);
	$_SESSION['Phone'] = htmlentities($Phone);
	$_SESSION['StreetNo'] = htmlentities($StreetNo);
	$_SESSION['StreetName'] = htmlentities($StreetName);
	$_SESSION['Suburb'] = htmlentities($Suburb);
	$_SESSION['City'] = htmlentities($City);
	$_SESSION['Postcode'] = htmlentities($Postcode);
	$_SESSION['Country'] = htmlentities($Postcode);
	$_SESSION['Company'] =htmlentities($Company);
 */
  //output the results after registering
  echo ("<p style='font-size:20px';>Welcome to Barteryouworld restaurant ".$firstName. " ".$lastName."</p>");
  echo ("Your ID number is: ".$ID. "<br>");
  echo ("Your username is: ".$userName. "<br>");
  echo ("Your password is: ".$password. "<br>");
  echo ("Your email is: ".$email. "<br>");
  echo ("Your street number is: ".$streetNumber. " ".$streetno."<br>");
  echo ("Your street name is: ".$streetName. "<br>");
  echo ("Your suburb name is: ".$suburb. "<br>");
  echo ("Your city is: ".$city. "<br>");
  echo ("Your city is: ".$state. "<br>");
  echo ("Your country is: ".$country. "<br>");
// Close the connection
//OCILogOff ($connect); 
?></h3>
            </div> 
		</div>
	<footer data-role="ui-footer"><h1 class=" ui-overlay-shadow">Barteryouworld restaurant</h1></footer>
</section>
<!--End profile content-->
</body>
</html>