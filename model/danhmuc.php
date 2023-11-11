<?php
function insert_danhmuc($tenloai){
    $sql="INSERT INTO danhmuc(name) VALUES('$tenloai')";
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql="DELETE FROM danhmuc WHERE id_dmuc=".$id;
    pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql="SELECT * FROM danhmuc ORDER BY id_dmuc desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;

}
function loadone_danhmuc($id){
    $sql="SELECT * FROM danhmuc WHERE id_dmuc=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id,$tenloai){
    $sql="UPDATE danhmuc SET name='".$tenloai."'WHERE id_dmuc=".$id;
    pdo_execute($sql);
}

function load_ten_dm($iddm){
    if($iddm>0){
        $sql="SELECT * FROM danhmuc WHERE id_dmuc=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    }
}

?>