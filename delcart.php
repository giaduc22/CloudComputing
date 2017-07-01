<?php
	session_start();
	$idxoa=(int)$_GET['idxoa'];
	include("dbconnect.inc");
	$result=mysql_query("select mahang,tenhang from sanpham where mahang='$idxoa'");
	$rows=@mysql_fetch_array($result);
	if($rows['mahang']>0)
	{
		if($_SESSION["hang"]["$idxoa"])
		{
			unset($_SESSION["hang"]["$idxoa"]);
		}
		$_SESSION['mess']="Xóa sản phẩm [".$rows['tenhang']."] khỏi giỏ hàng thành công";
	}else{
		$_SESSION['mess']="Lỗi Xóa sản phẩm trong giỏ hàng";
	}	
	header('Location:index.php?action=4');
?>
	
