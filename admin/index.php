<?php
include "../model/pdo.php";
include "../model/taikhoan.php";
include "../model/thongke.php";


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
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
