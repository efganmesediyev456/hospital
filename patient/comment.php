<?php

$stars=$_POST['stars'];
$review=$_POST['review'];
$id=$_POST['appo_id'];
include("../connection.php");


$sql="insert into comment(stars, review,appo_id) values('$stars','$review','$id')";
$database->query($sql);

header('Location: /hospitalson/hospital/patient/appointment.php');

