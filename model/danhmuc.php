<?php
    // require_once 'pdo.php';

    function insert_dm($tendanhmuc) {
        $sql = "INSERT INTO danhmuc(tendm) VALUES ('$tendanhmuc')";
        pdo_execute($sql);
    }


    function loadall() {
        $sql= "SELECT * FROM danhmuc order by iddm desc";
        $listdanhmuc=pdo_query($sql);
        return $listdanhmuc;
    }
    function load_all_dm(){
        $sql="SELECT * FROM danhmuc order by iddm desc";
        $listdm=pdo_query($sql);
        return $listdm;
    }

    function delete_dm() {
        $sql = "DELETE FROM danhmuc order by iddm=$iddm";
        pdo_execute($sql);
    }

    function loadone_danhmuc($iddm) {
        $sql="SELECT * FROM danhmuc WHERE iddm=$iddm";
        $dm=pdo_query_one($sql);
        return $dm;
    }

    function update_danhmuc($tenloai,$iddm) {
        $sql="UPDATE danhmuc SET `tendm`='$tenloai' where id=$iddm";
        pdo_execute($sql);
    }


    function load_ten_dm($iddm) {
        if($iddm>0  ){
            $sql= "SELECT * FROM sanpham where id=".iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $tendm;
        }else{
            return "";
        }
    }

 ?>