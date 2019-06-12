

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
                <h2>
                 Add Product </h2>
                <div class="block">
                <form name="form1" action="" method="post" enctype="multipart/form-data">
                                       <table>
                           <tr>
                               <td>Product Image </td>
                               <td><input type ="file" name="pimage" ></td>
                            </tr>
                            <tr>
                               <td>Product Description  : </td>
                               <td><textarea cols="19" rows="10" name="pdesc" ></textarea></td>
                            </tr>
                            <tr>
                               <td>Product Price </td>
                               <td><input type ="text" name="pprice" ></td>
                            </tr>
                            <td colspan="3" aligh="center"><input type="submit" name="submit1" value="upload"  ></td>
                           
                            <td colspan="3" aligh="center"> <button type ="submit"  > <a href="homeAdmin.php">Back </a> </button></td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp &nbsp <br> 
                            
                            <td colspan="9" aligh="center"> <button type ="submit"  > <a href="/Market Shop/user/cart.php">View products  </a> </button></td>

                </div>
            </div>
            </table>
    </form>
        <div class="grid_2">
               
        </div>
        </body>


</html>
       

<?php
if(isset($_POST["submit1"]))
{
   $v1=rand(1111,9999);
   $v2=rand(1111,9999);
   
   $v3=$v1.$v2;
   
   $v3=md5($v3);
   
   
   $fnm=$_FILES["pimage"]["name"];
   $dst="./product_image/".$v3.$fnm;
   $dst1="product_image/".$v3.$fnm;
   move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);



mysqli_query($link,"insert into products values('','$dst1','$_POST[pdesc]','$_POST[pprice]')");


}

?>					
	





