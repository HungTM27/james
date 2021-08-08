<script type="text/javascript">
  function Delete(){
    var conf = confirm('Xác nhận xóa');
    return conf;
  }
</script>
<?php
include 'connect.php';
include 'include/check_login.php';

$sql = "SELECT * from products";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sqlSp = "SELECT * from products where cate_id >0";
$stmt = $conn->prepare($sqlSp);
$stmt->execute();
$resultSp = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!-- <?php
$show = mysqli_query($link,"SELECT * FROM categories WHERE status=1");
while($show1 = mysqli_fetch_array($show))
{
  $madm1 = $show1['id'];  
  $tendm1 = $show1['name'];
  echo "<option value='".$madm1."'>".$tendm1."</option>"; 
  $show2 = mysqli_query($link,"SELECT * FROM categories WHERE status='".$madm1."'");
}
?> -->

<?php 
// $name_category = $_POST['name'];
  $sqlDm = "SELECT * from categories";
  $stmt = $conn->prepare($sqlDm);
  $stmt->execute();
  $resultDm = $stmt->fetchAll(PDO::FETCH_ASSOC);

 ?>

<!-- Left side column. contains the logo and sidebar -->
<?php
include 'include/header.php';
include 'include/aside.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     DANH SÁCH SẢN PHẨM

   </h1>
   <ol class="breadcrumb">
    <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
    <li><a href="#">Danh sách sản phẩm</a></li>

  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Danh sách sản phẩm</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <a href="product_new.php" role="button" class="btn btn-danger btn-md">Thêm mới Sản Phẩm</a>
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Stt</th>
                <th>Hành động</th>
                <th>Tên sản phẩm</th>
                <th>Mã sản phẩm</th>
                <th>Danh mục</th>
                <!-- <th>Tên hãng sản xuất</th> -->
                <th>Giá sản phẩm(gốc)</th>
                <th>Sale</th>
                <th>Ảnh đại diện</th>         
                <th>Lượng xem</th>    
                <th>Tình trạng hàng</th>
                <th>Trạng thái</th>
                <th>Rate</th>   
              </tr>
            </thead>
            <tbody>
              <!-- <?php 
                $Stt = 1;
                foreach ($result as $r) {
                  ?>
                  <tr>
                    <td><?=$Stt++; ?></td>                  
                    <td><?=$r['name'] ?></td>                 
                    <td><?=$r['sku'] ?></td>
                    <td>
                      <?php 
                    $sql = "SELECT * FROM categories where id
                    -- ORDER BY id DESC
                    ";

                    $result = mysqli_query($link,$sql);
                    if($result -> num_rows > 0){
                      while($row = mysqli_fetch_assoc($result)){
                        ?><?php echo $row['name']; ?>
                        <?php 
                      }
                    }
                    ?>
                    </td>
                    <td><?=number_format($r['price']) . "đ" ?></td>
                    <td><?=number_format($r['sale_price']) . "đ" ?></td>
                    <td><img width="100px" max-height="150px" src="../<?php echo $r['feature_image']; ?>"></td>
                    <td><?=$r['view_count'] ?></td>
                    <td><?php if($r['stock_up'] == 1) {echo 'Còn hàng';} elseif($r['stock_up'] == 0) {echo 'Không còn hàng';}?></td>                
                    <td><?php if($r['status'] == 1) {echo 'Hiển thị';} else {echo 'Không hiển thị';}?></td>                
                    <td><?=$r['rating'] ?></td>
                    <td><a href="product_edit.php?id=<?php echo $r['id']; ?>">Sửa</a>  |  
                      <a onclick="return Delete();" href="product_delete.php?id=<?php echo $r['id']; ?>">Xóa</a></td>
                    </tr>
                  <?php
                } 
              ?> -->


              <?php 
                $Stt = 1;

                $sql = "SELECT * FROM products
                -- INNER JOIN categories
                -- ON categories.id = products.cate_id
                ORDER BY id DESC
                ";

                $result = mysqli_query($link,$sql);
                if($result -> num_rows > 0){
                  while($row = mysqli_fetch_assoc($result)){
              ?>
              <tr>
                <td><?php echo $Stt++; ?></td>   
                <td><a href="product_edit.php?id=<?php echo $row['id']; ?>">Sửa</a>  |  
                    <a onclick="return Delete();" href="product_delete.php?id=<?php echo $row['id']; ?>">Xóa</a>
                </td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['sku']; ?></td>
                <td><?php echo $row['cate_id']; ?></td>
                <td><?php echo number_format($row['price'],0,'','.'); ?></td>
                <td><?php echo number_format($row['sale_price'],0,'','.'); ?></td>
                <td><img width="100px" max-height="150px" src="../<?php echo $row['feature_image']; ?>"></td>
                <td><?php echo $row['view_count'];?></td>
                <td><?php if($row['stock_up'] == 1) {echo 'Còn hàng';} elseif($row['stock_up'] == 0) {echo 'Không còn hàng';}?></td>                
                <td><?php if($row['status'] == 1) {echo 'Hiển thị';} else {echo 'Không hiển thị';}?></td>
                <td><?=$row['rating'] ?></td>
                
              </tr>
              <?php 
                }
              }
               ?>
            </tbody>

          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->


      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include 'include/footer.php';
?>

