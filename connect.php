<?php
    $con=mysqli_connect('localhost','root','','st_marys');
    if($con)
    {
        echo  "connection with the database is succesful";

    }
    else
    {
        echo   "connection with the database is not succesful";
    }
?>