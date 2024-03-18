<div class="row">
    <div class="row frmtitle mb">
        <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
    </div>
    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw">
        <select name="iddm">
            <option value="0" select>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="' . $id . '">' . $name . '</option>';
            }
            ?>
            <option value=""></option>
        </select>
        <input type="submit" name="listok" value="GO">
    </form>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">

            <table>
                <tr>
                    <th></th>
                    <th>MÃ SẢN PHẨM</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>MÔ TẢ</th>
                    <th>GIÁ</th>
                    <th>SỐ LƯỢNG</th>
                    <th>LOẠI SẢN PHẨM</th>
                    <th>LƯỢT XEM</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=" . $idsp;
                    $xoasp = "index.php?act=xoasp&id=" . $idsp;
                    $hinhpath = "../upload/" . $hinh;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height='80'>";
                    } else {
                        $hinh = "no photo";
                    }
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $idsp . '</td>
                            <td>' . $tensp . '</td>
                            <td>' . $hinh . '</td>
                            <td>' . $mota . '</td>
                            <td>' . $gia . '</td>
                            <td>' . $soluong . '</td>
                            <td>' . $iddm . '</td>
                            <td>' . $luotxem . '</td>
                            <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a><a href="' . $xoasp . '"><input type="button" value="Xóa"></a></td>
                        </tr>';
                }
                ?>

            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="CHỌN TẤT CẢ">
            <input type="button" value="BỎ CHỌN TẤT CẢ">
            <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN">
            <a href="index.php?act=addsp">
                <input type="button" value="NHẬP THÊM"></a>
        </div>
    </div>
</div>