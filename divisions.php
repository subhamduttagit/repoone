<html>
<head>
<style type = "text/css">
#wrapper
     {
	  height: 1000px;
	  width: 1000px;
	  background-color:green;
	  float:center;
	  margin:auto;
	 }

#header{
   height:100px;
   width:1000px;
   background-color:DarkSeaGreen;
   float:left;
}
#menu
     {
	  height: 800px;
	  width: 150px;
	  background-color:DarkKhaki;
	  float:left;
	 }
#content
     {
	  height: 800px;
	  width: 805px;
	  background-color:white;
	  float:left;
	 }	
#comment
     {
	  height: 800px;
	  width: 45px;
	  background-color:cyan;
	  float:left;
	 }		
#footer
     {
	  height:100px;
	  width:1000px;
	  background-color:DarkCyan;
	  float:left;
	 }		 
#h1{
	 height:100px;
	 width: 150px;
	  background:url(images/chandler.jpg);
	  background-size: 150px 100px;
	  float:left;
	 }
#h2{
	 height:100px;
	 width: 700px;
	  background-color:MediumSlateBlue;
	  float:left;
	 }
	 
ul
	 {
	  list-style-type:none;
      margin:0;
      padding:0;
      overflow:hidden;
      background-color:green;   	  
	 }
	 
	 li
	 {
	  float:left;  
	 }
	 
	 li a
	 {
	  display:block;
	  color:white;
	  text-align:center;
	  padding:14px 16px;
	  text-decoration:none;
	 }
	 
	 li a:hover
	 {
	  background-color:yellowgreen;
	 }
	 
	 #c1
	 {
	   height : 800px;
	   width : 350px;
	   background-color : cornsilk;
	   float : left;
	 }
	 
	 #c2
	 {
	   height : 800px;
	   width : 350px;
	   background-color : white;
	   float : left;
	 }
	 
	 #co1
	 {
     height:200px;
	 width: 150px;
	  background-color:DarkOliveGreen ;
	  float:right;
	 }


</style>
</head>

<body>

<div id = "wrapper">

<div id = "header">
<div id = "h1"></div>
<div id = "h2">
<ul> 
    <li> <a href = "register.html"> Registration form </a> </li>
	<li> <a href = "home.html"> Login form </a> </li>
    <li><a href = "gallery.html">Gallery</a></li>
	<li><a href = "contact.html">Contact us</a></li>
	<li><a href = "about.html">About us</a></li>
 </ul>
</div>
<div id = "h3"></div>
</div>
<div id = "menu"></div>
<div id = "content">
<div id = "co1">

<form action="upload.php" method="post" enctype="multipart/form-data">
Select file to upload
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="Submit" value="Upload Resume" name="submit" align="right">
</form>
</div>
</div>
<div id = "comment"></div>
<div id = "footer"></div>



</div>


</body>

</html>