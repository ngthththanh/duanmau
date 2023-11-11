<div class="row2">
    <div class="row2 font_title mb"><h4>DANH SÁCH SẢN PHẨM</h4></div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <form action="iundex.php?act=listsp" method="post">
                    <input type="hidden" name="kyw" id="">
                    <div class="row2 mb select">
                        <select name="iddm" id="">
                        <option value="0" selected>Danh Mục</option>
                            <?php foreach ($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$id_dmuc.'">'.$name.'</option>';
                            }?>
                        </select>
                        <input type="submit" name="listok" value="GO" style="font-size: 16px; font-weight: 600;">
                    </div>
                   
                </form>
                <table>
                    <tr>
                        <th></th>
                        <th>Mã Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá Sản Phẩm</th>     
                        <th>Hình Ảnh Sản Phẩm</th>
                        <th>Mô Tả Sản Phẩm</th>
                        <th>Lượt Xem</th>
                        <th>Số Binh Luận</th>
                        <th></th>
                    </tr>
                    <?php 
                        foreach ($listsanpham as $sanpham) {
                            extract($sanpham);
                            $suasp="index.php?act=suasp&id=".$pro_id;
                            $xoasp="index.php?act=xoasp&id=".$pro_id;
                            $hinhpath ="../uploads/".$img;
                            if (is_file($hinhpath)) {
                                $hinh = "<img src='".$hinhpath."' width='100px'>";
                            } else {
                                $hinh = "Không có hình";
                            }
                    echo '<tr>
                            <td> <input type="checkbox" name="" id=""></td>
                            <td>'.$pro_id.'</td>
                            <td>'.$pro_name.' </td>
                            <td>'.$price.'</td>
                            <td>'.$hinh.'</td>
                            <td>'.$mota.'</td>
                            <td>'.$luotxem.'</td>
                            <td>'.$soBinhLuan.'</td>
                            <td><a href="'. $suasp.' "><input type="button" value="sửa"></a>
                            <a href="'.$xoasp.' "><input type="button" value="xóa"></a></td>
                        </tr>';
                    }?>            
                </table>
            </div>
            <div class="row mb10"  style="gap: 20px;">
                <input type="button" value="CHỌN TẤT CẢ ">
                <input type="button" value="BỎ CHỌN TẤT CẢ ">
                <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN  ">
                <a href="index.php?act=addsp"><input type="button" value="NHẬP THÊM "></a>
            </div>
        </form>`
    </div>
</div>
</div>