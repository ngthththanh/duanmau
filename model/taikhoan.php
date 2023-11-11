<?php
function insert_taikhoan($email,$user,$pass){
$sql="INSERT INTO `taikhoan` ( `email`, `user_name`, `pass`) VALUES ( '$email', '$user','$pass'); ";
pdo_execute($sql);
}
function checkuser($user,$pass) {
$sql="SELECT * FROM taikhoan WHERE user_name='".$user."' and pass='".$pass."'";
$taikhoan = pdo_query_one($sql);
return $taikhoan;
}
function update_taikhoan($id, $user_name, $email, $pass, $tel, $address){
$sql = "UPDATE taikhoan SET user_name='".$user_name."', pass='".$pass."', email='".$email."', tel='".$tel."', address='".$address."' WHERE user_id=".$id;
pdo_execute($sql);
}
function checkemail($email) {
$sql="SELECT * FROM taikhoan WHERE email = '".$email."'";
$taikhoan = pdo_query_one($sql);
return $taikhoan;
}
function loadall_khachhang(){
$sql="SELECT * FROM taikhoan ORDER BY user_id desc";
$listkhachhang=pdo_query($sql);
return $listkhachhang;
}
function delete_taikhoan($id){
$sql="DELETE FROM taikhoan WHERE user_id=".$id;
pdo_execute($sql);
}
function loadone_khachhang($id){
$sql="SELECT * FROM taikhoan WHERE user_id=".$id;
$dm=pdo_query_one($sql);
return $dm;
}
?>
