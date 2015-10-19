<?php session_start(); 
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
$password = md5($salt.$password);
  // Create the SQL statement to add the data
  $query = "INSERT INTO ".$dbtable." (ID,Username,Firstname,Lastname,Password,Email,Phone,StreetNumber,StreetName,Suburb,City,State,Country)VALUES (".$ID.", '".$userName."', '".$firstName."', '".$lastName."', '".$password."', '".$email."', '".$phoneNumber."', '".$streetNumber."', '".$streetName."', '".$suburb."', '".$city."', '".$state."', '".$country."')"; 
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
  echo ("<p style='font-size:20px';>Welcome to bookstore ".$firstName. " ".$lastName."</p>");
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
  echo ("<br><br>Click <a href='myaccount.php'>here</a> to automatically login<br>");
  echo ("<br><br>You must log out and logged back in to display your Full name on top right side of every page Click <a href='myaccount-logout.php'>here</a> to directly logout<br>");  
// Close the connection
//OCILogOff ($connect); 
?>