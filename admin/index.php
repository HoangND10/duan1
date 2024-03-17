<?php
include "../model/pdo.php";
include "../model/taikhoan.php";
include "../model/thongke.php";
include "../model/danhmuc.php";
// include "../model/sanpham.php";

include "header.php";

//controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'addtk':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $hoten = $_POST['hoten'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $diachi = $_POST['diachi'];
                $taikhoan = $_POST['taikhoan'];
                $matkhau = $_POST['matkhau'];
                insert_taikhoan($hoten, $email, $sdt, $diachi, $taikhoan, $matkhau);
                $thongbao = "Thêm thành công";
            }
            include "taikhoan/add.php";
            break;
        case 'dskh':
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'thongke':
            $listthongke = loadall_thongke();
            include "thongke/list.php";
            break;
        case 'bieudo':
            $listbieudo = loadall_thongke();
            include "thongke/bieudo.php";
            break;
        case 'xoatk':
            if (isset($_GET['iduser']) && ($_GET['iduser'] > 0)) {
                delete_taikhoan($_GET['iduser']);
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'suatk':
            if (isset($_GET['iduser']) && $_GET['iduser'] > 0) {
                $user = loadone_sanpham($_GET['iduser']);
            }
            include "taikhoan/update.php";
            break;
        case 'updatetk':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                // if (isset($_POST['id']) && ($_POST['id'])) { 
                // var_dump($_POST);
                // print_r($iduser, $hoten, $email, $sdt, $diachi, $taikhoan, $matkhau);
                $iduser = $_POST['iduser'];
                $hoten = $_POST['hoten'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $diachi = $_POST['diachi'];
                $taikhoan = $_POST['taikhoan'];
                $matkhau = $_POST['matkhau'];
                update_taikhoan($iduser, $hoten, $email, $sdt, $diachi, $taikhoan, $matkhau);
                $_SESSION['user'] = checkuser($user, $pass);
                header('location: index.php?act=dskh');
            }
            include "taikhoan/update.php";
            break;
            case 'adddm':
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tendanhmuc=$_POST['tendanhmuc'];
                    insert_dm($tendanhmuc);
                    $thongbao="Them danh muc thanh congh";
                }
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $listmd=load_all_dm();
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['iddm'])&& ($_GET['iddm']>0)){
                    delete_dm($_GET['iddm']);
                }
                $listdm=load_all_dm();
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                    $dm=loadone_danhmuc($_GET['iddm']);
                }
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhap']) && ($_POST['capnhap'])){
                    $tenloai=$_POST['tenloai'];
                    $iddm=$_POST['iddm'];
                    update_danhmuc($tenloai,$iddm);
                }
                $listdm=load_all_dm();
                include "danhmuc/list.php";
                break;
        


            default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
