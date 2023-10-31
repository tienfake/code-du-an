<div class="row">
            <div class="row header formtittle">
                <h1>Thêm mới sanr phẩm</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        Danh mục: <br>
                        <select name="iddm" id="">
                            
                                 <?php
                                    foreach($listdanhmuc as $danhmuc){
                                        extract($danhmuc);
                                        echo '<option value="'.$id.'">"'.$name.'"</option>';
                                    }

                                 ?>
                            
                        </select>
                    </div>
                    <div class="row mb10">   
                        Tên sản phẩm: <br>
                        <input type="text" name="name" id="">
                    </div>
                    <div class="row mb10">   
                        Giá: <br>
                        <input type="text" name="price" id="">
                    </div>
                    <div class="row mb10">   
                        Hình: <br>
                        <input type="file" name="img" id="">
                    </div>
                    <div class="row mb10">   
                        Mô tả <br>
                        <textarea name="mota" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row ">
                        <input type="submit" value="Thêm Mới" name="themmoi" id="">
                        <input type="reset" value="Nhập lại" name="" id="">
                        <a href="index.php?act=listsp"><input type="button" value="Danh sách" name="" id=""></a>
                    </div>
                    <?php
                        if(isset($thongBao) && ($thongBao!="")){
                            echo $thongBao;
                        }
                        
                    ?>
                </form>
            </div>
        </div>