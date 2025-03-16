<?php
$servername="localhost";
$dbUsername="Naseem";
$password="]uv6<IvddYlVFcq<";
$dbName="TRP";

$con=new mysqli($servername,$dbUsername,$password,$dbName);

if($con->connect_error){
    die("Connection Failed".$con->connect_error);
}