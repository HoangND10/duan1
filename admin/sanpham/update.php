<?php
if (is_array($sanpham)) {
  extract($sanpham);
}
$hinhpath = "../upload/" . $hinh;
if (is_file($hinhpath)) {
  $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
  $hinh = "no photo";
}
?>
<div class="row">
  <div class="row frmtitle">
    <H1> THÊM MỚI SẢN PHẨM</H1>
  </div>
  <div class="row frmcontent">
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
      <div class="row mb10">
        DANH MỤC<br>
        <SELect name="iddm">
          <?php
          foreach ($listdanhmuc as $danhmuc) {
            if ($iddm == $danhmuc['iddm']) $s = "selected";
            else $s = "";
            echo '<option value="' . $danhmuc['iddm'] . '"' . $s . '>' . $danhmuc['tendm'] . '</option>';
          }
          ?>
        </SELect>
      </div>
      <div class="row mb10">
        Tên sản phẩm<br>
        <input type="text" name="tensp" value="<?= $tensp ?>">
      </div>
      <div class="row mb10">
        Giá<br>
        <input type="text" name="giasp" value="<?= $gia ?>">
      </div>
      <div class="row mb10">
        Hình<br>
        <input type="file" name="hinh" id="">
        <?= $hinh ?>
      </div>
      <div class="row mb10">
        Số lượng <br>
        <input type="number" name="soluong" id="" value="<?= $soluong ?>">
      </div>
      <div class="row mb10">
        Mô tả<br>
        <textarea name="mota" cols="30" rows="10"><?= $mota ?></textarea>
      </div>
      <div class="row mb10">
        <input type="hidden" name="idsp" value="<?= $idsp ?>">
        <input type="submit" name="capnhat" value="CẬP NHẬT">
        <input type="reset" value="NHẬP LẠI">
        <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
      </div>
      <?php
      if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
      ?>
    </form>
  </div>
</div>
</div>