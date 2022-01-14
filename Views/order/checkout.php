<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Thanh Toán</h2>
					<ul class="text-left">
						<li><a href="index.php?act=home">Trang chủ</a></li>
						<li><span> // </span>Thanh Toán</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- Checkout content section start -->
<section class="pages checkout section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="main-input single-cart-form padding60">
					<div class="log-title">
						<h3><strong>Chi tiết hóa đơn</strong></h3>
					</div>
					<div class="custom-input">
						<form action="?act=checkout&xuli=save" method="post">
							<input type="text" name="NguoiNhan" placeholder="Người nhận" required value="<?php echo $_SESSION['login']['Ho']." ".$_SESSION['login']['Ten']  ?>"/>
							<input type="email" name="Email" placeholder="Địa chỉ Email.." required  value="<?=$_SESSION['login']['Email']?>"/>
							<input type="text" name="SDT" placeholder="Số điện thoại.." required pattern="[0-9]+" minlength="10"  value="<?=$_SESSION['login']['SDT']?>"/>
							<div class="custom-select">
									<select class="form-control" name="thanhpho" title="Tỉnh thành" id="tinhthanh" onKeyDown="checkResult()">
									<option>--Chọn Thành Phố--</option>
										<?php
										foreach ($data1 as $key => $tt) {
										?>
											<option value="<?php echo $tt['matp']; ?>"><?php echo $tt['name_tinhthanh']  ?></option>
										<?php
										}
										?>
									</select>
								</div>
								<div class="custom-select">
									<select class="form-control" name="quanhuyen" title="Quận huyện" id="quanhuyen">
										<option>--Chưa chọn tỉnh thành--</option>
									</select>
								</div>
								<div class="custom-select">
									<select class="form-control" name="phuongxa" title="Phường xã"  id="phuongxa"  >
										<option>--Chưa chọn Quận Huyện--</option>
									</select>
								</div>
							<input type="text" name="DiaChi" placeholder="Đại chỉ giao hàng" required  value="<?=$_SESSION['login']['DiaChi']?>"/>
							</br>
							<div class="submit-text">
								<button type="submit">Thanh toán</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<?php $soluong = $sl ?>
			<div class="col-xs-12 col-sm-6">
				<div class="padding60">
					<div class="log-title">
						<h3><strong>Hóa đơn</strong></h3>
					</div>
					<div class="cart-form-text pay-details table-responsive">
						<table>
							<thead>
								<tr>
									<th>Sản phẩm</th>
									<td>Thành Tiền</td>
								</tr>
							</thead>
							<tbody>
								<?php if (isset($_SESSION['sanpham'])) {
									foreach ($_SESSION['sanpham'] as $value) { ?>
								<tr>
									<th><?=$value['TenSP']?></th>
									<td><?=number_format($value['ThanhTien'])?> VNĐ</td>
								</tr>
						<?php }
								} ?>
						<tr>
							<th>Giảm Giá</th>
							<td><?php  $giamgia =($dataSP[0]['GiaTriKM']* $soluong); echo number_format($giamgia)?></td>
						</tr>
						<tr>
							<th>Vat</th>
							<td>0</td>
						</tr>
							</tbody>
							<tfoot id="nhangiatri">
								<tr>
									<th id="vanchuyentong" style="color: gray;">Vận Chuyển</th>
									<td id="vanchuyen">
									</td>
								</tr>
								<tr>
									<th>Tổng</th>
									<td id="thanhtien"><?php $tong = $count -$giamgia?> VNĐ</td>
								</tr>
							
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Checkout content section end -->

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


<script type="text/javascript">
		$(document).ready(function(){
			$("#phuongxa").change(function(){
				var tong = '<?php echo  $tong; ?>';
				var tinhthanh_id = $("#tinhthanh").val();
				var quanhuyen_id = $("#quanhuyen").val();
				var phuongxa_id = $("#phuongxa").val();
				$.ajax({
					url: "Controllers/tongtien.php",
					method : "POST",
					data : {tinhthanh_id : tinhthanh_id, quanhuyen_id : quanhuyen_id, phuongxa_id : phuongxa_id, tong :tong },
					
					success :function(data){
						$("#nhangiatri").html(data);
					}
				})
			})
		})
	</script>