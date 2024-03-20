<?php

// function insert_dm($tendanhmuc) {
//     $sql = "INSERT INTO danhmuc(tendm) VALUES ('$tendanhmuc')";
//     pdo_execute($sql);
// }


// function loadall() {
//     $sql= "SELECT * FROM danhmuc order by iddm desc";
//     $listdanhmuc=pdo_query($sql);
//     return $listdanhmuc;
// }
// function load_all_dm(){
//     $sql="SELECT * FROM danhmuc order by iddm desc";
//     $listdm=pdo_query($sql);
//     return $listdm;
// }

// function delete_dm() {
//     $sql = "DELETE FROM danhmuc order by iddm=$iddm";
//     pdo_execute($sql);
// }

// function loadone_danhmuc($iddm) {
//     $sql="SELECT * FROM danhmuc WHERE iddm=$iddm";
//     $dm=pdo_query_one($sql);
//     return $dm;
// }

// function update_danhmuc($tenloai,$iddm) {
//     $sql="UPDATE danhmuc SET `tendm`='$tenloai' where id=$iddm";
//     pdo_execute($sql);
// }
function insert_danhmuc($tenloai)
{
    $sql = "insert into danhmuc(tendm) values('$tenloai')";
    pdo_execute($sql);
}
function delete_danhmuc($id)
{
    $sql = "delete from danhmuc where iddm=" . $id;
    pdo_execute($sql);
}
function loadall_danhmuc()
{
    $sql = "select * from danhmuc order by iddm desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id)
{
    $sql = "select * from danhmuc where iddm=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($tenloai, $iddm)
{
    $sql = "update danhmuc set tendm='" . $tenloai . "' where iddm=" . $iddm;
    pdo_execute($sql);
}
