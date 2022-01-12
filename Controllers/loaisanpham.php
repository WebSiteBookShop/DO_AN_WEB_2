<?php
  
    $conn;
    $severname ="localhost"; 
    $username ="root";
    $password =""; 
    $db_name ="shopbansach";

    //Tao ket noi CSDL
    $conn = new mysqli($severname,$username,$password,$db_name);
    $conn->set_charset("utf8");

    $id = $_POST['danhmuc_id'];

        $query = "SELECT * from loaisanpham where MaDM = $id" ;
        
        $result = $conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

      ?>
         <select name="MaLSP" class="form-control" id="loaisanpham">
            <option value="">Chọn Loại sản phẩm</option>
            <?php
            foreach($data as $key => $value){
            ?>
            <option value="<?php echo $value['MaLSP'] ?>"><?php echo $value['TenLSP'] ?></option>
            <?php
            }
            

?>