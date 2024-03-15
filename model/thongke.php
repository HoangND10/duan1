<?php
function loadall_thongke()
{
    $sql = "select danhmuc.iddm as madm,danhmuc.tendm as tendm, count(sanpham.iddm) as countsp, min(sanpham.gia) as minprice,max(sanpham.gia) as maxprice,avg(sanpham.gia) as avgprice";
    $sql .= " from sanpham left join danhmuc on danhmuc.iddm=sanpham.iddm";
    $sql .= " group by danhmuc.iddm order by danhmuc.iddm desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
