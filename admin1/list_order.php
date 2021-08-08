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

$sqlOder = "SELECT * from orders";
$stmt = $conn->prepare($sqlOder);
$stmt->execute();
$resultOder = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     DANH SÁCH ĐƠN HÀNG

   </h1>
   <ol class="breadcrumb">
    <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
    <li><a href="#">Danh sách đơn hàng</a></li>

  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Danh sách đơn hàng</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <!-- <a href="order_new.php" role="button" class="btn btn-danger btn-md">Thêm mới đơn hàng</a> -->
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Stt</th>
                <th>Khách hàng</th>
                <th>Thời gian</th>
                <th>Tổng tiền hóa đơn</th>              
                <th>Trạng thái</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $Stt = 1;
                foreach ($resultOder as $asOrder) {
              ?>
              <tr>
                <td><?php echo $Stt++; ?></td>                  
                <td><?php echo $asOrder['Name_customer']; ?></td>
                <td><?php $date = gmdate("d/m/Y H:i A", $asOrder['Timee'] + 7*3600);
                                echo $date; ?></td>
                <td><?php echo $asOrder['PriceAll']; ?></td>             
                <td><?php if($asOrder['Status'] == 1) {echo 'Hiển thị';} else {echo 'Không hiển thị';}?></td>
                <td><a href="list_order_detail.php?id=<?php echo $asOrder['OrderDetail_id']; ?>">Chi tiết</a>  |
                <a onclick="return Delete();" href="order_delete.php?id=<?php echo $asOrder['Order_id']; ?>">Xóa</a></td>
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
    </div>
    <!-- /.col -->
  </div>
  <!-- /.asOder -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include 'include/footer.php';
?>

