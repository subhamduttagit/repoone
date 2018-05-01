<?php

$target_path = "uploads/";
$target_path = $target_path . basename($_FILES["fileToUpload"]["name"]);
$uploadOK = 1;
$docFileType = strtolower(pathinfo($target_path,PATHINFO_EXTENSION));

if (file_exists($target_path)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

/*if($docFileType != "pdf" && $docFileType != "doc" && $docFileType != "docx") 
{
    echo "Sorry, only .pdf, .doc, .docx files are allowed.";
    $uploadOk = 0;
}*/
else{
	if ($uploadOK == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_path)) {
        $conn = new mysqli("localhost", "root", "", "mydb");
        $sql = "INSERT INTO upload_image(`path`) VALUES ('$target_path')";
		if ($conn->query($sql) === TRUE) {

        echo "<br><br>";
		}
        $sql1 = "SELECT path FROM upload_image order by id desc limit 1";
        $result1 = $conn->query($sql1);		
		   
		   if ($result1->num_rows > 0) {

// output data of each row

           while($row = $result1->fetch_assoc()) {

           $path=$row["path"];

           echo "<img src='$path' height='180' width='120' />";

}

}

$conn->close();
echo "<script>window.open('$target_path', '_blank'); window.focus();</script>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}


?>