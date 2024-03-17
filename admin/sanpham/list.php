<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH SẢN PHẨM</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
                <form action="index.php?act=listsp" method="post">
                    <br>
                    <input type="text"name="keyw">
                    <select name="iddm">
                        <option value="0"selected>Tất cả</option>
                        <?php 
                        foreach($listdm as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$idsp.'">'.$tensp.'</option>';
                        }
                        ?>
                    </select>
                    <input type="submit"name="clickok"value="Chọn">
                </form>
           <table>
            <tr>
                <th></th>
                <th>ID SẢN PHẨM</th>
                <th>TÊN SẢN PHẨM</th>
                <th>Giá</th>
                <th>Hình</th>
                <th>Soluong</th>
                <th>Mô tả</th>
                <th></th>
            </tr>
            <!-- <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>001</td>
                <td>Đồng hồ</td>
                <td><input type="button" value="Sửa">   <input type="button" value="Xóa"></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>001</td>
                <td>Đồng hồ</td>
                <td><input type="button" value="Sửa">   <input type="button" value="Xóa"></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>001</td>
                <td>Đồng hồ</td>
                <td><input type="button" value="Sửa">   <input type="button" value="Xóa"></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>001</td>
                <td>Đồng hồ</td>
                <td><input type="button" value="Sửa">   <input type="button" value="Xóa"></td>
            </tr> -->
            <?php foreach($listsanpham as $sanpham){
                    extract($sanpham);
                    $xoasp="index.php?act=xoasp&id=".$sanpham['idsp'];
                    $suasp="index.php?act=suasp&id=".$sanpham['idsp'];
                    $img_path="../upload/".$hinh; 
                    if(is_file($img_path)){
                        $img_path="<img src='".$img_path."' width='100' height='100'> ";
                    }else{
                        $img_path = "không có hình";
                    }
               
                    echo '  <tr> <td><input type="checkbox" name="" id=""></td>
                    <td>'.$idsp.'</td>
                    <td>'.$tensp.'</td>
                    <td>'.$gia.'</td>
                    <td>'.$img_path.'</td>
                    <td>'.$soluong.'</td>
                    <td>'.$mota.'</td>
                    <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a>      <a href="'.$xoasp.'"> <input type="button" value="Xóa"> </a> 
                   </td> </tr>' ; 
                 
               }    ?>
        
           
            
           </table>
           </div>
           <div class="row mb10 ">
    <a href="index.php?act=addsp"> <input  class="mr20" type="button" value="THÊM SẢN PHẨM"></a>
           </div>
          </form>
         </div>
        </div>



       
    </div>