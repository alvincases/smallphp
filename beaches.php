<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<div class='nav'>
<ul>
<li><a href="login.php">Logout</a></li>
<li><a href="Category.php">Home</a></li>
<li><a href="caves.php">Caves</a></li>
<li><b href="#">Beaches</b></li>
<li><a href="landmarks.php">Landmarks</a></li>
<li><a href="falls.php">Falls</a></li>
</ul>
</div>
<br><br><br><br><br><br><div class='logo' align='center'><h1 align='left'>Eastern Samar's Top:</h1><img src='beach1.png' width='600px' height='300px' margin-top='100px'></div><br><br>
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
width: 450px;
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
width: 450px;
text-align: justify;
}
body{
background-color:white;
}
.header{
border: 2px, black;
width: 1270px;
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
width:1270px;;
height: 60px;
text-align: center;
position: absolute;
margin-top: 3000px;
}
img{
border-radius: 10px;
}
</style>
</head>
<body>
<?php

$server = "localhost";
$uname = "user";
$pword = "root_user";
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
echo "<div class='pic'>"."<img src='Apiton.jpg' width='800px' height='416px' border='2px'>".'<br>'."</div>";
			echo "<div class='edit1'>"."<br><b>Name: </b>".$data["name"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Location: </b>".$data["Location"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Description: </b>".$data["Description"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>How to go there: </b>".$data["How to go there"] . '<br>'.'<br>'."</div>"."<br>";
}
if($data["name"]=="Dangkalan Pacific Beach Resort"){
echo "<div class='pic'>"."<img src='Dangkalan.jpg' width='800px' height='416px' border='2px'>".'<br>'."</div>";
			echo "<div class='edit1'>"."<br><b>Name: </b>".$data["name"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Location: </b>".$data["Location"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Description: </b>".$data["Description"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>How to go there: </b>".$data["How to go there"] . '<br>'.'<br>'."</div>"."<br>";
}
if($data["name"]=="Bacayaw Resorts Cove"){
echo "<div class='pic'>"."<img src='Bacayaw.jpg' width='800px' height='416px' border='2px'>".'<br>'."</div>";
			echo "<div class='edit1'>"."<br><b>Name: </b>".$data["name"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Location: </b>".$data["Location"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Description: </b>".$data["Description"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>How to go there: </b>".$data["How to go there"] . '<br>'.'<br>'."</div>"."<br>";
}
if($data["name"]=="Liliputan Rocky Beach Resort"){
echo "<div class='pic'>"."<img src='Liliputan.jpg' width='800px' height='416px' border='2px'>".'<br>'."</div>";
			echo "<div class='edit1'>"."<br><b>Name: </b>".$data["name"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Location: </b>".$data["Location"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Description: </b>".$data["Description"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>How to go there: </b>".$data["How to go there"] . '<br>'.'<br>'."</div>"."<br>";
}
if($data["name"]=="Minasangay Island Ecological Park and Resort"){
echo "<div class='pic'>"."<img src='Minasangay.jpg' width='800px' height='416px' border='2px'>".'<br>'."</div>";
			echo "<div class='edit1'>"."<br><b>Name: </b>".$data["name"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Location: </b>".$data["Location"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Description: </b>".$data["Description"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>How to go there: </b>".$data["How to go there"] . '<br>'.'<br>'."</div>"."<br>";
}
if($data["name"]=="Jagnaya Beach"){
echo "<div class='pic'>"."<img src='Jagnaya.jpg' width='800px' height='416px' border='2px'>".'<br>'."</div>";
			echo "<div class='edit1'>"."<br><b>Name: </b>".$data["name"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Location: </b>".$data["Location"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>Description: </b>".$data["Description"] . '<br>'."</div>";
			echo "<div class='edit'>"."<br><b>How to go there: </b>".$data["How to go there"] . '<br>'.'<br>'."</div>"."<br>";
}
if($data["name"]=="Canhugas nature Park"){
echo "<div class='pic'>"."<img src='Canhugas.jpg' width='800px' height='416px' border='2px'>".'<br>'."</div>";
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
