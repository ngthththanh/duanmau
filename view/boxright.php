
<div class="boxright">
    <div class="box_title"><h4>TÀI KHOẢN</h4></div>
        <?php if (isset($_SESSION['user_name'])) {
            $user = $_SESSION['user_name']; 
            $role = isset($user['role']) ? $user['role'] : 0;?>

    <div class="box-dx mb">
        <div class="dn" style="display: flex; gap: 10px;">
        <!-- <img src="../img/a.jpg" alt="" width="50px" style="border-radius: 50%;"> -->
        <h5 class="user">Xin chào <?= $user['user_name']?></h5>
        </div>
        <ul>
            <li class="form_li"><a href="index.php?act=dangxuat">Đăng Xuất</a></li>
            <li class="form_li"><a href="index.php?act=updatetk">Cập Nhập Tài Khoản</a></li>
            <?php if ($role == 1) {?>
            <li class="form_li"><a href="admin/index.php">Đăng Nhập Admin</a></li>
            <?php }else{?>
                <li class="form_li"><a href="#">Đơn hàng của tôi</a></li>
            <li class="form_li"><a href="index.php">Đăng Kí Tài Khoản Admin</a></li>
            <?php }?>
   
        </ul>
 
    </div>
    <?php } else {?>
    <div class="box_content form_account mb">
        <form action="index.php?act=dangnhap" method="POST">
            <div class="form-dn">
                <h4>Tên đăng nhập</h4>
                <input type="text" name="user" id="">          
            </div>
            <div class="form-dn">
                <h4>Mật khẩu</h4>
                <input type="password" name="pass" id="">
            </div>
           <div class="form-dn"> <input type="checkbox" name="" id="">Ghi nhớ tài khoản?</div>
            <input type="submit" value="Đăng nhập" name="dangnhap">
        </form>
        <ul>
            <li class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <li class="form_li"><a href="index.php?act=dangki">Đăng Kí</a></li>
        </ul>
        <div class="thongbao">
            <?php if(isset($thongbaodn) && ($thongbaodn)!=""){
                    echo $thongbaodn;
            }?>
        </div>
    </div>
    <?php }?>
        <div class="box_title"><h4>DANH MỤC</h4></div>
        <div class="box_content2 product_portfolio mb">
            <ul>
                <?php
                foreach($dsdm as $dm){
                    extract($dm);
                    $linkdm="index.php?act=sanpham&iddm=".$id_dmuc;
                    echo '<li><a href="'.$linkdm.'">'.$name.' </a></li>';
                }?>
            </ul>
        </div>
        <div class="box_search mb">
            <form action="index.php?act=sanpham" method="POST">
                <input type="text" placeholder="Từ khóa tìm kiếm" name="kyw">
                <input type="submit" name="timkiem" value="Tìm Kiếm">
            </form>
        </div>
        <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
    <div class="mb">
        <div class="box_title"><h4>SẢN PHẨM BÁN CHẠY</h4></div>
        <div class="box_content">
            <?php
            foreach($dstop10 as $sp){
                extract($sp);
                $linksp="index.php?act=sanphamct&idsp=".$pro_id;
                $img=$img_path.$img;
                echo'<div class="selling_products" style="width:100%;">
                    <img src="'.$img.'" alt="anh">
                    <a href="'.$linksp.'">'.$pro_name.'</a>
                </div>';
            }?>
        </div>
    </div>
