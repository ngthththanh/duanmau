<main class="catalog  mb ">
  <div class="boxleft">
    <div class="box_title">Quên mật khẩu</div>
    <div class="box_content form_account">
      <form action="index.php?act=quenmk" method="post">
        <div class="form-qmk">
            <label for="">Email</label>
            <input type="email" name="email" p>
        </div>
        <div class="btn-dx">  
          <input type="submit" value="Gửi" name="guiemail">
          <input type="reset" value="Nhập lại">
        </div>
        <div class="thongbao">
          <?php if(isset($thongbaomk) && ($thongbaomk)!=""){
            echo $thongbaomk;
          }?>
        </div>
      </form>
    </div>
  </div>
<?php include "view/boxright.php";?>
</main>
