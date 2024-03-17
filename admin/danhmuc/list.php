<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
</body>
</html>


<div class="row2">        
         <div class="row2 font_title">
          <h1>DANH SÁCH DANH MỤC</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th></th>
                <th>ID</th>
                <th>TÊN DANH MỤC</th>
                <th></th>
            </tr>
            <?php
                foreach($listdm as $dm){
                    extract($dm);
                    $xoadm="index.php?act=xoadm&&iddm=".$iddm;
                    $suadm="index.php?act=suadm&&iddm=".$iddm;
                    echo '   <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$iddm.'</td>
                    <td>'.$tendm.'</td>
                    <td><a href='.$suadm.'><input type="button" value="Sửa"></a>
                        <a href='.$xoadm.'><input type="button" value="Xóa"></a>
                    </td>
                    </tr>';
                }
            ?>    
              
            
           </table>
           </div>
           <div class="row mb10 ">
                <a href="index.php?act=adddm"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
         </div>
        </div>



       
    </div>