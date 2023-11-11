<?php if(is_array($danhmuc)){
          extract($danhmuc);
}?>
 <div class="row2">
     <div class="row2 font_title"><h4>CẬP NHẬT DANH MỤC</h4></div>
          <div class="row2 form_content ">
               <form action="index.php?act=updatedm"  method="POST"> 
                    <div class="row2 mb10">
                         <label>Tên loại </label> <br>
                         <input type="text" name="tenloai" id="" value="<?php if(isset($name)&&($name!="")) echo $name ?>">
                    </div>
                    <div class="row mb10 ">
                         <input type="hidden" name="id"value="<?php if(isset($id_dmuc)&&($id_dmuc>0)) echo $id_dmuc; ?>">
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