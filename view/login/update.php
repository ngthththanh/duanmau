<!-- <?php if(is_array($taikhoan)){
          extract($taikhoan);
}?> -->
<main class="catalog mb">
    <div class="boxleft">
      <div class="box_title">CẬP NHẬT TÀI KHOẢN</div>
      <div class="box_content form_account">
      <?php 
            if(isset($_SESSION['user_name'])&&(is_array($_SESSION['user_name']))){
                extract($_SESSION['user_name']);
            }
            ?> 
        <form action="index.php?act=updatetk" method="post">
          <div class="form-dk">
            <label for="">Email</label>
            <input type="email" name="email" value="<?=$email?>" >
          </div>
          <div class="form-dk">
            <label for="">Tên Đăng Nhập</label>
            <input type="text" name="user" value="<?=$user_name?>">
          </div>
          <div class="form-dk">
            <label for="">Mật Khẩu</label>
            <input type="password" name="pass" value="<?=$pass?>">
          </div>
          <div class="form-dk">
            <label for="">Số Điện Thoại</label>
            <input type="text" name="tel" value="<?=$tel?>">
          </div>
          <div class="form-dk">
            <label for="">Địa Chỉ</label>
            <input type="text" name="address" value="<?=$address?>">
          </div>
          <input type="hidden" name="id"value="<?php if(isset($user_id)&&($user_id>0)) echo $user_id; ?>">
          <input type="submit" value="Cập Nhật" name="capnhat">
          <input type="reset" value="Nhập lại">
        </form>
      </div>
    </div>
    <?php include "view/boxright.php"; ?>
</main>
