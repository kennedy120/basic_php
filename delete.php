<?php
//GET
//github.com
//bitbucket.com

if (isset($GET["id"]))
{
    $conn=mysqli_connect("localhost","root","","shule");
    extract($_GET);
    $sql = "delete from employees where id=$id";
    mysqli_query($conn, $sql);

}
header("location:fetch.php");