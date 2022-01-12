<style>
    .dandev-reviews {
            position: relative;
            margin: 20px 0;
        }
        
        .dandev-reviews .form_upload {
            width: 320px;
            position: relative;
            padding: 5px;
            bottom: 0px;
            height: 40px;
            left: 0;
            z-index: 5;
            box-sizing: border-box;
            background: #f7f7f7;
            border-top: 1px solid #ddd;
        }
        
        .dandev-reviews .form_upload>label {
            height: 35px;
            width: 160px;
            display: block;
            cursor: pointer;
        }
        
        .dandev-reviews .form_upload label span {
            padding-left: 26px;
            display: inline-block;
            background: url(images/camera.png) no-repeat;
            background-size: 23px 20px;
            margin: 5px 0 0 10px;
        }
        
        .list_attach {
            display: block;
            margin-top: 30px;
        }
        
        ul.dandev_attach_view {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        
        ul.dandev_attach_view li {
            float: left;
            width: 80px;
            margin: 0 20px 20px 0 !important;
            padding: 0!important;
            border: 0!important;
            overflow: inherit;
            clear: none;
        }
        
        ul.dandev_attach_view .img-wrap {
            position: relative;
        }
        
        ul.dandev_attach_view .img-wrap .close {
            position: absolute;
            right: -10px;
            top: -10px;
            background: #000;
            color: #fff!important;
            border-radius: 50%;
            z-index: 2;
            display: block;
            width: 20px;
            height: 20px;
            font-size: 16px;
            text-align: center;
            line-height: 18px;
            cursor: pointer!important;
            opacity: 1!important;
            text-shadow: none;
        }
        
      
        
        ul.dandev_attach_view .img-wrap-box {
            position: relative;
            overflow: hidden;
            padding-top: 100%;
            height: auto;
            background-position: 50% 50%;
            background-size: cover;
        }
        
        .img-wrap-box img {
            right: 0;
            width: 100%!important;
            height: 100%!important;
            bottom: 0;
            left: 0;
            top: 0;
            position: absolute;
            object-position: 50% 50%;
            object-fit: cover;
            transition: all .5s linear;
            -moz-transition: all .5s linear;
            -webkit-transition: all .5s linear;
            -ms-transition: all .5s linear;
        }
        
        ul li,
        ol li {
            list-style-position: inside;
        }
        
        .list_attach span.dandev_insert_attach {
            width: 80px;
            height: 80px;
            text-align: center;
            display: inline-block;
            border: 2px dashed #ccc;
            line-height: 76px;
            font-size: 25px;
            color: #ccc;
            
            cursor: pointer;
            float: left;
        }
        
        ul.dandev_attach_view {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        
        ul.dandev_attach_view .img-wrap {
            position: relative;
        }
        
        .list_attach.show-btn span.dandev_insert_attach {
            display: block;
            margin: 0 0 20px!important;
        }
        
        i.dandev-plus {
            font-style: normal;
            font-weight: 900;
            font-size: 35px;
            line-height: 1;
        }
    </style>


<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-warning">
      <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
  <?php } ?>
  <form action="?mod=sanpham&act=store" method="POST" role="form" enctype="multipart/form-data">
    <div class="form-group">
      <label for="cars">Danh mục: </label>
      <select  name="MaDM" class="form-control" id="danhmuc">
         <?php foreach ($data_dm as $row) {?>
          <option value="<?= $row['MaDM'] ?>"><?= $row['TenDM'] ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="cars">Loại sản phẩm: </label>
      <select  name="MaLSP" class="form-control" id="loaisanpham">
        <option value="#">--Chưa chọn danh muc--</option>
      </select>
    </div>
    <div class="form-group">
      <label for="">Tên sản phẩm</label>
      <input type="text" class="form-control" id="" placeholder="" name="TenSP">
    </div>
    <div class="form-group">
      <label for="">Đơn giá</label>
      <input type="text" class="form-control" id="" placeholder="" name="DonGia">
    </div>
    <div class="form-group">
      <label for="">Số lượng</label>
      <input type="text" class="form-control" id="" placeholder="" name="SoLuong">
    </div>
    <div class="form-group">
      <label for="">Nhà cung cấp</label>
      <input type="text" class="form-control" id="" placeholder="" name="NhaCungCap">
    </div>
    <div class="form-group">
      <label for="">Độ tuổi</label>
      <input type="text" class="form-control" id="" placeholder="" name="DoTuoi">
    </div>
    <div class="form-group">
      <label for="">Tác giã</label>
      <input type="text" class="form-control" id="" placeholder="" name="TacGia">
    </div>
    <div class="form-group">
      <label for="">Nhà xuất bản</label>
      <input type="text" class="form-control" id="" placeholder="" name="NhaXuatBan">
    </div>
    <div class="form-group">
      <label for="">Năm xuất bản</label>
      <select id="" name="NamXuatBan" class="form-control">
                    <option value="2010"> 2010</option>
                    <option value="2011"> 2011</option>
                    <option value="2012"> 2012</option>
                    <option value="2013"> 2013</option>
                    <option value="2014"> 2014</option>
                    <option value="2015"> 2015</option>
                    <option value="2016"> 2016</option>
                    <option value="2017"> 2017</option>
                    <option value="2018"> 2018</option>
                    <option value="2019"> 2019</option>
                    <option value="2020"> 2020</option>
                    <option value="2021"> 2021</option>
                    <option value="2022"> 2022</option>   
               </select>
    </div>
    <div class="form-group">
      <label for="">Ngôn Ngữ</label>
      <input type="text" class="form-control" id="" placeholder="" name="NgonNgu">
    </div>
    <div class="form-group">
      <label for="">Hình Thức bìa</label>
      <input type="text" class="form-control" id="" placeholder="" name="HinhThuc">
    </div>


    <div class="form-group">
        <label for="">Chọn ảnh</label>
        <div class="wrap">
            <div class="dandev-reviews">
                <div class="list_attach">
                    <ul class="dandev_attach_view">
                    <li id="li_files" class="li_file_hide" > 
                    <div class="">
                      <input type="file" name="anh1" id="upload1" onchange="ImagesFileAsURL1()" />
                      </div>
                      <div class="img-wrap">
                      <div class="img-wrap-box" id="displayImg1">
                        
                      </div>
                      </div>   
                      </li> 

                      <li id="li_files" class="li_file_hide" > 
                         <div class="">
                      <input type="file" name="anh2" id="upload2" onchange="ImagesFileAsURL2()" />
                      </div>
                      <div class="img-wrap">
                      <div class="img-wrap-box" id="displayImg2"></div>
                      </div>   
                      </li> 

                      <li id="li_files" class="li_file_hide" > 
                         <div class="">
                      <input type="file" name="anh3" id="upload3" onchange="ImagesFileAsURL3()" />
                      </div>
                      <div class="img-wrap">
                      <div class="img-wrap-box" id="displayImg3"></div>
                      </div>   
                      </li> 

                      <li id="li_files" class="li_file_hide" > 
                         <div class="">
                      <input type="file" name="anh4" id="upload4" onchange="ImagesFileAsURL4()" />
                      </div>
                      <div class="img-wrap">
                      <div class="img-wrap-box" id="displayImg4"></div>
                      </div>   
                      </li> 

                      <li id="li_files" class="li_file_hide" > 
                         <div class="">
                      <input type="file" name="anh7" id="upload7" onchange="ImagesFileAsURL7()" />
                      </div>
                      <div class="img-wrap">
                      <div class="img-wrap-box" id="displayImg7"></div>
                      </div>   
                      </li> 

                      <li id="li_files" class="li_file_hide" > 
                         <div class="">
                      <input type="file" name="anh8" id="upload8" onchange="ImagesFileAsURL8()" />
                      </div>
                      <div class="img-wrap">
                      <div class="img-wrap-box" id="displayImg8"></div>
                      </div>   
                      </li> 

                      <li id="li_files" class="li_file_hide" > 
                         <div class="">
                      <input type="file" name="anh9" id="upload9" onchange="ImagesFileAsURL9()" />
                      </div>
                      <div class="img-wrap">
                      <div class="img-wrap-box" id="displayImg9"></div>
                      </div>   
                      </li> 
                    </ul>
 
                </div>
                
            </div>
        </div>
        
          </div>
    <div class="form-group" style="margin-top: 20%;">
      <label for="cars">Mã khuyến mãi </label>
      <select id="" name="MaKM" class="form-control">
        <?php foreach ($data_km as $row) { ?>
          <option value="<?= $row['MaKM'] ?>"><?= $row['TenKM'] ?></option>
        <?php } ?>
      </select>
    </div>
    
    <label for="">Mô tả</label>
    <div class="form-group">
      <textarea class="form-control" id="summernote" placeholder="" name="MoTa"></textarea>
    </div>
    <div class="form-group">
      <label for="">Trạng thái</label>
      <input type="checkbox" id="" placeholder="" value="1" name="TrangThai"><em>(Check cho phép hiện thị sản phẩm)</em>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
  <?php $hinhanh = array(); ?>
 
</table>

<script type="text/javascript">
		$(document).ready(function(){
			$("#danhmuc").change(function(){
				var danhmuc_id = $("#danhmuc").val();
				$.ajax({
					url: "../Controllers/loaisanpham.php",
					method : "POST",
					data : {danhmuc_id : danhmuc_id},
					
					success :function(data){
						$("#loaisanpham").html(data);
					}
				})
			})
		})
	</script>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

 <script src="public/js/anhjava.js"></script>