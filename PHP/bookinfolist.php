<?php require_once ('connections/conn.php');?>
<?php
$colname_BookInfo="-1";//假设图书类别是-1
if(isset($_POST['BookType']))
{
    $colname_BookInfo=$_POST['BookType'];//下拉列表框的name值
}
//sprinf 函数生成字符串
$query_BookInfo= sprintf("select *from booktable where booktype=%s",$colname_BookInfo);
mysqli_query($conn,"set names 'utf8'");//避免出现乱码
$bookinfo= mysqli_query($conn, $query_BookInfo) or die(mysqli_error($conn));
$row_bookinfo= mysqli_fetch_assoc($bookinfo);
?>
<head>
    <meta http-equiv="Content-Type" content="text/html";charset="utf8"/>
    <title>网上书店</title>
</head>
 <body bgcolor="#f4f4f4">
        <table width="100%" border="0" align="center">
            <tr>
                <td width="27%" height="68" rowspan="2">
                    <img width="200" height="106" src="images/书店1.jpg"/>
                </td>
                <td height="68" colspan="4">
                    <font face="隶书"  size="+4" color="#ccc00">网上书店</font>
                </td>
                <td width="10%" rowspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="4" align="center">欢迎光临我们的网站</td>
            </tr> 
            <tr>
                <td width="15%" height="20" align="left" valign="middle">
                    <a href="index.php">首页</a>
                </td>
                <td width="15%" height="20" align="left" valign="middle">
                    <a href="allbooklist.php">所有图书</a>
                </td>
                <td width="20%" height="20" align="left" valign="middle">
                    <a href="allbooklist_pg.php">所有图书（分页）</a>
                </td>
                <td width="15%" height="20" align="left" valign="middle">
                    <a href="insertbook.php">插入图书</a>
                </td>
                <td width="20%" height="20" align="left" valign="middle">
                    <a href="deletebook.php">编辑删除图书</a>
                </td>
                <br/>
                <td width="15%" height="20">&nbsp;</td>
                <td width="15%" height="20">&nbsp;</td>
               
            
            </tr>
<?php do{ ?>
<tr>
    <td width="%60" align="center">
        <?php echo $row_bookinfo['bookname'];?>
    </td>
    <td width="%40" align="left">
        <?php echo $row_bookinfo['bookauthor'];?>
    </td>
    <td width="%40" align="center">
        <?php echo $row_bookinfo['bookprice'];?>
    </td>
</tr>
<?php } while($row_bookinfo= mysqli_fetch_assoc($bookinfo));?>
