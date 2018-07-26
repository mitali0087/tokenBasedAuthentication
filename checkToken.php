<?php

$token = (int)$_POST["token"];
//echo $token;
$diff = time() - $token;
//echo $diff;
if($diff < 1800){
  /*myObject->validity = "Yes";
  myJSON = json_encode(myObject);
  echo $myJSON;*/
  echo "Valid"; 
}
else{
  /*myObject->validity = "No";
  myJSON = json_encode(myObject);
  echo $myJSON;*/
  echo "Invalid";
}

?>
