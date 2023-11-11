<?php 
if(is_array($sanpham)){
     extract($sanpham);
}
$hinhpath ="../uploads/".$img;
if (is_file($hinhpath)) {
    $hinh = "<img src='".$hinhpath."' width='100px'>";
} else {
    $hinh = "Không có hình";
}
?>
<div class="row2">
    <div class="row2 font_title mb"><h4>CẬP NHẬT SẢN PHẨM</h4></div>
    <div class="row2 form_content ">
      <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
      <label class="mb10">Danh Mục</label>
        <div class="row2 mb select"> 
          <select name="iddm">
            <option class="option" value="0" >All</option>
              <?php foreach($listdanhmuc as $danhmuc){
                extract($danhmuc) ;
                if($id_dmuc == $id_dmuc) $s = "selected" ;else $s = "" ;
                echo '<option value='.$id_dmuc.' '.$s.'>'.$name.'</option>' ;
              }?>
          </select>
        </div>
        <div class="row2 mb10">
          <label>Tên Sản Phẩm </label> <br>
          <input type="text" name="tensp" value="<?=$pro_name?>">
        </div>
        <div class="row2 mb10">
          <label>Giá Sản Phẩm </label> <br>
          <input type="text" name="giasp" value="<?=$price?>">
        </div>
        <div class="row2 mb10">
          <label>Mô Tả Sản Phẩm </label> <br>
          <input type="text" name="mota" value="<?=$mota?>">
        </div>
        <div class="row2 mb10">
          <label>Hình Ảnh Sản Phẩm </label> <br>
          <input type="file" name="hinh">
          <?=$hinh?>
        </div>
        <div class="row mb10 ">
          <input type="hidden" name="id" value="<?=$pro_id?>">
          <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT">
          <input  class="mr20" type="reset" value="NHẬP LẠI">
          <a href="?act=listdm"><input  class="mr20" type="button" value="DANH SÁCH"></a>
        </div>
        <?php if(isset($thongbao) && $thongbao != ""){
                echo $thongbao;
        }?>
      </form>
    </div>
  </div>