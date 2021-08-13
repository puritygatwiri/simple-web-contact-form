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
    <div class="main">
   <form method="post">
       <br>
       <label for="Name"></label>
       <input type="text" name="name" placeholder="Name" required class="spacing"><br>
       <label for="Email"></label>
       <input type="email" name="email" id="" placeholder="Email" required class="spacing"><br>
       <select name="issue" class="spacing" required>
           <option value="">Select options</option>
           <option value="query">Query</option>
           <option value="feedback">Feedback</option>
            <option value="complaint">Complaint</option>
            <option value="other">Other</option>
        </select><br>
        <textarea name="comments" id="" cols="30" rows="10" placeholder="Your comments" class="spacing"></textarea><br>
        <input type="submit" name="submit" class="spacing">
   </form> 
    </div>
</body>
</html>

<?php
    session_start();
    
    if (isset($_POST['submit'])) {
        
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['issue'] = $_POST['issue'];

        if(isset($_POST['comments'])) {
            $_SESSION['comments'] = $_POST['comments'];
        }
        header("location:home.php");
    }
?>