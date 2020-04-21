<?php
$servername = "localhost";
$username = "root";
$password = "123456";
 $database_conn="bookdb";
// 创建连接
$conn = new mysqli($servername, $username, $password,$database_conn);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

?>