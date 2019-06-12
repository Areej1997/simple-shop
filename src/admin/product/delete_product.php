<?php
$link = mysqli_connect("localhost","root","pumba");
mysqli_select_db($link,"market");
$id=$_GET["id"];
mysqli_query($link,"delete from products where id=$id");

?>

<script type="text/javascript">
window.location ="/Market Shop/admin/display_item.php";
</script>