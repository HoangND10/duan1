<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th>MÃ TÀI KHOẢN</th>
                    <th>HỌ TÊN</th>
                    <th>EMAIL</th>
                    <th>ĐIỆN THOẠI</th>
                    <th>ĐỊA CHỈ</th>
                    <th>TÀI KHOẢN</th>
                    <th>MẬT KHẨU</th>
                    <th>VAI TRÒ</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $suatk = "index.php?act=suatk&iduser=" . $iduser;
                    $xoatk = "index.php?act=xoatk&iduser=" . $iduser;
                    echo '<tr>
                            <td>' . $iduser . '</td>
                            <td>' . $hoten . '</td>
                            <td>' . $email . '</td>
                            <td>' . $sdt . '</td>
                            <td>' . $diachi . '</td>
                            <td>' . $taikhoan . '</td>
                            <td>' . $matkhau . '</td>
                            <td>' . $vaitro . '</td>
                            <td>
                                <a href="' . $suatk . '"><input type="button" value="Sửa"></a>
                                <a href="' . $xoatk . '"><input type="button" value="Xóa"></a>
                            </td>
                        </tr>';
                }
                ?>

            </table>
        </div>
        <div class="row mb10">
            <a href="index.php?act=addtk">
                <input type="button" value="NHẬP THÊM"></a>
        </div>
    </div>
</div>