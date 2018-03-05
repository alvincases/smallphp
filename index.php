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
<br><br><br><br><br><br><br><div class='logo'><img src='images/samarlogo.jpg' width='100%' height='450px'></div>
<div class='header'><h1 align='center'><marquee scrollamount='15' behavior='alternate'>Welcome to the Top Destinations in Eastern Samar!</marquee></h1></div><br>
<img src='images/map.jpg' height='400px'><br>
<div class='nav'>
<form>
<ul>
<li><input type="submit"  name="logout" value="Logout"></li>
</ul>
</form>
</div>
<style>

.logo{
margin-top:-8px;
}
.nav{
padding:0;
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
border-left: 1px  solid gray;
line-height: 30px;
margin-right: 10px;
}
ul li a{
text-decoration: none;
color: #fff;
display: block;
transition: 0.6s all;
padding-top: 18px;
padding-bottom: 5px;
}
body {

text-align: center;
background:#F8F8FF;
}
.header{
border: 2px, black;
width: 100%;
height: 75px;
background:#20B2AA;
color: black;
margin-top:-75px;
position: absolute;
opacity: 0.8;

}
.category{
float: left;
margin-left: 400px;
border-radius: 10px;
}
.category1{
float: right;
margin-right: 400px;
border-radius: 10px;
}
a{
text-decoration: none;
color: black;
padding: 20px;
}
a:hover{
font-size: 35px;
cursor: pointer;
background-color: #F08080;
border-radius: 10px;
color: white;
transition: 0.3s all;
}
.footer{
padding-top: 5px;
background: #20B2AA;
color: white;
width:100%;;
height: 60px;
text-align: center;
position: absolute;
margin-top: 700px;
}
</style>

</head>
<body>

<div class='category'>
<br><img src='images/Apiton.jpg' width='400px' height='240px' border='1px solid black'>
<h1 align='center'><a href='beaches.php'>Beaches</a></h1>
<img src='images/Ban-awan.jpg' width='400px' height='240px'border='1px solid black'>
<h1 align='center'><a href='falls.php'>Falls</a></h1>
</div>
<div class= 'category1'>
<br><img src='images/Nahulopan.jpg' width='400px' height='240px'border='1px solid black'>
<h1 align='center'><a href='caves.php'>Caves</a></h1>
<img src='images/Balangiga.jpg' width='400px' height='240px'border='1px solid black'>
<h1 align='center'><a href='landmarks.php'>Landmarks</a></h1>
</div>
</body>
<div class='footer'><h3>All Rights Reserved. Copyright @Webizat LTD. 2018</h3></div>


</html>
