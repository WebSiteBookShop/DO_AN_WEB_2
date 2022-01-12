<?php
  
    $conn;
    $severname ="localhost"; 
    $username ="root";
    $password =""; 
    $db_name ="shopbansach";

    //Tao ket noi CSDL
    $conn = new mysqli($severname,$username,$password,$db_name);
    $conn->set_charset("utf8");

    $id = $_POST['tinhthanh_id'];

        $query = "SELECT * from devvn_quanhuyen where matp = $id" ;
        
        $result = $conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

      ?>
         <select name="quanhuyen" class="form-control" id="quanhuyen">
            <option value=""> Chọn quận huyện</option>
            <?php
            foreach($data as $key => $value){
            ?>
            <option value="<?php echo $value['maqh'] ?>"><?php echo $value['name_quanhuyen'] ?></option>
            <?php
            }
            

?>
