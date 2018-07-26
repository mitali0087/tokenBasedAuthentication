<!DOCTYPE html>
<html>
<head>
  <title>Local storage testing</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

  <script>
    //window.alert(localStorage.token);
    var tokenVal = localStorage.token;
    $.post("checkToken.php", {token: tokenVal}, function(data,status){
            alert("Data: " + data + "\nStatus: " + status);
        });
  </script>

</body>
</html>
