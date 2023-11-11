<?php 
include "../model/pdo.php";
include "header.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/thongke.php";
include "../model/binhluan.php";
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch($act){
        case 'adddm':
            // kieem tra nguoi dung cos click vao add hay ko//
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tenloai=$_POST['tenloai'];
                insert_danhmuc($tenloai);
                // $thongbao="them thanh cong";
                header('Location: index.php?act=listdm');
            }
            include "danhmuc/add.php";
            break;
        case'listdm':  
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case'xoadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case'suadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $danhmuc=loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case'updatedm':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $tenloai=$_POST['tenloai'];
                $id=$_POST['id'];
                update_danhmuc($id,$tenloai);
                $thongbao="cap nhat thanh cong";
            }
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/list.php";
            break;
            //sản phẩm
        case 'addsp':
            // kieem tra nguoi dung cos click vao add hay ko//
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $iddm=$_POST['iddm'];
                $tensp=$_POST['tensp'];
                $giasp=$_POST['giasp'];
                $mota=$_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                };
                insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                $thongbao="Thêm thành công";
                header("Location:index.php?act=listsp");
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case'listsp':
            if(isset($_POST['listok'])&&($_POST['listok'])){
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            }else{
                $kyw ='';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham=loadall_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;
        case 'chartsp':
            $listsanpham = loadall_sanpham();
            include "binhluan/chart.php";
            break;
        case'xoasp':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_sanpham($_GET['id']);
            }
            $listsanpham=loadall_sanpham("",0);
            include "sanpham/list.php";
            break;
        case'suasp':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $sanpham=loadone_sanpham($_GET['id']);

            }
            $listdanhmuc=loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case'updatesp':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){   
                $id=$_POST['id'];  
                $iddm=$_POST['iddm'];
                $tensp=$_POST['tensp'];
                $giasp=$_POST['giasp'];
                $mota=$_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                $listsanpham= update_sanpham($id, $tensp,$iddm, $giasp,$mota,$hinh);
                $thongbao="Cập nhật thành công";
            }
            $listsanpham=loadall_sanpham("",0);
            include "sanpham/list.php";
            break;
            //taikhoan
        case'listkh':
            $listkhachhang=loadall_khachhang();
            include "khachhang/list.php";
            break;
        case 'xoatk':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_taikhoan($_GET['id']);
            }
            $listkhachhang=loadall_khachhang("",0);
            include "khachhang/list.php";
            break;
        case 'suatk':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $khachhang=loadone_khachhang($_GET['id']);
            }
            include "khachhang/update.php";
            break;

        case'updatetk':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user_name = $_POST['user']; 
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $address = $_POST['address'];
                $id = $_POST['id'];
                $role = $_POST['role'];
                // $tk = update_tk($id,$user_name,$email,$tel,$pass, $address,$role);
                header("Location:index.php?act=updatetk");
            }
            include "khachhang/list.php";
            break;
        case "thongke":
            $dsthongke = load_thongke_sanpham_danhmuc();
            include "thongke/list.php";
            break;
        case "chart":
            $dsthongke = load_thongke_sanpham_danhmuc();
            include "thongke/chart.php";
            break;
        case 'listbl':
            $listbinhluan = load_binhluan(0);
            include "binhluan/list.php";
            break;

        case 'xoabl';
        if(isset($_GET['id'])&&($_GET['id']>0)){
            delete_binhluan($_GET['id']);
        }
        $listbinhluan=load_binhluan(0);
        include "binhluan/list.php";
        break;
    }
}else{
    $dsthongke = load_thongke_sanpham_danhmuc();
    include "home.php";
}
include "footer.php";
?>