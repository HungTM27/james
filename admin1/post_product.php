<?php 
session_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED& ~E_WARNING);
include 'connect.php';
include 'include/check_login.php';
?>



<!-- <?php 
  //truy van danh muc san pham
  if(isset($_POST['Save']))
  {
    $name = $_POST['name'];
    $sku = $_POST['sku'];
    $cate_id = $_POST['categories'];
    $disabled_comment = $_POST['disabled_comment'];
    $price = $_POST['price'];
    $sale_price = $_POST['sale_price'];
    $detail = $_POST['detail'];
    $view_count = $_POST['view_count'];
    $stock_up = $_POST['stock_up'];
    $status = $_POST['status'];
    $rating = $_POST['rating'];

    $feature_image = $_FILES['feature_image']['name'];
    $Tmp = $_FILES['feature_image']['tmp_name'];

    $sql = "SELECT * FROM products";
    $result = mysqli_query($link,$sql);

    $count = $result -> num_rows;
    if($count == 0){
    $feature_image .=  $file['name'];
    move_uploaded_file($Tmp, "../img/product/" . $feature_image);
    $feature_image = "img/product/" . $feature_image;

      $sql = "INSERT INTO products(name,sku,cate_id,disabled_comment,price,sale_price,detail,feature_image,view_count,stock_up,status,rating)  VALUES ('$name','$sku','$cate_id','$disabled_comment','$price','$sale_price','$detail','$feature_image','$view_count','$stock_up','$status','$rating')";

      mysqli_query($link,$sql);
      header('location: list_product.php');
    }
    else{
      $product_error = "Tên sản phẩm đã tồn tại";
    }
  }
?> -->










<?php 
  //truy van danh muc san pham
$sqlDm = "SELECT * FROM categories WHERE id > 0";
$resultDm = mysqli_query($link,$sqlDm);

  // them san pham
if(isset($_POST['Submit']))
{
  $name = $_POST['name'];
  // $sku = "MTSX-".rand(100,1000);
  $sku = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
  $cate_id = $_POST['categories'];
  $disabled_comment = $_POST['disabled_comment'];
  $price = $_POST['price'];
  $sale_price = $_POST['sale_price'];
  $detail = $_POST['detail'];
  $view_count = $_POST['view_count'];
  $stock_up = $_POST['stock_up'];
  $status = $_POST['status'];
  $rating = $_POST['rating'];
  $file = $_FILES['feature_image'];

    $filename="";
    if ($file['size'] > 0) {
      $filename = uniqid() . "-" . $file['name'];
      move_uploaded_file($file['tmp_name'], "../img/product/" . $filename);//tmp_name: vị trí lưu trữ tạm thời
      $filename = "img/product/" . $filename;
    }

  $insertUserQuery = "INSERT INTO products(name,sku,cate_id,disabled_comment,price,sale_price,detail,feature_image,view_count,stock_up,status,rating)  VALUES ('$name','$sku','$cate_id','$disabled_comment','$price','$sale_price','$detail','$filename','$view_count','$stock_up','$status','$rating')";
  $host = "localhost";//127.0.0.1
  $dbname = "duan1";
  $dbusername = "root";
  $dbpass = "";

  $conn = new PDO("mysql:host=$host; dbname=$dbname;charset=utf8", $dbusername, $dbpass);
  $stmt = $conn->prepare($insertUserQuery);
  $stmt->execute();
  header('location: list_product.php');
    
}
else{
  $product_error = "Tên sản phẩm đã tồn tại";
}

?>