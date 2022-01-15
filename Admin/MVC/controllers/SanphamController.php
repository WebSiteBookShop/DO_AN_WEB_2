<?php
require_once("MVC/Models/sanpham.php");
class SanphamController
{
    var $sanpham_model;
    public function __construct()
    {
        $this->sanpham_model = new sanpham();
    }
    public function list()
    {
        $data = $this->sanpham_model->All();
        require_once("MVC/Views/Admin/index.php");
        // require_once("MVC/Views/posts/list.php");
    }
    public function detail()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->sanpham_model->find($id);
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/posts/detail.php");
    }
    public function add()
    {
        $data_km = $this->sanpham_model->khuyenmai();
        $data_lsp = $this->sanpham_model->loaisp();
        $data_dm = $this->sanpham_model->danhmuc();
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/posts/add.php");
    }
    public function store()
    {

        $data1 = $this->sanpham_model->All_hinhanh();
        $masp = $data1['MaSP'] +1;
    

        $target_dir = "../public/img/products/";  // thư mục chứa file upload

        if($_FILES["anh1"]["name"]!= ""){
        $HinhAnh1 = "";
        $target_file = $target_dir . basename($_FILES["anh1"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["anh1"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh1 =  "img/products/" . basename($_FILES["anh1"]["name"]);
        }
                $this->sanpham_model->store_anh($masp, $HinhAnh1);
         }

         if($_FILES["anh2"]["name"]!= ""){
        $HinhAnh2 = "";
        $target_file = $target_dir . basename($_FILES["anh2"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["anh2"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh2 =  "img/products/" . basename($_FILES["anh2"]["name"]);
        }
        $this->sanpham_model->store_anh($masp, $HinhAnh2);
    }

        if($_FILES["anh3"]["name"]!= ""){
        $HinhAnh3 = "";
        $target_file = $target_dir . basename($_FILES["anh3"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["anh3"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh3 =  "img/products/" . basename($_FILES["anh3"]["name"]);
        }
        $this->sanpham_model->store_anh($masp, $HinhAnh3);
    }

        if($_FILES["anh4"]["name"]!= ""){
        $HinhAnh4 = "";
        $target_file = $target_dir . basename($_FILES["anh4"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["anh4"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh4 =  "img/products/" . basename($_FILES["anh4"]["name"]);
        }
        $this->sanpham_model->store_anh($masp, $HinhAnh4);
    }

        if($_FILES["anh7"]["name"]!= ""){
        $HinhAnh7 = "";
        $target_file = $target_dir . basename($_FILES["anh7"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["anh7"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh7 =  "img/products/" . basename($_FILES["anh7"]["name"]);
        }
        $this->sanpham_model->store_anh($masp, $HinhAnh7);
    }

        if($_FILES["anh8"]["name"]!= ""){
        $HinhAnh8 = "";
        $target_file = $target_dir . basename($_FILES["anh8"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["anh8"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh8 =  "img/products/" . basename($_FILES["anh8"]["name"]);
        }
        $this->sanpham_model->store_anh($masp, $HinhAnh8);
    }

        if($_FILES["anh9"]["name"]!= ""){
        $HinhAnh9 = "";
        $target_file = $target_dir . basename($_FILES["anh9"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["anh9"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh9 =  "img/products/" . basename($_FILES["anh9"]["name"]);
        }
        $this->sanpham_model->store_anh($masp, $HinhAnh9);
    }



       
        $TrangThai = 0;
        if (isset($_POST['TrangThai'])) {
            $TrangThai = $_POST['TrangThai'];
        }

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $data = array(
            'MaLSP' =>  $_POST['MaLSP'],
            'TenSP'  => $_POST['TenSP'],
            'DonGia' => $_POST['DonGia'],
            'tacgia' => $_POST['TacGia'],
            'SoLuong' => $_POST['SoLuong'],
            'NhaCungCap' => $_POST['NhaCungCap'],
            'NhaXuatBan' => $_POST['NhaXuatBan'],
            'Hinhthuc' => $_POST['HinhThuc'],
            'NamXB' => $_POST['NamXuatBan'],
            'DoTuoi' => $_POST['DoTuoi'],
            'HinhAnh1' => $HinhAnh1,
            'MaKM' =>  $_POST['MaKM'],
            'SoSao' =>  0,
            'SoDanhGia' => 0,
            'TrangThai' => $TrangThai,
            'MoTa' =>  $_POST['MoTa'],
            'ThoiGian' => $ThoiGian,
            'NgonNgu' => $_POST['NgonNgu']
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }

        $this->sanpham_model->store($data);
        

    }   
    public function delete()
    {
        $id = $_GET['id'];
        $this->sanpham_model->delete($id);
    }
    public function edit()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data_km = $this->sanpham_model->khuyenmai();
        $data_lsp = $this->sanpham_model->loaisp();
        $data_dm = $this->sanpham_model->danhmuc();
        $data = $this->sanpham_model->find_sanpham($id);
        $data_anh = $this->sanpham_model->find_anh($id);
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/posts/edit.php");
    }
    public function update()
    {
        $masp =  $_POST['MaSP'];
        $this->sanpham_model->delete_anh($masp);

        $target_dir = "../public/img/products/";  // thư mục chứa file upload


        $target_dir = "../public/img/products/";  // thư mục chứa file upload

        if($_FILES["anh1"]["name"]!= ""){
        $HinhAnh1 = "";
        $target_file = $target_dir . basename($_FILES["anh1"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["anh1"]["tmp_name"], $target_file);
        var_dump(basename($_FILES["anh1"]["name"]));
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh1 =  "img/products/" . basename($_FILES["anh1"]["name"]);
        }
            $this->sanpham_model->store_anh($masp, $HinhAnh1);
         }

         if($_FILES["anh2"]["name"]!= ""){
        $HinhAnh2 = "";
        $target_file = $target_dir . basename($_FILES["anh2"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["anh2"]["tmp_name"], $target_file);
        var_dump(basename($_FILES["anh2"]["name"]));
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh2 =  "img/products/" . basename($_FILES["anh2"]["name"]);
        }
        $this->sanpham_model->store_anh($masp, $HinhAnh2);
    }

        if($_FILES["anh3"]["name"]!= ""){
        $HinhAnh3 = "";
        $target_file = $target_dir . basename($_FILES["anh3"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["anh3"]["tmp_name"], $target_file);
        var_dump(basename($_FILES["anh3"]["name"]));
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh3 =  "img/products/" . basename($_FILES["anh3"]["name"]);
        }
        $this->sanpham_model->store_anh($masp, $HinhAnh3);
    }

        if($_FILES["anh4"]["name"]!= ""){
        $HinhAnh4 = "";
        $target_file = $target_dir . basename($_FILES["anh4"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["anh4"]["tmp_name"], $target_file);
        var_dump(basename($_FILES["anh4"]["name"]));
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh4 =  "img/products/" . basename($_FILES["anh4"]["name"]);
        }
        $this->sanpham_model->store_anh($masp, $HinhAnh4);
    }

        if($_FILES["anh7"]["name"]!= ""){
        $HinhAnh7 = "";
        $target_file = $target_dir . basename($_FILES["anh7"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["anh7"]["tmp_name"], $target_file);
        var_dump(basename($_FILES["anh7"]["name"]));
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh7 =  "img/products/" . basename($_FILES["anh7"]["name"]);
        }
        $this->sanpham_model->store_anh($masp, $HinhAnh7);
    }

        if($_FILES["anh8"]["name"]!= ""){
        $HinhAnh8 = "";
        $target_file = $target_dir . basename($_FILES["anh8"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["anh8"]["tmp_name"], $target_file);
        var_dump(basename($_FILES["anh8"]["name"]));
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh8 =  "img/products/" . basename($_FILES["anh8"]["name"]);
        }
        $this->sanpham_model->store_anh($masp, $HinhAnh8);
    }

        if($_FILES["anh9"]["name"]!= ""){
        $HinhAnh9 = "";
        $target_file = $target_dir . basename($_FILES["anh9"]["name"]); // link sẽ upload file lên
        var_dump(basename($_FILES["anh9"]["name"]));
        $status_upload = move_uploaded_file($_FILES["anh9"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh9 =  "img/products/" . basename($_FILES["anh9"]["name"]);
        }
        $this->sanpham_model->store_anh($masp, $HinhAnh9);
    }
        
        $TrangThai = 0;
        if (isset($_POST['TrangThai'])) {
            $TrangThai = $_POST['TrangThai'];
        }
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $data = array(
            'MaLSP' =>  $_POST['MaLSP'],
            'TenSP'  => $_POST['TenSP'],
            'DonGia' => $_POST['DonGia'],
            'tacgia' => $_POST['TacGia'],
            'SoLuong' => $_POST['SoLuong'],
            'NhaCungCap' => $_POST['NhaCungCap'],
            'NhaXuatBan' => $_POST['NhaXuatBan'],
            'Hinhthuc' => $_POST['HinhThuc'],
            'NamXB' => $_POST['NamXuatBan'],
            'DoTuoi' => $_POST['DoTuoi'],
            'HinhAnh1' => $HinhAnh1,
            'MaKM' =>  $_POST['MaKM'],
            'SoSao' =>  0,
            'SoDanhGia' => 0,
            'TrangThai' => $TrangThai,
            'MoTa' =>  $_POST['MoTa'],
            'ThoiGian' => $ThoiGian,
            'NgonNgu' => $_POST['NgonNgu']
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
       
      
        $this->sanpham_model->update_sp($data,$masp);
    }


}