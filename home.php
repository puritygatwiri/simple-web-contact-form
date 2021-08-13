<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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

   echo "<p>hello $name </p>";
   echo "<p>your email is: $email</p>";
   echo "<p>issue: $issue</P>";
   echo "<p>comments: $comments</P>";
?>

