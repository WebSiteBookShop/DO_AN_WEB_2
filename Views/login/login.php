<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Đăng nhập</h2>
					<ul class="text-left">
						<li><a href="?act=home">Trang chủ</a></li>
						<li><span> // </span>Đăng nhập</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- login content section start -->
<section class="pages login-page section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="main-input padding60" id="dangnhap">
					<div class="log-title">
						<h3><strong>Khách hàng đã đăng ký</strong></h3>
					</div>
					<div class="login-text">
						<div class="custom-input">
							<p>Nếu bạn đã có tài khoản, vui lòng đăng nhập!</p>
							<?php if (isset($_COOKIE['msg1'])) { ?>
								<div class="alert alert-success">
									<strong>Thông báo</strong> <?= $_COOKIE['msg1'] ?>
								</div>
							<?php } ?>
							<form action="?act=taikhoan&xuli=dangnhap" method="post" id="form1">
								<input type="text" name="taikhoan" placeholder="Tài khoản" />
								<input type="password" name="matkhau" placeholder="Mật khẩu" />
								<a class="forget" href="#">Quên mật khẩu?</a>
								<div class="submit-text">
									<button name="submit" type="submit" form="form1">Đăng nhập</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="main-input padding60 new-customer" id="dangky">
					<div class="log-title">
						<h3><strong>Khách hàng mới</strong></h3>
					</div>
					<?php if (isset($_COOKIE['msg'])) { ?>
						<div class="alert alert-success">
							<strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
						</div>
					<?php } ?>
					<div class="custom-input">
						<form action="?act=taikhoan&xuli=dangky" method="post" id="form2">
							<input type="text" name="Ho" placeholder="Họ.." required />
							<input type="text" name="Ten" placeholder="Tên.." required />
							<input type="text" name="TaiKhoan" placeholder="Tên tài khoản đăng nhập.." required  minlength="6"/>
							<input type="email" name="Email" placeholder="Địa chỉ Email.." required />
							<input type="text" name="SĐT" placeholder="Số điện thoại.." required pattern="[0-9]+" minlength="10" />
							<input type="password" name="MatKhau" placeholder="Mật khẩu" minlength="6" required />
							<input type="password" name="check_password" placeholder="Xác nhận mật khẩu" minlength="6" required />
							<div class="custom-select">
								<select class="form-control" name="thanhpho" title="Tỉnh thành" id="tinhthanh">
								<option>--Chọn Thành Phố--</option>
									<?php
									foreach ($data1 as $key => $tt) {
									?>
										<option value="<?php echo $tt['matp']; ?>"><?php echo $tt['name_tinhthanh'] ?></option>
									<?php
									}
									?>
								</select>
							</div>
							<div class="custom-select">
								<select class="form-control" name="quanhuyen" title="Quận huyện" id="quanhuyen">
									<option >--Chưa chọn tỉnh thành--</option>
								</select>
							</div>
							<div class="custom-select">
								<select class="form-control" name="phuongxa" title="Phường xã"  id="phuongxa">
									<option value="">--Chưa chọn quận huyện--</option>
								</select>
							</div>
							<div class="submit-text coupon">
								<button type="submit" form="form2">Đăng ký</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- login content section end -->

<script type="text/javascript">
		$(document).ready(function(){
			$("#tinhthanh").change(function(){
				var tinhthanh_id = $("#tinhthanh").val();
				$.ajax({
					url: "Controllers/quanhuyen.php",
					method : "POST",
					data : {tinhthanh_id : tinhthanh_id},
					
					success :function(data){
						$("#quanhuyen").html(data);
					}
				})
			})
		})
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#quanhuyen").change(function(){
				var quanhuyen_id = $("#quanhuyen").val();
				$.ajax({
					url: "Controllers/phuongxa.php",
					method : "POST",
					data : {quanhuyen_id : quanhuyen_id},
					
					success :function(data){
						$("#phuongxa").html(data);
					}
				})
			})
		})
	</script>