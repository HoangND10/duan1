<?php
function insert_donhang($iduser, $tongtien, $pttt, $order_date, $trangthai)
{
    $sql = "INSERT INTO donhang(iduser,tongtien,pttt,ngaymua,idtt) VALUES('$iduser', '$tongtien', '$pttt', '$order_date', '$trangthai');";
    // echo $sql;
    // die();
    pdo_execute($sql);
}
function updateStatus($id, $trangthai)
{
    // Thực hiện cập nhật trạng thái trong cơ sở dữ liệu
    // Ví dụ:
    $servername = "localhost";
    $username = "root";
    $password = "";
    $pdo = new PDO("mysql:host=$servername;dbname=hkcstore;port=3307", $username, $password);
    $sql = "UPDATE donhang SET idtt = :idtt WHERE iddh = :iddh";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':idtt', $trangthai);
    $stmt->bindParam(':iddh', $id);
    $stmt->execute();
    $pdo = null;
}
function loadall_bill()
{
    $sql = "SELECT donhang.iddh, donhang.iduser, donhang.tongtien, donhang.pttt, donhang.ngaymua, donhang.idtt, user.hoten
        FROM donhang
        INNER JOIN user ON donhang.iduser = user.iduser
        ORDER BY donhang.iddh DESC;";
    $listbill = pdo_query($sql);
    return $listbill;
}
function loadall_tt()
{
    $sql = "SELECT * FROM trangthai";
    $listtt = pdo_query($sql);
    return $listtt;
}
function tt()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}
