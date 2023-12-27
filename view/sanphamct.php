
<main class="catalog  mb ">
    <div class="boxleft">        
    <?php extract($onesanpham); ?>
    <div class="box_title"><h4>CHI TIẾT SẢN PHẨM</h4></div>
        <div class="box_content chitietsp">
            <?php 
                $hinh = $img_path . $img;
                echo "<img src='$hinh' width='300'>";
            ?>
            <div class="box-nd">
                <div class="title">
                    <?php echo '<a class="item_name" href="">'.$pro_name.'</a>
                        <p class="price">'.number_format($price).'VND</p>';?>
            </div>
            <p class="mota"><?php echo $mota;?></p>
            <div class="box-btn">
                <?php echo 
                    '<form action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="id" value="'.$pro_id.'">
                        <input type="hidden" name="name" value="'.$pro_name.'">
                        <input type="hidden" name="img" value="'.$img.'">
                        <input type="hidden" name="price" value="'.$price.'">
                        <input type="submit" class="add" name="addtocart" value="THÊM VÀO GIỎ HÀNG">
                        <input type="submit" class="add" value="MUA NGAY">
                    </form>';
                ?>
            </div>
        </div>  
    </div>
    <div class="mb">
        <div class="box_title"><h4>BÌNH LUẬN</h4></div>
        <div class="box_content2  product_portfolio binhluan mb">
        <?php foreach($binhluan as $value): 
            extract($value);
            // $xoabl="index.php?act=xoabl&id=".$id;
            ?>
        <div class="box-bl">
            <div class="box-user"><h6><?php echo $value['user_name']?></h6><p><sub><?php echo date("d/m/Y", strtotime($value['ngaybinhluan'])) ?></sub></p>
                <div class="box_act">
                    <a href="<?php echo $xoabl ?>"><p><sub>Xóa</sub></p></a> <a href=""><p><sub>Sửa</sub></p></a>
                </div>
        </div>
        <p><?php echo $value['noidung']?></p>
        </div>
                <?php endforeach; ?>
        </div>
        <?php if (isset($_SESSION['user_name'])) {
            $user = $_SESSION['user_name']; ?>

        <div class="box_search">
            <form action="index.php?act=sanphamct&idsp=<?=$id_pro?>" method="POST">
                <input type="hidden" name="id_pro" value="<?=$id_pro?>">
                <input type="text" name="noidung">
                <input type="submit" name="guibinhluan" value="Gửi bình luận">
            </form>
        </div>      
        <?php } else {?>
            <div class="thongbao">
                <?php 
                    echo '<div class="box_search"><h6>Đăng nhập để bình luận</h6></div>';
                ?>
            </div>
        <?php }?>        
    </div>
    <div class=" mb">
        <div class="box_title"><h4>SẢN PHẨM CÙNG LOẠI</h4></div>
        <div class="box_content">
            <?php foreach($sanphamcl as $sanphamcl){
                extract($sanphamcl);
                $linksp = "index.php?act=sanphamct&idsp=".$pro_id;
                echo '<li><a href="'.$linksp.'">'.$pro_name.'</a></li>';
                };
            ?>     
        </div>
        </div>
    </div>
    <?php include "view/boxright.php";?>
</main>