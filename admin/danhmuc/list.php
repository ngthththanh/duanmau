<div class="row2">
    <div class="row2 font_title mb"><h4>DANH SÁCH DANH MỤC</h4></div>
        <div class="row2 form_content ">
            <form action="#" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th></th>
                        </tr>
                        <?php foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            $suadm="index.php?act=suadm&id=".$id_dmuc;
                            $xoadm="index.php?act=xoadm&id=".$id_dmuc;
                            echo '<tr>
                                    <td> <input type="checkbox" name="" id=""></td>
                                    <td>'.$id_dmuc.'</td>
                                    <td>'.$name.' </td>
                                    <td><a href="'. $suadm.' "><input type="button" value="sửa"></a> <a href="'.$xoadm.' "><input type="button" value="xóa"></a></td>
                                </tr>';
                            }?>
                    </table>
                </div>
                <div class="row mb10"  style="gap: 20px;"> 
                    <input type="button" value="CHỌN TẤT CẢ ">
                    <input type="button" value="BỎ CHỌN TẤT CẢ ">
                    <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN  ">
                    <a href="index.php?act=adddm"><input type="button" value="NHẬP THÊM "></a>
                </div>
            </form>
        </div>
    </div>
</div>