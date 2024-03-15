<?php
// if (is_array($user)) {
//     extract($user);
// }
?>
<div class="row">
    <div class="row frmtitle">
        <H1>CẬP NHẬT TÀI KHOẢN</H1>
    </div>
    <div class="row boxcontent formtaikhoan">
        <?php
        if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
            extract($_SESSION['user']);
        }
        if (isset($_GET['iduser'])) {
            $iduser = $_GET['iduser'];
        }

        ?>
        <form action="index.php?act=updatetk" method="POST">
            <!-- <div class="row mb10">Email<input type="email" name="email" value=""></div>
            <div class="row mb10">Tên đăng nhập<input type="text" name="user" value=""></div>
            <div class="row mb10">Mật khẩu<input type="password" name="pass" value=""></div>
            <div class="row mb10">Điện thoại<input type="text" name="phone" value=""></div> -->
            <div class="row mb10">Họ và tên<input type="text" name="hoten" value="<?= $hoten ?>"></div>
            <div class="row mb10">Email<input type="email" name="email" value="<?= $email ?>"></div>
            <div class="row mb10">Điện thoại<input type="text" name="sdt" value="<?= $sdt ?>"></div>
            <div class="row mb10">Địa chỉ<input type="text" name="diachi" value="<?= $diachi ?>"></div>
            <div class="row mb10">Tên đăng nhập<input type="text" name="taikhoan" value="<?= $taikhoan ?>"></div>
            <div class="row mb10">Mật khẩu<input type="text" name="matkhau" value="<?= $matkhau ?>"></div>
            <input type="hidden" name="iduser" value="<?= $iduser ?>">
            <input type="submit" value="Cập nhật" name="capnhat">
            <input type="reset" value="Nhập Lại">
    </div>
    </form>
    <h2 class="baoloi">
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }
        ?></h2>
</div>
</div>
</div>