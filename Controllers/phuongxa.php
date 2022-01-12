<?php
  
    $conn;
    $severname ="localhost"; 
    $username ="root";
    $password =""; 
    $db_name ="shopbansach";

    //Tao ket noi CSDL
    $conn = new mysqli($severname,$username,$password,$db_name);
    $conn->set_charset("utf8");

    $id = $_POST['quanhuyen_id'];

        $query = "SELECT * from devvn_xaphuongthitran where maqh = $id" ;
        
        $result = $conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

      ?>
         <select name="phuongxa" class="form-control" id="phuongxa">
            <option value=""> Chọn Phường xã</option>
            <?php
            foreach($data as $key => $value){
            ?>
            <option value="<?php echo $value['xaid'] ?>"><?php echo $value['name'] ?></option>
            <?php
            }
            

?>
