
<?php
include("functions/functions.php"); 
?>
<html>
<head>
<title> my shoe shop</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/boostrap.min.csss">
<link rel="stylesheet" href="css/main.css">
<meta charset="utf-8">
<script type="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="js/boostrap.min.js"></script>
</head>
<h2>dvrtg</h2>

<body>
	 <!--Main Container starts here-->
<div class="main_wrapper">
 <!--header starts here-->
<div class="header">
	 <img  src="images/shop_logo.png"/></a>
     <img src="images/ad_banner2.gif"/>
</div>
 <!--header ends here-->

 <!--navigation bar starts here-->
<div class="navbar">
<ul id="menu">
	<li><a href="#">Home</a></li>
	<li><a href="#">My Account</a></li>
	<li><a href="#">All Products</a></li>
	<li><a href="#">Sign Up</a></li>
	<li><a href="#">Shopping Cart</a></li>
	<li><a href="#">Contact Us</a></li>

</ul>
<div id="form">
	<form method="get" action="results.php" enctype="multipart/form-data">
		<input type="text" name="user_query" placeholder="search a product" />
		<input type="submit" name="search" value="search" />
	</form>
</div>
</div>
  <!-- navigation bar ends here-->

<!-- content wrapper  starts here-->
<div class ="content_wrapper">
	<div id sidebar>
		<div id="sidebar_title">Categories


			<ul id="cats">
			<?php getCats();   ?>  
             <ul>
             	<div id="sidebar_title">Brands


			<ul id="cats">
				<?php getBrand();?> 
			</ul></div>
	</div>
	<div id="content_area"></div>
</div>
<!-- content wrapper  ends here-->

<div id="footer">
	<h2 style="text-align: center; padding-top: 30px;"> &copy;developed2018</h2>
</div> 

</div>
 <!--Main Container ends here-->
</body>
</html>