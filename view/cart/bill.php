<main class="catalog">
     <div class="boxleft">
     <form action="index.php?act=billcomfirm" metdod="post">
          <div class="row2 mb">
               <div class="box_title">THÔNG TIN ĐẶT HÀNG</div>
               <div class="row box_content billform">
                    <table>
                    <?php
                    if(isset($_SESSION['
                    user_name'])){
                         $user = $_SESSION['user_name']['user_name'];
                         $address = $_SESSION['user_name']['address'];
                         $email = $_SESSION['user_name']['email'];
                         $tel = $_SESSION['user_name']['tel'];
                    }else{
                         $user = "";
                         $address = "";
                         $email = "";
                         $tel = "";
                    }
                    ?>
                         <tr>
                              <td>Người đặt hàng</td>
                              <td><input type="text" name="user" id="" value="<?=$user?>"></td>  
                         </tr>
                         <tr>
                              <td>Địa chỉ</td>
                              <td><input type="text" name="name" id="" value="<?=$address?>"></td>  
                         </tr>
                         <tr>
                              <td>Email</td>
                              <td><input type="text" name="name" id="" value="<?=$email?>"></td>  
                         </tr>
                         <tr>
                              <td>Điện thoại</td>
                              <td><input type="text" name="name" id="" value="<?=$tel?>"></td>  
                         </tr>
                    </table>
               </div>
          </div>
          <div class="row2 mb">
               <div class="box_title">Phương thức thanh toán</div>
               <div class="row2 payment">
                    <table>
                         <tr>
                              <td><input type="radio" name="pttt" checked id="">Trả tiền khi nhận hàng</td>
                              <td><input type="radio" name="pttt" id="">Chuyển tiền ngân hàng</td>
                              <td><input type="radio" name="pttt" id="">Thanh toán online</td>
                         </tr>
                    </table>
               </div>
          </div>
          <div class="row2 mb10 formds_loai mb">
          <table>
               <?php viewcart(0);?>
          </table>  
          </div>
          <div class="row2 mb bill">
               <a href="index.php?act=bill"><input type="button" value="Đồng ý đặt hàng"></a>
          </div>
     </form>
</div>
<?php include "view/boxright.php"; ?>
                    </main>