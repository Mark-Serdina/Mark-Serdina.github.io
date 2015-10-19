<?php 
  $dbuser = "mserdina";  /*  deakin login */
  $dbpass = "prouser23";  /*  deakin password */
  $dbname = "SSID"; 
  $db = oci_connect($dbuser, $dbpass, $dbname); 

  if (!$db)  {
    echo "An error occurred connecting to the database"; 
    exit; 
  }	
	$SQL_FROM = 'foods';
	$SQL_WHERE = 'Foodname';

	$searchq =	strip_tags($_GET['q']);
	$sql	=	"SELECT * FROM foods WHERE lower(foodname) LIKE lower('%$searchq%')";
	$stmt = oci_parse($db, $sql);  
	if(!$stmt)  {
		echo "An error occurred in parsing the sql string.\n"; 
		exit; 
	  }
	oci_execute($stmt); 

	$output[] = '<ul>';

	while(oci_fetch_array($stmt)) {

		$foodname= oci_result($stmt,"FOODNAME");
		$foodlink= oci_result($stmt,"LINK");
		$foodimage= oci_result($stmt,"IMAGE");
		
		/*
		$cookingtime= oci_result($stmt,"COOKINGTIME");
		$price= oci_result($stmt,"PRICE");
		$availability= oci_result($stmt,"AVAILABILTY");
		$description= oci_result($stmt,"DESCRIPTION");
		*/
		$output[] = "<img src=http://www.deakin.edu.au/~mserdina/sit313/mobileApp/img/".$foodimage." width=40 height=45><a href=".$foodlink." style='text-decoration:none';><small>  ".$foodname."</small></a><br><hr>";
	}
	$output[] = '</ul>';
	echo join('',$output);		
	oci_close($db); 
	
?>


