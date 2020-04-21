<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8"> 
<title>index</title> 
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
                <td width="15%" height="20">&nbsp;</td>
            </tr>
            <tr>  
                <td height="169" colspan="6" align="center">
     <form id="formal" name="formal" method="post" action="bookinfolist.php">
         请选择要查找的书籍类型：
         <select name="BookType" id="BookType">
             <option value="1">计算机类图书</option>   
             <option value="2">医药类书籍</option>  
             <option value="3">外语类书籍</option>  
         </select>
         <p><input type ="submit" name="submit" value="提交"/></p>
     </form>
                </td>
        </tr>
 
</body>
</html>

