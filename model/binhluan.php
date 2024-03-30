<?php
function loadall_binhluan()
{
    $sql = "SELECT binhluan.*, user.hoten AS hoten, sanpham.tensp AS tensp 
            FROM binhluan 
            INNER JOIN user ON binhluan.iduser = user.iduser 
            INNER JOIN sanpham ON binhluan.idsp = sanpham.idsp 
            WHERE 1";
    $listbl = pdo_query($sql);
    return $listbl;
}
function delete_binhluan($idbl)
{
    $sql = "delete from binhluan where idbl=" . $idbl;
    pdo_execute($sql);
}
// function insert_binhluan($iduser,$idpro,$noidung,$ngaybinhluan){
//     $sql="INSERT INTO `binhluan`(`user_id`,`product_id`,`content`,`create_at`) VALUES('$iduser','$idpro','$noidung','$ngaybinhluan')";
//     pdo_execute($sql);
// }

function insert_binhluan($idsp, $noidung,$iduser){
    $date = date('Y-m-d');
    $sql = "
        INSERT INTO `binhluan`( `iduser`, `idsp`, `ngaybl`,`noidung`) 
        VALUES ('$iduser','$idsp','$date','$noidung' );
    ";
    //echo $sql;
    //die;
    pdo_execute($sql);
}

function accountDetail($hoten=''){
    if(!empty($hoten)){
        $sql = "SELECT * FROM user WHERE taikhoan='$hoten'";
    }else{
        $sql = "SELECT * FROM user";
    }

    $data = pdo_query_one($sql);
    return $data;
}
