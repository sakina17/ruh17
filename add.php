<?php

   include "connect.php";
       if(isset($_POST['submit']))
        {
           $user=$_POST['email'];
           $pass=$POST['pass'];
           $sql="INSERT into 'login'('userid','password')values('$user','$pass')";
           mysqli_query($con,$sql);
  
        }
?>
<html>
    <head>
        <title>st_mary codes</title>
</head>
<body>
    <form action="connect.php" method="post">
        <input type="text" name="id" placeholder="enter your id">
        <input type="text" name="username" placeholder="enter your user name">
        <input type="email" name="email" placeholder="enter your email">
        <input type="text" name="contact" placeholder="enter your number">
        <input type="text" name="city" placeholder="enter your user city">
        
        <input type="submit" name="submit">
    </form>
</body>
</html>