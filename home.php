<!--Bootstrap sidebar--> <!DOCTYPE html> <html lang="en"> <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"> <meta name="description" content="">
<meta name="author" content=“">
<title>Home</title>
<style>
label{
font-size:3em;} </style>
<style> ul {
list-style-type: none;
 margin: 0;
padding: 0;
overflow: hidden; background-color: #333;}
li {
float: left;}
li a {
display: block;
color: white;
text-align: center; padding: 14px 16px; text-decoration: none;}
li a:hover { background-color: #111;}
.title{
font-size:1.6em;}
<body>
<ul>
<li><a href="http://localhost/ct/home.php">Home</a></li> <li><a href="http://localhost/ct/account.php">Account</a></li> <li><a href="http://localhost/ct/library.php">Library</a></li> <li><a href="http://localhost/ct/cafe.php">Cafeteria</a></li> <li><a href="http://localhost/ct/stores.php">Stores</a></li> <li><a href="http://localhost/ct/index.html">Logout</a></li> </ul>
<head>
<meta charset="utf-8" />
<title>Personal Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
$name="";
$mobile=0;
$department="";
$year=0;
$valid=true; $link=mysqli_connect('localhost','priyankha','password','ct');
session_start(); if(!isset($_SESSION['current_user'])){
header('Location: http://localhost/spammer.html'); exit();}
else{
if($link){
$id=$_SESSION['current_user'];
$sql="select * from user_personal where id='$id'"; $result=mysqli_query($link,$sql); $row=mysqli_fetch_row($result); //$email=$row[1];
//$username=$row[1];
/*if($username=="")
echo "User\n";
else
echo "$username\n";*/ $name=$row[1];
$dept=$row[2]; $year=$row[3];

$phone=$row[4];}
else{ header("Location: http://localhost/ct/serverdown.html");
exit();}}?>
<body class="blurBg-false" style="background-color:#EBEBEB">
<link rel="stylesheet" href="user-personal_files/formoid1/formoid-solid-orange.css" type="text/ css" />
<script type="text/javascript" src="user-personal_files/formoid1/jquery.min.js"></script>
<form class="formoid-solid-orange" style="background-color:#ffffff;font-size:14px;font- family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Personal Details</h2></div>
<br><br>
<div class="element-name"><label class="title" style="font-size:1.5em;">Name : <?php echo $name?><span class="icon-place"></span></span></div>
<br>
<div class="element-text"><label class="title" style="font-size:1.5em;">Department : <?php echo $dept?><span class="icon-place"></span></span></div>
<br>
<div class="element-phone"><label class="title" style="font-size:1.5em;">Phone : <?php echo $phone?><span class="icon-place"></span></div></div>
<br>
<div class="element-text"><label class="title" style="font-size:1.5em;">Year : <?php echo $year? ><span class="icon-place"></span></div></div>
<br><br></div>
<!-- Stop Formoid form-->
</body>
</body> </div>
</div> </div>
</div>
<script src="js/jquery.js"></script> <script src="js/bootstrap.min.js"></script> <script>
$("#menu-toggle").click(function(e) { e.preventDefault(); $("#wrapper").toggleClass("toggled");
}); </script>
</body> </html>
