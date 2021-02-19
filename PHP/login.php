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
;
}
/*
if(isset($_POST ["uname"]) && isset($_POST["pswd"]))
{

$input_uname= $_POST["uname"];
$input_pswd= $_POST["pswd"];

$query=mysql_query("SELCT * FROM signupreg WHERE=' $input_uname'")
}

*/

$myusername = mysqli_real_escape_string($conn,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['pswd']); 
      
      $sql = "SELECT id FROM signupreg WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row;
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count >= 1) {
         //session_register("myusername");
     //    $_SESSION['login_user'] = $myusername;
         
         header("location: homepage.html");
      }else {
      
         echo  "<script type='text/javascript'>alert('INVALID USERNAME AND PASSWORD');
         window.location.href='login.html'; </script>";
        // header ("location:login.html");
      }
   
?>
