<div class="row">
            <div class="row header formtittle">
                <h1>Danh sách loại hàng hóa</h1>
            </div>
            <div class="row formcontent">

                <div class="row mb10 formdanhsach">
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã loại</th>
                            <th>Tên loại</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                $suadm = "index.php?act=suadm&id=".$id;
                                $xoadm = "index.php?act=xoadm&id=".$id;
                                echo '
                                <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>
                                    <a href="'.$suadm.'"><input type="button" value="Sửa"></a>
                                    <a href="'.$xoadm.'"><input type="button" value="Xóa"></a>
                                    
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
                    <a href="index.php?act=adddm"><input type="button" value="Nhập thêm" name="" id=""></a>
                </div>
            </div>
        </div>