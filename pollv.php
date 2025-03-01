<html>
<head></head>
<body>

<?php
if (isset($_POST['sb']));
$servername="localhost";
$username="root";
$password="";
$dbname="pollv";
$conn= mysqli_connect($servername, $username, $password, $dbname);

$insert="insert into pollv values($Fsname,$Email)";
$q=mysql_query($conn,$insert)

if ($q)
{
	echo"yes";

}
else{
echo mysql_error($conn);
}
?>