<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="database2";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if($conn->connect_error)
{
    die("connection Failed:" . $conn->connect_error());

}
    $author = $_POST['author'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $year = $_POST['year'];
    $isbn = $_POST['isbn'];

$sql_query = "INSERT INTO library_details (author,title,category,year,isbn)
    VALUES ('$author','$title','$category','$year','$isbn')";

if($conn->query($sql_query)=== True){
    echo "Details insert successfull ";
}
else
{
    echo "Error:" .$sql_query . "<br>" . $conn->error;
}
$conn->close();
?>