<html>
<head>
</head>
<body>
<div data-role="page" id="orderpage">
	<header data-role="header" class="ui-header-fullscreen" data-theme="b" style="background-image:url(rest.PNG)"><!--Header-->
    	  <a href="#page1" class="ui-btn ui-icon-back ui-btn-icon-left"></a><!--back button-->
		  <h1 style="text-align:center"><img src="img/barteryouworld-restaurant.png" width="150" height="60"></h1><!--Displays the restaurant logo 		  in the center of the page-->
	</header>
    <div>
        <p>Hungry? What would you like to order?</p>
        <form action="search-food.php" method="get">
            <input  data-type="search" name="searchOrder" placeholder="Search here for food name" 
            onkeyup="LiveSearch(this.value)" onClick="focus();select();"/>
            <input class="ui-icon-search ui-btn-icon-left ui-overlay-shadow" type="submit" value="Search"/>
        </form>

<?php


$search = $_REQUEST['searchOrder'];


echo "<p>You searched: ".$search."</p>";



//$query = "SELECT * FROM Books WHERE Booktitle LIKE '%".$search."%'";
//$query = "SELECT * FROM Books WHERE Booktitle LIKE '%$search%'";
$query = "SELECT * FROM foods WHERE lower(Foodname) LIKE lower('%$searchOrder%')";


//echo "<br />".$query."<br />";

  /* Set oracle user login and password info */
  $dbuser = "mserdina";  /*  deakin login */
  $dbpass = "prouser23";  /*  deakin password */
  $db = "SSID"; 
  $connect = OCILogon($dbuser, $dbpass, $db); 

  if (!$connect)  {
    echo "An error occurred connecting to the database"; 
    exit; 
  }
  
  /* check the sql statement for errors and if errors report them */
  $action = OCIParse($connect, $query); 
  //echo "SQL: $query<br>";
  if(!$action)  {
    echo "An error occurred in parsing the sql string.\n"; 
    exit; 
  }
  OCIExecute($action);


?>
<?php

// Display all the values in the record set, one record per row, in a loop
while(OCIFetch($action))  {
// Start a row for each record
   echo("<table border=0>");//start table

   echo("<tr>");
   echo("<td width=200>ID:</td>");
   $id = OCIResult($action,"ID"); //"";
   echo("<td width=300>");
   echo ($id);
   echo("</td>");
   echo("</tr>");
   
   echo("<tr>");
   echo("<td width=200>Food name:</td>");
   $foodname = OCIResult($action,"FOODNAME");//"";
   $foodlink = OCIResult($action,"LINK");//"";
   echo("<td width=300>");
   echo ("<a href='index.php".$foodlink."'>".$foodname."</a>");
   echo("</td>");
   echo("</tr>");
   
   echo("<tr>");
   $foodimage = OCIResult($action,"IMAGE");//"";
   echo ("<br><a href='".$foodlink."'><img src=http://www.deakin.edu.au/~mserdina/sit313/mobileApp/img/".$foodimage." width=50 height=60>
   </a><br>");
   echo("</tr>");
   
   echo("<tr>");
   echo("<td width=200>Preparation time:</td>");
   $cookingtime = OCIResult($action,"COOKINGTIME");//""; 
   echo("<td width=300>");
   echo ($cookingtime); 
   echo("</td>");
   echo("</tr>");
   
   echo("<tr>");
   echo("<td width=200>Availabity:</td>");
   $availability = OCIResult($action,"AVAILABILTY");//""; 
   echo("<td width=300>");
   echo ($availability);
   echo("</td>");
   echo("</tr>");

   echo("<tr>");
   echo("<td width=200>Price:</td>");
   $foodprice = OCIResult($action,"PRICE");//""; 
   echo("<td width=300>");
   echo ($foodprice);
   echo("</td>");
   echo("</tr>");
    
   echo("</table>");
} 
// Close the connection
OCILogOff ($connect); 
?>
    <div id="foodsearchresult">
        <div id="SearchResult"></div><!--Show search result-->
        </div>
    </div>
    <p>Click <a href="index.php#page2">here</a> to view the menu</p>
</div>
</body>
</html>




















