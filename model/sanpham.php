<?php
    // require_once 'pdo.php';

    function insert_sanpham($iddm,$tensp,$gia,$hinh,$mota,$soluong) {
        $sql="INSERT INTO sanpham (iddm,tensp,gia,hinh,mota,soluong) VALUES ('$iddm','$tensp','$gia','$hinh','$mota','$soluong')";
        pdo_execute($sql);
    }


    function loadall_sanpham_home() {
        $sql="select * from sanpham where 1 oder by idsp dese limit 0,9 ";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }

    function loadall_sanpham_top10() {
        $sql="select * from sanpham where 1 oder by luotxem desc limit 0,9 ";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham($keyw="",$iddm=0) {
        $sql="select * from sanpham where 1";
        if($keyw!=""){
            $sql.=" and tensp like '%".$keyw."%'";
        }
        if($iddm>0) {
            $sql.=" and iddm = '".$iddm."'";
        }
    }
    $sql.=" order by idsp desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham; 

    function loadone_sanpham($idsp) {
        $sql= "select * from sanpham where id = $idsp";
        $result = pdo_query($sql);
        return $result;
    }
    function load_sanpham_cungloai($idsp, $iddm) {
        $sql= "select * from sanpham where iddm = $iddm and id <> $idsp";
        $result = pdo_query($sql);
        return $result;
    }


    function delete_sp($idsp) {
        $sql="Delete from sanpham where idsp=$idsp";
        echo $sql;
        pdo_execute($sql);
    }

    function update_sanpham($idsp,$tensp,$hinh,$mota,$gia,$soluong,$iddm) {
        if($hinh!=""){
            $sql = "Update `sanpham` Set `tensp`='{$tensp}, `gia`='{$gia}, `soluong`='{$soluong}', `mota`='{$mota}', `idm`='{$idm}', `hinh`='{$hinh}' where `sanpham`.`idsp`=$idsp" ;
        }else{
            $sql = "Update `sanpham` Set `tensp`='{$tensp}, `gia`='{$gia}, `soluong`='{$soluong}', `mota`='{$mota}', `idm`='{$idm}' where `sanpham`.`idsp`=$idsp" ;
    }
    pdo_execute($sql);
    }
