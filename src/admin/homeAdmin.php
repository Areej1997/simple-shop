<?php
$link = mysqli_connect("localhost","root","pumba");
mysqli_select_db($link,"market");
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title> Admin Home</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
    <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <!-- BEGIN: load jqplot -->
    <link rel="stylesheet" type="text/css" href="css/jquery.jqplot.min.css" />
    <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="js/jqPlot/excanvas.min.js"></script><![endif]-->
    <script language="javascript" type="text/javascript" src="js/jqPlot/jquery.jqplot.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.barRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.pieRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.highlighter.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jqPlot/plugins/jqplot.pointLabels.min.js"></script>
    <!-- END: load jqplot -->
    <script src="js/setup.js" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            setupDashboardChart('chart1');
            setupLeftMenu();
			setSidebarHeight();


        });
    </script>
</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft">
                     <b><font color="#FFFFFF" style="font-size:30px"> <p >Admin Home</p></font></b>
                 </div>
             
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>

        <div class="clear">
        </div>

        <div class="grid_10">
            <div class="box round first">
               <button type ="submit" name ="submit2" onclick="window.location.href='add_product.php'" > <h2>
                 Add Product </h2>  
                 </button> &nbsp &nbsp &nbsp &nbsp
                 <button type ="submit" name ="submit2" onclick="window.location.href='/Market Shop/admin/product/delete_product.php'" > <h2>
                 Products  </h2>  
                 </button> &nbsp &nbsp &nbsp &nbsp

                  <button type ="submit"  name ="submit2" > <a href="interface.php"><h2> Back </h2></a> </button>

                 <!-- <button type ="submit" name ="submit2" onclick="window.location.href='/Market Shop/admin/product/edit_product.php'" > <h2>
                 Edit Product </h2>  
                 </button> -->
                       
                            
            </div>
    </form>
        <div class="grid_2">
               
        </div>
       
                    
       
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="site_info">

    </div>


    <?php
    
    // if(isset($_POST["submit1"]))
    // {


        // $v1=rand(1111,9999);
        // $v2=rand(1111,9999);
        // $v3=$v1.$v2;
        // //encrypt it 
        // $v3=md5($v3);

        // $filename = $_FILES["pimage"]["name"];
        // $distanation = "../product_image/".$v3.$filename;
        // $distanation1 = "product_image/".$v3.$filename;

        // move_uploaded_file($_FILES["pimage"]["tmp_name"],$distanation);
        // mysqli_query($link,"insert into products values ('','$distanation1','$_POST[pdesc]','$_POST[pprice]')");
      
   

// }    
            ?>


</body>
</html>