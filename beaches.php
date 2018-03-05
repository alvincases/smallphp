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
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<div class='nav'>
<form>
<ul>
<li><input type="submit"  name="logout" value="Logout"></li>
<li><a href="index.php">Home</a></li>
<li><a href="caves.php">Caves</a></li>
<li><b href="#">Beaches</b></li>
<li><a href="landmarks.php">Landmarks</a></li>
<li><a href="falls.php">Falls</a></li>
</ul>
</form>
</div>
<br><br><br><br><br><br><div class='logo' align='center'><h1 align='left'>Eastern Samar's Top:</h1><img src='images/beach1.png'  width='600px' height='300px'></div><br><br>
<div class='header'><h1 align='center'><marquee scrollamount='15' behavior='alternate'>Welcome to the Top Beach Destinations in Eastern Samar!</marquee></h1></div><br>
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
ul input[type="submit"]
{
  color: white;
  font-size: 25px;
  cursor: pointer;
  background: transparent;
border: none;
}
ul input[type="submit"]:hover
{
background: #F08080;
padding: 20px;
color: black;
border-radius: 10px;
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
display:block;
transition: 0.3s all;
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
width: 600px;
text-align: justify;
color: black;
background: transparent;
border-top: none;
}
.edit1{
margin-top: 20px;
border: 1px solid black;
background-color:	#90EE90;
text-align: left;
float: right;
width: 600px;
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
border-radius: 10px;
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
margin-top: 3690px;
}
img{
border-radius: 10px;
}
</style>
</head>
<body>
<?php

$server = "localhost";
$uname = "webizat";
$pword = "Root_000";
$db = "listview";

$connect = new mysqli($server, $uname, $pword, $db);

	if ($connect->connect_error){
		die("Failed!: " . $connect->connect_error);
}

$query = "SELECT * FROM `names`";
$output = $connect->query($query);

	if($output->num_rows > 0){
		while($data = $output->fetch_assoc()){

if($data["name"]=="Apiton Island"){
echo "<div class='pic'>"."<img src='images/Apiton.jpg' width='1000px' height='500px' border='2px'>".'<br>'."</div>";
			echo "<div class='edit1'>"."<br><b>Name: </b>".$data["name"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Location: </b>".$data["Location"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Description: </b>".$data["Description"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>How to go there: </b>".$data["How to go there"] . '<br>'.'<br>'."</div>"."<br>";
}
if($data["name"]=="Dangkalan Pacific Beach Resort"){
echo "<div class='pic'>"."<img src='images/Dangkalan.jpg' width='1000px' height='500px' border='2px'>".'<br>'."</div>";
			echo "<div class='edit1'>"."<br><b>Name: </b>".$data["name"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Location: </b>".$data["Location"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Description: </b>".$data["Description"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>How to go there: </b>".$data["How to go there"] . '<br>'.'<br>'."</div>"."<br>";
}
if($data["name"]=="Bacayaw Resorts Cove"){
echo "<div class='pic'>"."<img src='images/Bacayaw.jpg' width='1000px' height='500px' border='2px'>".'<br>'."</div>";
			echo "<div class='edit1'>"."<br><b>Name: </b>".$data["name"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Location: </b>".$data["Location"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Description: </b>".$data["Description"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>How to go there: </b>".$data["How to go there"] . '<br>'.'<br>'."</div>"."<br>";
}
if($data["name"]=="Liliputan Rocky Beach Resort"){
echo "<div class='pic'>"."<img src='images/Liliputan.jpg' width='1000px' height='500px' border='2px'>".'<br>'."</div>";
			echo "<div class='edit1'>"."<br><b>Name: </b>".$data["name"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Location: </b>".$data["Location"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Description: </b>".$data["Description"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>How to go there: </b>".$data["How to go there"] . '<br>'.'<br>'."</div>"."<br>";
}
if($data["name"]=="Minasangay Island Ecological Park and Resort"){
echo "<div class='pic'>"."<img src='images/Minasangay.jpg' width='1000px' height='500px' border='2px'>".'<br>'."</div>";
			echo "<div class='edit1'>"."<br><b>Name: </b>".$data["name"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Location: </b>".$data["Location"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Description: </b>".$data["Description"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>How to go there: </b>".$data["How to go there"] . '<br>'.'<br>'."</div>"."<br>";
}
if($data["name"]=="Jagnaya Beach"){
echo "<div class='pic'>"."<img src='images/Jagnaya.jpg' width='1000px' height='500px' border='2px'>".'<br>'."</div>";
			echo "<div class='edit1'>"."<br><b>Name: </b>".$data["name"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Location: </b>".$data["Location"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Description: </b>".$data["Description"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>How to go there: </b>".$data["How to go there"] . '<br>'.'<br>'."</div>"."<br>";
}
if($data["name"]=="Canhugas nature Park"){
echo "<div class='pic'>"."<img src='images/Canhugas.jpg' width='1000px' height='500px' border='2px'>".'<br>'."</div>";
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
