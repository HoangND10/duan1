<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<div class="row">
    <div class="row frmtitle">
        <H1>CẬP NHẬT LOẠI HÀNG HÓA</H1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatedm" method="post">
            <div class="row mb10">
                Mã loại<br>
                <input type="text" name="maloai" disabled>
            </div>
            <div class="row mb10">
                Tên loại<br>
                <input type="text" name="tenloai" value="<?php if (isset($tendm) && $tendm != "") echo $tendm; ?>">
            </div>
            <div class="row mb10">
                <input type="hidden" name="iddm" value="<?php if (isset($iddm) && ($iddm > 0)) echo $iddm; ?>">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>