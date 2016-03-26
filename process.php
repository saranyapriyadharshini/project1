
<?php include 'database.php'; ?>
<?php

if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];
mysqli_query($connect," INSERT INTO user_data(username,password)VALUES('$username','$password')");
if(mysqli_affected_rows($connect)>0){
echo "<p>New record added</p>";
}else{
echo "Employee not added<br/>".mysqli_error($connect);
mysqli_close($connect);
}}
?>