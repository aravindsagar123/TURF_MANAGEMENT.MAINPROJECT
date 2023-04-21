<?php
include 'connection.php';

$id1=$_GET['id'];
mysqli_query($con,"UPDATE `customer_registration` SET `aproval_status`='1' WHERE customer_id='$id1'");
?>