   <?php if (isset($_COOKIE['msg'])) { ?>
       <div class="alert alert-success">
           <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
       </div>
   <?php } ?>
   <hr>
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
       <?php if (isset($_COOKIE['msg'])) { ?>
           <div class="alert alert-warning">
               <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
           </div>
       <?php } ?>
       <form action="?mod=nguoidung&act=store" method="POST" role="form" enctype="multipart/form-data">
           <div class="form-group">
               <label for="">Họ</label>
               <input type="text" class="form-control" id="" placeholder="" name="Ho">
           </div>
           <div class="form-group">
               <label for="">Tên</label>
               <input type="text" class="form-control" id="" placeholder="" name="Ten">
           </div>
           <div class="form-group">
               <label for="">Tên Tài Khoản</label>
               <input type="text" class="form-control" id="" placeholder="" name="TaiKhoan">
           </div>
           <div class="form-group">
               <label for="">Giới tính</label>
               <select id="" name="GioiTinh" class="form-control">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                    <option value="Khác">Khác</option>
               </select>
           </div>
           <div class="form-group">
               <label for="">Số Điện Thoại</label>
               <input type="text" class="form-control" id="" placeholder="" name="SDT">
           </div>
           <div style="margin-bottom: 10px;">
                    <select class="form-control" name="thanhpho" title="Tỉnh thành" id="tinhthanh">
                    <option>--Chọn Thành Phố--</option>
                        <?php
                        foreach ($data as $key => $tt) {
                        ?>
                            <option value="<?php echo $tt['matp']; ?>"><?php echo $tt['name_tinhthanh'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div style="margin-bottom: 10px;">
                    <select class="form-control" name="quanhuyen" title="Quận huyện" id="quanhuyen">
                        <option>--Chưa chọn tỉnh thành--</option>
                    </select>
                </div>
                <div >
                    <select class="form-control" name="phuongxa" title="Phường xã"  id="phuongxa">
                    <option>--Chưa chọn quận huyện--</option>
                    </select>
                </div>
           <div class="form-group">
               <label for="">Địa chỉ</label>
               <input type="text" class="form-control" id="" placeholder="" name="DiaChi">
           </div>
           <div class="form-group">
               <label for="">Mật Khẩu</label>
               <input type="Password" class="form-control" id="" placeholder="" name="MatKhau">
           </div>
           <div class="form-group">
               <label for="">Email</label>
               <input type="Email" class="form-control" id="" placeholder="" name="Email">
           </div>
           <button type="submit" class="btn btn-primary">Create</button>
       </form>
   </table>





   <script type="text/javascript">
		$(document).ready(function(){
			$("#tinhthanh").change(function(){
				var tinhthanh_id = $("#tinhthanh").val();
				$.ajax({
					url: "../Controllers/quanhuyen.php",
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
					url: "../Controllers/phuongxa.php",
					method : "POST",
					data : {quanhuyen_id : quanhuyen_id},
					
					success :function(data){
						$("#phuongxa").html(data);
					}
				})
			})
		})
	</script>