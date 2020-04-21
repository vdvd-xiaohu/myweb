
<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname="bookdb";
$conn = new mysqli($servername, $username, $password,$dbname);
mysqli_set_charset($conn,'utf8');
if(isset($_POST['BookName']))
{
    $bookname=$_POST['BookName'];
     $bookprice=$_POST['BookPrice'];
      $bookauthor=$_POST['BookAuthor'];
       $booktype=$_POST['BookType'];
       $insertSQL="insert into booktable(bookname,bookauthor,booktype,bookprice) values ('$bookname','$bookauthor',$booktype,$bookprice)";
      // $Result1= mysqli_query($conn, $insertSQL) or die(mysqli_error($conn));    
}

if ($conn->query($insertSQL) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $SQL . "<br>" . $conn->error;
}

$conn->close();
?>


