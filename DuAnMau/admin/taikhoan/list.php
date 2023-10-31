<div class="row">
            <div class="row header formtittle">
                <h1>DANH SÁCH TÀI KHOẢN</h1>
            </div>
            <div class="row formcontent">

                <div class="row mb10 formdanhsach">
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã TK</th>
                            <th>User</th>
                            <th>Pass</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach($listtaikhoan as $tk){
                                extract($tk);
                                $suatk = "index.php?act=suatk&id=".$id;
                                $xoatk = "index.php?act=xoatk&id=".$id;
                                echo '
                                <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$user.'</td>
                                <td>'.$pass.'</td>
                                <td>'.$email.'</td>
                                <td>'.$address.'</td>
                                <td>'.$phone.'</td>
                                <td>'.$role.'</td>
                                <td>
                                    <a href="'.$suatk.'"><input type="button" value="Sửa"></a>
                                    <a href="'.$xoatk.'"><input type="button" value="Xóa"></a>
                                    
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
                    <a href="../index.php"><input type="button" value="Nhập thêm" name="" id=""></a>
                </div>
            </div>
        </div>