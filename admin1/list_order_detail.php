<script type="text/javascript">
  function Delete(){
    var conf = confirm('Xác nhận xóa');
    return conf;
  }
</script>
<?php
include 'connect.php';
include 'include/check_login.php';

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
     CHI TIẾT ĐƠN HÀNG

   </h1>
   <ol class="breadcrumb">
    <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
    <li><a href="#">Chi tiết đơn hàng</a></li>

  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Chi tiết đơn hàng</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <!-- <a href="order_new.php" role="button" class="btn btn-danger btn-md">Thêm mới đơn hàng</a> -->
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Stt</th>
                <th>Mã hóa đơn</th>
                <th>Sản phẩm</th>
                <th>Giá</th> 
                <th>Số lượng</th>             
                <th>Trạng thái</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              <?php 

              $id = $_GET['id'];

              $sql = "SELECT * FROM oderdetail
              INNER JOIN product
              ON product.Product_id = oderdetail.Product_id
              INNER JOIN orderproduct
              ON oderdetail.OrderDetail_id = orderproduct.OrderDetail_id WHERE oderdetail.OrderDetail_id = $id";

              $Stt = 1;
              $result = mysqli_query($link,$sql);

              while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                  <td><?php echo $Stt++; ?></td>                  
                  <td><?php echo $row['Order_id']; ?></td>
                  <td><?php echo $row['Ten_sp'] ?></td>
                  <td><?php echo $row['Price']; ?></td> 
                  <td><?php echo $row['Quantity']?></td>            
                  <td><?php if($row['Status'] == 1) {echo 'Hiển thị';} else {echo 'Không hiển thị';}?></td>
                  <td> 
                    <a onclick=" return Delete();" href="order_delete.php?id=<?php echo $row['Order_id']; ?>">Xóa</a></td>
                  </tr>
                  <?php 
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

