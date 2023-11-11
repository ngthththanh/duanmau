<main class="catalog  mb ">
    <div class="boxleft mb">
        <div class="banner mb">
            <img id="banner" src="./img/banner0.png" alt="">
            <button class="pre" onclick="pre()">&#10094;</button>
            <button class="next" onclick="next()">&#10095;</button>
        </div>
        <div class="box_title mb"><h4>SẢN PHẨM MỚI</h4></div>
        <div class="items">
            <?php
                $i=0;
                foreach ($spnew as $sp){
                    extract($sp);
                    $hinh =  $img_path.$img;
                    $linksp="index.php?act=sanphamct&idsp=".$pro_id;
                    
                    echo '<div class="box_items mb">
                            <div class="box_items_img">
                                <a  href="'. $linksp.'"><img src="'.$hinh.'" alt=""></a>
                            </div>
                            <a class="item_name" href="'. $linksp .'">'.$pro_name.'</a>
                            <p class="price">'.number_format($price).'VND</p>
                            <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="id" value="'.$pro_id.'">
                                <input type="hidden" name="name" value="'.$pro_name.'">
                                <input type="hidden" name="img" value="'.$img.'">
                                <input type="hidden" name="price" value="'.$price.'">
                                <input type="submit" class="add" name="addtocart" value="THÊM VÀO GIỎ HÀNG">
                            </form>
                            </div>';
                    $i+=1;
                }
            ?>
        </div>
    </div>
    <?php include "view/boxright.php";?>
</main>
<!-- BANNER 2 -->