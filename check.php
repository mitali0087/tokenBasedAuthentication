<?php

$username = "";
$psw = "";

if(isset($_POST['submit'])){
  if (empty($_POST['username'])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST['username']);
  }

  if (empty($_POST['psw'])) {
    $pswErr = "Password is required";
  } else {
    $psw = test_input($_POST['psw']);
  }

  $serverName = "localhost";
  $userName = "root";
  $password = "";
  $dbName = "api_db";

  $conn = mysqli_connect($serverName, $userName, $password, $dbName);

  if(mysqli_connect_errno()){
	echo "Connection failed: " . mysli_connect_error();
  }

  $sql_query = "SELECT password FROM loginDetails WHERE username='$username';";
  $result = mysqli_query($conn, $sql_query);
  $row = mysqli_fetch_array($result);
  if($row["password"] == $psw){
    echo "Password is correct!!";
    $timeStamp = time();
    echo $timeStamp;
    echo "<script>
      localStorage.setItem('token', $timeStamp); 
      </script>";
  }
  else
    echo "Password is incorrect!!";

  mysqli_close($conn);
}
  
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>