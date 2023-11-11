<div class="row2">
  <div class="row2 font_title mb"><h4>THÊM MỚI SẢN PHẨM</h4></div>
  <div class="row2 form_content">
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
    <label class="mb10">Danh Mục</label>
      <div class="row2 mb select">
        <select name="iddm" id="">
          <option value="0">Danh Mục</option>
            <?php foreach ($listdanhmuc as $danhmuc){
              extract($danhmuc);
              echo '<option value="'.$id_dmuc.'">'.$name.'</option>';
            }?>
        </select>
      </div>
      <div class="row2 mb10">
        <label>Tên Sản Phẩm </label> <br>
        <input type="text" name="tensp">
      </div>
      <div class="row2 mb10">
        <label>Giá Sản Phẩm </label> <br>
        <input type="text" name="giasp">
      </div>
      <div class="row2 mb10">
        <label>Mô Tả Sản Phẩm </label> <br>
        <input type="text" name="mota">
      </div>
      <div class="row2 mb10">
        <label>Hình Ảnh Sản Phẩm </label> <br>
        <input type="file" name="hinh">
      </div>
      <div class="row mb10 ">
        <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI">
        <input  class="mr20" type="reset" value="NHẬP LẠI">
        <a href="?act=listsp"><input  class="mr20" type="button" value="DANH SÁCH"></a>
      </div>
      <?php if(isset($thongbao) && $thongbao != ""){
              echo $thongbao;
            }?>
    </form>
  </div>
</div>