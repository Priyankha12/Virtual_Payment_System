<html>
<head> <title>Cafeteria</title>
</head> <br><br>
<?php
$max = 150;
$link = mysqli_connect('localhost','priyankha','password','ct');
if(! $link ) {
die('Could not connect: ' . mysql_error()); } $sql = "SELECT count(id) FROM stores "; $retval = mysqli_query( $link, $sql );
if(! $retval ) {
die('Could not get data: ' . mysql_error());}
$row = mysqli_fetch_array($retval, MYSQL_NUM ); $rec_count = $row[0];
if( isset($_GET{'page'} ) ) {
$page = $_GET{'page'} + 1;
$offset = $max * $page} else {
$page = 0;
$offset = 0; }
session_start(); $id=$_SESSION['current_user']; $left_rec = $rec_count - ($page * $max); $sql = "SELECT * ".
"FROM stores ". "WHERE id = '$id'". "LIMIT $offset, $max";
$retval = mysqli_query($link,$sql ); if(! $retval ) {
die('Could not get data: ' . mysql_error());}
while($row = mysqli_fetch_array($retval, MYSQL_ASSOC)) {
echo "Activity ID :{$row['no']} <br> ".
"Activity Performed : {$row['activity']} <br> ". "Amount Paid : {$row['price']} <br> ". "--------------------------------<br>";}
mysqli_close($link); ?>
</body> </html>