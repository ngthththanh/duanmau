<main class="catalog  mb ">
    <div class="boxleft mb">
    <div class="box_title"><h4>DANH MỤC</h4></div>
        <div class="box_content2 product_portfolio">
            <ul>
                <?php
                    foreach($dsdm as $dm){
                        extract($dm);
                        $linkdm="index.php?act=sanpham&iddm=".$id_dmuc;
                        echo '<li><a href="'.$linkdm.'">'.$name.' </a></li>';

                    }
                ?>
            </ul>
        </div>
     </div>
    <?php
        include "view/boxright.php";
    ?>

</main>
<!-- BANNER 2 -->