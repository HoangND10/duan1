<?php
session_start();
include "model/taikhoan.php";
include 'model/pdo.php';
include 'model/danhmuc.php';
$listdanhmuc = loadall_danhmuc();
include 'model/sanpham.php';
$sanpham = loadall_sanpham_home();
include 'views/header.php';
include 'views/home.php';
include 'views/footer.php';

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
        case 'login':
            include "./views/login/dangky.php";
            break;
        case 'mytk':
            include "./views/taikhoan.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email= $_POST['email'];
                $taikhoan= $_POST['taikhoan'];
                $matkhau= $_POST['matkhau'];
                insert_tk($email,$taikhoan,$matkhau);
                $thongbao="dang ky thanh cong";
            }
            include "views/login/dangky.php";
            break;
        case 'dangnhap':
            if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                $taikhoan= $_POST['taikhoan'];
                $matkhau= $_POST['matkhau'];
                $checkuser=dangnhap($taikhoan,$matkhau);
                if(is_array($checkuser)){
                    $_SESSION['taikhoan']=$checkuser;
                    $thongbao1= "Ban da dang nhap thanh cong";
                    include "views/home.php";
                }
                else{
                    $thongbao1 = "dang nhap that bai";
                    include "views/login/dangky.php";
                }
            }
            include "views/login/dangky.php";
            break;

        case 'edit_taikhoan':
            if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
                $taikhoan=$_POST['taikhoan'];
                $matkhau=$_POST['matkhau'];
                $email=$_POST['email'];
                $sdt=$_POST['sdt'];
                $diachi=$_POST['diachi'];
                $iduser=$_POST['iduser'];
                $hoten=$_POST['hoten'];

                update_taikhoan($iduser, $hoten, $email, $sdt, $diachi, $taikhoan, $matkhau);
                $_SESSION['taikhoan'] = dangnhap($taikhoan,$matkhau);

            }
            include "views/login/edit_taikhoan.php";
            break;
        case 'quenmk':
            if(isset($_POST['guiemail'])){
                $email = $_POST['email'];
                $sendMaiMess=sendMail($email);
            }
        case 'dangxuat':
            dangxuat();
            include "views/home.php";
            break;
        case 'thanhcong':
            include "index.php";
            break;

            
        
    }
}
