<?php 
	session_start();
	if(!isset($_SESSION['loginadmin']))
	{
		//not logion
		$_SESSION['mess']="Bạn không có quyền truy cập trang";
		return header('Location:index.php?action=4');
	}
	require("dbconnect.inc");
	if($_GET['update']!=""&&$_GET['update']>0)
	{
		$id=(int)$_GET['update'];
		$result1=mysql_query("UPDATE `donhang` SET trangthai=1 WHERE id='$id'");
		if(mysql_affected_rows()==1)
		{
			
		}
		
		$_SESSION['mess']="Cập nhật thành công";
	}
	if($_GET['del']!=""&&$_GET['del']>0)
	{
		$id=(int)$_GET['del'];
		$result1=mysql_query("DELETE FROM `donhang` WHERE id='$id'");
		if(mysql_affected_rows()==1)
		{
			
		}
		$_SESSION['mess']="Xóa thành công";
	}
	return header('Location:index.php?action=109');
?>