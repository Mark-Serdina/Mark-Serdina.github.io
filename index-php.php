<!--
Student name: Mark Serdina
ID: 213145792  

Assignment 1 - Project 1 Restaurant Application
Unit name: Mobile Computing
Unit Code: SIT313

Deakin University 

Trimister 2, 2015 

Due Date: 16/8/2015              
-->


<!DOCTYPE html>
<html><head>

<title>Restaurant</title>
<!--(Start)---Files are hosted privately--
<link rel="stylesheet" href="themes/themeroller1.min.css" />--Theme roller styling. Hosted privately--
<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />--Theme roller styling. Hosted privately-->



<link rel="stylesheet" href="jquery.mobile-1.4.5.min.css" /><!--External CSS hosted privately-->
<script src="jquery-1.11.1.min.js"></script><!--External javascript hosted privately-->
<script src="jquery.mobile-1.4.5.min.js"></script><!--External javascript hosted privately-->
<!--(Start)---Files are hosted privately-->



<!--Old version of Jquery mobile
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
<script src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>-->

<!--Local files ready to be use for future modifications-->
<!--<link rel="stylesheet" href="jquery.mobile-1.0a4.1.min.css" />
<script src="jquery-1.5.2.min.js"></script>
<script src="jquery.mobile-1.0a4.1.min.js"></script>-->

<style>
/****Additional CSS to enhance features*****/
/****************************************************************************************************************/ 
/******Start Home page menu styling*****/ 
/******Start pop up text and transparent for feedback*****/ 
#wrapper .text {position:relative;bottom:30px;left:0px;visibility:hidden;}

/***Hover***/
#wrapper:hover .text {visibility:visible;}

/***Transparent***/
div.transbox
{  margin: 30px 0px; background-color:#ffffff;border:1px solid black;opacity:0.6;filter:alpha(opacity=60);
/* For IE8 and earlier */}

/***Transparent***/
div.transbox p
{margin: 5%;font-weight:bold;color: #000000;}
/******End pop up text and transparent for feedback*****/ 

/******Start feedback image styling*****/ 
div.background{background: url(img/fback.PNG);border: 1px solid black;width:100%;height:350px;}
/******Start feedback image styling*****/ 
/******End Home page menu styling*****/ 
/****************************************************************************************************************/

/****************************************************************************************************************/
/******Start for garlic bread image background styling (menu appetizer)*****/ 
div.garlic-background{ background: url(img/garlicbread.PNG) fixed  ;width:100%;height:500px; background-size:100%;}
/******End  for garlic bread image background styling (menu appetizer)*****/ 

/******Start  appetizer text and transparent styling*****/ 
div.garlic-transparent{background-color:#ffffff;opacity:0.6;filter:alpha(opacity=60); /* For IE8 and earlier */}
/******End  appetizer transparent and text styling*****/ /****************************************************************************************************************/

/****************************************************************************************************************/
/******Start for BBQ image background styling (menu main dish)*****/ 
div.BBQ-background{background:url(img/bbq.PNG)fixed;width:100%;height:500px; background-size:100%;}
/******End  for BBQ image background styling (menu main dish)*****/ 

/******Start main dish text and transparent styling*****/ 
div.BBQ-transparent{background-color:#ffffff;opacity:0.6;filter:alpha(opacity=60); /* For IE8 and earlier */}
/******End main dish text and transparent styling*****/ /****************************************************************************************************************/

/****************************************************************************************************************/
/******Start for salad image background styling (menu salad)*****/ 
div.salad-background{background:url(img/greeksalad.PNG)fixed;width:100%;height:500px; background-size:100%;}
/******End  for salad image background styling (menu salad)*****/ 

/******Start salad text and transparent styling*****/ 
div.salad-transparent{background-color:#ffffff;opacity:0.6;filter:alpha(opacity=60); /* For IE8 and earlier */}
/******End salad text and transparent styling*****/ /****************************************************************************************************************/

/****************************************************************************************************************/
/******Start for pizza image background styling (menu pizza)*****/ 
div.pizza-background{background:url(img/supremepizza.PNG)fixed;width:100%;height:500px; background-size:100%;}
/******End  for pizza image background styling (menu pizza)*****/ 

/******Start pizza text and transparent styling*****/ 
div.pizza-transparent{background-color:#ffffff;opacity:0.6;filter:alpha(opacity=60); /* For IE8 and earlier */}
/******End pizza text and transparent styling*****/ /****************************************************************************************************************/

/****************************************************************************************************************/
/******Start for dessert image background styling (menu dessert)*****/ 
div.dessert-background{background:url(img/yumydessert.PNG)fixed;width:100%;height:500px; background-size:100%;}
/******End  for pizza image background styling (menu dessert)*****/ 

/******Start dessert text and transparent styling*****/ 
div.dessert-transparent{background-color:#ffffff;opacity:0.6;filter:alpha(opacity=60); /* For IE8 and earlier */}
/******End dessert text and transparent styling*****/ /****************************************************************************************************************/

/****************************************************************************************************************/
/******Start for drinks image background styling (menu drinks)*****/ 
div.drinks-background{background:url(img/drinks.PNG)fixed;width:100%;height:500px; background-size:100%;}
/******End  for pizza image background styling (menu dessert)*****/ 

/******Start drinks text and transparent styling*****/ 
div.drinks-transparent{background-color:#ffffff;opacity:0.6;filter:alpha(opacity=60); /* For IE8 and earlier */}
/******End drinks text and transparent styling*****/ /****************************************************************************************************************/

.page-map, .ui-content, #map-canvas { width: 100%; height: 100%; padding: 0; }
</style>
</head>
<body>
<!-- begin first or homepage.-->
<section id="page1" data-role="page" class="ui-body-a" data-theme="a"><!--section:creates the first page, data role: 1st page, classui-body-a creates the styling and the background, data-theme creates another styling-->
	<header data-role="ui-header" class="ui-header-fullscreen" data-theme="b" style="background-color:#ECF90E">
        <h1 style="text-align:center"><img src="img/logo.png" width="300" height="100"></h1><!--Displays the restaurant logo in the center of the page-->
          <div data-role="navbar"><!--creates two nav bar search and shopping cart-->
                <ul>
                      <li>
                        <a href="#myPopup" class=" ui-icon-search ui-btn-icon-left" data-rel="popup">Search</a>
                         <!--Pop up link for search input in the navbar, icon on the left side-->
                      </li>
                      <li>
                        <a href="#myCart" data-rel="popup" data-position-to="window">Cart</a>
                        <!--Pop up link for shopping cart in the navbar, no icon available for cart-->
                      </li>
                </ul>
                <ul>
                      <li>
                        <a href="#register">Register</a>
                         <!--Pop up link for search input in the navbar, icon on the left side-->
                      </li>
                      <li>
                        <a href="#login">Log in</a>
                        <!--Pop up link for shopping cart in the navbar, no icon available for cart-->
                      </li>
                </ul>
	      </div><!--End nav bar-->
    </header><!--End header-->
          
<!--Start search pop up-->
    <div data-role="popup" id="myPopup">
    	<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext
     	ui-btn-right">Close</a><!--X Button on the right to close the search input.-->
      	<input type="search" size="100%"><!--Search input.-->
    </div>
  </div><!--End div for id myPopup-->
<!--End search pop up-->

<!--Start shopping cart pop up table-->
    <div data-role="popup" id="myCart" class="ui-content"><!--Start div content for shopping cart pop up-->
    	<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext
         ui-btn-left">Close</a><br><!--X Button on the left to close the shopping cart pop up table.-->
     <h3>Your Cart items</h3><!--Table name-->
     <table><!--Start table-->
     	<tr><!--Rows for shopping cart table-->
       		<thead>Number:</thead><!--Column name-number use to identify the number of the item-->
        	<thead>Name:</thead><!--Column name-Name use to name item-->
            <thead>Price:</thead><!--Column name-Price use for item prices-->
            <thead></thead><!--empty column on the right of the table-->
        </tr>
        <tr><!--Rows for shopping cart table-->
        	<td>1</td><!--Example number 1 item-->
            <td></td><!--column to put the name of the item-->
            <td></td><!--column for price-->
            <td><input type="button" value="delete"></td>
        </tr>
        <tr><!--Rows for shopping cart table-->
        	<td>2</td>
            <td></td><!--column to put the name of the item-->
            <td></td><!--column for price-->
            <td><input type="button" value="delete"></td>
        </tr>
        <tr><!--Rows for shopping cart table-->
        	<td>3</td>
            <td></td><!--column to put the name of the item-->
            <td></td><!--column for price-->
            <td><input type="button" value="delete"></td>
        </tr>
        <tr><!--Rows for shopping cart table-->
        	<td>4</td>
            <td></td><!--column to put the name of the item-->
            <td></td><!--column for price-->
            <td><input type="button" value="delete"></td>
        </tr>
        <tr><!--Rows for shopping cart table-->
        	<td>...</td>
            <td></td><!--column to put the name of the item-->
            <td></td><!--column for price-->
            <td><input type="button" value="delete"></td>
        </tr>
        <form><!--(start form) Form that will submit the items details for payment-->
             <tr><!--Rows for shopping cart table-->
                <td>Total items</td>
                <td></td>
                <td>Total price</td>
                <td>$0AUD</td>
            </tr>
            <tr><!--Rows for shopping cart table-->
            	<td>
                    <a href="#">
                    	<input type="button" value="Pay Now"><!--Button to pay for the items added to the shopping cart-->
                    </a><!--Link to enter payment details-->
                <td>
            </tr>
        </form><!--(end form) Form that will submit the items details for payment-->
     </table><!--End table-->
    </div><!--End div content for shopping cart pop up-->
<!--End shopping cart pop up table-->

<!--(Start navbar) for restaurant service options: menu, news, gallery, location, contact, info, programmer & details-->
	<nav data-role="navbar" class="ui-navbar ui-corner-all" style="background: url(img/bg.PNG) no-repeat center center;
		background-attachment:fixed;-webkit-background-size: 100%;-moz-background-size: 100%;-o-background-size: 100%;
    	background-size: 100%;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;	
   		background-size: cover;}" data-theme="a">
        <!--data role:navbar, ui-navbar creats the styling, ui-corner-all creates the button into corner border. Added
        style to add background photo in a fix position and data theme to add styling the page.-->
		<ul><!--ul seprates two buttons each row-->
			<li><!--button-->
            	<a href="#page2" class="ui-btn-corner-all" style="margin-right:30px;margin-left:30px;margin-top:5px">
            		<img src="img/spoons.png" alt=""><!--menu icon image-->
                </a><!--Menu button link to page2(menu page)-->
            </li>
			<li><!--button-->
            	<a href="#newspage" class="ui-btn-corner-all" style="margin-right:30px;margin-left:30px;margin-top:5px">
            		<img src="img/restaurantnews.png" alt=""><!--news icon image-->
                </a><!--News button link to newspage (news page)-->
            </li>
		</ul>
		<ul><!--ul seprates two buttons each row-->
			<li><p style="text-align:center">Menu</p></li><!--Name of the button-->
			<li><p style="text-align:center">News</p></li><!--Name of the button-->
		</ul>
        <ul><!--ul seprates two buttons each row-->
        	<li><!--button-->
            	<a href="#page5" class="ui-btn-corner-all" style="margin-right:30px;margin-left:30px">
           			<img src="img/photo.png" alt=""><!--gallery icon image-->
                </a><!--Gallery button link to page5 (gallery page)-->
            </li>
            <li><!--button-->
                <a transition="flip" href="map.html" class="ui-btn-corner-all" style="margin-right:30px;margin-left:30px">
                	<img src="img/location.png" alt=""><!--location icon image-->
                </a><!--Location button link to external page map.html (location page of the user, no restaurant location 
                set yet)-->
            </li>
        </ul>
         <ul><!--ul seprates two buttons each row--> 
         	<li><p style="text-align:center">Gallery</p></li><!--Name of the button-->	
            <li><p style="text-align:center">Location</p></li><!--Name of the button-->
        </ul>
		<ul>
			<li><!--button-->
            	<a href="#contactpage" class="ui-btn-corner-all" style="margin-right:30px;margin-left:30px">
            		<img src="img/contactus.png" alt=""><!--contact us icon image-->
                </a><!--Contact us button link to contactpage-->
            </li>
			<li><!--button-->
            	<a href="#infopage" class="ui-btn-corner-all" style="margin-right:30px;margin-left:30px">
            		<img src="img/information.png" alt=""><!--information image-->
                </a><!--Information button link to infopage-->
            </li>
	
		</ul>
		<ul><!--ul seprates two buttons each row-->
			<li><p style="text-align:center">Contact</p></li><!--Name of the button-->
			<li><p style="text-align:center">Info</p></li><!--Name of the button-->
		
		</ul>
        <ul><!--ul seprates two buttons each row-->
			<li><!--button-->
            	<a href="#mydetails" class="ui-btn-corner-all" style="margin-right:30px;margin-left:30px">
            		<img src="img/programmer.PNG" alt="" width="70" height="70"><!--programmer icon image-->
                </a><!--programmer button link to my details page (programmer details-->
            </li>
           	<li><!--button-->
            	<a href="#dealspage" class="ui-btn-corner-all" style="margin-right:30px;margin-left:30px">
            		<img src="img/deals.PNG" alt="" width="70" height="70"><!--deals icon image-->
                </a><!--Deals button link to deals page (Deals list)-->
            </li>
        </ul>
        <ul><!--ul seprates two buttons each row-->
			<li><p style="text-align:center">Programmer</p></li><!--Name of the button-->
			<li><p style="text-align:center">Deals</p></li><!--Name of the button-->
		
		</ul>   
	</nav><!--End navigation bars-->
    
<!--(Start) Feed back section in the homepage-->
<div id="wrapper"><!--(Start div, id=wrapper link to css in the header of this page) 
pop up transparent box for feed back: question, enter feedback and view all feedback-->
    <div class="background" style="width:100%"><!--(Start div, id=background)Background styling of the feeback section in 
    											the homepage-->
   		 <div class="transbox text"><!--transbox creates the transparent pop up background of the feedback section in the
          							homepage-->
         <nav data-role="navbar"><!--Creates the buttons: Click here to add Feed Back, Click here to view all feedbacks-->
   		 <ul>
             <li>
                 <p style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif">
                    What do you think about our online service?
                    <a href="#feedbackpage" style="color:#0FF345; font-size:12px">Click here to add Feed Back</a>				                    <!--button-->
                    <a href="#" style="color:#0FF345; font-size:12px">Click here to view all feedbacks</a>
                    <!--button-->
                 </p><!--grouped the question and the buttons all together-->
              </li>
          </ul>
          </nav><!--End navbar data-role=navbar-->
    	</div><!--End div, class=transbox text-->
	</div><!--(End div, id=background)Background styling of the feeback section in 
    	  the homepage-->
</div><!--(End div, id=wrapper link to css in the header of this page) 
       pop up transparent box for feed back: question, enter feedback and view all feedback-->
<!--(End) Feed back section in the homepage-->

    <footer data-role="ui-footer"><!--(Start footer)-->
        <h2 style="text-align:center">Copyright &copy;
         2015 Mark Serdina</h2>
    </footer><!--(End footer) data-role=ui-footer-->
</section><!--End section, id=page1-->
<!-- End first or homepage page.-->

<!-- begin Feedback page.-->
<section id="feedbackpage" data-role="page" class="homepage" data-theme="c"><!--Start section of feedback page-->
	<header data-role="ui-header-fullscreen" style=" background: url(img/bg.PNG);background-image:100%"><!--(Start)-Header for restaurant title and home icon button-->
		<h1 style="text-align:center">Restaurant</h1><!--Heading title-->
          <div class="ui-bar"><!--Start div for home icon button, ui-bar creates the styling of the bar-->
                <ul>
                  <li>
                  	  <a href="#page1" class=" ui-icon-home ui-btn-icon-left"></a><!--home icon button-->
                  </li>
                </ul>
           </div><!--End div for home icon button, class=ui-bar-->    
	</header><!--(End)-Header for restaurant title and home icon button-->
    	<div data-role="content" class="content ui-btn-a"><!--(Start content), content and ui-button-a sets the content
         styling-->	
        		<a href="#">View All Feedbacks</a><!--Link to view all feedback-->
				<form id="myform" action="" method="post"><!--(Start) form for feedback submission-->
					<div data-role="fieldcontain">
                    	<label for="">Enter Your Feedback:</label><!--Label of the text area--><br><br>
                            <!-- br tag for spaces-->
                            <textarea></textarea><!--text area for customers to input feedback-->
                            <br><br><!-- br tag for spaces-->
                        <p style="color:#15E453">Enter Your details</p><!--Title for entering customer details-->
                            <label for="">Customer Name:</label><!--Label for customer name input-->
                                <br><br><!-- br tag for spaces-->
                                <input type="text"><!--customer name input box-->
                                <br><br><!-- br tag for spaces-->
                            <label for="">Phone Number:</label><br><br><!-- br tag for spaces-->
                                <input type="text"><br><br><!-- br tag for spaces-->
                            <p>Do you want us to call you?</p><br><!-- br tag for spaces-->
                                <input type="button" value="Yes"><!--Yes button to answer the question whether customers 
                                wants to be called on the phone-->
                                <br><br><br><!-- br tag for spaces-->
                            <label for="">Email:</label><br><br><!-- br tag for spaces-->
                                <input type="text"><!--input text for email-->
                                <br><br><!-- br tag for spaces-->
                           		<input type="reset" value="Clear"><!--Button to clear all entered text-->
                                <br><br><!-- br tag for spaces-->
                                <input type="button" value="Post"><!--Button to submit the feedback-->
                    </div><!--End div, data-role fieldcontain-->
				</form><!--(End) form for feedback submission-->
		</div><!--(End div, content), class="content ui-btn-a-->
    <footer data-role="ui-footer"><!--(Start footer)-->
        <h2 style="text-align:center;background: url(img/bg.PNG);background-image:100%">Restaurant</h2><!--footer name-->
    </footer><!--(End footer)-->
</section><!--End section of feedback page, id=feedbackpage-->
<!-- End Feedback page.-->

<!-- begin my Information page.-->
<section id="infopage" data-role="page" class="homepage"><!--(start section iformation page), id=infopage is link to the info icon in the homepage-->
	<header data-role="ui-header" style=" background: url(img/bg.PNG);background-image:100%"><!---->
		<h1 style="text-align:center">Restaurant</h1><!---->
	</header>
    	<div data-role="ui-content" class="ui-content btn"><!--Content of information page-->
					<div data-role="fieldcontain"><!---->
                    	<strong>Coming Soon...</strong><hr><!--page currently under developed-->                  
                    </div>   
		</div>
    <footer data-role="ui-footer"><!--(Start)-Footer of the informatin page--> 
        <h2 style="text-align:center;background: url(img/bg.PNG);background-image:100%">Restaurant</h2><!--Footer name with        background image--> 
    </footer><!--(End)-Footer of the informatin page--> 
</section>
<!-- End information page.-->

<!-- begin my contact page.-->
<section id="contactpage" data-role="page" class="homepage"><!--(start section contact page), id=contactpage is link to the contact icon in the homepage-->
	<header data-role="ui-header" style=" background: url(img/bg.PNG);background-image:100%" ><!--(Start) Header with background image-->
		<h1 style="text-align:center">Restaurant</h1><!---->
    	<div data-role="ui-content" class="ui-content btn"><!--Content of contact page-->
					<div data-role="fieldcontain"><!---->
                    	<strong>Coming Soon...</strong><hr><!--page currently under developed-->               
                    </div>   
		</div>
    <footer data-role="ui-footer">
        <h2 style="text-align:center;background: url(img/bg.PNG);background-image:100%">Restaurant</h2><!--(Start) Footer
         with background image-->
    </footer><!--(End) Footer with background image-->
</section><!--(End section contact page)-->
<!-- End contact page.-->

<!-- begin my news page.-->
<section id="newspage" data-role="page" class="homepage"><!--(start section news page),  id=newspage is link to the news icon in the homepage-->
	<header data-role="ui-header" style=" background: url(img/bg.PNG);background-image:100%"><!--(Start) Header with background image-->
		<h1 style="text-align:center">Restaurant</h1><!---->
	</header>
    	<div data-role="ui-content" class="ui-content btn"><!--Content of news page-->
					<div data-role="fieldcontain"><!---->
                    <strong>Coming Soon...</strong><hr><!--page currently under developed-->               
                    </div>   
		</div>
    <footer data-role="ui-footer">
        <h2 style="text-align:center;background: url(img/bg.PNG);background-image:100%">Restaurant</h2>
    </footer>
</section><!--(End section, id=newspage)-->
<!-- End news page.-->

<!-- begin my deals page.-->
<section id="dealspage" data-role="page" class="homepage"><!--(start section deals page), id=dealspage is link to the deals icon in the homepage-->
	<header data-role="ui-header" style=" background: url(img/bg.PNG);background-image:100%" ><!--(Start) Header with background image-->
		<h1 style="text-align:center">Restaurant</h1><!---->
	</header>
    	<div data-role="ui-content" class="ui-content btn"><!--Content of deals page-->
					<div data-role="fieldcontain"><!---->
                    <strong>Coming Soon...</strong><hr><!--page currently under developed-->                
                    </div>   
		</div>
    <footer data-role="ui-footer">
        <h2 style="text-align:center;background: url(img/bg.PNG);background-image:100%">Restaurant</h2>
    </footer>
</section><!--(End section, id=dealspage)-->
<!-- End deals page.-->

<!-- begin my details page.-->
<section id="mydetails" data-role="page" class="homepage"><!--Developer section page, id=mydetails is link to programmer icon in the homepage-->
	<header data-role="ui-header" style=" background: url(img/bg.PNG);background-image:100%"><!--(Start) Header with background image-->
		<h1 style="text-align:center">Restaurant</h1><!---->
	</header>
    	<div data-role="ui-content" class="ui-content btn"><!-- (Start) Developer page content-->
					<div data-role="fieldcontain"><!--Start field contain-->
                        <strong>Developer details</strong><hr><!--details-->
                         <p>Mark Serdina</p><!--Developer name-->
                         <img src="img/me.PNG"><!--Developer image-->
                            <p>Entreprenuer</p><!--details-->
                            <p>Programmer</p><!--details-->
                            <p>Businesses:<br> <!--details-->
                                <a href="#">AppGlobe</a>, <a href="#">Barteryouworld</a><!--details-->
                            <p>Email: mek_mak444@yahoo.com<br>
                            	<input type="button" value="Send me an email"><!--button to send the developer an email-->
                            </p>
                            <!--details-->
                            <p>Phone number:0423167290<br><input type="button" value="Call me"></p>
                            <!--details-->
                    </div><!--End div, feildcontain-->   
		</div><!--(End) Developer page content-->
    <footer data-role="ui-footer">
        <h2 style="text-align:center;background: url(img/bg.PNG);background-image:100%">Restaurant</h2>
    </footer>
</section><!--Developer section page, id=mydetails-->
<!-- End details page.-->

<!--Start restaurant menu.-->
<section id="page2" data-role="page"><!--Restaurant section menu page, contains all the menu categories: appetizer, maindish, salad, pizza, dessert, and drinks-->
	<header data-role="header"><!--Header-->
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content"><!--(Start)-Restaurant menu type content-->
		<nav data-role="navbar" class="bar-b button"><!--Navbar for menu link buttons-->
			<strong><img src="img/spoons.png" alt="" width="30">Menu</strong><!--Page name-->
            <br><br>
			<ul><!--(start) ul tag #1-->
				<li><!--(start li) creates a row button for appetizer menu-->
                <div class="garlic-background"><!--(start div), class=garlic-background link to css in th main header of this file, creates the background styling-->
                	<div class="garlic-transparent"><!--(start div), class=garlic-transparent link to css in th main header of this file, creates the transparent background styling-->
                        <a href="#page2.1"><!---->
                            <ul><!--(start) ul tag #1.1-->
                                <li><!--(start) li for appetizer button name and click here link-->
                                     <p style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif; 
                                     color:#E90C3C; font-size:36px""><!---->
                                     Appetizer</p><p>click here</p><!---->
                                </li><!--(End) li for appetizer button name and click here link-->
                            </ul><!--(End) ul tag #1.1-->
                        </a>
                    </div><!--(End div), class=garlic-transparent-->
                </div><!--(End div, class=garlic-background)-->
				</li><!--(End li) creates a row button for appetizer menu-->
			</ul><!--(End) ul tag #1-->
			<ul><!--comments below are the same meaning as the comments for appetizer button-->
				<li><!---->
                <div class="BBQ-background"><!---->
                	<div class="BBQ-transparent"><!---->
                        <a href="#page3.1"><!---->
                            <!--<img src="img/garlicbread.PNG" height="200" width="300"
                            style="width:100%;">-->
                            <ul>
                                <li><!---->
                                     <p style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif; 
                                     color:#097EF8; font-size:36px">
                                     Main Dish
                                     </p><!---->
                                     <p>click here</p><!---->
                                </li>
                            </ul>
                        </a>
                    </div>
                </div>
				</li>
			</ul>
		    <ul><!---->
				<li><!---->
                <div class="salad-background"><!---->
                	<div class="salad-transparent"><!---->
                        <a href="#page4.1">
                            <!--<img src="img/garlicbread.PNG" height="200" width="300"
                            style="width:100%;">-->
                            <ul>
                                <li>
                                     <p style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;
                                     color:#14E399; font-size:36px">
                                     	Salad
                                     </p><!---->
                                     <p>click here</p><!---->
                                </li>
                        	</ul>
                        </a>
                    </div>
                </div>
				</li>
			</ul>
			<ul><!---->
				<li><!---->
                <div class="pizza-background"><!---->
                	<div class="pizza-transparent"><!---->
                        <a href="#page5.1"><!---->
                        <!--<img src="img/garlicbread.PNG" height="200" width="300"
                        style="width:100%;">-->
                            <ul>
                                <li>
                                     <p style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif; 
                                     color:#0EE4F7; font-size:36px"><!---->
                                         Pizza
                                     </p>
                                     <p>click here</p>
                                </li>
                            </ul>
                        </a>
                    </div>
                </div>
				</li>
			</ul>
			<ul><!---->
				<li><!---->
                <div class="dessert-background"><!---->
                	<div class="dessert-transparent"><!---->
                        <a href="#page6.1"><!---->
                        <!--<img src="img/garlicbread.PNG" height="200" width="300"
                        style="width:100%;">-->
                        <ul><!---->
                            <li><!---->
                                 <p style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;color:
                                 #0F62F3; font-size:36px"><!---->
                                 	Dessert
                                 </p><!---->
                                 <p>click here</p><!---->
                            </li>
                        </ul>
                        </a>
                    </div>
                </div>
				</li>
			</ul>
			<ul><!---->
				<li><!---->
                <div class="drinks-background"><!---->
                	<div class="drinks-transparent"><!---->
                        <a href="#page7.1"><!---->
                        <!--<img src="img/garlicbread.PNG" height="200" width="300"
                        style="width:100%;">-->
                        <ul><!---->
                            <li><!---->
                                 <p style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;color:
                                 #F90CDA; font-size:36px"><!---->
                                	 Drinks
                                 </p><!---->
                                 <p>click here</p>
                            </li>
                        </ul>
                        </a>
                    </div>
                </div>
				</li>
			</ul>
		</nav>
	</div><!--(End)-Restaurant menu type content-->
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End restaurant menu.-->

<!--Start for appetizer menu.-->
<section id="page2.1" data-role="page"><!---->
	<header data-role="header"><!---->
		<h1 style="text-align:center">Restaurant</h1><!---->
	</header>
	<div data-role="ui-content" class="ui-content"><!---->
		<nav data-role="navbar" class="bar-b button"><!---->
			<strong><img src="img/spoons.png" alt="" width="30">Appetizer</strong>
            <!----><br><br>
			<ul><!---->
				<li>
                	<a href="#"><!---->
                		<img src="img/appettizer1.PNG" height="180" width="120" style="width:100%;"><!---->
                    </a>
				</li>
				<li><!---->
					1. Artichoke Bruschetta<br>Price: $8<a href="#page2.1.1">View Recipe</a><!---->
					<a href="#page2.1.1.1">Order Now</a><!---->
				</li>
			</ul>
			<br>
			<ul><!---->
				<li>
                	<a href="#"><!---->
                    	<img src="img/garlicbread.PNG" height="180" width="120" style="width:100%;"><!---->
                    </a>
				</li>
				<li>
					2. Garlic Bread<br><br>Price: $5<a href="#page2.1.2">View Recipe</a><!---->
					<a href="#page2.1.1.2">Order Now</a><!---->
				</li>
			</ul>
			<br>
			<ul><!---->
				<li><a href="#"><!---->
                	<img src="img/rumakii.PNG" height="180" width="120" style="width:100%;"><!---->
                </a>
				</li>
				<li><!---->
					3. Rumaki with Pineapple<br>Price: $10<a href="#page2.1.3">View Recipe</a><!---->
					<a href="#page2.1.1.3">Order Now</a><!---->
				</li>
			</ul>
			<br>
			<ul><!---->
				<li><a href="#">
                		<img src="img/chickenwings.PNG" height="180" width="120" style="width:100%;"><!---->
                    </a><!---->
				</li>
				<li>
					4. Chicken Wings<br>Price: $11<a href="#page2.1.4">View Recipe</a><!---->
					<a href="#page2.1.1.4">Order Now</a><!---->
				</li>
			</ul>
			<br>
			<ul><!---->
				<li><a href="#"><img src="img/vegsamosa.PNG" height="180" width="120"
					style="width:100%;"></a><!---->
				</li>
				<li><!---->
					5. Vegetable Samosa<br>Price: $6<a href="#page2.1.5">View Recipe</a><!---->
					<a href="#page2.1.1.5">Order Now</a><!---->
				</li>
			</ul>
			<br>
			<ul><!---->
				<li><a href="#">
                		<img src="img/musselsseafood.PNG" height="180" width="120" style="width:100%;">
                    </a><!---->
				</li>
				<li><!---->
					6. Seafood Mussels<br>Price: $10<a href="#page2.1.6">View Recipe</a><!---->
					<a href="#page2.1.1.6">Order Now</a><!---->
				</li>
			</ul>
			<br>
			<ul><!---->
				<li><a href="#"><!---->
                		<img src="img/prawnsaganaki.PNG" height="180" width="120" style="width:100%;"></a>
                </li>
				<li><!---->
					7. Prawn Saganaki<br>Price: $7<a href="#page2.1.7">View Recipe</a><!---->
					<a href="#page2.1.1.7">Order Now</a><!---->
				</li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End for appetizer menu.-->

<!--Start for main dish menu.-->
<section id="page3.1" data-role="page"><!---->
	<header data-role="header"><!---->
		<h1 style="text-align:center">Restaurant</h1><!---->
	</header>
	<div data-role="ui-content" class="ui-content"><!---->
		<nav data-role="navbar" class="bar-b button"><!---->
			<strong><img src="img/spoons.png" alt="" width="30">Main Dish</strong><br><br><!---->
			
			<ul>
				<li><a href="#"><img src="img/lasagna.PNG" height="180" width="120"
					style="width:100%;"></a><!---->
				</li>
				<li>
					1. Best Lasagna<br><br>Price: $11<a href="#page3.1.1">View Recipe</a>
					<a href="#pagemaindish1">Order Now</a><!---->
				</li>
			</ul>
			<br>
			<ul>
				<li><a href="#"><img src="img/bbq.PNG" height="180" width="120"
					style="width:100%;"></a><!---->
				</li>
				<li>
					2. bbq ribs<br><br>Price: $18<a href="#page3.1.2">View Recipe</a><!---->
					<a href="#pagemaindish2">Order Now
					</a><!---->
				</li>
			</ul>
			<br>
			<ul>
				<li><a href="#"><img src="img/shrimpverde.PNG" height="180" width="120"
					style="width:100%;"></a><!---->
				</li>
				<li>
					3. Shrimp Verde<br><br>Price: $15<a href="#page3.1.3">View Recipe</a>
					<a href="#pagemaindish3">Order Now</a><!---->
				</li>
			</ul>
			<br>
			<ul>
				<li><a href="#"><img src="img/chickensoup.PNG" height="180" width="120"
					style="width:100%;"></a><!---->
				</li>
				<li>
					4. Chicken Soup<br><br>Price: $11<a href="#page3.1.4">View Recipe</a><!---->
					<a href="#pagemaindish4">Order Now</a><!---->
				</li>
			</ul>
			<br>
			<ul>
				<li><a href="#"><img src="img/Ribeyesteak.PNG" height="180" width="120"
					style="width:100%;"></a><!---->
				</li>
				<li>
					5. Rib-eye steak<br><br>Price: $20<a href="#page3.1.5">View Recipe</a><!---->
					<a href="#pagemaindish5">Order Now</a><!---->
				</li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End for main dish menu.-->

<!--Start for salad menu.-->
<section id="page4.1" data-role="page"><!---->
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content"><!---->
		<nav data-role="navbar" class="bar-b button"><!---->
			<strong><img src="img/spoons.png" alt="" width="30">Salad</strong><br><br>
			
			<ul>
				<li><a href="#"><img src="img/craneberryspinachesalad.PNG" height="180" 
					width="120" style="width:100%;"></a><!---->
				</li>
				<li>
					1. Crane-berry spinache salad<br>Price: $8<a href="#page4.1.1">View Recipe
					</a>
					<a href="#pagesalad1">Order Now</a><!---->
				</li>
			</ul>
			<br>
			<ul>
				<li><a href="#"><img src="img/greeksalad.PNG" height="180" width="120"
					style="width:100%;"></a><!---->
				</li>
				<li>
					2. Greek salad<br><br>Price: $8<a href="#page4.1.2">View Recipe</a><!---->
					<a href="#pagesalad2">Order Now</a><!---->
				</li>
			</ul>
			<br>
			<ul>
				<li><a href="#"><img src="img/gardensalad.PNG" height="180" width="120"
					style="width:100%;"></a><!---->
				</li>
				<li>
					3. Garden salad<br><br>Price: $8<a href="#page4.1.3">View Recipe</a><!---->
					<a href="#pagesalad3">Order Now</a><!---->
				</li>
			</ul>
			<br>
			<ul>
				<li><a href="#"><img src="img/italiansalad.PNG" height="180" width="120"
					style="width:100%;"></a>
				</li>
				<li>
					4. Spicy Italian salad<br><br>Price: $8<a href="#page4.1.4">View Recipe</a><!---->
					<a href="#pagesalad4">Order Now</a><!---->
				</li>
			</ul>
			<br>
			<ul>
				<li><a href="#"><img src="img/potatosalad.PNG" height="180" width="120"
				 	style="width:100%;"></a><!---->
				</li>
				<li>
					5. Potato salad<br><br>Price: $8<a href="#page4.1.5">View Recipe</a><!---->
					<a href="#pagesalad5">Order Now</a><!---->
				</li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End for salad menu.-->

<!--Start for Pizza menu.-->
<section id="page5.1" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">
			<strong><img src="img/spoons.png" alt="" width="30">Pizza</strong><br><br>
			
			<ul>
				<li><a href="#"><img src="img/meatloverspizza.PNG" height="180" width="120"
					style="width:100%;"></a>
				</li>
				<li>
					1. Meat Lovers<br><br>Price: $12<a href="#page5.1.1">View Recipe</a>
					<a href="#pagepizza1">Order Now</a>
				</li>
			</ul>
			<br>
			<ul>
				<li><a href="#"><img src="img/hawaiianpizza.PNG" height="180" width="120"
					style="width:100%;"></a>
				</li>
				<li>
					2. Haiwaiian<br><br>Price: $12<a href="#page5.1.2">View Recipe</a>
					<a href="#pagepizza2">Order Now</a>
				</li>
			</ul>
			<br>
			<ul>
				<li><a href="#"><img src="img/americanopizza.PNG" height="180" width="120"
					style="width:100%;"></a>
				</li>
				<li>
					3. Americano<br><br>Price: $12<a href="#page5.1.3">View Recipe</a>
					<a href="#pagepizza3">Order Now</a>
				</li>
			</ul>
			<br>
			<ul>
				<li><a href="#"><img src="img/margaritapizza.PNG" height="180" width="120"
					style="width:100%;"></a>
				</li>
				<li>
					4. Margarita<br><br>Price: $12<a href="#page5.1.4">View Recipe</a>
					<a href="#pagepizza4">Order Now</a>
				</li>
			</ul>
			<br>
			<ul>
				<li><a href="#"><img src="img/supremepizza.PNG" height="180" width="120"
					style="width:100%;"></a>
				</li>
				<li>
					5. Supreme <br><br>Price: $12<a href="#page5.1.5">View Recipe</a>
					<a href="#pagepizza5">Order Now</a>
				</li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End for Pizza menu.-->

<!--Start for dessert menu.-->
<section id="page6.1" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">
			<strong><img src="img/spoons.png" alt="" width="30">Dessert</strong><br><br>
			
			<ul>
				<li><a href="#"><img src="img/healthysundae.PNG" height="180" width="120"
					style="width:100%;"></a>
				</li>
				<li>
					1. Healthy sundae<br><br>Price: $6<a href="#page6.1.1">View Recipe</a>
					<a href="#pagedessert1">Order Now</a>
				</li>
			</ul>
			<br>
			<ul>
				<li><a href="#"><img src="img/strawberrysmootthies.PNG" height="180" width="120"
					style="width:100%;"></a>
				</li>
				<li>
					2. Strawberry smoothies<br>Price: $6<a href="#page6.1.2">View Recipe</a><a href="#pagedessert2">
                    Order Now</a>
				</li>
			</ul>
			<br>
			<ul>
				<li><a href="#"><img src="img/stewedquincedessert.PNG" height="180" width="120"
					style="width:100%;"></a>
				</li>
				<li>
					3. Stewed quince dessert<br>Price: $7<a href="#page6.1.3">View Recipe</a><a href="#pagedessert3">
                    Order Now</a>
				</li>
			</ul>
			<br>
			<ul>
				<li><a href="#"><img src="img/mangodessert.PNG" height="180" width="120" 
					style="width:100%;"></a>
				</li>
				<li>
					4. Mango dessert<br><br>Price: $5<a href="#page6.1.4">View Recipe</a>
					<a href="#pagedessert4">Order Now</a>
				</li>
			</ul>
			<br>
			<ul>
				<li><a href="#"><img src="img/mangoicecream.PNG" height="180" width="120" 
					style="width:100%;"></a>
				</li>
				<li>
					5. Mango ice cream<br>Price: $7<a href="#page6.1.5">View Recipe</a>
					<a href="#pagedessert5">Order Now</a>
				</li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End for dessert menu.-->

<!--Start of drinks menu.-->
<section id="page7.1" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">
			<strong><img src="img/spoons.png" alt="" width="30">Liquor</strong><br><br>
			
			<ul>
				<li><a href="#"><img src="img/bloddymarydrink.PNG" height="180" width="120" style="width:100%;"></a>
				</li>
				<li>
					1. Bloody mary<br><br>Price: $10<a href="#page7.1.1">View Recipe</a>
					<a href="#pagedrink1">Order Now</a>
				</li>
			</ul>
			<br>
			<ul>
				<li><a href="#"><img src="img/vodka.PNG" height="180" width="120" 	 style="width:100%;"></a>
				</li>
				<li>
					2. Vodka<br><br>Price: $10<a href="#page7.1.2">View Recipe</a><a href="#pagedrink2">Order Now</a>
				</li>
			</ul>
			<br>
			<ul>
				<li><a href="#"><img src="img/sangria.PNG" height="180" width="120" 	 style="width:100%;"></a>
				</li>
				<li>
					3. Sangria<br><br>Price: $10<a href="#page7.1.3">View Recipe</a><a href="#pagedrink3">Order Now</a>
				</li>
			</ul>
			<br>
			<ul>
				<li><a href="#"><img src="img/ginmartini.PNG" height="180" width="120" style="	width:100%;"></a>
				</li>
				<li>
					4. Gin martini<br><br>Price: $10<a href="#page7.1.4">View Recipe</a><a href="#pagedrink4">Order Now</a>
				</li>
			</ul>
			<br>
			<ul>
				<li><a href="#"><img src="img/virgincocumbermojito.PNG" height="180" width="120" style="width:100%;"></a>
				</li>
				<li>
					5. Virgin cocumber mojito<br><br>Price: $10<a href="#page7.1.5">View Recipe</a>
					<a href="#pagedrink5">Order Now</a>
				</li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End for drinks menu.-->

<!--Start of appetizer recipes .-->
<!--Start recipe for Artichoke Bruschetta.-->
<section id="page2.1.1" data-role="page"><!---->
	<header data-role="header"><!---->
		<h1 style="text-align:center">Restaurant</h1><!---->
	</header>
	<div data-role="ui-content" class="ui-content"><!---->
		<nav data-role="navbar" class="bar-b button"><!---->	
			<ul><!---->
				<li><img src="img/appettizer1.PNG" height="400" width="270"
					style="width:100%;"><!---->
				</li>
			</ul>
			<ul><!---->
				<li><p>1 (6.5 ounce) jar marinated artichoke hearts, drained and chopped.</p>
				</li>
			</ul>
			<ul>
				<li><p>1/2 cup grated Romano cheese.</p></li>
			</ul>
			<ul>
				<li><p>5 tablespoons mayonnaise.</p></li>
			</ul>
			<ul>
				<li><p> 1 French baguette, cut into 1/3 inch thick slices. </p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe for Artichoke Bruschetta.-->

<!--Start recipe for Garlic Bread.-->
<section id="page2.1.2" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="ui-bar-b button">	
			<ul>
				<li><img src="img/garlicbread.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p> 3 heads garlic. </p></li>
			</ul>
			<ul>
				<li><p>2 tablespoons olive oil.</p></li>
			</ul>
			<ul>
				<li><p>1 (1 pound) loaf Italian bread.</p></li>
			</ul>
			<ul>
				<li><p>1/2 cup butter. </p></li>
			</ul>
			<ul>
				<li><p>1 tablespoon chopped fresh parsley(optional).</p></li>
			</ul>
			<ul>
				<li><p>2 tablespoons grated Parmesan cheese(optional). </p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe for Garlic Bread.-->

<!--Start recipe for Rumaki with Pineapple.-->
<section id="page2.1.3" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/rumakii.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p>cooking spray.</p></li>
			</ul>
			<ul>
				<li><p>24 water chestnut slices.</p></li>
			</ul>
			<ul>
				<li><p> 8 thick-cut bacon slices, cut crosswise into 3 pieces. </p></li>
			</ul>
			<ul>
				<li><p>24 toothpicks.</p></li>
			</ul>
			<ul>
				<li><p> 1/2 cup low-fat sesame-ginger salad dressing. <p></li>
			</ul>
			<ul>
				<li><p> 1 tablespoon chopped green onion, or to taste.  </p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe for Rumaki with Pineapple.-->

<!--Start recipe for chicken wings.-->
<section id="page2.1.4" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/chickenwings.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p>2 tablespoons vegetable oil,  1 tablespoon kosher salt. </p></li>
			</ul>
			<ul>
				<li><p>1 teaspoon ground black pepper. </p></li>
			</ul>
			<ul>
				<li><p> 5 pounds chicken wings.  </p></li>
			</ul>
			<ul>
				<li><p>1/4 cup jalapeno pepper jelly.</p></li>
			</ul>
			<ul>
				<li><p>  1/4 cup seasoned rice vinegar. <p></li>
			</ul>
			<ul>
				<li><p>  2 tablespoons soy sauce, 4 cloves garlic, crushed.  </p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe for chicken wings.-->

<!--Start recipe for Vegetable samosa.-->
<section id="page2.1.5" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/vegsamosa.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p>2 tablespoons vegetable oil.</p></li>
			</ul>
			<ul>
				<li><p>4 medium potatoes, peeled and cut into 1/2-inch cubes.</p></li>
			</ul>
			<ul>
				<li><p>1/2 cup chopped yellow onion.</p></li>
			</ul>
			<ul>
				<li><p>3/4 cup canned peas and carrots, drained.</p></li>
			</ul>
			<ul>
				<li><p>1 cup Kikkoman Thai Red Curry Sauce.<p></li>
			</ul>
			<ul>
				<li><p>Flour for baking sheet.</p></li>
			</ul>
			<ul>
				<li><p>12 large wonton wrappers.</p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe for vegetable samosa.-->

<!--Start recipe for seafood mussels-->
<section id="page2.1.6" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/musselsseafood.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p>3/4 cup white wine.</p></li>
			</ul>
			<ul>
				<li><p>3/4 cup tomato and clam juice cocktail.</p></li>
			</ul>
			<ul>
				<li><p>3 cloves garlic - peeled and sliced.</p></li>
			</ul>
			<ul>
				<li><p>1/2 teaspoon crushed red pepper flakes.</p></li>
			</ul>
			<ul>
				<li><p>1 pound mussels, cleaned and debearded.<p></li>
			</ul>
			<ul>
				<li><p>3 tablespoons butter.</p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe for seafood mussels.-->

<!--Start recipe for prawn saganaki-->
<section id="page2.1.7" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/prawnsaganaki.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p>1 tablespoon olive oil.</p></li>
			</ul>
			<ul>
				<li><p>1 red onion, halved and thinly sliced.</p></li>
			</ul>
			<ul>
				<li><p>3 cloves garlic, thinly sliced.</p></li>
			</ul>
			<ul>
				<li><p>2 tablespoons tomato paste.</p></li>
			</ul>
			<ul>
				<li><p>1/2 cup white wine.<p></li>
			</ul>
			<ul>
				<li><p> 1 (13.5 ounce) jar tomato and olive pasta sauce.</p></li>
			</ul>
			<ul>
				<li><p>1 1/2 pounds prawns, peeled and deveined, tail on.</p></li>
			</ul>
			<ul>
				<li><p>1/2 cup crumbled Greek feta cheese.</p></li>
			</ul>
			<ul>
				<li><p>2 tablespoons chopped fresh flat-leaf parsley.</p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe for prawn saganaki.-->
<!--End of appetizer recipes .-->

<!--Start of main dish recipe-->
<!--Start recipe for lasagna-->
<section id="page3.1.1" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul class="ui-bar-b">
				<li><img src="img/lasagna.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
			  <li><p>1 pound sweet Italian sausage.</p></li>
			</ul>
			<ul>
				<li><p>3/4 pound lean ground beef.</p></li>
			</ul>
			<ul>
				<li><p>1/2 cup minced onion.</p></li>
			</ul>
			<ul>
				<li><p>2 cloves garlic, crushed.</p></li>
			</ul>
			<ul>
				<li><p>1 (28 ounce) can crushed tomatoes.<p></li>
			</ul>
			<ul>
				<li><p>2 (6 ounce) cans tomato paste.</p></li>
			</ul>
			<ul>
				<li><p>2 (6.5 ounce) cans canned tomato sauce.</p></li>
			</ul>
			<ul>
				<li><p>1/2 cup water.</p></li>
			</ul>
			<ul>
				<li><p> 2 tablespoons white sugar.</p></li>
			</ul>
			<ul>
				<li><p>1 1/2 teaspoons dried basil leaves.</p></li>
			</ul>
			<ul>
				<li><p>1/2 teaspoon fennel seeds.</p></li>
			</ul>
			<ul>
				<li><p>1 teaspoon Italian seasoning.</p></li>
			</ul>
			<ul>
				<li><p>1 tablespoon salt.</p></li>
			</ul>
			<ul>
				<li><p>1/4 teaspoon ground black pepper.</p></li>
			</ul>
			<ul>
				<li><p>4 tablespoons chopped fresh parsley.</p></li>
			</ul>
			<ul>
				<li><p>12 lasagna noodles.</p></li>
			</ul>
			<ul>
				<li><p>16 ounces ricotta cheese.</p></li>
			</ul>
			<ul>
				<li><p>1 egg.</p></li>
			</ul>
			<ul>
				<li><p>1/2 teaspoon salt.</p></li>
			</ul>
			<ul>
				<li><p>3/4 pound mozzarella cheese, sliced.</p></li>
			</ul>
			<ul>
				<li><p>3/4 cup grated Parmesan cheese.</p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe for lasagna.-->

<!--Start recipe for bbq ribs-->
<section id="page3.1.2" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/bbq.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p> 1 small onion, chopped.</p></li>
			</ul>
			<ul>
				<li><p> 7 cloves garlic.</p></li>
			</ul>
			<ul>
				<li><p> 1/2 cup olive oil.</p></li>
			</ul>
			<ul>
				<li><p> 1/2 cup vinegar.</p></li>
			</ul>
			<ul>
				<li><p> 1/2 cup soy sauce.<p></li>
			</ul>
			<ul>
				<li><p> 2 tablespoons chopped fresh rosemary.</p></li>
			</ul>
			<ul>
				<li><p> 2 tablespoons Dijon-style prepared mustard.</p></li>
			</ul>
			<ul>
				<li><p> 2 teaspoons salt.</p></li>
			</ul>
			<ul>
				<li><p> 1 teaspoon black pepper.</p></li>
			</ul>
			<ul>
				<li><p> 1 (2 pound) ribs.</p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe for bbq ribs.-->

<!--Start recipe for shrimp verde.-->
<section id="page3.1.3" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/shrimpverde.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p>2 tablespoons olive oil.</p></li>
			</ul>
			<ul>
				<li><p>2 cloves garlic, chopped.</p></li>
			</ul>
			<ul>
				<li><p>1/4 cup chopped green onion.</p></li>
			</ul>
			<ul>
				<li><p>1 pound fresh shrimp, peeled and deveined.</p></li>
			</ul>
			<ul>
				<li><p>1/2 cup Italian flat leaf parsley, chopped.<p></li>
			</ul>
			<ul>
				<li><p>1/2 cup freshly grated Parmesan cheese.</p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe for shrimp verde.-->

<!--Start recipe for chicken soup.-->
<section id="page3.1.4" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/chickensoup.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p>1 boneless chicken breast half, cooked and diced.</p></li>
			</ul>
			<ul>
				<li><p>2 cups water.</p></li>
			</ul>
			<ul>
				<li><p>2 carrots, chopped.</p></li>
			</ul>
			<ul>
				<li><p> 1 zucchini, diced.</p></li>
			</ul>
			<ul>
				<li><p> 1 clove garlic, minced.<p></li>
			</ul>
			<ul>
				<li><p>1/2 teaspoon chicken broth base.</p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe for chicken soup.-->

<!--Start recipe for rib eye steak.-->
<section id="page3.1.5" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/Ribeyesteak.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p> 2 tablespoons soy sauce.</p></li>
			</ul>
			<ul>
				<li><p> 2 tablespoons water.</p></li>
			</ul>
			<ul>
				<li><p> 1 tablespoon white sugar.</p></li>
			</ul>
			<ul>
				<li><p> 1 1/2 teaspoons Worcestershire sauce 1 1/4 teaspoons distilled white vinegar.</p></li>
			</ul>
			<ul>
				<li><p> 1 1/4 teaspoons distilled white vinegar.<p></li>
			</ul>
			<ul>
				<li><p> 1 teaspoon olive oil.</p></li>
			</ul>
			<ul>
				<li><p> 1/4 teaspoon onion powder.</p></li>
			</ul>
			<ul>
				<li><p> 1/4 teaspoon garlic powder.</p></li>
			</ul>
			<ul>
				<li><p> 1/8 teaspoon ground ginger.</p></li>
			</ul>
			<ul>
				<li><p> 2 (6 ounce) lean beef rib eye steaks.</p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe for rib eye steak.-->
<!--End of main dish recipes.-->

<!--Start of salad recipes.-->
<!--Start recipe for crane-berry spinache salad.-->
<section id="page4.1.1" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/craneberryspinachesalad.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p> 1 tablespoon butter.</p></li>
			</ul>
			<ul>
				<li><p> 3/4 cup almonds, blanched and slivered.</p></li>
			</ul>
			<ul>
				<li><p> 1 pound spinach, rinsed and torn into bite-size pieces.</p></li>
			</ul>
			<ul>
				<li><p> 1 cup dried cranberries.</p></li>
			</ul>
			<ul>
				<li><p> 2 tablespoons toasted sesame seeds.<p></li>
			</ul>
			<ul>
				<li><p> 1 tablespoon poppy seeds.</p></li>
			</ul>
			<ul>
				<li><p> 1/2 cup white sugar.</p></li>
			</ul>
			<ul>
				<li><p> 2 teaspoons minced onion.</p></li>
			</ul>
			<ul>
				<li><p> 1/4 teaspoon paprika.</p></li>
			</ul>
			<ul>
				<li><p> 1/4 cup white wine vinegar.</p></li>
			</ul>
			<ul>
				<li><p> 1/4 cup cider vinegar.</p></li>
			</ul>
			<ul>
				<li><p> 1/2 cup vegetable oil.</p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe for crane-berry spinache salad.-->

<!--Start recipe for Greek salad.-->
<section id="page4.1.2" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/greeksalad.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p> 3 large ripe tomatoes, chopped.</p></li>
			</ul>
			<ul>
				<li><p> 2 cucumbers, peeled and chopped.</p></li>
			</ul>
			<ul>
				<li><p> 1 small red onion, chopped.</p></li>
			</ul>
			<ul>
				<li><p> 1/4 cup olive oil.</p></li>
			</ul>
			<ul>
				<li><p> 4 teaspoons lemon juice.<p></li>
			</ul>
			<ul>
				<li><p> 1 1/2 teaspoons dried oregano.</p></li>
			</ul>
			<ul>
				<li><p> salt and pepper to taste.</p></li>
			</ul>
			<ul>
				<li><p> 1 cup crumbled feta cheese.</p></li>
			</ul>
			<ul>
				<li><p> 6 black Greek olives, pitted and sliced.</p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe for Greek salad.-->

<!--Start recipe for garden salad.-->
<section id="page4.1.3" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/gardensalad.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p> 150g baby rocket.</p></li>
			</ul>
			<ul>
				<li><p> 1 avocado, peeled, diced.</p></li>
			</ul>
			<ul>
				<li><p> 100g cherry tomatoes, halved.</p></li>
			</ul>
			<ul>
				<li><p> 1/3 cup (80ml) olive oil.</p></li>
			</ul>
			<ul>
				<li><p> 2 tablespoons balsamic vinegar.<p></li>
			</ul>
			<ul>
				<li><p>1 bunch of lettuce.<p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe for garden salad.-->

<!--Start recipe for Italian salad.-->
<section id="page4.1.4" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/italiansalad.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p> 1/2 cup canola oil.</p></li>
			</ul>
			<ul>
				<li><p> 1/3 cup tarragon vinegar.</p></li>
			</ul>
			<ul>
				<li><p> 1 tablespoon white sugar.</p></li>
			</ul>
			<ul>
				<li><p> 1 teaspoon chopped fresh thyme.</p></li>
			</ul>
			<ul>
				<li><p> 1/2 teaspoon dry mustard.<p></li>
			</ul>
			<ul>
				<li><p> 2 cloves garlic, minced.<p></li>
			</ul>
			</ul>
			<ul>
				<li><p> 1 (8 ounce) can artichoke hearts, drained and quartered.</p></li>
			</ul>
			<ul>
				<li><p> 5 cups romaine lettuce - rinsed, dried, and chopped.<p></li>
			</ul>
			<ul>
				<li><p> 1 red bell pepper, cut into strips.<p></li>
			</ul>
			<ul>
				<li><p> 1 carrot, grated.<p></li>
			</ul>
			<ul>
				<li><p> 1 carrot, grated.<p></li>
			</ul>
			<ul>
				<li><p> 1/4 cup black olives.<p></li>
			</ul>
			<ul>
				<li><p> 1/4 cup pitted green olives.<p></li>
			</ul>
			<ul>
				<li><p> 1/2 cucumber, sliced.<p></li>
			</ul>
			<ul>
				<li><p> 2 tablespoons grated Romano cheese.<p></li>
			</ul>
			<ul>
				<li><p> ground black pepper to taste.<p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe for Italian salad.-->


<!--Start recipe for potato salad.-->
<section id="page4.1.5" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/potatosalad.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p>3 medium baking potatoes, peeled.</p></li>
			</ul>
			<ul>
				<li><p>2 medium carrots, peeled.</p></li>
			</ul>
			<ul>
				<li><p>1 cup pineapple, diced.</p></li>
			</ul>
			<ul>
				<li><p>3/4 cups light mayonnaise.</p></li>
			</ul>
			<ul>
				<li><p>1/2 teaspoon garlic powder.<p></li>
			</ul>
			<ul>
				<li><p>1 teaspoon granulated white sugar.<p></li>
			</ul>
			<ul>
				<li><p>Salt and ground black pepper to taste.</p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe for potato salad.-->
<!--End of salad recipes.-->

<!--Start of pizza recipes.-->
<!--Start recipe for meat lovers pizza.-->
<section id="page5.1.1" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/meatloverspizza.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p> olive oil cooking spray.</p></li>
			</ul>
			<ul>
				<li><p> 2 lean beef sausages.</p></li>
			</ul>
			<ul>
				<li><p> 26cm frozen pizza base, thawed.</p></li>
			</ul>
			<ul>
				<li><p> 1/4 cup barbecue sauce.</p></li>
			</ul>
			<ul>
				<li><p> 1 small red onion, halved, thinly sliced.<p></li>
			</ul>
			<ul>
				<li><p> 50g 97% fat-free rindless bacon, chopped.<p></li>
			</ul>
			<ul>
				<li><p> 60g shaved pastrami, roughly chopped.</p></li>
			</ul>
			<ul>
				<li><p> 6 cherry tomatoes, quartered.<p></li>
			</ul>
			<ul>
				<li><p> 1/2 cup grated reduced-fat pizza cheese.</p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe for meat lovers pizza.-->

<!--Start recipe hawaiian pizza.-->
<section id="page5.1.2" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/hawaiianpizza.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p>1/2 cup (127g) pizza sauce, or more depending how much you lik.</p></li>
			</ul>
			<ul>
				<li><p>1 and 1/2 cups (6oz or 168g) shredded mozzarella chees.</p></li>
			</ul>
			<ul>
				<li><p>1/2 cup (75g) cooked ham or Canadian bacon, sliced or choppe.</p></li>
			</ul>
			<ul>
				<li><p>1/2 cup (82g) pineapple chunks (canned or fresh.</p></li>
			</ul>
			<ul>
				<li><p>3 slices bacon, cooked and crumble.<p></li>
			</ul>
			<ul>
				<li><p>1/2 recipe pizza crust 1.<p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe for hawaiian pizza.-->

<!--Start recipe americano pizza.-->
<section id="page5.1.3" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/americanopizza.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p>recipe Thin Crust Pizza Dough.</p></li>
			</ul>
			<ul>
				<li><p>cup pizza sauce.</p></li>
			</ul>
			<ul>
				<li><p>3 1/2 ounce package pizza-style Canadian-style bacon or thinly sliced, cooked turkey pepperoni.</p></li>
			</ul>
			<ul>
				<li><p>cups thinly sliced fresh mushrooms.</p></li>
			</ul>
			<ul>
				<li><p>cup shredded reduced-fat mozzarella and/or 4-cheese Italian blend cheese.<p></li>
			</ul>
			<ul>
				<li><p>tablespoons thinly sliced green onion.<p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe for americano pizza.-->

<!--Start recipe margarita pizza.-->
<section id="page5.1.4" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/margaritapizza.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p>300g strong bread flour.</p></li>
			</ul>
			<ul>
				<li><p>1 tsp instant yeast (from a sachet or a tub).</p></li>
			</ul>
			<ul>
				<li><p>1 tsp salt.</p></li>
			</ul>
			<ul>
				<li><p>1 tbsp olive oil, plus extra for drizzling.</p></li>
			</ul>
			<ul>
				<li><p>100ml passata.<p></li>
			</ul>
			<ul>
				<li><p>handful fresh basil or 1 tsp dried.<p></li>
			</ul>
			<ul>
				<li><p>1 garlic clove, crushed.<p></li>
			</ul>
			<ul>
				<li><p>125g ball mozzarella, sliced handful grated or shaved parmesan.<p></li>
			</ul>
			<ul>
				<li><p>handful cherry tomatoes, halved.<p></li>
			</ul>
			<ul>
				<li><p>handful basil leaves (optional).<p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe for margarita pizza.-->

<!--Start recipe supreme pizza.-->
<section id="page5.1.5" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/supremepizza.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p> 1 package (1/4 ounce) active dry yeast.</p></li>
			</ul>
			<ul>
				<li><p> 2 cups warm water (110° to 115°).</p></li>
			</ul>
			<ul>
				<li><p> 3 tablespoons vegetable oil.</p></li>
			</ul>
			<ul>
				<li><p> 1-1/2 teaspoons salt.</p></li>
			</ul>
			<ul>
				<li><p> 4 to 6 cups all-purpose flour.<p></li>
			</ul>
			<ul>
				<li><p> 2 cans (8 ounces each) tomato sauce.<p></li>
			</ul>
			<ul>
				<li><p> 1-1/2 teaspoons grated onion.<p></li>
			</ul>
			<ul>
				<li><p> 1 teaspoon dried oregano.<p></li>
			</ul>
			<ul>
				<li><p> 1/4 teaspoon salt.<p></li>
			</ul>
			<ul>
				<li><p> 4 cups (16 ounces) shredded part-skim mozzarella cheese.<p></li>
			</ul>
			<ul>
				<li><p> 4 ounces Canadian bacon, diced.<p></li>
			</ul>
			<ul>
				<li><p> 1 package (3-1/2 ounces) sliced pepperoni.<p></li>
			</ul>
			<ul>
				<li><p> 1 medium sweet red pepper, sliced.<p></li>
			</ul>
			<ul>
				<li><p> 1 medium green pepper, sliced.<p></li>
			</ul>
			<ul>
				<li><p> 1 can (2-1/4 ounces) sliced ripe olives, drained.<p></li>
			</ul>
			<ul>
				<li><p> 1 cup chopped onion.<p></li>
			</ul>
			<ul>
				<li><p> 1 cup grated Parmesan cheese.<p></li>
			</ul>
			<ul>
				<li><p> 1/2 cup minced fresh basil.<p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe for supreme pizza.-->
<!--End of pizza recipes.-->

<!--Start of dessert recipes.-->
<!--Start recipe of healthy sundae.-->
<section id="page6.1.1" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/healthysundae.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p> 4 oz Greek yogurt with Strawberry on the bottom (around 100 calories or less).</p></li>
			</ul>
			<ul>
				<li><p> 1 oz chopped nuts.</p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe of healthy sundae.-->

<!--Start recipe of strawberry smoothies.-->
<section id="page6.1.2" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/strawberrysmootthies.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p>3 strawberries.</p></li>
			</ul>
			<ul>
				<li><p>1 cup seedless watermelon.</p></li>
			</ul>
			<ul>
				<li><p>3 basil leaves.</p></li>
			</ul>
			<ul>
				<li><p>8 ounces coconut water.</p></li>
			</ul>
			<ul>
				<li><p>1 tsp. of lemon juice.</p></li>
			</ul>
			<ul>
				<li><p>1 tsp. of Agave syrup.</p></li>
			</ul>
			<ul>
				<li><p>1 cup ice.</p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe of strawberry smoothies.-->

<!--Start recipe of stewed quince dessert.-->
<section id="page6.1.3" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/stewedquincedessert.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p>3 quinces.</p></li>
			</ul>
			<ul>
				<li><p>3 tbsp grapeseed oil.</p></li>
			</ul>
			<ul>
				<li><p>1 tbsp rice flour, mixed with 50 ml of water.</p></li>
			</ul>
			<ul>
				<li><p>50g sucanat or brown sugar.</p></li>
			</ul>
			<ul>
				<li><p>½ tbsp cinnamon.</p></li>
			</ul>
			<ul>
				<li><p>1 tsp ground cloves.</p></li>
			</ul>
			<ul>
				<li><p>3 tbsp raisins.</p></li>
			</ul>
			<ul>
				<li><p>½ tsp vanilla extract.</p></li>
			</ul>
			<ul>
				<li><p>1 tsp rum extract.</p></li>
			</ul>
			<ul>
				<li><p>pinch of sea salt.</p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe of stewed quince dessert.-->

<!--Start recipe of mango dessert.-->
<section id="page6.1.4" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/mangodessert.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p>1 mango half lemon lemon balsamic vinegar sauce grapes, lemon slices and mint leaves for garnish.</p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe of mango dessert dessert.-->

<!--Start recipe of mango ice cream dessert.-->
<section id="page6.1.5" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/mangoicecream.PNG" height="400" width="270"
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p>1/2 plus 1/4 cup granulated sugar.</p></li>
			</ul>
			<ul>
				<li><p>2 cups fresh mango pieces.</p></li>
			</ul>
			<ul>
				<li><p>2 tablespoons fresh lime juice.</p></li>
			</ul>
			<ul>
				<li><p>eggs.</p></li>
			</ul>
			<ul>
				<li><p>1/2 cup coconut milk.</p></li>
			</ul>
			<ul>
				<li><p>2 1/2 cups half and half.</p></li>
			</ul>
			<ul>
				<li><p>2 - 3 tablespoons of toasted coconut as garnish (optional).</p></li>
			</ul>
			<ul>
				<li><p>Handful of mint sprigs as garnish.</p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe of mango ice cream dessert.-->
<!--End of dessert recipes.-->

<!--Start of drinks recipes.-->
<!--Start recipe of bloddy mary drink.-->
<section id="page7.1.1" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/bloddymarydrink.PNG" height="400" width="270" 
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p>2 parts Grey Goose vodka.</p></li>
			</ul>
			<ul>
				<li><p>4 parts organic tomato juice.</p></li>
			</ul>
			<ul>
				<li><p>½ part fresh lemon juice.</p></li>
			</ul>
			<ul>
				<li><p>4 dashes of Worcestershire sauce.</p></li>
			</ul>
			<ul>
				<li><p>4 dashes of Tabasco (or hot pepper sauce).</p></li>
			</ul>
			<ul>
				<li><p>Pinch of fleur de sel (or sea salt).</p></li>
			</ul>
			<ul>
				<li><p>Pinch of black pepper.</p></li>
			</ul>
			<ul>
				<li><p>Some cubed ice.</p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe of bloddy mary drink.-->

<!--Start recipe of vodka drink.-->
<section id="page7.1.2" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/vodka.PNG" height="400" width="270" 
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p> 250ml vodka.</p></li>
			</ul>
			<ul>
				<li><p> 1L guava juice.</p></li>
			</ul>
			<ul>
				<li><p> 1L dry ginger ale.</p></li>
			</ul>
			<ul>
				<li><p> 2 tablespoons lime.</p></li>
			</ul>
			<ul>
				<li><p> Angostura bitters.</p></li>
			</ul>
			<ul>
				<li><p> 1/4 cup whole mint leaves.</p></li>
			</ul>
			<ul>
				<li><p> ice cubes to .</p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe of vodka drink.-->


<!--Start recipe of sangria drink.-->
<section id="page7.1.3" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/sangria.PNG" height="400" width="270" 
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p>1 cup cherries, pitted and halved.</p></li>
			</ul>
			<ul>
				<li><p>1 cup blueberries.</p></li>
			</ul>
			<ul>
				<li><p>1 cup raspberries.</p></li>
			</ul>
			<ul>
				<li><p>1 cup quartered small strawberries.</p></li>
			</ul>
			<ul>
				<li><p>1/2 cup chopped nectarine (about 1).</p></li>
			</ul>
			<ul>
				<li><p>1/3 cup brandy.</p></li>
			</ul>
			<ul>
				<li><p>1 cup apricot nectar, chilled.</p></li>
			</ul>
			<ul>
				<li><p>1 (750-milliliter) bottle cava, chilled.</p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe of sangria drink.-->

<!--Start recipe of vodka drink.-->
<section id="page7.1.4" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/ginmartini.PNG" height="400" width="270" 
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p>2 ounces dry gin.</p></li>
			</ul>
			<ul>
				<li><p>1 ounce dry vermouth.</p></li>
			</ul>
			<ul>
				<li><p>Ice.</p></li>
			</ul>
			<ul>
				<li><p>Olives or a twist of lemon, for garnish.</p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe of vodka drink.-->


<!--Start recipe of virgin cocumber mojito drink.-->
<section id="page7.1.5" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
	<div data-role="ui-content" class="ui-content">
		<nav data-role="navbar" class="bar-b button">	
			<ul>
				<li><img src="img/virgincocumbermojito.PNG" height="400" width="270" 
					style="width:100%;">
				</li>
			</ul>
			<ul>
				<li><p>1 individual packet Mojito-flavored dry beverage mix.</p></li>
			</ul>
			<ul>
				<li><p> 1 cups cold water.</p></li>
			</ul>
			<ul>
				<li><p> 1 cucumber, peeled and sliced.</p></li>
			</ul>
			<ul>
				<li><p> 3 cups ice cubes.</p></li>
			</ul>
		</nav>
	</div>
	<footer data-role="ui-footer">
	</footer>
</section>
<!--End recipe of virgin cocumber mojito drink.-->
<!--End of drinks recipes.-->

<!--Start order option for appettizers--->
<!--Start order option for Artichoke Bruschetta.-->
<section id="page2.1.1.1" data-role="page"><!---->
	<header data-role="header"><!---->
		<h1 style="text-align:center">Restaurant</h1><!---->
	</header><!---->
		<div data-role="ui-content" class="ui-content"><!---->
			<nav data-role="navbar" class="bar-b button">	<!---->
				<form id="myform" action="formprocessor.php" method="post"><!---->
					<div data-role="fieldcontain"><!---->
                    	<label for="choice">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3><!---->
						<label for="How-many">How many serving?</label><br><!---->
							<select id="select-quantity1" name="select-quantity1"><!---->
								<option value="">1</option><!---->
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
								<option value="">5</option>
								<option value="">6</option>
								<option value="">7</option>
								<option value="">8</option>
								<option value="">9</option>
								<option value="">10</option>
						</select>
						<br><br>
						<label for="How-many">Select Your Size:</label><br><!---->
						<select id="select-size1" name="select-size1"><!---->
								<option value="">Small $8</option><!---->
								<option value="">Large $12</option>
					</select>
					</div>
					<a><span><img src="img/shopping-cart.png" width="" height=""> Add</span></a><!---->
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a><!---->
                   <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br><!---->
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option Artichoke Bruschetta.-->	

<!--Start order option for Garlic Bread.-->
<section id="page2.1.1.2" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action="formprocessor.php" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="How-many">How many serving?</label><br>
							<select id="select-quantity1" name="select-quantity1">
								<option value="">1</option>
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
								<option value="">5</option>
								<option value="">6</option>
								<option value="">7</option>
								<option value="">8</option>
								<option value="">9</option>
								<option value="">10</option>
						</select>
						<br><br>
						<label for="How-many">Select Your Size:</label><br>
						<select id="select-size1" name="select-size1">
								<option value="">regular $5</option>
								<option value="">Large $10</option>
					</select>
					</div>
					<a><span><img src="img/shopping-cart.png" width="" height=""> Add</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                   <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option Garlic Bread.-->

<!--Start order option for Rumaki with Pineapple.-->
<section id="page2.1.1.3" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action="formprocessor.php" method="post">
					<div data-role="fieldcontain">
                    	<label for="">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="How-many">How many serving?</label><br>
							<select id="select-quantity1" name="select-quantity1">
								<option value="">1</option>
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
								<option value="">5</option>
								<option value="">6</option>
								<option value="">7</option>
								<option value="">8</option>
								<option value="">9</option>
								<option value="">10</option>
						</select>
						<br><br>
						<label for="How-many">Select Your Size:</label><br>
						<select id="select-size1" name="select-size1">
								<option value="">Small $8</option>
                                <option value="">Regular $10</option>
								<option value="">Large $12</option>
					</select>
					</div>
					<a><span><img src="img/shopping-cart.png" width="" height=""> Add</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                   <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option Rumaki with Pineapple.-->

<!--Start order option for Chicken Wings..-->
<section id="page2.1.1.4" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action="formprocessor.php" method="post">
					<div data-role="fieldcontain">
                    	<label for="">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="How-many">How many serving?</label><br>
							<select id="select-quantity1" name="select-quantity1">
								<option value="">1</option>
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
								<option value="">5</option>
								<option value="">6</option>
								<option value="">7</option>
								<option value="">8</option>
								<option value="">9</option>
								<option value="">10</option>
						</select>
						<br><br>
						<label for="How-many">Select Your Size:</label><br>
						<select id="select-size1" name="select-size1">
								<option value="">Small $8</option>
                                <option value="">Regular $11</option>
								<option value="">Large $14</option>
					</select>
					</div>
					<a><span><img src="img/shopping-cart.png" width="" height=""> Add</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                   <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option Chicken Wings.-->

<!--Start order option for Vegetable Samosa..-->
<section id="page2.1.1.4" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action="formprocessor.php" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="How-many">How many serving?</label><br>
							<select id="select-quantity1" name="select-quantity1">
								<option value="">1</option>
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
								<option value="">5</option>
								<option value="">6</option>
								<option value="">7</option>
								<option value="">8</option>
								<option value="">9</option>
								<option value="">10</option>
						</select>
						<br><br>
						<label for="How-many">Select Your Size:</label><br>
						<select id="select-size1" name="select-size1">
                                <option value="">Regular $6</option>
								<option value="">Large $10</option>
					</select>
					</div>
					<a><span><img src="img/shopping-cart.png" width="" height=""> Add</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                    <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option Vegetable Samosa.-->

<!--Start order option for Vegetable Samosa..-->
<section id="page2.1.1.5" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action="formprocessor.php" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="How-many">How many serving?</label><br>
							<select id="select-quantity1" name="select-quantity1">
								<option value="">1</option>
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
								<option value="">5</option>
								<option value="">6</option>
								<option value="">7</option>
								<option value="">8</option>
								<option value="">9</option>
								<option value="">10</option>
						</select>
						<br><br>
						<label for="How-many">Select Your Size:</label><br>
						<select id="select-size1" name="select-size1">
                                <option value="">Regular $6</option>
								<option value="">Large $10</option>
					</select>
					</div>
					<a><span><img src="img/shopping-cart.png" width="" height=""> Add</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                   <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option Vegetable Samosa.-->

<!--Start order option for Seafood Mussels.-->
<section id="page2.1.1.6" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action="formprocessor.php" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="How-many">How many serving?</label><br>
							<select id="select-quantity1" name="select-quantity1">
								<option value="">1</option>
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
								<option value="">5</option>
								<option value="">6</option>
								<option value="">7</option>
								<option value="">8</option>
								<option value="">9</option>
								<option value="">10</option>
						</select>
						<br><br>
						<label for="How-many">Select Your Size:</label><br>
						<select id="select-size1" name="select-size1">
                                <option value="">Regular $10</option>
								<option value="">Large $14</option>
					</select>
					</div>
					<a><span><img src="img/shopping-cart.png" width="" height=""> Add</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                   <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option Seafood Mussels.-->

<!--Start order option for Prawn Saganaki.-->
<section id="page2.1.1.7" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action="formprocessor.php" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="How-many">How many serving?</label><br>
							<select id="select-quantity1" name="select-quantity1">
								<option value="">1</option>
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
								<option value="">5</option>
								<option value="">6</option>
								<option value="">7</option>
								<option value="">8</option>
								<option value="">9</option>
								<option value="">10</option>
						</select>
						<br><br>
						<label for="How-many">Select Your Size:</label><br>
						<select id="select-size1" name="select-size1">
                                <option value="">Regular $7</option>
								<option value="">Large $12</option>
					</select>
					</div>
					<a><span><img src="img/shopping-cart.png" width="" height=""> Add</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                    <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option Prawn Saganaki.-->
<!--End order option for appettizers--->

<!--Start order option for main dishes--->
<!--Start order option for Best Lasagna.-->
<section id="pagemaindish1" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action="formprocessor.php" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="How-many">How many serving?</label><br>
							<select id="select-quantity1" name="select-quantity1">
								<option value="">1</option>
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
								<option value="">5</option>
								<option value="">6</option>
								<option value="">7</option>
								<option value="">8</option>
								<option value="">9</option>
								<option value="">10</option>
						</select>
						<br><br>
						<label for="How-many">Select Your Size:</label><br>
						<select id="select-size1" name="select-size1">
                                <option value="">Regular $11</option>
								<option value="">Large $15</option>
					</select>
					</div>
					<a><span><img src="img/shopping-cart.png" width="" height=""> Add</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                    <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for Best Lasagna.-->

<!--Start order option for bbq ribs.-->
<section id="pagemaindish2" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action="formprocessor.php" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="How-many">How many serving?</label><br>
							<select id="select-quantity1" name="select-quantity1">
								<option value="">1</option>
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
								<option value="">5</option>
								<option value="">6</option>
								<option value="">7</option>
								<option value="">8</option>
								<option value="">9</option>
								<option value="">10</option>
						</select>
						<br><br>
						<label for="How-many">Select Your Size:</label><br>
						<select id="select-size1" name="select-size1">
                                <option value="">Regular $18</option>
								<option value="">Large $25</option>
					</select>
					</div>
					<a><span><img src="img/shopping-cart.png" width="" height=""> Add</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                   <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for bbq ribs.-->

<!--Start order option for Shrimp Verde.-->
<section id="pagemaindish3" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action="formprocessor.php" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="How-many">How many serving?</label><br>
							<select id="select-quantity1" name="select-quantity1">
								<option value="">1</option>
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
								<option value="">5</option>
								<option value="">6</option>
								<option value="">7</option>
								<option value="">8</option>
								<option value="">9</option>
								<option value="">10</option>
						</select>
						<br><br>
						<label for="How-many">Select Your Size:</label><br>
						<select id="select-size1" name="select-size1">
                                <option value="">Regular $15</option>
								<option value="">Large $20</option>
					</select>
					</div>
					<a><span><img src="img/shopping-cart.png" width="" height=""> Add</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                   <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for Shrimp Verde.-->

<!--Start order option for Chicken Soup.-->
<section id="pagemaindish4" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action="formprocessor.php" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="How-many">How many serving?</label><br>
							<select id="select-quantity1" name="select-quantity1">
								<option value="">1</option>
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
								<option value="">5</option>
								<option value="">6</option>
								<option value="">7</option>
								<option value="">8</option>
								<option value="">9</option>
								<option value="">10</option>
						</select>
						<br><br>
						<label for="How-many">Select Your Size:</label><br>
						<select id="select-size1" name="select-size1">
                                <option value="">Regular $11</option>
								<option value="">Large $14</option>
					</select>
					</div>
					<a><span><img src="img/shopping-cart.png" width="" height=""> Add</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                   <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for Chicken Soup.-->

<!--Start order option for Rib-eye steak.-->
<section id="pagemaindish5" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action="formprocessor.php" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="How-many">How many serving?</label><br>
							<select id="select-quantity1" name="select-quantity1">
								<option value="">1</option>
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
								<option value="">5</option>
								<option value="">6</option>
								<option value="">7</option>
								<option value="">8</option>
								<option value="">9</option>
								<option value="">10</option>
						</select>
						<br><br>
						<label for="How-many">Select Your Size:</label><br>
						<select id="select-size1" name="select-size1">
                                <option value="">Regular $20</option>
								<option value="">Large $30</option>
					</select>
					</div>
					<a><span><img src="img/shopping-cart.png" width="" height=""> Add</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                   <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for Rib-eye steak.-->
<!--End order option for main dishes--->

<!--Start order option for Salad.--->
<!--Start order option for Crane-berry spinache salad.-->
<section id="pagesalad1" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action="formprocessor.php" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="How-many">How many serving?</label><br>
							<select id="select-quantity1" name="select-quantity1">
								<option value="">1</option>
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
								<option value="">5</option>
								<option value="">6</option>
								<option value="">7</option>
								<option value="">8</option>
								<option value="">9</option>
								<option value="">10</option>
						</select>
						<br><br>
						<label for="How-many">Select Your Size:</label><br>
						<select id="select-size1" name="select-size1">
                                <option value="">Regular $8</option>
								<option value="">Large $10</option>
					</select>
					</div>
					<a><span><img src="img/shopping-cart.png" width="" height=""> Add</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                   <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for Crane-berry spinache salad.-->

<!--Start order option for Greek salads.-->
<section id="pagesalad2" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action="formprocessor.php" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="How-many">How many serving?</label><br>
							<select id="select-quantity1" name="select-quantity1">
								<option value="">1</option>
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
								<option value="">5</option>
								<option value="">6</option>
								<option value="">7</option>
								<option value="">8</option>
								<option value="">9</option>
								<option value="">10</option>
						</select>
						<br><br>
						<label for="How-many">Select Your Size:</label><br>
						<select id="select-size1" name="select-size1">
                                <option value="">Regular $8</option>
								<option value="">Large $10</option>
					</select>
					</div>
					<a><span><img src="img/shopping-cart.png" width="" height=""> Add</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                    <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for Greek salad.-->

<!--Start order option for Garden salad.-->
<section id="pagesalad3" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				<form id="myform" action="formprocessor.php" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="How-many">How many serving?</label><br>
							<select id="select-quantity1" name="select-quantity1">
								<option value="">1</option>
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
								<option value="">5</option>
								<option value="">6</option>
								<option value="">7</option>
								<option value="">8</option>
								<option value="">9</option>
								<option value="">10</option>
						</select>
						<br><br>
						<label for="How-many">Select Your Size:</label><br>
						<select id="select-size1" name="select-size1">
                                <option value="">Regular $8</option>
								<option value="">Large $10</option>
					</select>
					</div>
					<a><span><img src="img/shopping-cart.png" width="" height=""> Add</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                    <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for Garden salad.-->

<!--Start order option for Spicy Italian salad.-->
<section id="pagesalad4" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action"" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice-italiansalad">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="How-many-italiansalad">How many serving?</label><br>
							<select id="select-quantity-italiansalad4" name="select-quantity-italiansalad">
                            	<option value="qs-italiansalad">Select</option>
								<option value="1-italiansalad">1</option>
								<option value="2-italiansalad">2</option>
								<option value="3-italiansalad">3</option>
								<option value="4-italiansalad">4</option>
								<option value="5-italiansalad">5</option>
								<option value="6-italiansalad">6</option>
								<option value="7-italiansalad">7</option>
								<option value="8-italiansalad">8</option>
								<option value="9-italiansalad">9</option>
								<option value="10-italiansalad">10</option>
						</select>
						<br><br>
						<label for="How-many-italiansalad">Select Your Size:</label><br>
						<select id="select-size1" name="select-size-italiansalad">
                                <option value="r-italiansalad">Regular $8</option>
								<option value="l-italiansalad">Large $10</option>
						</select><br><br><br>
                    	<label for="italiansalad4">Take Away or Dine In?</label><br>
						<select id="takeaway-dinein-italiansalad4" name="takeaway-dinein-italiansalad">
                        		<option value="SL-italiansalad">Select</option>
								<option value="T-italiansalad">Takeaway (Serve on plastic container)</option>
								<option value="D-italiansalad">Dine in(Serve on a plate)</option>
						</select><br><br>
					</div>
					<a><span><img src="img/shopping-cart.png" width="20" height="20"> Add to Cart</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                    <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for Spicy Italian salad.-->

<!--Start order option for Potato salad.-->
<section id="pagesalad5" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action"" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice-potatosalad">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="How-many-potatosalad">How many serving?</label><br>
							<select id="select-quantity-potatosalad5" name="select-quantity-potatosalad">
                            	<option value="qs-potatosalad">Select</option>
								<option value="1-potatosalad">1</option>
								<option value="2-potatosalad">2</option>
								<option value="3-potatosalad">3</option>
								<option value="4-potatosalad">4</option>
								<option value="5-potatosalad">5</option>
								<option value="6-potatosalad">6</option>
								<option value="7-potatosalad">7</option>
								<option value="8-potatosalad">8</option>
								<option value="9-potatosalad">9</option>
								<option value="10-potatosalad">10</option>
						</select>
						<br><br>
						<label for="How-many-potatosalad">Select Your Size:</label><br>
						<select id="select-size1" name="select-size1">
                                <option value="r-potatosalad">Regular $8</option>
								<option value="l-potatosalad">Large $10</option>
						</select><br><br><br>
                    	<label for="potatosalad5">Take Away or Dine In?</label><br>
						<select id="takeaway-dinein-potatosalad5" name="takeaway-dinein-potatosalad">
                        		<option value="SL-potatosalad">Select</option>
								<option value="T-potatosalad">Takeaway (Serve on plastic container)</option>
								<option value="D-potatosalad">Dine in(Serve on a plate)</option>
						</select><br><br>
					</div>
					<a><span><img src="img/shopping-cart.png" width="20" height="20"> Add to Cart</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                   <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for Potato salad.-->
<!--End order option for Salad.--->

<!--Start order option for Pizza.--->
<!--Start order option for Meat Lovers.-->
<section id="pagepizza1" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action="" method="post">
					<div data-role="fieldcontain">
                      	<label for="choice-meatlovers">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="How-many-meatlovers1">How many serving?</label><br>
							<select id="select-quantity-meatlovers1" name="select-quantity-meatlovers">
								<option value="1-meatlovers">1</option>
								<option value="2-meatlovers">2</option>
								<option value="3-meatlovers">3</option>
								<option value="4-meatlovers">4</option>
								<option value="5-meatlovers">5</option>
								<option value="6-meatlovers">6</option>
								<option value="7-meatlovers">7</option>
								<option value="8-meatlovers">8</option>
								<option value="9-meatlovers">9</option>
								<option value="10-meatlovers">10</option>
						</select>
						<br><br>
						<select id="select-size-meatlovers1" name="select-size-meatlovers">
                                <option value="r-meatlovers">Regular Only For $12</option>
						</select><br><br><br>
                        <label for="crust-meatlovers">Select Pizza Crust</label><br>
						<select id="select-pizzabase-meatlovers1" name="select-pizzabase-meatlovers">
                       			<option value="s-meatlovers">Select</option>
								<option value="thin-meatlovers">Thin Base</option>
								<option value="thick-meatlovers">Thick Base</option>
						</select>
					</div>
					<a><span><img src="img/shopping-cart.png" width="20" height="20"> Add to Cart</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                    <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for Meat Lovers.-->

<!--Start order option for Haiwaiian.-->
<section id="pagepizza2" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
					<form id="myform" action="" method="post">
					<div data-role="fieldcontain">
                      	<label for="choice-haiwaiian">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="How-many-haiwaiian2">How many serving?</label><br>
							<select id="select-quantity-haiwaiian2" name="select-quantity-haiwaiian">
								<option value="1-haiwaiian">1</option>
								<option value="2-haiwaiian">2</option>
								<option value="3-haiwaiian">3</option>
								<option value="4-haiwaiian">4</option>
								<option value="5-haiwaiian">5</option>
								<option value="6-haiwaiian">6</option>
								<option value="7-haiwaiian">7</option>
								<option value="8-haiwaiian">8</option>
								<option value="9-haiwaiian">9</option>
								<option value="10-haiwaiian">10</option>
						</select>
						<br><br>
						<select id="select-size-haiwaiian2" name="select-size-haiwaiian">
                                <option value="r-haiwaiian">Regular Only For $12</option>
						</select><br><br><br>
                        <label for="crust-haiwaiian">Select Pizza Crust</label><br>
						<select id="select-pizzabase-haiwaiian2" name="select-pizzabase-haiwaiian">
                       			<option value="s-haiwaiian">Select</option>
								<option value="thin-haiwaiian">Thin Base</option>
								<option value="thick-haiwaiian">Thick Base</option>
						</select>
					</div>
					<a><span><img src="img/shopping-cart.png" width="20" height="20"> Add to Cart</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                   <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for Haiwaiian.-->

<!--Start order option for Americano.-->
<section id="pagepizza3" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action="" method="post">
					<div data-role="fieldcontain">
                      	<label for="choice-americano">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="How-many-americano3">How many serving?</label><br>
							<select id="select-quantity-americano3" name="select-quantity-americano">
								<option value="1-americano">1</option>
								<option value="2-americano">2</option>
								<option value="3-americano">3</option>
								<option value="4-americano">4</option>
								<option value="5-americano">5</option>
								<option value="6-americano">6</option>
								<option value="7-americano">7</option>
								<option value="8-americano">8</option>
								<option value="9-americano">9</option>
								<option value="10-americano">10</option>
						</select>
						<br><br>
						<select id="select-size-americano3" name="select-size-americano">
                                <option value="r-americano">Regular Only For $12</option>
						</select><br><br><br>
                        <label for="crust-americano">Select Pizza Crust</label><br>
						<select id="select-pizzabase-americano3" name="select-pizzabase-americano">
                       			<option value="s-americano">Select</option>
								<option value="thin-americano">Thin Base</option>
								<option value="thick-americano">Thick Base</option>
						</select>
					</div>
					<a><span><img src="img/shopping-cart.png" width="20" height="20"> Add to Cart</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                    <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for  Americano.-->

<!--Start order option for  Margarita.-->
<section id="pagepizza4" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action="formprocessor.php" method="post">
					<div data-role="fieldcontain">
                    	   	<label for="choice-Margarita">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="How-many-Margarita">How many serving?</label><br>
							<select id="select-quantity-Margarita4" name="select-quantity-Margarita">
								<option value="1-Margarita">1</option>
								<option value="2-Margarita">2</option>
								<option value="3-Margarita">3</option>
								<option value="4-Margarita">4</option>
								<option value="5-Margarita">5</option>
								<option value="6-Margarita">6</option>
								<option value="7-Margarita">7</option>
								<option value="8-Margarita">8</option>
								<option value="9-Margarita">9</option>
								<option value="10-Margarita">10</option>
						</select>
						<br><br>
						<select id="select-size-Margarita4" name="select-size-Margarita">
                                <option value="r-Margarita">Regular Only For $12</option>
						</select><br><br><br>
                        <label for="crust-Margarita">Select Pizza Crust</label><br>
						<select id="select-pizzabase-Margarita4" name="select-pizzabase-Margarita">
                       			<option value="s-Margaritame">Select</option>
								<option value="thin-Margarita">Thin Base</option>
								<option value="thick-Margarita">Thick Base</option>
						</select>
					</div>
					<a><span><img src="img/shopping-cart.png" width="20" height="20"> Add to Cart</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                    <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for Margarita.-->

<!--Start order option for Supreme.-->
<section id="pagepizza5" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action="" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice-supreme">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="How-many-supreme">How many serving?</label><br>
							<select id="select-quantity-supreme5" name="select-quantity-supreme">
								<option value="1-supreme">1</option>
								<option value="2-supreme">2</option>
								<option value="3-supreme">3</option>
								<option value="4-supreme">4</option>
								<option value="5-supreme">5</option>
								<option value="6-supreme">6</option>
								<option value="7-supreme">7</option>
								<option value="8-supreme">8</option>
								<option value="9-supreme">9</option>
								<option value="10-supreme">10</option>
						</select>
						<br><br>
						<select id="select-size-supreme5" name="select-size-supreme">
                                <option value="r-supreme">Regular Only For $12</option>
						</select><br><br><br>
                        <label for="crust-supreme">Select Pizza Crust</label><br>
						<select id="select-pizzabase-supreme5" name="select-pizzabase-supreme">
                       			<option value="s-supreme">Select</option>
								<option value="thin-supreme">Thin Base</option>
								<option value="thick-supreme">Thick Base</option>
						</select>
					</div>
					<a><span><img src="img/shopping-cart.png" width="20" height="20"> Add to Cart</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                    <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for Supreme.-->
<!--End order option for Pizza.--->

<!--Start order option for Dessert.--->
<!--Start order option for  Healthy sundae dessert.-->
<section id="pagedessert1" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action="" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice-sundae">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="serving-sundae1">How many serving?</label><br>
							<select id="select-quantity-sundae" name="select-quantity-sundae1">
                            	<option value="QuantityS-sundae">Select</option>
								<option value="1-sundae">1</option>
								<option value="2-sundae">2</option>
								<option value="3-sundae">3</option>
								<option value="4-sundae">4</option>
								<option value="5-sundae">5</option>
								<option value="6-sundae">6</option>
								<option value="7-sundae">7</option>
								<option value="8-sundae">8</option>
								<option value="9-sundae">9</option>
								<option value="10-sundae">10</option>
						</select>
						<br><br>
                        <label for="size-sundae">Select size</label><br>
						<select id="select-size-sundae1" name="select-size-sundae1">
                                <option value="R-sundae">Regular $6</option>
                                <option value="L-sundae">large $10</option>
						</select><br><br><br>
                            <label for="toppings-sundae">Toppings</label><br>
						<select id="toppings-sundae1" name="toppings-sundae1">
                        		<option value="topS-sundae">Select</option>
								<option value="topno-sundae">No Toppings</option>
								<option value="topw-sundae">With Toppings</option>
						</select><br><br><br>
                        <label for="sundae1">Take Away or Dine In?</label><br>
						<select id="takeaway-dinein-sundae1" name="takeaway-dinein-sundae">
                        		<option value="SL-sundae">Select</option>
								<option value="T-sundae">Takeaway (Serve on plastic cup)</option>
								<option value="D-sundae">Dine in(Serve on a glass/bowl)</option>
						</select><br><br>
                        <p style="color:#F80307">Remind to all customer/s that Desserts will be prepared once 
                        you present your receipt 
                        to the store to avoid wastage and cancel orders.</p>
					</div>
					<a><span><img src="img/shopping-cart.png" width="20" height="20"> Add to Cart</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                    <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for  Healthy sundae dessert.-->

<!--Start order option for Strawberry smoothies.-->
<section id="pagedessert2" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action="" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice-strawberry">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="serving-strawberry2">How many serving?</label><br>
							<select id="select-quantity-strawberry" name="select-quantity-strawberry2">
                            	<option value="QuantityS-strawberry">Select</option>
								<option value="1-strawberry">1</option>
								<option value="2-strawberry">2</option>
								<option value="3-strawberry">3</option>
								<option value="4-strawberry">4</option>
								<option value="5-strawberry">5</option>
								<option value="6-strawberry">6</option>
								<option value="7-strawberry">7</option>
								<option value="8-strawberry">8</option>
								<option value="9-strawberry">9</option>
								<option value="10-strawberry">10</option>
						</select>
						<br><br>
                        <label for="size-strawberry">Select size</label><br>
						<select id="select-size-strawberry2" name="select-size-strawberry2">
                                <option value="R-strawberry">Regular $6</option>
                                <option value="L-strawberry">large $10</option>
						</select><br><br><br>
                            <label for="toppings-strawberry">Toppings</label><br>
						<select id="toppings-strawberry2" name="toppings-steweddessert2">
                        		<option value="topS-strawberry">Select</option>
								<option value="topno-strawberry">No Toppings</option>
								<option value="topw-strawberry">With Toppings</option>
						</select><br><br><br>
                        <label for="strawberry2">Take Away or Dine In?</label><br>
						<select id="takeaway-dinein-strawberry2" name="takeaway-dinein-strawberry">
                        		<option value="SL-strawberry">Select</option>
								<option value="T-strawberry">Takeaway (Serve on plastic cup)</option>
								<option value="D-strawberry">Dine in(Serve on a glass/bowl)</option>
						</select><br><br>
                        <p style="color:#F80307">Remind to all customer/s that Desserts will be prepared 
                        once you present your receipt 
                        to the store to avoid wastage and cancel orders.</p>
					</div>
					<a><span><img src="img/shopping-cart.png" width="20" height="20"> Add to Cart</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                    <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for Strawberry smoothies.-->

<!--Start order option for Stewed quince dessert.-->
<section id="pagedessert3" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action="" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice-steweddessert">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="serving-steweddessert3">How many serving?</label><br>
							<select id="select-quantity-steweddessert3" name="select-quantity-steweddessert3">
                            	<option value="QuantityS-steweddessert">Select</option>
								<option value="1-steweddessert">1</option>
								<option value="2-steweddessert">2</option>
								<option value="3-steweddessert">3</option>
								<option value="4-steweddessert">4</option>
								<option value="5-steweddessert">5</option>
								<option value="6-steweddessert">6</option>
								<option value="7-steweddessert">7</option>
								<option value="8-steweddessert">8</option>
								<option value="9-steweddessert">9</option>
								<option value="10-steweddessert">10</option>
						</select>
						<br><br>
                        <label for="size-steweddessert">Select size</label><br>
						<select id="select-size-steweddessert3" name="select-size-steweddessert3">
                                <option value="R-steweddessert">Regular $7</option>
                                <option value="L-steweddessert">large $10</option>
						</select><br><br><br>
                            <label for="toppings-steweddessert">Toppings</label><br>
						<select id="toppings-steweddessert3" name="toppings-steweddessert3">
                        		<option value="topS-steweddessert">Select</option>
								<option value="topno-steweddessert">No Toppings</option>
								<option value="topw-steweddessert">With Toppings</option>
						</select><br><br><br>
                        <label for="takeaway3">Take Away or Dine In?</label><br>
						<select id="takeaway-dinein-steweddessert3" name="takeaway-dinein-steweddessert">
                        		<option value="SL-steweddessert">Select</option>
								<option value="T-steweddessert">Takeaway (Serve on plastic cup)</option>
								<option value="D- steweddessert">Dine in(Serve on a glass/bowl)</option>
						</select><br><br>
                        <p style="color:#F80307">Remind to all customer/s that Desserts will be prepared 
                        once you present your receipt 
                        to the store to avoid wastage and cancel orders.</p>
					</div>
					<a><span><img src="img/shopping-cart.png" width="20" height="20"> Add to Cart</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                    <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for  Stewed quince dessert.-->

<!--Start order option for Mango dessert.-->
<section id="pagedessert4" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				
				<form id="myform" action="" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice-mango">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
							<label for="serving-mango4">How many serving?</label><br>
							<select id="select-quantity-mango4" name="select-quantity-mango4">
                            	<option value="QuantityS-mango">Select</option>
								<option value="1-mango">1</option>
								<option value="2-mango">2</option>
								<option value="3-mango">3</option>
								<option value="4-mango">4</option>
								<option value="5-mango">5</option>
								<option value="6-mango">6</option>
								<option value="7-mango">7</option>
								<option value="8-mango">8</option>
								<option value="9-mango">9</option>
								<option value="10-mango">10</option>
						</select>
						<br><br>
                        <label for="size-micecream">Select size</label><br>
						<select id="select-size-mango4" name="select-size-mango4">
                                <option value="R-mango">Regular $5</option>
                                <option value="L-mango">large $8</option>
						</select><br><br><br>
                            <label for="toppings-mango">Toppings</label><br>
						<select id="toppings-mango5" name="toppings-mango5">
                        		<option value="topS-mango">Select</option>
								<option value="topno-mango">No Toppings</option>
								<option value="topw-mango">With Toppings</option>
						</select><br><br><br>
                        <label for="takeaway4">Take Away or Dine In?</label><br>
						<select id="takeaway-dinein-mango4" name="takeaway-dinein-mango">
                        		<option value="SL-mango">Select</option>
								<option value="T-mango">Takeaway (Serve on plastic cup)</option>
								<option value="D-mango">Dine in(Serve on a glass/bowl)</option>
						</select><br><br>
                        <p style="color:#F80307">Remind to all customer/s that Desserts will be prepared 
                        once you present your receipt 
                        to the store to avoid wastage and cancel orders.</p>
					</div>
					<a><span><img src="img/shopping-cart.png" width="" height=""> Add to Cart</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                    <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>
				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for fresh Mango dessert.-->

<!--Start order option for Mango ice cream dessert.-->
<section id="pagedessert5" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				<form id="myform" action="" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice-micecream">Your food choice:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="serving-micecream5">How many serving?</label><br>
							<select id="select-quantity-micecream5" name="select-quantity-micecream5">
                            	<option value="QuantityS-micecream">Select</option>
								<option value="1-micecream">1</option>
								<option value="2-micecream">2</option>
								<option value="3-micecream">3</option>
								<option value="4-micecream">4</option>
								<option value="5-micecream">5</option>
								<option value="6-micecream">6</option>
								<option value="7-micecream">7</option>
								<option value="8-micecream">8</option>
								<option value="9-micecream">9</option>
								<option value="10-micecream">10</option>
						</select>
						<br><br>
                        <label for="size-micecream">Select size</label><br>
						<select id="select-size-micecream5" name="select-size-micecream5">
                                <option value="R-micecream">Regular $7</option>
                                <option value="L-micecream">large $10</option>
						</select><br><br><br>
                        <label for="toppings-micecream">Toppings</label><br>
						<select id="toppings-micecream5" name="toppings-micecream5">
                        		<option value="topS-micecream">Select</option>
								<option value="topno-icecream">No Toppings</option>
								<option value="topw-icecream">With Toppings</option>
						</select><br><br><br>
                        <label for="takeaway5">Take Away or Dine In?</label><br>
						<select id="takeaway-dinein-mangoicecream5" name="takeaway-dinein-mangoicecream">
                        		<option value="SL-micecream">Select</option>
								<option value="T-micecream">Takeaway (Serve on plastic cup)</option>
								<option value="D-micecream">Dine in(Serve on a glass/bowl)</option>
						</select><br><br>
                        <p style="color:#F80307">Remind to all customer/s that Desserts will be prepared 
                        once you present your receipt 
                        to the store to avoid food wastage and cancel orders.</p>
					</div>
					<a><span><img src="img/shopping-cart.png" width="20" height="20"> Add to Cart</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                     <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the store</a><br><br>
                        </li>
                    </ul>

				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for Mango ice cream dessert.-->
<!--End order option for Dessert.--->

<!--Start order option for drinks.--->


<!--Start order option for bloody mary.--->
<section id="pagedrink1" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				<form id="myform" action="" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice-bloodymary">Your choice of drink/s: </label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="serving-bloodymary5">How many serving?</label><br>
							<select id="select-quantity-bloodymary5" name="select-quantity-bloodymary5">
                            	<option value="QuantityS-bloodymary">Select</option>
								<option value="1-bloodymary">1</option>
								<option value="2-bloodymary">2</option>
								<option value="3-bloodymary">3</option>
								<option value="4-bloodymary">4</option>
								<option value="5-bloodymary">5</option>
								<option value="6-bloodymary">6</option>
								<option value="7-bloodymary">7</option>
								<option value="8-bloodymary">8</option>
								<option value="9-bloodymary">9</option>
								<option value="10-bloodymary">10</option>
						</select>
						<br><br>
                        <label for="size-vodka">Select size</label><br>
						<select id="select-size-bloodymary5" name="select-size-bloodymary5">
                                <option value="R-bloodymary">Glass $10</option>
                                <option value="L-bloodymary">Bottle $44</option>
						</select><br><br><br>
                        <p style="color:#F80307">Remind to all customer/s that NO minors allowed at bar and 
                        ID's will be ask to verify age. Drinks will not be serve to underage minors. </p>
					</div>
					<a><span><img src="img/shopping-cart.png" width="20" height="20"> Add to Cart</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                     <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the Bar</a><br><br>
                        </li>
                    </ul>

				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for Bloody mary.-->

<!--Start order option for vodka.--->
<section id="pagedrink2" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				<form id="myform" action="" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice-vodka">Your choice of drink/s:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="serving-vodka5">How many serving?</label><br>
							<select id="select-quantity-vodka5" name="select-quantity-vodka5">
                            	<option value="QuantityS-vodka">Select</option>
								<option value="1-vodka">1</option>
								<option value="2-vodka">2</option>
								<option value="3-vodka">3</option>
								<option value="4-vodka">4</option>
								<option value="5-vodka">5</option>
								<option value="6-vodka">6</option>
								<option value="7-vodka">7</option>
								<option value="8-vodka">8</option>
								<option value="9-vodka">9</option>
								<option value="10-vodka">10</option>
						</select>
						<br><br>
                        <label for="size-vodka">Select size</label><br>
						<select id="select-size-vodka5" name="select-size-vodka5">
                                <option value="R-vodka">Glass $10</option>
                                <option value="L-vodka">Bottle $44</option>
						</select><br><br><br>
                        <p style="color:#F80307">Remind to all customer/s that NO minors allowed at bar and 
                        ID's will be ask to verify age. Drinks will not be serve to underage minors. </p>
					</div>
					<a><span><img src="img/shopping-cart.png" width="20" height="20"> Add to Cart</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                     <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the Bar</a><br><br>
                        </li>
                    </ul>

				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for Vodka.-->

<!--Start order option for sangria.--->
<section id="pagedrink3" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				<form id="myform" action="" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice-sangria">Your choice of drink/s:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="serving-sangria5">How many serving?</label><br>
							<select id="select-quantity-sangria5" name="select-quantity-sangria5">
                            	<option value="QuantityS-sangria">Select</option>
								<option value="1-sangria">1</option>
								<option value="2-sangria">2</option>
								<option value="3-sangria">3</option>
								<option value="4-sangria">4</option>
								<option value="5-sangria">5</option>
								<option value="6-sangria">6</option>
								<option value="7-sangria">7</option>
								<option value="8-sangria">8</option>
								<option value="9-sangria">9</option>
								<option value="10-sangria">10</option>
						</select>
						<br><br>
                        <label for="size-sangria">Select size</label><br>
						<select id="select-size-sangria5" name="select-size-sangria5">
                                <option value="R-sangria">Glass $10</option>
                                <option value="L-sangria">Bottle $35</option>
						</select><br><br><br>
                        <p style="color:#F80307">Remind to all customer/s that NO minors allowed at bar and 
                        ID's will be ask to verify age. Drinks will not be serve to underage minors. </p>
					</div>
					<a><span><img src="img/shopping-cart.png" width="20" height="20"> Add to Cart</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                     <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the Bar</a><br><br>
                        </li>
                    </ul>

				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for Sangria.-->

<!--Start order option for Gin martini.-->
<section id="pagedrink4" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				<form id="myform" action="" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice-martini">Your choice of drink/s:</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="serving-mojito5">How many serving?</label><br>
							<select id="select-quantity-martini5" name="select-quantity-martini5">
                            	<option value="QuantityS-martini">Select</option>
								<option value="1-martini">1</option>
								<option value="2-martini">2</option>
								<option value="3-martini">3</option>
								<option value="4-martini">4</option>
								<option value="5-martini">5</option>
								<option value="6-martini">6</option>
								<option value="7-martini">7</option>
								<option value="8-martini">8</option>
								<option value="9-martini">9</option>
								<option value="10-martini">10</option>
						</select>
						<br><br>
                        <label for="size-martini">Select size</label><br>
						<select id="select-size-martini5" name="select-size-martini5">
                                <option value="R-martini">Glass $10</option>
                                <option value="L-martini">Bottle $35</option>
						</select><br><br><br>
                        <p style="color:#F80307">Remind to all customer/s that NO minors allowed at bar and 
                        ID's will be ask to verify age. Drinks will not be serve to underage minors. </p>
					</div>
					<a><span><img src="img/shopping-cart.png" width="20" height="20"> Add to Cart</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                     <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the Bar</a><br><br>
                        </li>
                    </ul>

				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for Gin martini.-->

<!--Start order option for Virgin cocumber mojito.-->
<section id="pagedrink5" data-role="page">
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1>
	</header>
		<div data-role="ui-content" class="ui-content">
			<nav data-role="navbar" class="bar-b button">	
				<form id="myform" action="" method="post">
					<div data-role="fieldcontain">
                    	<label for="choice-mojito">Your choice of drink/s::</label><br><br><!--Once user click order now the food name will show under the label of "your food choice. For example user click "order now" from Artichoke Bruschetta from the menu list, this food name will come up under the label "Your food choice: Artichoke Bruschetta. This helps user reminds them about their order in any case. Codes will be implemented to achieve the feature.-->
                        <h3>Order option</h3>
						<label for="serving-mojito5">How many serving?</label><br>
							<select id="select-quantity-mojito5" name="select-quantity-mojito5">
                            	<option value="QuantityS-mojito">Select</option>
								<option value="1-mojito">1</option>
								<option value="2-mojito">2</option>
								<option value="3-mojito">3</option>
								<option value="4-mojito">4</option>
								<option value="5-mojito">5</option>
								<option value="6-mojito">6</option>
								<option value="7-mojito">7</option>
								<option value="8-mojito">8</option>
								<option value="9-mojito">9</option>
								<option value="10-mojito">10</option>
						</select>
						<br><br>
                        <label for="size-mojito">Select size</label><br>
						<select id="select-size-mojito5" name="select-size-mojito5">
                                <option value="R-mojito">Glass $10</option>
                                <option value="L-mojito">Jar $30</option>
						</select><br><br><br>
                        <p style="color:#F80307">Remind to all customer/s that NO minors allowed at bar and 
                        ID's will be ask to verify age. Drinks will not be serve to underage minors. </p>
					</div>
					<a><span><img src="img/shopping-cart.png" width="20" height="20"> Add to Cart</span></a>
					<!-- <input type="submit" value="Add to cart" data-inline="true" data-icon=""> -->
					<a href="#pagepaynow1" data-role="button" data-icon="">Pay Now</a>
                     <ul>
                        <li>
                           <a href="#unpaidorderitemcheck1" name="" >Pay when I arrive to the Bar</a><br><br>
                        </li>
                    </ul>

				</form>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End order option for  Virgin cocumber mojito.-->
<!--End order option for drinks.--->

<!--Start payment details.-->
<section id="pagepaynow1" data-role="page"><!---->
	<header data-role="header"><!---->
		<h1 style="text-align:center">Restaurant</h1><!---->
	</header>
		<div data-role="ui-content" class="ui-content"><!---->
			<nav data-role="navbar" class="bar-b button"><!---->
				<form id="" action="#" method="#"><!---->
                <label for="">You ordered the following:</label><!----><br><br>
                       <nav data-role="navbar" class="bar-b button"><!---->
                        <ul><!---->
                            <li><!---->
                                <p  style="color:#1CF30C">Click Yes if your order is correct</p><!---->
                                <p style="color:#EC0509">Click Delete if your order is wrong</p><!---->
                                <p>Example Item #1</p><!---->
                            </li>
                        </ul>
                        <ul> <!---->
                        	<li><!---->
                            	 <input value="Yes" type="button"/> 
                             </li>
                             <li><!---->
                             	<input name="delete" value="delete" type="reset" size="20"><!----><br><br>
                             </li>
                       </ul>
                       <ul><!---->
                             <li><!---->
                             	<textarea placeholder="You can enter you comment for your order here..."></textarea>
                                <!---->
                             </li>
                        </ul><br>
                         <ul><!---->
                             <li><!---->
                           		  <label for="">Select pick up time:</label><!---->
                                  <label style="color:#F7060A"><!---->
                                      Please allow 30 mins of wait from the time the ordered item 
                                      is paid! Selected time will not be accurate as there other customers to proccessed. 
                                      It is only used to estimate preparation time. So please estimate the time to
                                       processed all your orders and select a reasonable pick up time.
                                  </label>
                             </li>
                          </ul>
                          <ul>
                             <li><!---->
							<select id="hour1" name="hour"><!---->
                            	<option value="">Select hour</option><!---->
                            	<option value="">1:00</option>
								<option value="">2:00</option>
								<option value="">3:00</option>
								<option value="">4:00</option>
								<option value="">5:00</option>
								<option value="">6:00</option>
								<option value="">7:00</option>
								<option value="">8:00</option>
								<option value="">9:00</option>
								<option value="">10:00</option>
								<option value="">11:00</option>
								<option value="">12:00</option>
							</select>
                            </li>
                            <li><!---->  
                            <select id="min1" name="min"><!---->
                            	<option value="">Select minutes</option><!---->
                            	<option value="">00</option>
								<option value="">01</option>
								<option value="">02</option>
								<option value="">03</option>
								<option value="">04</option>
								<option value="">05</option>
								<option value="">06</option>
								<option value="">07</option>
								<option value="">08</option>
								<option value="">09</option>
								<option value="">10</option>
								<option value="">11</option>
                                <option value="">12</option>
                                <option value="">13</option>
                            	<option value="">14</option>
								<option value="">15</option>
								<option value="">16</option>
								<option value="">17</option>
								<option value="">18</option>
								<option value="">19</option>
								<option value="">20</option>
                                <option value="">21</option>
                                <option value="">22</option>
                                <option value="">23</option>
                            	<option value="">24</option>
								<option value="">25</option>
								<option value="">26</option>
								<option value="">27</option>
								<option value="">28</option>
								<option value="">29</option>
								<option value="">30</option>
                                <option value="">31</option>
                                <option value="">32</option>
                                <option value="">33</option>
                            	<option value="">34</option>
								<option value="">35</option>
								<option value="">36</option>
								<option value="">37</option>
								<option value="">38</option>
								<option value="">39</option>
								<option value="">40</option>
                                <option value="">51</option>
                                <option value="">52</option>
                                <option value="">53</option>
                            	<option value="">54</option>
								<option value="">55</option>
								<option value="">56</option>
								<option value="">57</option>
								<option value="">58</option>
								<option value="">59</option>
							</select>
							</select> 
                             </li>
                             <li><!---->
                             <select id="pmam" name="pmam"><!---->
                            	<option value="">Select</option><!---->
                            	<option value="">am</option>
								<option value="">pm</option>
							
							</select>
                             </li>
                        </ul>
                        </nav><!---->
					<div data-role="fieldcontain"><!---->
						<h3>Please Enter Payment Details</h3><!---->
						<label for="">Enter Card Holder Name:</label><!----><br>
                            <input name="cardname" value="" type="text" size="20"><!---->
                            <br><br>
						<label for="">Enter Card Number:</label><br>
                            <input name="cardname" value="" type="text" size="20" style="color: #FFFFFF">
                            <!---->
                            <br><br>
						<label for="">Enter Code: 
 							<a href="#email-dialog" data-rel="dialog">(what is this?)</a></label>
                            <!----><br><br>
							<input name="cardname" value="" type="text" size="20" >
                            <!----><br><br><br>
						<label for="">Enter Bank Name:</label><!---->
                        	<br>
							<input name="cardname" value="" type="text" size="20"><!---->
                            <br><br>
						<label for="">Month expired:</label><br><!---->
							<select id="expiry" name="expiry"><!---->
                            	<option value="">Select</option><!---->
								<option value="">01Jan</option>
								<option value="">02Feb</option>
								<option value="">03Mar</option>
								<option value="">04Apr</option>
								<option value="">05May</option>
								<option value="">06Jun</option>
								<option value="">07Jul</option>
								<option value="">08Aug</option>
								<option value="">09Sep</option>
								<option value="">10Oct</option>
								<option value="">11Nov</option>
								<option value="">12Dec</option>
						</select><br><br>
						<label for="">Year expired:</label><!----><br>
						<select id="expiry" name="expiry"><!---->
                        		<option value="">Select</option><!---->
								<option value="">2015</option>
								<option value="">2016</option>
								<option value="">2017</option>
								<option value="">2018</option>
								<option value="">2019</option>
								<option value="">2020</option>
								<option value="">2021</option>
								<option value="">2022</option>
								<option value="">2023</option>
								<option value="">2024</option>
								<option value="">2025</option>
								<option value="">2026</option>
								<option value="">2027</option>
								<option value="">2028</option>
								<option value="">2029</option>
								<option value="">2030</option>
						</select><br><br><br><br>
                       	<ul><!---->
                        	<li><!---->
                                <a href="#pagereceipt1" class=" ui-btn-corner-all">Submit Payment</a><!---->
                            </li>
                        </ul>
					</div>
				</form>
			</nav>
    </div>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End payment details.--> 

<!--Start pop image for credit card cvv number.--> 
<div data-role="page" id="email-dialog"><!---->
     <div data-role="header"><!---->
    	 <h1>Credit Card CVV number</h1><!---->
     </div>
     <div data-role="content" data-theme="d"><!---->
        <p>See CVV number on the right side of the card!</p> <!---->
        <p>You can close this image by clicking the X button on the top left side of the image!</p><!---->
        	 <img src="img/cvv.PNG" style="width:100%;height:100%;" alt="Credit Card CVV"><!---->
      </div>
</div>
<!--End pop image for credit card cvv number.--> 
 

<!--Start unpaid order item check.-->
<section id="unpaidorderitemcheck1" data-role="page"><!---->
	<header data-role="header"><!---->
		<h1 style="text-align:center">Restaurant</h1><!---->
	</header>
		<div data-role="ui-content" class="ui-content"><!---->
			<nav data-role="navbar" class="bar-b button"><!---->
				<form id="" action="#" method="#"><!---->
                <label for="">You ordered the following:</label><!---->
                	<br><br>
                       <nav data-role="navbar" class="bar-b button"><!---->
                        <ul><!---->
                            <li><!---->
                                <p  style="color:#1CF30C">Click Yes if your order is correct</p><!---->
                                <p style="color:#EC0509">Click Delete if your order is wrong</p><!---->
                                <p>Example Item #1</p><!---->
                            </li>
                        </ul>
                        <ul><!---->
                        	<li><!---->
                             	<input value="Yes" type="button"/> <!---->
                             </li>
                             <li><!---->
                            	 <input name="delete" value="delete" type="reset" size="20"><!---->
                                 <br><br>
                             </li>
                      	</ul>
                        <ul><!---->
                             <li><!---->
                        	     <textarea placeholder="You can enter you comment for your order here..."></textarea>
                             </li>
                         </ul>
                          <ul><!---->
                             <li>
                        	     <a href="#pagereceipt-unpaid">Get order number and receipt now</a><!---->
                             </li>
                         </ul>
                        </nav>
                   </form>
              </nav>
		 </div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End unpaid order item check.-->
                        

<!--Start ordered receipt.-->
<section id="pagereceipt1" data-role="page"><!--(Start) order receipt section page, this page creates the receipt after customer gets an order number or pay for order-->
	<header data-role="header">
		<h1 style="text-align:center">Restaurant</h1><!--header title-->
	</header>
		<div data-role="ui-content" class="ui-content"><!--(start) receipt content-->
			<nav data-role="navbar" class="bar-b button"><!--(start) navbar to ceate responsive content-->
            	 <ul><!--ul 1-->
                     <li><!--li 1-->
                         <label>Here is your receipt: </label>
                     </li>
                  </ul>
                  <ul><!--ul 2-->
                     <li><!--li 2-->
                       <label>Your order number: </label><!--label for order number which will show below, codes will be created to show the sequence order number-->
                     </li>
                 </ul>
                 <hr><br><br><br><br>
                  <ul><!--ul 3-->
                     <li><!--li 3-->
                          <hr>
                         <label style="background-color:#6AF91C">Paid items: </label><!--Label for pai items-->
                     </li>
                 </ul>
                  <hr><br><br><br><br><hr>
                  <ul><!--ul 4-->
                     <li><!--li 4-->
                    	 <label>Total Price: </label><!---->
                     </li>
                 </ul>
                  <hr><br><br><br><br><hr>
			</nav><!--(End) navbar to ceate responsive content-->
		</div><!--(End) receipt content-->
	<footer data-role="ui-footer"><h1></h1></footer>
</section><!--(End) order receipt section page, id=pagereceipt1-->
<!--End  ordered receipt.-->

<!--Start unpaid ordered receipt.-->
<section id="pagereceipt-unpaid" data-role="page"><!---->
	<header data-role="header"><!---->
		<h1 style="text-align:center">Restaurant</h1><!---->
	</header>
		<div data-role="ui-content" class="ui-content"><!---->
			<nav data-role="navbar" class="bar-b button"><!---->
            	 <ul><!---->
                     <li><!---->
                          <label>Here is your receipt: </label><!---->
                     </li>
                  </ul>
                  <ul><!---->
                     <li><!---->
                          <label>Bring this receipt to the restaurant and pay, so we can prepare your ordered items or 
                         click "pay for this order now" on the buttom of this page and we will start preparing your order. 
                         </label><!---->
                     </li>
                  </ul>
                  <ul><!---->
                     <li><!----><hr>
                     	 <label>Your order number: </label><!---->
                     </li>
                 </ul>
                 <hr><br><br><br><br> <hr>
                 <ul>
                     <li>
                       	 <label>Unpaid items will not be prepared until its paid! </label><!---->
                     </li>
                 </ul>
                  <ul>
                     <li>
                       <label style="background-color: #F86E6E;">Unpaid items: </label>
                     </li>
                 </ul>
                 
                  <hr><br><br><br><br><hr>
                  <ul>
                     <li><!---->
                       <label>Total Price: </label><!---->
                     </li>
                 </ul>
                  <hr><br><br><br><br><hr>
                 <ul>
                     <li><!---->
                      <a href="#pagepaynow1">Pay for this order now</a><!---->
                     </li>
                 </ul>
			</nav>
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End  unpaid ordered receipt.-->

<!--Start gallery restaurant photos.-->
<section id="page5" data-role="page"><!--(Start) gallery section page-->
	<header data-role="header"><!--header-->
		<h1 style="text-align:center">Restaurant</h1><!--header title-->
	</header>
<div data-role="ui-content" class="ui-content"><!---->
	<nav data-role="navbar" class="bar-b button"><!---->
		<strong><img src="img/photo.png" alt="" width="30" style="color:#27827B"><!--icon for title page-->
        Gallery</strong><!--Page title-->
        <br><br>
		<ul><!--ul number 1-->
			<li><a href="" ><img src="img/restaurantInterior3.PNG" alt="" width="100" height="80"></a></li>
            <!--example image of the retaurant gallery, same as the images below-->
			<li><a><img src="img/restaurantInterior1.PNG" alt="" width="100" height="80"></a></li>
			<li><a><img src="img/restaurantInterior2.PNG" alt="" width="100" height="80"></a></li>
			<li><a><img src="img/restaurantInterior4.PNG" alt="" width="100" height="80"></a></li>
		</ul>
		 <ul><!--2-->
			<li><a><img src="img/restaurantInterior5.PNG" alt="" width="100" height="80"></a></li>
			<li><a><img src="img/restaurantInterior6.PNG" alt="" width="100" height="80"></a></li>
			<li><a><img src="img/restaurantInterior7.PNG" alt="" width="100" height="80"></a></li>
			<li><a><img src="img/restaurantInterior8.PNG" alt="" width="100" height="80"></a></li>
		</ul>
		</ul>
		<ul>!--3-->
			<li><a><img src="img/restaurantVeranda5.PNG" alt="" width="100" height="80"></a></li>
			<li><a><img src="img/restaurantbar.PNG" alt="" width="100" height="80"></a></li>
			<li><a><img src="img/restaurantriverview.PNG" alt="" width="100" height="80"></a></li>
			<li><a><img src="img/restaurantEntrance.PNG" alt="" width="100" height="80"></a></li>
		</ul>
	</nav>
</div>
    <footer data-role="ui-footer">
    </footer>
</section>
<!--End gallery restaurant photos.-->


<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--Assignment 2 start below-->


<!--Start register-->
<section id="register" data-role="page"><!---->
	<header data-role="header"><!---->
		<h1 style="text-align:center"></h1><!---->
	</header>
		<div data-role="ui-content" class="ui-content"><!---->
        <h1>Please filled up the form below to register</h1>
        <form method="post" action="#"><!--register form. User can enter details to register-->
			<input name="" required="required" placeholder="Enter first name" />
            <input name="" required="required" placeholder="Enter last name" />
            <input name="" required="required" placeholder="Enter username" />
            <input name="" required="required" type="password" placeholder="Enter password" />
            <input name="" required="required" type="password" placeholder="Confirm password" />
            <input name="" required="required" placeholder="Enter email" />
            <input name="" placeholder="Enter street no." />
            <input name="" placeholder="Enter street name" />
            <input name="" placeholder="Enter suburb" />
            <input name="" placeholder="Enter city" />
            <input name="" placeholder="Enter state" />
            <input name="" placeholder="Enter country" />
            <input name="" type="reset" value="Cancel" />
            <input name="" type="submit" value="Register" />
        </form>    
		</div>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End register-->

<!--Start login-->
<section id="login" data-role="page"><!---->
	<header data-role="header"><!---->
		<h1 style="text-align:center"></h1><!---->
	</header>
		<div data-role="ui-content" class="ui-content"><!---->
        <h1>Enter your user details to login</h1>
        <form method="post" action="#"><!--register form. User can enter details to register-->
            <input name="" required="required" placeholder="Enter username" />
            <input name="" required="required" type="password" placeholder="Enter password" />
            <input name="" type="submit" value="Log in" />
        </form>    
		</div>
        <a href="#myaccount">myaccount</a>
	<footer data-role="ui-footer"><h1></h1></footer>
</section>
<!--End login-->

<!--Start my account-->
<section id="myaccount" data-role="page"><!---->
	<header data-role="header"><!---->
		<h1 style="text-align:center"></h1><!---->
	</header>
		<div data-role="ui-content" class="ui-content"><!---->
        <h1>Welcome to barteryouworld restaurant</h1>
         <div data-role="navbar"><!--creates two nav bar search and shopping cart-->
                <ul>
                      <li>
                        <a href="#menu" class="ui-overlay-shadow">Menu</a>
                         <!--Pop up link for search input in the navbar, icon on the left side-->
                      </li>
                      <li>
                        <a href="#gallery" class="ui-overlay-shadow">Galery</a>
                        <!--Pop up link for shopping cart in the navbar, no icon available for cart-->
                      </li>
                       <li>
                        <a href="#" class="ui-overlay-shadow" data-rel="popup">My Profile</a>
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
                        <a href="#" class="ui-overlay-shadow">Log out</a>
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
		</div>
	<footer data-role="ui-footer"><h1 class=" ui-overlay-shadow">Barteryouworld restaurant</h1></footer>
</section>
<!--End my account-->

<!--Start menu link from my account-->
<section id="menu" data-role="page"><!---->
	<header data-role="header"><!---->
		<h1 style="text-align:center"></h1><!---->
	</header>
		<div data-role="ui-content" class="ui-content"><!---->
        <h1>Welcome to barteryouworld restaurant</h1>
         <div data-role="navbar"><!--creates two nav bar search and shopping cart-->
                <ul>
                      <li>
                        <a href="#menu" class="ui-overlay-shadow">Menu</a>
                         <!--Pop up link for search input in the navbar, icon on the left side-->
                      </li>
                      <li>
                        <a href="#gallery" class="ui-overlay-shadow">Galery</a>
                        <!--Pop up link for shopping cart in the navbar, no icon available for cart-->
                      </li>
                       <li>
                        <a href="#" class="ui-overlay-shadow" data-rel="popup">My Profile</a>
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
                        <a href="#" class="ui-overlay-shadow">Log out</a>
                        <!--Pop up link for shopping cart in the navbar, no icon available for cart-->
                      </li>
                </ul>
	      </div><!--End nav bar-->
<nav data-role="navbar" class="bar-b button"><!--Navbar for menu link buttons-->
			<strong><img src="img/spoons.png" alt="" width="30">Menu</strong><!--Page name-->
            <br><br>
			<ul><!--(start) ul tag #1-->
				<li><!--(start li) creates a row button for appetizer menu-->
                <div class="garlic-background"><!--(start div), class=garlic-background link to css in th main header of this file, creates the background styling-->
                	<div class="garlic-transparent"><!--(start div), class=garlic-transparent link to css in th main header of this file, creates the transparent background styling-->
                        <a href="#page2.1"><!---->
                            <ul><!--(start) ul tag #1.1-->
                                <li><!--(start) li for appetizer button name and click here link-->
                                     <p style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif; 
                                     color:#E90C3C; font-size:36px""><!---->
                                     Appetizer</p><p>click here</p><!---->
                                </li><!--(End) li for appetizer button name and click here link-->
                            </ul><!--(End) ul tag #1.1-->
                        </a>
                    </div><!--(End div), class=garlic-transparent-->
                </div><!--(End div, class=garlic-background)-->
				</li><!--(End li) creates a row button for appetizer menu-->
			</ul><!--(End) ul tag #1-->
			<ul><!--comments below are the same meaning as the comments for appetizer button-->
				<li><!---->
                <div class="BBQ-background"><!---->
                	<div class="BBQ-transparent"><!---->
                        <a href="#page3.1"><!---->
                            <!--<img src="img/garlicbread.PNG" height="200" width="300"
                            style="width:100%;">-->
                            <ul>
                                <li><!---->
                                     <p style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif; 
                                     color:#097EF8; font-size:36px">
                                     Main Dish
                                     </p><!---->
                                     <p>click here</p><!---->
                                </li>
                            </ul>
                        </a>
                    </div>
                </div>
				</li>
			</ul>
		    <ul><!---->
				<li><!---->
                <div class="salad-background"><!---->
                	<div class="salad-transparent"><!---->
                        <a href="#page4.1">
                            <!--<img src="img/garlicbread.PNG" height="200" width="300"
                            style="width:100%;">-->
                            <ul>
                                <li>
                                     <p style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;
                                     color:#14E399; font-size:36px">
                                     	Salad
                                     </p><!---->
                                     <p>click here</p><!---->
                                </li>
                        	</ul>
                        </a>
                    </div>
                </div>
				</li>
			</ul>
			<ul><!---->
				<li><!---->
                <div class="pizza-background"><!---->
                	<div class="pizza-transparent"><!---->
                        <a href="#page5.1"><!---->
                        <!--<img src="img/garlicbread.PNG" height="200" width="300"
                        style="width:100%;">-->
                            <ul>
                                <li>
                                     <p style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif; 
                                     color:#0EE4F7; font-size:36px"><!---->
                                         Pizza
                                     </p>
                                     <p>click here</p>
                                </li>
                            </ul>
                        </a>
                    </div>
                </div>
				</li>
			</ul>
			<ul><!---->
				<li><!---->
                <div class="dessert-background"><!---->
                	<div class="dessert-transparent"><!---->
                        <a href="#page6.1"><!---->
                        <!--<img src="img/garlicbread.PNG" height="200" width="300"
                        style="width:100%;">-->
                        <ul><!---->
                            <li><!---->
                                 <p style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;color:
                                 #0F62F3; font-size:36px"><!---->
                                 	Dessert
                                 </p><!---->
                                 <p>click here</p><!---->
                            </li>
                        </ul>
                        </a>
                    </div>
                </div>
				</li>
			</ul>
			<ul><!---->
				<li><!---->
                <div class="drinks-background"><!---->
                	<div class="drinks-transparent"><!---->
                        <a href="#page7.1"><!---->
                        <!--<img src="img/garlicbread.PNG" height="200" width="300"
                        style="width:100%;">-->
                        <ul><!---->
                            <li><!---->
                                 <p style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;color:
                                 #F90CDA; font-size:36px"><!---->
                                	 Drinks
                                 </p><!---->
                                 <p>click here</p>
                            </li>
                        </ul>
                        </a>
                    </div>
                </div>
				</li>
			</ul>
		</nav>
	</div><!--(End)-Restaurant menu type content-->
	<footer data-role="ui-footer"><h1 class=" ui-overlay-shadow">Barteryouworld restaurant</h1></footer>
</section>
<!--End menu link from my account-->

<!--start Galery link from my account-->
<section id="gallery" data-role="page"><!---->
	<header data-role="header"><!---->
		<h1 style="text-align:center"></h1><!---->
	</header>
        <h1>Welcome to barteryouworld restaurant</h1>
         <div data-role="navbar"><!--creates two nav bar search and shopping cart-->
                <ul>
                      <li>
                        <a href="#menu" class="ui-overlay-shadow">Menu</a>
                         <!--Pop up link for search input in the navbar, icon on the left side-->
                      </li>
                      <li>
                        <a href="#gallery" class="ui-overlay-shadow">Galery</a>
                        <!--Pop up link for shopping cart in the navbar, no icon available for cart-->
                      </li>
                       <li>
                        <a href="#" class="ui-overlay-shadow" data-rel="popup">My Profile</a>
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
                        <a href="#" class="ui-overlay-shadow">Log out</a>
                        <!--Pop up link for shopping cart in the navbar, no icon available for cart-->
                      </li>
                </ul>
	      </div><!--End nav bar-->
<nav data-role="navbar" class="bar-b button"><!---->
		<strong><img src="img/photo.png" alt="" width="30" style="color:#27827B"><!--icon for title page-->
        Gallery</strong><!--Page title-->
        <br><br>
		<ul><!--ul number 1-->
			<li><a href="" ><img src="img/restaurantInterior3.PNG" alt="" width="100" height="80"></a></li>
            <!--example image of the retaurant gallery, same as the images below-->
			<li><a><img src="img/restaurantInterior1.PNG" alt="" width="100" height="80"></a></li>
			<li><a><img src="img/restaurantInterior2.PNG" alt="" width="100" height="80"></a></li>
			<li><a><img src="img/restaurantInterior4.PNG" alt="" width="100" height="80"></a></li>
		</ul>
		 <ul><!--2-->
			<li><a><img src="img/restaurantInterior5.PNG" alt="" width="100" height="80"></a></li>
			<li><a><img src="img/restaurantInterior6.PNG" alt="" width="100" height="80"></a></li>
			<li><a><img src="img/restaurantInterior7.PNG" alt="" width="100" height="80"></a></li>
			<li><a><img src="img/restaurantInterior8.PNG" alt="" width="100" height="80"></a></li>
		</ul>
		</ul>
		<ul><!--3-->
			<li><a><img src="img/restaurantVeranda5.PNG" alt="" width="100" height="80"></a></li>
			<li><a><img src="img/restaurantbar.PNG" alt="" width="100" height="80"></a></li>
			<li><a><img src="img/restaurantriverview.PNG" alt="" width="100" height="80"></a></li>
			<li><a><img src="img/restaurantEntrance.PNG" alt="" width="100" height="80"></a></li>
		</ul>
	</nav>
	<footer data-role="ui-footer"><h1 class=" ui-overlay-shadow">Barteryouworld restaurant</h1></footer>
</section>
<!--start Galery link from my account-->

</body><!--End body of the html page-->
</html><!--End html-->