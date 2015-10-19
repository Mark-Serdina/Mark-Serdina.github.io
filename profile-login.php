<?php session_start();
if(isset($_SESSION['firstName']))
				{	
					$display = true;	
					
				}
if(isset($_SESSION['lastName']))
				{	
					$display = true;	
					
				} ?>

<!DOCTYPE html>
<html>
<head>

<title>Restaurant</title>
<link rel="stylesheet" href="jquery.mobile-1.4.5.min.css" /><!--External CSS hosted privately-->
<script src="jquery-1.11.1.min.js"></script><!--External javascript hosted privately-->

</head>
<body>
<!--Start profile content-->
<section id="profile" data-role="page"><!---->
	<header data-role="header"><!---->
		<h1 style="text-align:center"></h1><!---->
	</header>
         <div data-role="navbar"><!--creates two nav bar search and shopping cart-->
         <button class="ui-overlay-shadow" onClick="parent.location='index.php#profile'">My Profile</button>
         <button class="ui-overlay-shadow" onClick="parent.location='index.php#myaccount'">My Account</button>
         <button class="ui-overlay-shadow" onClick="parent.location='log-off.php'">Log out</button>
          <h1>
		  		<?php echo "<strong style='font-size:12px';>Welcome to barteryouworld restaurant</stong><br>";
		 		echo $_SESSION['firstName']; echo " "; echo $_SESSION['lastName']; ?>
          </h1>
          <hr style="color: rgba(196,196,196,1.00)"/>
            <div id="profile-content">
            	 <h3 id="showresult">
<?php 
  		global $salt;
		$dbtable="restaurantuser";//database table
		$salt="BarteryouworldRestaurant"; //salt is used here, which can be an arbitrary string
			
		//Extract username and password
		$userName = htmlentities($_GET['userName']);
		$password = htmlentities($_GET['password']);
		
		//$user = str_replace($username);
		//convert password to md5
		$pass = md5($salt.$password);
		
        // build SELECT query
        $query ="SELECT * FROM ".$dbtable." WHERE Username  = '$userName'";
		
		$flag=false;
         // Connect to Oracle
         /* Set oracle user login and password info */
		$dbuser = "mserdina"; /* your deakin login */
		$dbpass = "prouser23"; /* your oracle access password */
		$db = "SSID";
		$connect = oci_connect($dbuser, $dbpass, $db);
		if (!$connect) {
		echo "An error occurred connecting to the database";
		exit;
		}
         /* check the sql statement for errors and if errors report them */
		$stmt = oci_parse($connect, $query);

		if(!$stmt) {
		echo "An error occurred in parsing the sql string.\n";
		exit;
		}
		oci_execute($stmt);
		while(oci_fetch_array($stmt)) {
			if(oci_result($stmt,"PASSWORD")==$pass) {//fetching the password
			$flag=true;	
			//$ID=oci_result($stmt,"ID");
			$ID=oci_result($stmt,"ID");
			$firstName=oci_result($stmt,"FIRSTNAME");
			$lastName=oci_result($stmt,"LASTNAME");
			$userName=oci_result($stmt,"USERNAME");
			//$password=oci_result($stmt,"PASSWORD");
			$email=oci_result($stmt,"EMAIL");
			$phoneNumber=oci_result($stmt,"PHONE");
			$streetNumber=oci_result($stmt,"STREETNUMBER");
			$streetName=oci_result($stmt,"STREETNAME");
			$suburb=oci_result($stmt,"SUBURB");
			$city=oci_result($stmt,"CITY");
			$state=oci_result($stmt,"STATE");
			$country=oci_result($stmt,"COUNTRY");
				
			//set up session values
			$_SESSION['ID'] = oci_result($stmt,"ID");
			$_SESSION['firstName'] = $firstName;
			$_SESSION['lastName'] = $lastName; 
			$_SESSION['userName'] = $userName; 
			//$_SESSION['password'] = $password;//Recommend to turn off this session for security	
			$_SESSION['email'] = $email;
			$_SESSION['phoneNumber'] = $phoneNumber;
			$_SESSION['streetNumber'] = $streetNumber;
			$_SESSION['streetName'] = $streetName;
			$_SESSION['suburb'] = $suburb;
			$_SESSION['city'] = $city;
			$_SESSION['state'] = $state;
			$_SESSION['country'] = $country;
			}
		}
		  
		  //output the results after login
		  echo ("<p style='font-size:14px';>Your details<br>First name: ".$firstName. " <br>Last name: ".$lastName."</p>");
		  echo ("Your ID number is: ".$ID. "<br>");
		  echo ("Your username is: ".$userName. "<br>");
		  echo ("Your password is: ".$password. "<br>");
		  echo ("Your email is: ".$email. "<br>");
		  echo ("Your email is: ".$phoneNumber. "<br>");
		  echo ("Your street number is: ".$streetNumber. " ".$streetno."<br>");
		  echo ("Your street name is: ".$streetName. "<br>");
		  echo ("Your suburb name is: ".$suburb. "<br>");
		  echo ("Your city is: ".$city. "<br>");
		  echo ("Your city is: ".$state. "<br>");
		  echo ("Your country is: ".$country. "<br>");
?></h3>
            </div> 
		</div>
	<footer data-role="ui-footer"><h1 class=" ui-overlay-shadow">Barteryouworld restaurant</h1></footer>
</section>
<!--End profile content-->
</body>
</html> 