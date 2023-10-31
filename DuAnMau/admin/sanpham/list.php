<div class="row">
            <div class="row header formtittle mb">
                <h1>Danh sách loại hàng hóa</h1>
            </div>
            <form action="index.php?act=listsp" method="post" class="mb">
                        <input type="text" name="kyw" id="">
                        <select name="iddm" id="">
                            <option value="0" selected>Tất cả</option>
                            <?php
                                foreach($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">"'.$name.'"</option>';
                                }

                            ?>
                        </select>
                        <input type="submit" name="listok" value="Go">
            </form>
            <div class="row formcontent mb">
                
                <div class="row mb10 formdanhsach">

                    <table>
                        <tr>
                            <th></th>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình</th>
                            <th>Mô tả</th>
                            <th>Giá</th>
                            <th>Lượt xem</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach($listsanpham as $sanpham){
                                extract($sanpham);
                                $suasp = "index.php?act=suasp&id=".$id;
                                $xoasp = "index.php?act=xoasp&id=".$id;
                                // is_file kiểm tra có phải là file ko
                                $hinhpath = "../upload/".$img;
                                if(is_file($hinhpath)){
                                    $img = "<img src='".$hinhpath."' height='80'>";
                                }else{
                                    $img = "no photo";
                                }
                                echo '
                                <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$img.'</td>
                                <td>'.$mota.'</td>
                                <td>'.$price.'</td>
                                <td>'.$luotxem.'</td>

                                <td>
                                    <a href="'.$suasp.'"><input type="button" value="Sửa"></a>
                                    <a href="'.$xoasp.'"><input type="button" value="Xóa"></a>
                                    
                                </td>
                            </tr>';
                            }
                        ?>
                    </table>
                </div>
                <div class="row mb10">
                    <!-- <input type="button" value="Chọn tất cả" name="" id="">
                    <input type="button" value="Bỏ chọn tất cả" name="" id="">
                    <input type="button" value="Xóa các mục đã chọn" name="" id=""> -->
                    <a href="index.php?act=addsp"><input type="button" value="Nhập thêm" name="" id=""></a>
                </div>
            </div>
        </div>