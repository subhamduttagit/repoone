<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn,"mydb") or die(mysql_error($conn));
if(isset($_GET['image_id'])) {
	$sql = "SELECT imageType,imageData FROM output_images WHERE imageId=" . $_GET['image_id'];
	$result = mysqli_query($conn,"$sql") or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error($conn));
	$row = mysqli_fetch_array($result);
	header("Content-type: " . $row["imageType"]);
	echo $row["imageData"];
	
	//echo base64_encode($row["imageData"]);
	
}
mysqli_close($conn); 
?>