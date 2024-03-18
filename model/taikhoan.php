<?php
function insert_taikhoan($hoten, $email, $sdt, $diachi, $taikhoan, $matkhau)
{
    $sql = "insert into user(hoten,email,sdt,diachi,taikhoan,matkhau) values('$hoten','$email','$sdt','$diachi','$taikhoan','$matkhau')";
    pdo_execute($sql);
}
function checkuser($taikhoan, $matkhau)
{
    $sql = "select * from user where taikhoan='" . $taikhoan . "' AND matkhau='" . $matkhau . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkemail($email)
{
    $sql = "select * from user where email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($iduser, $hoten, $email, $sdt, $diachi, $taikhoan, $matkhau)
{
    $sql = "UPDATE user SET hoten='$hoten',email='$email',sdt='$sdt',diachi='$diachi',taikhoan='$taikhoan',matkhau='$matkhau' where iduser=" . $iduser;
    pdo_execute($sql);
}
function loadall_taikhoan()
{
    $sql = "select * from user order by iduser desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function delete_taikhoan($iduser)
{
    $sql = "delete from user where iduser=" . $iduser;
    pdo_execute($sql);
}
// function loadone_sanpham($iduser)
// {
//     $sql = "select * from user where iduser=" . $iduser;
//     $user = pdo_query_one($sql);
//     return $user;
// }
