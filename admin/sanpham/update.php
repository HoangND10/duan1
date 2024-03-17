<?php 
      if(is_array($sp)){
        extract($sp);
      }

        //Gồm đường dẫn thư mục ảnh  và biến img chứa tên tệp của hình ảnh 
        $img_path="../upload/".$hinh; 
        if(is_file($img_path)){
            $img_path="<img src='".$img_path."' width='100px' height='100px' >";
        }else{
            $img_path="Lỗi hình ảnh";
        }
    ?>
    
    <div class="row2">
    <div class="row2 font_title">
     <h1>SỬA SẢN PHẨM</h1>

    </div>
    <div class="row2 form_content ">
     <form action="index.php?act=updatesp" method="POST"enctype="multipart/form-data">
      <div class="row2 mb10">
        <label>Danh mục </label> <br>
              <select name="iddm">
                        <option value="0"selected>Tất cả</option>
                        <?php 
                        foreach($listdm as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$idsp.'">'.$tensp.'</option>';
                        }
                        ?>
                    </select>
                
               </select>
        </div>
        <div class="row2 mb10">
        <label>Tên Sản phẩm </label> <br>
        <input type="text" name="tensp" value="<?=$sp['name']?>">
        </div>
        <div class="row2 mb10">
        <label>Giá sản phẩm </label> <br>
        <input type="text" name="giasp"value="<?=$price?>" >
        </div>
        <div class="row2 mb10">
        <label>soluong </label> <br>
        <input type="text" name="soluong"value="<?=$discount?>" >
        </div>
        <div class="row2 mb10">
        <label>Hình </label> <br>
        <input type="file"name="hinh">
        <?php echo $img_path ?>;
        </div>
        <div class="row2 mb10">
        <label>Mô tả </label> <br>
        <textarea name="mota" id="" cols="30" rows="10"value="<?=$mota?>"></textarea>
        </div>
        <div class="row mb10 ">
          <input type="hidden"name="idsp"value="<?=$sp['idsp']?>">
          <input class="mr20" type="submit" value="Cập nhập"name="capnhap">
      <a href="index.php?act=listsp"><input  class="mr20" type="button" value="Danh Sách Sản Phẩm"></a>
        </div>
     </form>
                   <?php 
                     if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                   ?>
    </div>
   </div>
