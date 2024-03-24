<?php
ob_start();
session_start();
include "model/taikhoan.php";
include 'model/pdo.php';
include 'model/danhmuc.php';
include 'model/sanpham.php';
include 'views/header.php';

$sanpham = loadall_sanpham_home();

$listdanhmuc = loadall_danhmuc();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
                $dssp = loadall_sanpham("", $iddm);
                $tendm = load_ten_dm($iddm);
                include "./sanpham.php";
            } else {
                include "./views/home.php";
            }
            break;
        case 'spct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                include "./chitietsp.php";
            } else {
                include "./views/home.php";
            }
            break;

        case 'shop':
            include "./views/shop.php";
            break;
        case 'mytk':
            include "./views/taikhoan.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $taikhoan = $_POST['taikhoan'];
                $matkhau = $_POST['matkhau'];
                $hoten = $_POST['hoten'];
                $sdt = $_POST['sdt'];
                $diachi = $_POST['diachi'];
                insert_taikhoan($hoten, $email, $sdt, $diachi, $taikhoan, $matkhau);
                $thongbao = "Đăng ký thành công";
            }
            include "views/login/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $taikhoan = $_POST['taikhoan'];
                $matkhau = $_POST['matkhau'];
                $checkuser = checkuser($taikhoan, $matkhau);
                if (is_array($checkuser)) {
                    $_SESSION['taikhoan'] = $checkuser;
                    header('Location: index.php');
                } else {
                    $thongbao1 = "Tài khoản không tồn tại";
                }
            }
            include "views/login/dangky.php";
            break;

            // case 'edit_taikhoan':
            //     if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
            //         $taikhoan = $_POST['taikhoan'];
            //         $matkhau = $_POST['matkhau'];
            //         $email = $_POST['email'];
            //         $sdt = $_POST['sdt'];
            //         $diachi = $_POST['diachi'];
            //         $iduser = $_POST['iduser'];
            //         $hoten = $_POST['hoten'];

            //         update_taikhoan($iduser, $hoten, $email, $sdt, $diachi, $taikhoan, $matkhau);
            //         $_SESSION['taikhoan'] = dangnhap($taikhoan, $matkhau);
            //     }
            //     include "views/login/edit_taikhoan.php";
            //     break;
            // case 'quenmk':
            //     if (isset($_POST['guiemail'])) {
            //         $email = $_POST['email'];
            //         $sendMaiMess = sendMail($email);
            //     }
        case 'dangxuat':
            session_unset();
            header('location: index.php');
            break;
        case 'thanhcong':
            include "index.php";
            break;
    }
} else {
    include 'views/home.php';
}
include 'views/footer.php';
