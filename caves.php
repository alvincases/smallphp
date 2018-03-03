<?php
session_start();

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
?>
<html>
<head>
<div class='nav'>
<ul>
<li><a href="login.php">Logout</a></li>
<li><a href="index.php">Home</a></li>
<li><b href="#">Caves</b></li>
<li><a href="beaches.php">Beaches</a></li>
<li><a href="landmarks.php">Landmarks</a></li>
<li><a href="falls.php">Falls</a></li>
</ul>
</div>
<br><br><br><br><br><br><div class='logo' align='center'><h1 align='left'>Eastern Samar's Top:</h1><img src='images/cave1.png' width='500px' height='200px' margin-top='100px'></div><br><br>
<div class='header'><h1 align='center'><marquee scrollamount='15' behavior='alternate'>Welcome to the Top Cave Destinations in Eastern Samar!</marquee></h1></div><br><br><br>
<style>
.nav{
margin: 0px;
width: 100%;
height: 120px;
position: fixed;
background-color: #20B2AA;
top: 0;
}
ul{
list-style-type: none;
}
ul li{
float: right;
width: 140px;
font-size: 25px;
height: 80px;
text-align: center;
border-right: 1px solid gray;
border-left: 1px  gray;
line-height: 70px;
margin-right: 10px;
}
ul li a{
text-decoration: none;
color: #fff;
display: block;
transition: 0.6s all;
}
ul li b{
text-decoration: none;
color: black;
transition: 0.3s all;
text-align: left;
background-color: #90EE90;
border-radius: 10px;
color: black;
cursor: pointer;
padding: 20px;
}
ul li a:hover{
background-color: #F08080;
border-radius: 10px;
font-size: 25px;
color: black;
padding-left: 7px;
padding-right: 7px;
}
.pic{
text-align: left;
float:left;
margin-top: 20px;
position: absolute left;
}
.edit{
border: 1px solid black;
background-color:#ADD8E6;
text-align: left;
float: right;
width: 450px;
text-align: justify;
}
.edit1{
margin-top: 20px;
border: 1px solid black;
background-color:	#90EE90;
text-align: left;
float: right;
width: 450px;
text-align: justify;
}
body{
background-color:white;
}
.header{
border: 2px, black;
width: 100%;
height: 50px;
background:#20B2AA;
color: black;
margin-top:-20px;
opacity: 1;
position:relative;
z-index: -1;
}
.footer{
padding-top: 5px;
background: #20B2AA;
color: white;
width:100%;
height: 60px;
text-align: center;
position: absolute;
margin-top: 2550px;
}
img{
border-radius: 10px;
}
</style>
</head>
<body>
<?php

$server = "localhost";
$uname = "alvin";
$pword = "Alvin_c4";
$db = "listview";

$connect = new mysqli($server, $uname, $pword, $db);

	if ($connect->connect_error){
		die("Failed!: " . $connect->connect_error);
}

$query = "SELECT * FROM `names`";
$output = $connect->query($query);

	if($output->num_rows > 0){
		while($data = $output->fetch_assoc()){

if($data["name"]=="Linao Cave"){
echo "<div class='pic'>"."<img src='images/Linao.jpg' width='800px' height='416px' border='2px'>".'<br>'."</div>";
			echo "<div class='edit1'>"."<br><b>Name: </b>".$data["name"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Location: </b>".$data["Location"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Description: </b>".$data["Description"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>How to go there: </b>".$data["How to go there"] . '<br>'.'<br>'."</div>"."<br>";
}
if($data["name"]=="Ganap Cave"){
echo "<div class='pic'>"."<img src='images/Ganap.png' width='800px' height='416px' border='2px'>".'<br>'."</div>";
			echo "<div class='edit1'>"."<br><b>Name: </b>".$data["name"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Location: </b>".$data["Location"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Description: </b>".$data["Description"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>How to go there: </b>".$data["How to go there"] . '<br>'.'<br>'."</div>"."<br>";
}
if($data["name"]=="Talubagnan Cave"){
echo "<div class='pic'>"."<img src='images/Talubagnan.jpg' width='800px' height='416px' border='2px'>".'<br>'."</div>";
			echo "<div class='edit1'>"."<br><b>Name: </b>".$data["name"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Location: </b>".$data["Location"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Description: </b>".$data["Description"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>How to go there: </b>".$data["How to go there"] . '<br>'.'<br>'."</div>"."<br>";
}
if($data["name"]=="Nahulopan Cave"){
echo "<div class='pic'>"."<img src='images/Nahulopan.jpg' width='800px' height='416px' border='2px'>".'<br>'."</div>";
			echo "<div class='edit1'>"."<br><b>Name: </b>".$data["name"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Location: </b>".$data["Location"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Description: </b>".$data["Description"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>How to go there: </b>".$data["How to go there"] . '<br>'.'<br>'."</div>"."<br>";
}
if($data["name"]=="Linal-an Cave"){
echo "<div class='pic'>"."<img src='images/Linal-an.png' width='800px' height='416px' border='2px'>".'<br>'."</div>";
			echo "<div class='edit1'>"."<br><b>Name: </b>".$data["name"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Location: </b>".$data["Location"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Description: </b>".$data["Description"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>How to go there: </b>".$data["How to go there"] . '<br>'.'<br>'."</div>"."<br>";
}
}
}
?>
</body>
<div class='footer'><h3>All Rights Reserved. Copyright @Webizat LTD. 2018</h3></div>
</html>
