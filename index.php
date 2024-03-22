<?php
session_start();
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
                include "./view/home.php";
            }
            break;
        case 'spct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                include "./chitietsp.php";
            } else {
                include "./view/home.php";
            }
            break;
    }
}
