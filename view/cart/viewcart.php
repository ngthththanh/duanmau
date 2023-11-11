
<main class="catalog">
     <div class="boxleft">
          <div class="row2">
               <div class="box_title mb"><h4>GIỎ HÀNG</h4></div>
               <div class=" form_content mb">
                    <div class="row2 mb10 formds_loai mb">
                         <table>   
                              <?php viewcart(1);?>
                         </table>          
                    </div>
               </div>
               <div class="row2 mb bill">
                    <a href="index.php?act=bill"><input type="button" value="Đồng ý đặt hàng"></a>
                    <a href="index.php?act=delcart"><input type="submit" value="Xóa đặt hàng"></a>
               </div>
          </div>
     </div>
<?php include "view/boxright.php"; ?>
</main>