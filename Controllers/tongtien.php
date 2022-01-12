<?php
  
  
    $id1 = $_POST['tinhthanh_id'];
    $id2 = $_POST['quanhuyen_id'];
    $id3 = $_POST['phuongxa_id'];
    $tong = $_POST['tong'];

     
      ?>


                            <tfoot id="nhangiatri" >
								<tr>
									<th id="vanchuyentong" style="color: gray;">Vận Chuyển</th>
									<td id="vanchuyen"  style="padding-left:80%; color: gray;" >
                                    <?php  if($id1 == 20227) {
                                    $tien = 12000;
                                    echo number_format($tien).'VNĐ';
                                }else{
                                    if( $id2 == 492){
                                        $tien = 15000;
                                        echo number_format($tien).'VNĐ';
                                    }else{
                                        if($id3 == 48){
                                            $tien = 19000;
                                            echo number_format($tien).'VNĐ';
                                        }else{
                                            $tien = 24000;
                                            echo number_format($tien).'VNĐ';
                                        }
                                    }
                                } 
                                ?>
									</td>
								</tr>
								<tr>
									<th>Tổng</th>
									<td id="thanhtien"><?php echo number_format($tien + $tong)?> VNĐ</td>
								</tr>
							</tfoot>
            <?php
            
?>