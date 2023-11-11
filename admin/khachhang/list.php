<div class="row2">
    <div class="row2 font_title mb"><h4>DANH SÁCH TÀI KHOẢN</h4></div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ TÀI KHOẢN</th>
                        <th>USER</th>
                        <th>MẬT KHẨU</th>
                        <th>EAMIL</th>
                        <th>ĐỊA CHỈ</th>
                        <th>ĐIỆN THOẠI</th>
                        <th>ROLE</th>
                        <th></th>
                    </tr>
                    <?php foreach ($listkhachhang as $khachhang) {
                        extract($khachhang);
                        $suatk="index.php?act=suatk&id=".$user_id;
                        $xoatk="index.php?act=xoatk&id=".$user_id;
                        # code...
                        echo'<tr>
                                <td> <input type="checkbox" name="" id=""></td>
                                <td>'.$user_id.'</td>
                                <td>'.$user_name.' </td>
                                <td>'.$pass.' </td>
                                <td>'.$email.' </td>
                                <td>'.$address.' </td>
                                <td>'.$tel.' </td>
                                <td>'.$role.' </td>
                                <td> <a href="'.$xoatk.' "><input type="button" value="xóa"></a></td>
                            </tr>';
                    }?>       
                </table>
            </div>
            <div class="row mb10" style="gap: 20px;">
                <input type="button" value="CHỌN TẤT CẢ ">
                <input type="button" value="BỎ CHỌN TẤT CẢ ">
                <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN  ">
            </div>
        </form>
    </div>
</div>
</div>