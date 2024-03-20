<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>STT</th>
                    <th>Nội dung</th>
                    <th>Người bình luận</th>
                    <th>Sản phẩm</th>
                    <th>Ngày bình luận</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);
                    // foreach ($listtaikhoan as $tk) {
                    //     extract($tk);
                    //     if ($binhluan['iduser'] == $tk['iduser']) {
                    //         $hoten = $tk['hoten'];
                    //     }
                    // }
                    // foreach ($listsanpham as $sp) {
                    //     extract($sp);
                    //     if ($binhluan['idsp'] == $sp['idsp']) {
                    //         $tensp = $sp['tensp'];
                    //     }
                    // }
                    $xoabl = "index.php?act=xoabl&idbl=" . $idbl;
                    $i = 0;
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $i + 1 . '</td>
                            <td>' . $noidung . '</td>
                            <td>' . $hoten . '</td>
                            <td>' . $tensp . '</td>
                            <td>' . $ngaybl . '</td>
                            <td>
                                <a href="' . $xoabl . '"><input type="button" value="Xóa"></a>
                            </td>
                        </tr>';
                }
                ?>

            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="CHỌN TẤT CẢ">
            <input type="button" value="BỎ CHỌN TẤT CẢ">
            <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN">
        </div>
    </div>
</div>