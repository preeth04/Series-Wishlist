<html>
<body>
<form method="post">
<input type="text" name="uname"  >
<input type="password" name="password">
<input type="submit" value="submit">
</form>
<?php
session_start();
$server='localhost';
$user='root';
$password='sample';
$db='sample';
$conn = mysqli_connect($server,$user,$password,$db);
if(!$conn) {
echo "no connnexn";
}
else {
echo "connected";
}

$uname = $_POST["uname"];
$password = $_POST["password"];
$sql2 = "INSERT INTO sampletable (
uname,password) 
VALUES ('$uname','$password')";
if (mysqli_query($conn, $sql2)) {
    echo "TABLE created successfully";
} else {
    echo "Error creating TABLE: " . mysqli_error($conn);
}


?>
<br>
<input type="submit"  name="createdb" value="create table" onclick="location.href='create.php'">
</body>
</html>