<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


ob_start();
session_start();
include "global.php";
include "model/taikhoan.php";
include 'model/pdo.php';
include 'model/danhmuc.php';
include 'model/sanpham.php';
include 'model/donhang.php';
include 'views/header.php';
if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
$sanpham = loadall_sanpham_home();

$listdanhmuc = loadall_danhmuc();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "sanpham":
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "views/sanpham.php";
            break;
            break;
        case "chitietsp":
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $sanpham = loadone_sanpham($_GET['idsp']);
            }
            $spcungloai = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
            include "views/chitietsp.php";
            break;


        case 'shop':
            include "views/shop.php";
            break;
        case 'mytk':
            include "views/taikhoan.php";
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

        case "about":
            include "views/trangcon/about.php";
            break;
        case "tintuc":
            include "views/trangcon/tintuc.php";
            break;
        case "lienhe":
            include "views/trangcon/lienhe.php";
            break;
        case "bill":
            include "views/viewcart/mybill.php";
            break;
        case "addtocart":
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $idsp = $_POST['idsp'];
                $tensp = $_POST['tensp'];
                $hinh = $_POST['hinh'];
                $gia = $_POST['gia'];
                $soluong = 1;
                $ttien = $soluong * $gia;
                $spadd = [$idsp, $tensp, $hinh, $gia, $soluong, $ttien];
                array_push($_SESSION['mycart'], $spadd);
            }
            include "views/home.php";
            break;
        case "deletecart":
            if (isset($_GET['idcart'])) {
                $idcart = $_GET['idcart'];
                unset($_SESSION['mycart'][$idcart]);
                $_SESSION['mycart'] = array_values($_SESSION['mycart']);
            }
            header("location: index.php");
            exit();
            break;
        case "donhang":
            if (isset($_POST['thanhtoan']) && ($_POST['thanhtoan'])) {
                if (isset($_SESSION['taikhoan']['iduser'])) {
                    $iduser = $_SESSION['taikhoan']['iduser'];
                    $tongtien = tt();
                    $pttt = "Tiền mặt";
                    $trangthai = "1";
                    $order_date = date('Y-m-d H:i:s');
                    // echo "<pre>";
                    // print_r([$iduser, $tongtien, $pttt, $order_date, $trangthai]);
                    // echo "</pre>";
                    insert_donhang($iduser, $tongtien, $pttt, $order_date, $trangthai);
                    $thongbao = "Đặt hàng thành công";
                    // header("Location: " . $_SERVER['HTTP_REFERER']);
                } else {
                    header("Location: index.php?act=dangnhap");
                }
            }
            include "views/viewcart/mybill.php";
            break;
    }
} else {
    include 'views/home.php';
}
include 'views/footer.php';
