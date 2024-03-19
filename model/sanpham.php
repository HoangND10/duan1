<?php
function insert_sanpham($tensp, $mota, $hinh, $giasp, $soluong, $iddm)
{
    $sql = "insert into sanpham(tensp,mota,hinh,gia,soluong,iddm) values('$tensp','$mota','$hinh','$giasp','$soluong','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($idsp)
{
    $sql = "delete from sanpham where idsp=" . $idsp;
    pdo_execute($sql);
}
function loadall_sanpham_home()
{
    $sql = "select * from sanpham where 1 order by idsp desc limit 0,8";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw = "", $iddm = 0)
{
    $sql = "SELECT sanpham.*, danhmuc.tendm AS tendm
    FROM sanpham
    INNER JOIN danhmuc ON sanpham.iddm = danhmuc.iddm
    WHERE 1";
    if ($kyw != "") {
        $sql .= " and tendm like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    $sql .= " order by iddm desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham($idsp)
{
    $sql = "select * from sanpham where idsp=" . $idsp;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_ten_dm($iddm)
{
    if ($iddm > 0) {
        $sql = "select * from danhmuc where iddm=" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}
function load_sanpham_cungloai($idsp, $idsp_danhmuc)
{
    $sql = "select * from sanpham where iddm=" . $idsp_danhmuc . " AND idsp<>" . $idsp;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($idsp, $iddm, $tensp, $giasp, $soluong, $mota, $hinh)
{
    if ($hinh != "")
        $sql = "update sanpham set iddm='" . $iddm . "',tensp='" . $tensp . "',gia='" . $giasp . "',soluong='" . $soluong . "',mota='" . $mota . "',hinh='" . $hinh . "' where idsp=" . $idsp;
    else
        $sql = "update sanpham set iddm='" . $iddm . "',tensp='" . $tensp . "',gia='" . $giasp . "',soluong='" . $soluong . "',mota='" . $mota . "' where idsp=" . $idsp;
    pdo_execute($sql);
}
