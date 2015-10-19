<?php session_start();
//session_regenerate_id(true); 
?>
<?php

//End session after once log out.
//if session is on for id
if (isset($_SESSION['ID'])){
	unset($_SESSION['ID']);//end session for id
}
//if session is on for username
if (isset($_SESSION['userName'])){
	$userName = $_SESSION['userName'];
	unset($_SESSION['userName']);//end session  
}
//if session is on for postcode
if (isset($_SESSION['password'])){
	$password = $_SESSION['password'];
	unset($_SESSION['password']);//end session  
}
//if session is on for fname
if (isset($_SESSION['firstName'])){
	$firstName = $_SESSION['firstName'];
	unset($_SESSION['firstName']);//end session  
}
//if session is on for lname
if (isset($_SESSION['lastName'])){
	$lastName = $_SESSION['lastName'];
	unset($_SESSION['lastName']);//end session  
}
//if session is on for phone
if (isset($_SESSION['phoneNumber'])){
	$phoneNumber = $_SESSION['phoneNumber'];
	unset($_SESSION['phoneNumber']);//end session  
}
//if session is on for email
if (isset($_SESSION['email'])){
	$phone = $_SESSION['email'];
	unset($_SESSION['email']);//end session  
}
//if session is on for streetnumber
if (isset($_SESSION['streetNumber'])){
	$streetNumber = $_SESSION['streetNumber'];
	unset($_SESSION['streetNumber']);//end session  
}
//if session is on for streetname
if (isset($_SESSION['streetName'])){
	$streetName = $_SESSION['streetName'];
	unset($_SESSION['streetName']);//end session  
}
//if session is on for suburb
if (isset($_SESSION['suburb'])){
	$suburb = $_SESSION['suburb'];
	unset($_SESSION['suburb']);//end session  
}
//if session is on for city
if (isset($_SESSION['city'])){
	$city = $_SESSION['city'];
	unset($_SESSION['city']);//end session  
}

//if session is on for country
if (isset($_SESSION['country'])){
	$country = $_SESSION['country'];
	unset($_SESSION['country']);//end session  
}
//if session is on for username
if (isset($_SESSION['state'])){
	$state = $_SESSION['state'];
	unset($_SESSION['state']);//end session  
}

// Finally, destroy the session after log out.
session_destroy();
?>


<!DOCTYPE html>
<html><head>

<title>Restaurant</title>

</head>
<body>
	<section id="page1" data-role="page" class="ui-body-a" data-theme="a"><!--section:creates the first page, data role: 1st page, classui-body-a creates the styling and the background, data-theme creates another styling-->
	<header data-role="ui-header" class="ui-header-fullscreen" data-theme="b" style="background-color:#ECF90E">
        <h1 style="text-align:center"><img src="img/logo.png" width="300" height="100"></h1><!--Displays the restaurant logo in the center of the page-->
          <div data-role="navbar"><!---->
				You have successfully logged out.
                Go back to the <a href="index.php#page1">main page</a>
	      </div><!--End nav bar-->
    </header><!--End header-->
        <footer data-role="ui-footer"><!--(Start footer)-->
        <h2 style="text-align:center">Copyright &copy;
         2015 Mark Serdina</h2>
    </footer><!--(End footer) data-role=ui-footer-->
</section><!--End section, id=page1-->
</body>