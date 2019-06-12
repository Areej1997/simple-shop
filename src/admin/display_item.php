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

       

<div class="grid-20">
    <div class="box round first">
    <h2>Display Item </h2>
    <div class="block">

    <button type ="submit"  name ="submit2" > <a href="interface.php"><h2> Back </h2></a> </button>

        <?php
        $res =mysqli_query($link,"select * from products");
        

        echo "<div class='row'>";
       echo "<div class='col-md-8'>";
        

        echo " <table class='table'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>"; echo "Product Image"; echo "<br>" ;echo "</th>";
        str_repeat('&nbsp;', 1000);
        echo "<th>"; echo "Product Price"; echo "</th>";
        // echo "<th>"; echo "Product Description"; echo "</th>";
     

        echo "</tr>";
        echo "</thead>";
        
        echo "<div>" ;
        echo "<div>" ;

        echo "<tbody class='check-body'>";
        while($row=mysqli_fetch_array($res))
        {
            // echo "<table border='2'>";
            echo "<tr>";
            echo "<td>";?> <img src="<?php echo $row["p_image"];?>" height='100' width='100' &nbsp; &nbsp; &nbsp; ><?php echo  "</td>";
            echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
            str_repeat('&nbsp;', 5);
            echo "<td>"; echo $row["p_price"]; echo "</td>";
            // echo "<td>"; echo $row["p_desc"]; echo "</td>";
           
            echo "<td>"; ?> <a href="/Market Shop/admin/product/delete_product.php?id=<?php  echo $row["id"];?> " >Delete   &nbsp; &nbsp; &nbsp; <br><br></a> <?php echo "</td>";
            echo "<td>"; ?> <a href="/Market Shop/admin/product/edit_product.php?id=<?php  echo $row["id"];?> " >Edit</a> <?php echo "</td>";

            echo "</tr>";



        }

        echo "</tbody>";
                                     
        echo "</table>";
        
        ?>
