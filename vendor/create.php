<?php

require "db.php";

$title = $_POST["title"];
$body = $_POST["body"];
$date = date("Y-m-d");

$post = mysqli_query($db, "INSERT INTO `posts` (`id`, `title`, `body`, `date`) VALUES (NULL, '$title', '$body', '$date')");

if(!$post){
    die("Error add new post!");
}

die("Post is public!")

?>