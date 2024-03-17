<div class="row2">
         <div class="row2 font_title">
          <h1>Thêm danh mục</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10">
            <label>Tên Danh Mục </label> <br>
            <input type="text" name="tendanhmuc" placeholder="nhập vào tên">
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="submit" value="THÊM MỚI"name="themmoi">
         <a href="index.php?act=listdm"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
          </form>
         </div>
        </div>

        <?php
            if(isset($thongbao)&&($thongbao)!="") echo "$thongbao";

        ?>
