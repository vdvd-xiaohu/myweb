<?php require_once ('connections/conn.php');?>
<?php 
mysqli_query($conn,'set names utf8');
$query_book="select *from booktable";
$Book= mysqli_query($conn, $query_book) or die(mysqli_error($conn));
$row_book= mysqli_fetch_assoc($Book);
?>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <title>网上书店-全部图书列表</title>
</head>
<body bgcolor="#f4f4f4">
    <table width="100%" border="0" align="center">
        <tr>
            <td width="27%" height="68" rowspan="2">
                <img width="200" height="106" src="images/书店1.jpg"/>
            </td>
            <td height="68" colspan="4">
                <font face="隶书" size="+4" color="#cccc00">网上书店</font>
            </td>
            <td width="10%" rowspan="2">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="4" align="center">欢迎光临我们的书店</td>
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
                <td width="15%" height="20">&nbsp;</td>
        </tr>
        <tr>
            <td height="169" colspan="6" align="center">
                <table width="100%" border="0">
                    <tr><td colspan="4" align="center">书店所有图书</td></tr>
                    <tr valign="middle">
                        <td align="center">书名</td>
                         <td align="center">作者</td>
                          <td align="center">图书类型</td>
                           <td align="center">删除</td>
                    </tr>
                      <?php do { ?>
                  <tr valign="middle" align="center">
                      <td><?php echo $row_book['bookname'];?></td>
                      <td><?php echo $row_book['bookauthor'];?></td>
                      <td><?php echo $row_book['booktype'];?>
<!--                          <input name="BookID" type="hidden" id="BookID" value="<?php echo $row_book ?>" />-->
                      </td>
                      
                  <td>
                          <a href="delete.php?BookID=<?php echo $row_book['bookid'] ?>">删除</a> 
                          <a href="edit.php?BooID=<?php echo $row_book['bookid'] ?>">编辑</a>
                      </td>
                  </tr>
                  <?php }while ($row_book= mysqli_fetch_assoc($Book)); 
                  ?>
                </table>
            </td>
        </tr>
    </table>
</body>
                  
                 