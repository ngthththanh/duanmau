<div class="row2">
    <div class="row2 mb font_title">
        <h4>THỐNG KÊ SẢN PHẨM TRONG DANH MỤC</h4>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>

                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ NHỎ NHẤT</th>
                        <th>GIÁ LỚN NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>

                    </tr>

                    <?php
                    foreach ($dsthongke as $thongke) {
                        extract($thongke);
                    ?>
                        <tr>
                            <td><?php echo $id_dmuc ?></td>
                            <td><?php echo $name ?></td>
                            <td><?php echo $soluong ?></td>
                            <td><?php echo $gia_min ?></td>
                            <td><?php echo $gia_max ?></td>
                            <td><?php echo number_format($gia_avg, 2) ?></td>
                        </tr>
                    <?php
                    }
                    ?>

                </table>
            </div>
            <div class="row mb10 ">
                <a href="?act=chart"> <input class="mr20" type="button" value="XEM BIỂU ĐỒ"></a>
            </div>
        </form>
    </div>
</div>