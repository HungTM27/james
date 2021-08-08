
<?php
if($action="insert")
{
	$hoten=$_POST['hoten'];
	$dienthoai=$_POST['dienthoai'];
	$diachi=$_POST['diachi'];
	$email=$_POST['email'];
	$ngay=date('Y-m-d');
	if(isset($_SESSION['id'])){		
		$sql="select * from users where id ='".$_SESSION['id']."'";
		$row=executeQuery($sql);
		$idnd=$row['id'];
		$sql="INSERT INTO orders(id,created_date,status,customer_name,customer_email,customer_phone_number,buyer_id,address,voucher_id,payment_amount) VALUES ('$id','$created_date', '1', '$customer_name', '$customer_email', '$customer_phone_number','$buyer_id','$address','$voucher_id','$payment_amount')";
	}
//	else $sql="INSERT INTO orders(hoten,diachi,dienthoai,email,ngaydathang,trangthai) VALUES ('$hoten', '$diachi', '$dienthoai', '$email', '$ngay','1')";
//	mysqli_query($sql);
//    $mahd=mysqli_insert_id();   //The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.


	//echo "mã hóa đơn: "+$mahd;

	//http://www.qhonline.info/php-can-ban/51/bai-19--viet-ung-dung-tao-gio-hang-shopping-cart-phan-1.html
	//foreach($_SESSION[‘cart'] as $k=>$v)
	//Với $k có ý nghĩa tương đương $id quyển sách và $v tương đương là số lượng của mặt hàng trong giỏ hàng. Vậy nếu tồn tại biến $k, thì tức có nghĩa là trong giỏ hàng có sách. Khi đó ta sử dụng một biến đã để báo hiệu rằng sách có tồn tại trong giỏ hàng hay không.
//	foreach($_SESSION['cart'] as $stt => $soluong)  //lần lượt lấy các thông tin về mặt hàng trong giỏ thông qua idsp, dùng biến duyệt mảng $stt
//            {
//               echo $stt;
//			   $sql="select * from sanpham where idsp=$stt";
//               $rows=mysqli_query($link,$sql);//thực thi query
//               $row=mysqli_fetch_array($rows);//lấy về kết quả query lưu vào trong mảng $row
//               //$mahd=$row['mahd'];
//               $tensp=$row['tensp'];
//
//               $gia=$row['gia']*((100-$row['khuyenmai1'])/100);
//
//               $sql1 ="insert into chitiethoadon(mahd,idsp,Soluong,gia,phuongthucthanhtoan) values('$mahd','$stt','$soluong','$gia','$phuongthuc')";
//               mysqli_query($link,$sql1);
//            }
//    foreach($_SESSION['cart'] as $stt => $soluong)
//            {
//
//               $sql="select * from sanpham where idsp=$stt";
//               $rows=mysqli_query($link,$sql);
//               $row=mysqli_fetch_array($rows);
//               $ban=$row['daban']+$soluong;
//			   //tuộc sll
//			   $soluongcon = $row['soluong']-$soluong;
//               $sql="UPDATE sanpham SET daban='$ban', soluong='$soluongcon' WHERE idsp = $stt";
//
//                mysqli_query($link,$sql);
//            }
//
//unset($_SESSION['cart']);
}
?>