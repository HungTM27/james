<?php
session_start();
require_once '../commons/constants.php';
require_once '../commons/db.php';
require_once '../commons/helpers.php';
$user = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;
$msg = isset($_GET['msg']) ? $_GET['msg'] : "";
?>
<div class="login-area">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center">
				<div class="login">
					<div class="login-form-container">
						<div class="login-text">
							<h2>Thông tin thanh toán</h2>

						</div>
						<div class="login-form">
							<form action="<?php echo BASE_URL . "_share/insert.php" ?>" method="post">
								
								<input required="" type="text" name="hoten" placeholder="Nhập họ tên" >
								<input required="" type="text" name="diachi" placeholder="Nhập địa chỉ" />
								<input required="" type="text" name="dienthoai" placeholder="Nhập số điện thoại " />
								<input required="" type="text" name="email" placeholder="Nhập email">
								<div class="button-box">
									
									<button type="submit" name="login" class="default-btn">Đặt Hàng</button>
									
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>