<div class="row2">
    <div class="row2 font_title mb"><h4>DANH SÁCH BÌNH LUẬN</h4></div>
    <div class="row2 form_content ">
        <form action="" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                    <th>STT</th>
                    <th>Sản phẩm</th>
                    <th>Nội dung bình luận</th>
                    <th>Tài khoản</th>
                    <th>Ngày bình luận</th>
                    <th></th>
                    </tr>
                    <?php
                foreach ($listbinhluan as $bl) {
                    extract($bl);
                    $xoabl="index.php?act=xoabl&id=".$id;
                    echo 
            ' <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$id.'</td>
                <td>' . $pro_name. '</td>
                <td>' . $noidung. '</td>
                <td>' . $user_name . '</td>
                <td>' . $ngaybinhluan . '</td>
                <td> <a href="'.$xoabl.' "><input type="button" value="xóa"></a></td>
            </tr>';
                }
                ?>    
                </table>
            </div>
            <div class="row mb10"  style="gap: 20px;">
                <input type="button" value="CHỌN TẤT CẢ ">
                <input type="button" value="BỎ CHỌN TẤT CẢ ">
                <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN  ">
                <a href="index.php?act=chartsp"><input type="button" value="BIỂU ĐỒ"></a>
            </div>
        </form>`
    </div>
</div>
</div>