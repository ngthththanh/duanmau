
<main class="catalog  mb ">
    <div class="boxleft">
      <div class="box_title">Đăng ký thành viên</div>
      <div class="box_content form_account">
        <form action="index.php?act=dangki" method="post">
          <div class="form-dk">
            <label for="">Email</label>
            <input type="email" name="email">
          </div>
          <div class="form-dk">
            <label for="">Tên Đăng Nhập</label>
            <input type="text" name="user">
          </div>
          <div class="form-dk">
            <label for="">Mật Khẩu</label>
            <input type="password" name="pass">
          </div>
          <input type="submit" value="Đăng ký" name="dangki">
          <input type="reset" value="Nhập lại">
          <div class="thongbao">
          <?php if(isset($thongbaodk) && ($thongbaodk)!=""){
            echo $thongbaodk;
          }?>
        </div>
        </form>
      </div>
    </div>
    <?php include "view/boxright.php"; ?>  
</main>
