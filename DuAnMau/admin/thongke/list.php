<div class="row">
            <div class="row header formtittle">
                <h1>Thống Kê</h1>
            </div>
            <div class="row formcontent">

                <div class="row mb10 formdanhsach">
                    <table>
                        <tr>
                            <th>Mã danh mục</th>
                            <th>Tên danh mục</th>
                            <th>Số lượng</th>
                            <th>Giá cao nhất</th>
                            <th>Giá thấp nhất</th>
                            <th>Giá trung bình</th>
                            
                        </tr>
                        <?php
                            foreach($listthongke as $tk){
                                extract($tk); 
                                echo '
                                <tr>
                                <td>'.$madanhmuc.'</td>
                                <td>'.$tendanhmuc.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$maxprice.'</td>
                                <td>'.$minprice.'</td>
                                <td>'.$giatb.'</td>
                            </tr>';
                            }
                        ?>
                    </table>
                </div>
                <div class="row mb10">
                    <a href="index.php?act=bieudo"><input type="button" value="Biểu đồ" name="bieudo" id=""></a>
                </div>
            </div>
        </div>