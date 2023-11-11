<div class="row2">
  <div class="row2 font_title"><h4>THÊM MỚI DANH MỤC</h4></div>
  <div class="row2 form_content ">
    <form action="index.php?act=adddm" method="POST">
      <div class="row2 mb10">
        <label>Tên loại </label> <br>
        <input type="text" name="tenloai">
      </div>
      <div class="row mb10 ">
        <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI">
        <input  class="mr20" type="reset" value="NHẬP LẠI">
        <a href="?act=listdm"><input  class="mr20" type="button" value="DANH SÁCH"></a>
      </div>
      <!-- <div class="thongbao">
        <?php if(isset($thongbao) && $thongbao != ""){
                echo $thongbao;
        }?>
      </div> -->
      </form>
  </div>
</div>