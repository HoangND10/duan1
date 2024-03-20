<div class="row">

    <div class="row frmtitle mb">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div class="row frmcontent">
    <form action="index.php?act=listbill" method="post">
        <input type="text" name="kyw" placeholder="Nhập Mã Đơn Hàng">
        <input type="submit" name="listok" value="GO">
    </form>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th>STT</th>
                    <th>Người nhận</th>
                    <th>Tổng tiền</th>
                    <th>Phương thức thanh toán</th>
                    <th>Ngày mua</th>
                    <th>Trạng thái</th>
                </tr>
                <?php
                $i = 0;
                foreach ($listbill as $bill) {
                    extract($bill);
                    $tt = '';
                    foreach ($listtt as $status) {
                        extract($status);
                        if ($bill['idtt'] == $status['idtt']) {
                            $s = "selected";
                        } else {
                            $s = "";
                        }
                        $tt .= '<option value="' . $idtt . '" ' . $s . '>' . $tentt . '</option>';
                    }

                    echo '  
                        <tr>
                            <td>' . ($i + 1) . '</td>
                            <td>' . $hoten . ' </td>
                            <td>' . $tongtien . ' </td>
                            <td>' . $pttt . ' </td>
                            <td>' . $ngaymua . ' </td>
                            <td>
                                <form method="post" action="index.php?act=updateStatus">
                                    <input type="hidden" name="iddh" value="' . $iddh . '">
                                    <select name="trangthai">
                                        ' . $tt . '
                                    </select>
                                    <input type="submit" value="Cập nhật">
                                </form>
                            </td>
                        </tr>';
                    $i++;
                }
                ?>
            </table>
        </div>
    </div>
</div>