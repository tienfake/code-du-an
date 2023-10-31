<div class="row">
            <div class="row header formtittle">
                <h1>Thêm mới loại hàng hóa</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        Mã Loại: <br>
                        <input style="background-color: rgb(198, 193, 193);"  type="text" name="maloai" placeholder="autonumber" disabled id="">
                    </div>
                    <div class="row mb10">   
                    Tên Loại: <br>
                    <input type="text" name="tenloai" id="">
                    </div>
                    <div class="row ">
                        <input type="submit" value="Thêm Mới" name="themmoi" id="">
                        <input type="reset" value="Nhập lại" name="" id="">
                        <a href="index.php?act=listdm"><input type="button" value="Danh sách" name="" id=""></a>
                    </div>
                    <?php
                        if(isset($thongBao) && ($thongBao!="")){
                            echo $thongBao;
                        }
                        
                    ?>
                </form>
            </div>
        </div>