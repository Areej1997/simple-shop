
<?php
$link = mysqli_connect("localhost","root","pumba");
mysqli_select_db($link,"market");

if(isset($_POST["submit2"])){
$d=0;
if(is_array($_COOKIE['item']))
{
    // foreach($_COOKIE['item']as &name => &value)
    // {
    //     $d=$d+1;

    // }
    // $d=$d+1;
}
else 
{
    $d=$d+1;
}

//get info of product from table
$result =mysqli_query($link,"select * from products where id=$id");
while($roww=mysqli_fetch_array($result))
{
$img=$roww["p_image"];
$price=$roww["p_price"];
$desc=$roww["p_desc"];
}
setcookie("item[$d]",$img."__",$price."__",$desc."__",time()+1800);

}
?>





<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from astritbublaku.com/demos/sweetpick/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 May 2015 04:02:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	

	<meta charset="utf-8">

	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,800,900,200,100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Noticia+Text:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,400,200,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">	

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="css/fullwidth.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />

	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
	
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

	<!-- Style Switch -->
	<link rel="alternate stylesheet" type="text/css" href="css/colors/yellow-black.css" title="yellow" media="screen" />
   	<link rel="alternate stylesheet" type="text/css" href="css/colors/violet-black.css" title="black" media="screen" />
	<link rel="alternate stylesheet" type="text/css" href="css/colors/orange-black.css" title="orange" media="screen" />
	<link rel="alternate stylesheet" type="text/css" href="css/colors/blue-black.css" title="blue" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/colors/red-black.css" title="red" media="screen" />
	<link rel="alternate stylesheet" type="text/css" href="css/colors/green-black.css" title="green" media="screen" />
	<link rel="alternate stylesheet" type="text/css" href="css/colors/pink-black.css" title="pink" media="screen" />
	<link rel="alternate stylesheet" type="text/css" href="css/colors/pale-green-black.css" title="pale-green" media="screen" />

</head>
<body>
<script type="text/javascript">
    var clicks = 0;
    function onClick() {
        clicks += 1;
        document.getElementById("clicks").innerHTML = clicks;
    };
    </script>

<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix">

				

							

							</div>
					</div>

					<div class="clear"></div>

				</div>
				<!-- End container -->	
			</div>
			<!-- End Upper-header -->		
			<div class="nav-border"></div>
			<div class="container">
		
			</div>
		

		</header>
		<!-- End Header -->


		<!-- content -->
		<div id="content">

			<div class="checkout">

				<div class="container">

					<div class="check-anchor clearfix mb40">
						<div class="holder">

							<div class="holder-border"></div>

							
						</div>
<h3>
						<p>Shopping Carts</p></h3>
					</div>

					<div class="check-infos">
						<div class="row">
							<div class="col-md-8">
								<div class="check-details">
									<table class="table">
								      <thead>
								        <tr>
								          
								          <th>Description</th>
								          <th>Price</th>
                                          <th>Image</th>
           
								        </tr>
                                      </thead>
                                     

								      <tbody class="check-body">

                                      <?php
                                         $res =mysqli_query($link,"select * from products");
                                            while($row=mysqli_fetch_array($res))
                                            {

                                                ?>
								        <tr>
                                       
								          <td>
								          	<p>
								          <?php  echo $row["p_description"] ?></p></td>
								          <td><?php  echo $row["p_price"] ?> </td>
								          <td><img src="../admin/<?php  echo $row["p_image"] ?>"  width="180" height ="220"></td>
								     
                                          <td><button type="button" onClick="onClick()"  name ="submit2"  class="btn btn-fefault cart" > 

                                          <i class="fa fa-shopping-cart"></i>
                                          Add to cart</button>
                                          </td>

                                
                                         </tr>


										
                                         <?php

                 }


                                                        ?>
                                       </tbody>
                                     
								    </table>

									<p>Products : <a id="clicks">0</a></p>

<!-- 
								    <div class="coupon">
								    	
									<button type ="submit"  name ="submit2" > <a href="interface.php"><h2> Back </h2></a> </button>


								    	
								    </div> -->
								</div>
							</div>
							
						</div>
					</div>

				</div>

			</div>
			<!-- End Product Single -->


		<!-- End content -->



        <!-- Style Switch -->
		<div id="customizer" class="s-close">
			<span class="corner"><span class="cog"></span></span>
			<div id="options" class="visible">
				<div class="options-head">
					Style Switcher
				</div>	

				<div class="options-segment clearfix colors-sel">
					<h6 class="color-head">Color Scheme</h6>
					<ul class="color-scheme clearfix">
						<li class="yellow"><a href="css/colors/yellow-black.html" data-rel="yellow" class="styleswitch"></a></li>
						<li class="green"><a href="css/colors/green-black.html" data-rel="green" class="styleswitch"></a></li>
						<li class="red"><a href="css/colors/red-black.html" data-rel="red" class="styleswitch"></a></li>
						<li class="blue"><a href="css/colors/blue-black.html" data-rel="blue" class="styleswitch"></a></li>
						<li class="fblack"><a href="css/colors/violet-black.html" data-rel="black" class="styleswitch"></a></li>
						<li class="orange"><a href="css/colors/orange-black.html" data-rel="orange" class="styleswitch"></a></li>
						<li class="violet"><a href="css/colors/pink-black.html" data-rel="pink" class="styleswitch"></a></li>
						<li class="pale-green"><a href="css/colors/pale-green-black.html" data-rel="pale-green" class="styleswitch"></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Style Switch -->

		</div>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.superfish.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.html"></script>
	<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.html"></script>
  	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="js/jquery.appear.js"></script>
	<script type="text/javascript" src="js/jquery.countTo.js"></script>
	<script src="js/jquery.parallax.html"></script>
     <!-- jQuery KenBurn Slider  -->
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

 	<!-- include jQuery + carouFredSel plugin -->
    <script type="text/javascript" src="js/jquery.carouFredSel.js"></script>

    <!-- optionally include helper plugins -->
    <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
	
    <!-- Style Switcher -->
	<script src="js/styleswitch.js"></script>
	<script src="js/style_switch_custom.js"></script>
</body>

<!-- Mirrored from astritbublaku.com/demos/sweetpick/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 May 2015 04:02:19 GMT -->
</html>