<?php
    include 'include/check_login.php';
    include 'function.php';
    include 'counter.php';
?>
<?php 
$sqlAdmin = "SELECT * from users where role_id=0";
$stmt = $conn->prepare($sqlAdmin);
$stmt->execute();
$result = $stmt-> fetch(PDO::FETCH_ASSOC);
 ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script src="plugins/jQuery/jquery-3.1.1.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <a href="../index.php" class="logo">
        <span class="logo-mini"><b>James</b></span>
        <span class="logo-lg"><b>James</b></span>
      </a>
    </header>
    <?php
      include 'include/aside.php';
    ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Chào mừng bạn đến với trang quản trị website
      </h1>
    </section>
    <section class="content">
      <div class="row">
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="">User</span>
              <span class="info-box-number"><?php echo checkquery('users');?><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
       
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-fw fa-reorder"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Danh mục sản phẩm</span>
              <span class="info-box-number"><?php echo checkquery('categories'); ?><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-fw fa-paw"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sản phẩm</span>
              <span class="info-box-number"><?php echo checkquery('products'); ?><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        
      </div>
      <!-- /.row -->

      
      

      
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php
    include 'include/footer.php';
 ?>
