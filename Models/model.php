<?php
require_once("connection.php");
class model
{
    var $conn;
    function __construct()
    {
        $conn_obj = new connection();
        $this->conn = $conn_obj->conn;
    }
    function limit($a, $b)
    {
        $query =  "SELECT * from sanpham WHERE TrangThai = 1  ORDER BY ThoiGian DESC limit $a,$b";

        require("result.php");

        return $data;
    }
    function danhmuc()
    {
        $query =  "SELECT * from DanhMuc ";

        require("result.php");
        
        return $data;
    }
    function chitietdanhmuc($id)
    {
        $query =  "SELECT d.TenDM as Ten, l.* FROM danhmuc as d, loaisanpham as l WHERE d.MaDM = l.MaDM and d.MaDM = $id";

        require("result.php");
        
        return $data;
    }

    function loaisanpham($id)
    {
        $query =  "SELECT d.TenDM as Ten, l.* FROM danhmuc as d, loaisanpham as l WHERE d.MaDM = l.MaDM and d.MaDM = $id";

        require("result.php");
        
        return $data;
    }

    function random($id)
    {
        $query = "SELECT * FROM SanPham WHERE TrangThai = 1 ORDER BY RAND () LIMIT $id";
        require("result.php");
        
        return $data;
    }
    function banner($a,$b)
    {
        $query =  "SELECT * from Banner  limit $a,$b";

        require("result.php");
        
        return $data;
    }
    function sanpham_danhmuc($a, $b, $danhmuc)
    {
        $query =   "SELECT * 
        from sanpham as sp, loaisanpham as lsp, danhmuc as dm
        WHERE TrangThai = 1 
        and sp.MaLSP = lsp.MaLSP
        and lsp.MaDM = dm.MaDM 
        and dm.MaDM = $danhmuc 
        ORDER BY ThoiGian DESC limit $a,$b";
        
        require("result.php");
        
        return $data;
    }
    function sanpham_banchay(){
        $query = "SELECT * ,sum(ct.SoLuong) as sl
        from sanpham as sp, loaisanpham as lsp, danhmuc as dm, chitiethoadon as ct
        WHERE TrangThai = 1 
        and sp.MaLSP = lsp.MaLSP
        and lsp.MaDM = dm.MaDM 
        and ct.MaSP = sp.MaSP
        GROUP by sp.MaSP
        ORDER by sum(ct.SoLuong) desc";

        require("result.php");
        
        return $data;
    }

    function thanhpho()
    {
        $query = "SELECT * from devvn_tinhthanhpho" ;
        require("result.php");

        return $data;
    }
    function sanpham($masp)
    {
        $query = "SELECT * from sanpham, khuyenmai 
				where sanpham.MaSP = $masp
				and sanpham.MaKM = khuyenmai.MaKM" ;

        require("result.php");

        return $data;
    }
}

