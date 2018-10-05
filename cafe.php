<html>
<head> <title>Cafeteria</title> <style>
ul {
list-style-type: none; margin: 0;
padding: 0;
overflow: hidden; background-color: #333;}
li {
float: left;}
li a {
display: block;
color: white;
text-align: center; padding: 14px 16px; text-decoration: none;}
li a:hover { background-color: #111;}
.title{ font-size:1.6em;}
</style> </head>
<body> <?php
$max = 150;
$link = mysqli_connect('localhost','priyankha','password','ct'); if(! $link ) {
die('Could not connect: ' . mysql_error());} $sql = "SELECT count(id) FROM cafe "; $retval = mysqli_query( $link, $sql );
if(! $retval ) {
die('Could not get data: ' . mysql_error());}
$row = mysqli_fetch_array($retval, MYSQL_NUM );
$rec_count = $row[0];
if( isset($_GET{'page'} ) ) {
$page = $_GET{'page'} + 1;
$offset = $max * $page ;} else {
$page = 0;
$offset = 0;} session_start();
$id=$_SESSION['current_user']; $left_rec = $rec_count - ($page * $max); $sql = "SELECT * ".
"FROM cafe ". "WHERE id='$id'" . "LIMIT $offset, $max";
$retval = mysqli_query($link,$sql ); if(! $retval ) {
die('Could not get data: ' . mysql_error());}
while($row = mysqli_fetch_array($retval, MYSQL_ASSOC)) { echo "Item number :{$row['ino']} <br> ".
"Item name : {$row['name']} <br> ". "Amount Paid : {$row['price']} <br> ". "--------------------------------<br>";}
mysqli_close($link); ?>
</body> 
</html>
