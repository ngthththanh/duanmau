<!-- 
 <div class="row2">
         <div class="row2 font_title">
               <h4>CẬP NHẬT KHÁCH HÀNG</h4>
         </div>
          <div class="row2 form_content">
               <form action="index.php?act=updatetk"  method="POST">
               <?php 
            if(isset($_SESSION['user_name'])&&(is_array($_SESSION['user_name']))){
                extract($_SESSION['user_name']);
            }
            ?> 
                    
          <div class="row2 mb10">
               <label>Tên tài khoản</label> <br>
               <input type="text" name="user" id="" value="<?php if(isset($user_name)&&($user_name!="")) echo $user_name ?>">
          </div>
          <div class="row2 mb10">
            <label for="">Email</label>
            <input type="text" name="email" value="<?=$email ?>">
          </div>
          <div>
          <div class="row2 mb10">   
               <label for="">Số điện thoại</label>
            <input type="text" name="tel" value="<?=$tel?>">
          </div>
         
          <div class="row2 mb10">   
               <label for="">Địa Chỉ</label>
            <input type="text" name="address" value="<?=$tel?>">
          </div>
         
          <p>Mật khẩu</p>
          <div>
            <input type="text" name="pass" value="<?=$pass?>">
          </div>
          <div class="row2 mb10">   
               <label for="">Vai trò</label>
            <input type="text" name="role" value="<?=$role?>">
          </div>
         
                    <div class="row mb10 ">
                    <input type="hidden" name="id"value="<?php if(isset($user_id)&&($user_id>0)) echo $user_id; ?>">
                         <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT">
                         <input  class="mr20" type="reset" value="NHẬP LẠI">
                         <a href="?act=listkh"><input  class="mr20" type="button" value="DANH SÁCH"></a>
                    </div>
               </form>
          </div>
     </div> -->