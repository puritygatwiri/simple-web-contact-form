<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>

<?php 
   session_start();

   $name = $_SESSION['name'];
   $email = $_SESSION['email'];
   $comments = $_SESSION['comments'];
   $issue = $_SESSION['issue'];

   echo "hello " . $name;
   echo "<br/>";
   echo "your email is: " . $email;
   echo $comments . $issue;
?>
