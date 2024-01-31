<?php

$conn = mysqli_connect('localhost','root','!Kennmativo9402','user_db');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}