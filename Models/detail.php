<?php
require_once("model.php");
class Detail extends Model
{
    function detail_sp($id)
    {
        $query =  "SELECT * 
         from sanpham as sp, loaisanpham as lsp, danhmuc as dm
        WHERE TrangThai = 1 
        and sp.MaLSP = lsp.MaLSP
        and lsp.MaDM = dm.MaDM 
        and sp.MaSP = $id ";

        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }

    function detail_ha($id){
        $query = "SELECT * from HinhAnh WHERE id_sp = $id";

        require("result.php");

        return $data;
    }
   
}