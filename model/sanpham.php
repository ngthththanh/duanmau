<?php
function loadall_sanpham_home(){
    $sql="SELECT * FROM sanpham WHERE 1 ORDER BY pro_id desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
function loadall_sanpham_top10(){
    $sql="SELECT * FROM  sanpham WHERE 1 ORDER BY luotxem desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw="",$iddm=0){
    $sql = "SELECT sanpham.*, COUNT(binhluan.id) as soBinhLuan
    FROM sanpham LEFT JOIN binhluan ON binhluan.pro_id = sanpham.pro_id WHERE 1";
    if ($kyw != "") {
    $sql .= " AND sanpham.pro_name LIKE '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
    $sql .= " AND sanpham.id_dmuc = '" . $iddm . "'";
    }
    $sql .= " GROUP BY sanpham.pro_id
        ORDER BY sanpham.pro_id DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;

}
function insert_sanpham($tensp, $giasp, $hinh, $mota,$iddm){
    $sql="INSERT INTO sanpham(pro_name,price, img,mota, id_dmuc) VALUES ('$tensp','$giasp', '$hinh', '$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="DELETE FROM sanpham WHERE pro_id=".$id;
    pdo_execute($sql);
}
function update_sanpham($id, $tensp,$iddm, $giasp,$mota,$hinh){
    if($hinh != ""){
        $sql = "UPDATE sanpham SET pro_name = '".$tensp."',id_dmuc= '".$iddm."',price = '".$giasp."',mota ='".$mota."',img ='".$hinh."' WHERE pro_id=".$id;
    }else{
        $sql = "UPDATE sanpham SET pro_name = '".$tensp."',id_dmuc= '".$iddm."',price = '".$giasp."',mota ='".$mota."' WHERE pro_id=".$id;
    }   
    pdo_execute($sql) ;
}
function loadone_sanpham($id){
    $sql = "SELECT * FROM sanpham WHERE pro_id = $id";
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($id, $iddm){
    $sql = "SELECT * FROM  sanpham WHERE id_dmuc = $iddm and pro_id <> $id";
    $result = pdo_query($sql);
    return $result;
}
function danhsach_sanpham(){
    $sql = "SELECT * FROM  sanpham";
    $result = pdo_query($sql);
    return $result;
}
function add_sanpham($tendm){
    $sql = "INSERT INTO sanpham (`pro_name`) VALUES ('$tendm')";
    pdo_execute($sql);
}
?>