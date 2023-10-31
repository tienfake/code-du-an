<?php   
    if(is_array($dm)){
        extract($dm);
    }

?>
<div class="row">
            <div class="row header formtittle">
                <h1>Cập nhật loại hàng hóa</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb10">
                        Mã Loại: <br>
                        <input style="background-color: rgb(198, 193, 193);"  type="text" name="maloai" placeholder="autonumber" disabled id="">
                    </div>
                    <div class="row mb10">   
                    Tên Loại: <br>
                    <input type="text" name="tenloai" value="<?php if(isset($name) && ($name != "")) echo $name;?>" id="">
                    </div>
                    <div class="row ">
                        <input type="hidden" name="id" value="<?php if(isset($id) && ($id>0)) echo $id;?>" id="">
                        <input type="submit" value="Cập Nhật" name="capnhat" id="">
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