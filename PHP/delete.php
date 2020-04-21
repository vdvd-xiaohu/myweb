<?php require_once ('connections/conn.php'); ?>
<?php
    if(isset($_GET['BookID']))
        $bookid=$_GET['BookID'];
    else {
        header("Location:deletebook.php");
}
$query_book="delete from booktable where bookid=".$bookid;
$restult= mysqli_query($conn, $query_book) or die(mysqli_error($conn));

if($restult){
    echo "删除成功！";
}
else{
    echo "删除失败!";
}
?>
<meta http-equiv="refresh" content="1" url='delete.php'>
