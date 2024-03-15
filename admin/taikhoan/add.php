<div class="row">
    <div class="row frmtitle">
        <H1>TẠO TÀI KHOẢN</H1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=addtk" method="post">
            <div class="boxtrai mr">
                <div class="row mb">

                    <div class="boxtitle">Đăng Kí Thành Viên</div>
                    <div class="row boxcontent formtaikhoan">
                        <div class="row mb10">Họ và tên<input type="text" name="hoten"></div>
                        <div class="row mb10">Email<input type="email" name="email"></div>
                        <div class="row mb10">Điện thoại<input type="text" name="sdt" value=""></div>
                        <div class="row mb10">Địa chỉ<input type="text" name="diachi"></div>
                        <div class="row mb10">Tên đăng nhập<input type="text" name="taikhoan"></div>
                        <div class="row mb10">Mật khẩu<input type="password" name="matkhau"></div>
                        <div class="row mb10"><input type="submit" value="Đăng ký" name="dangky">
                            <input type="reset" value="Nhập Lại">
                            <a href="index.php?act=dskh"><input type="button" value="DANH SÁCH"></a>
                        </div>
                        <h2 class="thongbao">
                            <?php
                            if (isset($thongbao) && ($thongbao != "")) {
                                echo $thongbao;
                            }
                            ?></h2>
                    </div>
                </div>

            </div>

    </div>
    </form>
</div>
</div>
</div>