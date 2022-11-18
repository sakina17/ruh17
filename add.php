<?php
    if(isset($_POST['submit']))
    {
        include "connect.php";
        $a=$_POST['username'];
        $b=$_POST['email'];
        $c=$_POST['contact'];
        $d=$_POST['city'];
        $sql="INSERT into `login`(`id`,`username`,`email`,`contact`,`city`) values(NULL,'$a','$b','$c','$d')";
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
