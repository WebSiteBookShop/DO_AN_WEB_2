<?php
  
  
    $id1 = $_POST['tinhthanh_id'];
    $id2 = $_POST['quanhuyen_id'];
    $id3 = $_POST['phuongxa_id'];
    $tong = $_POST['tong'];

     
      ?>
                     <?php  if($id3 == 20227) {
                                    $tien = 12000;    
                                }else{
                                    if( $id2 == 492){
                                        $tien = 15000;
                                     
                                    }else{
                                        if($id1 == 48){
                                            $tien = 19000;
                                            
                                        }else{
                                            $tien = 30000;
                                        }
                                    }
                                } 
                                ?>
                            <tfoot id="nhangiatri" >
								<tr>
									<th id="vanchuyentong" style="color: gray;">Vận Chuyển</th>
									<td id="vanchuyen"  style="padding-left:80%; color: gray;" >
                                        <?= number_format($tien).'VNĐ';?>
									</td>
								</tr>
								<tr>
									<th>Tổng</th>
									<td id="thanhtien"><?php $Thanhtoan= $tien + $tong; echo number_format($Thanhtoan) ?> VNĐ</td>
								</tr>
							</tfoot>

                            <?php
								 if (isset($_SESSION['sanpham'])) {
                                    $arr = $_SESSION['sanpham'];
                                    $arr['ThanhTien'] = $Thanhtoan;
                                    $_SESSION['sanpham'] = $arr;
                                } 
								?>
            <?php
            
?>