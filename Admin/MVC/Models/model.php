<?php
require_once("connection.php");
class Model
{
    var $conn;
    var $table;
    var $contens;
    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    function All()
    {
        $query = "select * from $this->table ORDER BY $this->contens DESC ";

        require("result.php");

        return $data;
        
    }
    function find($id)
    {
        $query = "select * from $this->table where $this->contens =$id";
        return $this->conn->query($query)->fetch_assoc();
    }
    function delete($id)
    {
        $query = "DELETE from $this->table where $this->contens=$id";
        
        $status = $this->conn->query($query);
        if ($status == true) {
            setcookie('msg', 'Xóa thành công', time() + 2);
        } else {
            setcookie('msg', 'Xóa không thành công', time() + 2);
        }
        header('Location: ?mod=' . $this->table);
    }
    function store($data)
    {

        $f = "";
        $v = "";
        foreach ($data as $key => $value) {
            $f .= $key . ",";
            $v .= "'" . $value . "',";
        }
        $f = trim($f, ",");
        $v = trim($v, ",");

   
        $query = "INSERT INTO $this->table($f) VALUES ($v);";

        $status = $this->conn->query($query);

        if ($status == true) {
            setcookie('msg', 'Thêm mới thành công', time() + 2);
            header('Location: ?mod=' . $this->table);
        } else {
            setcookie('msg', 'Thêm vào không thành công', time() + 2);
            header('Location: ?mod=' . $this->table . '&act=add');
        }
    }

    function store_anh($id_sp, $anh)
    {
        $query = "INSERT INTO hinhanh (id_sp, hinhanh)
        VALUES ('$id_sp', '$anh')";
       $result = $this->conn->query($query);
    }
    function delete_anh($masp)
    {
        $query = "DELETE from hinhanh
        Where id_sp = $masp";
       $result = $this->conn->query($query);
    }

    function find_anh($masp)
    {
        $query = "SELECT * from hinhanh
        Where id_sp = $masp";
        require("result.php");

        return $data;
    }


    function update($data)
    {
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");


        $query = "UPDATE $this->table SET  $v   WHERE $this->contens = " . $data[$this->contens];

        $result = $this->conn->query($query);
        
        if ($result == true) {
            setcookie('msg', 'Duyệt thành công', time() + 2);
            header('Location: ?mod=' . $this->table);
        } else {
            setcookie('msg', 'Update vào không thành công', time() + 2);
            header('Location: ?mod=' . $this->table . '&act=edit&id=' . $data['id']['id']);
        }
    }

    function list_add(){
        $query = "SELECT * from devvn_tinhthanhpho" ;
        require("result.php");
        return $data;
    }
    function find_edit($id)
    {
        $query = "SELECT * from NguoiDung as nd, devvn_xaphuongthitran as xp ,devvn_quanhuyen as qh, devvn_tinhthanhpho as tt
        where nd.mapx = xp.xaid 
        and xp.maqh = qh.maqh
        and qh.matp = tt.matp
        and nd.MaND = $id";
        return $this->conn->query($query)->fetch_assoc();
    }

    function update_sp($data,$id)
    {
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");
     
        $query = "UPDATE $this->table SET  $v   WHERE $this->contens = $id" ;
        echo $query;
        

        $result = $this->conn->query($query);
        
        if ($result == true) {
            setcookie('msg', 'Duyệt thành công', time() + 2);
            header('Location: ?mod=' . $this->table);
        } else {
            setcookie('msg', 'Update vào không thành công', time() + 2);
            header('Location: ?mod=' . $this->table . '&act=edit&id=' . $id);
        }
        
    }
    function find_sanpham($id)
    {
        $query = "SELECT * from sanpham as sp, loaisanpham as lsp, danhmuc as dm
        where sp.MaLSP = lsp.MaLSP
        and lsp.MaDM = dm.MaDM
        and sp.maSP = $id";
        return $this->conn->query($query)->fetch_assoc();
    }

    function All_hinhanh()
    {
        $query = "select * from sanpham ORDER BY masp DESC LIMIT 1";

        return $this->conn->query($query)->fetch_assoc();
        
    }

}
