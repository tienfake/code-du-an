<?php   
    if(is_array($sanpham)){
        extract($sanpham);
    }
        $hinhpath = "../upload/".$img;
        if(is_file($hinhpath)){
        $hinhThongBao = "<img src='".$hinhpath."' height='80'>";
    }else{
        $hinhThongBao = "no photo";
    }
?>
<div class="row">
            <div class="row header formtittle">
                <h1>Cập nhật loại hàng hóa</h1>
            </div>
            <div class="row formcontent">
            <form action="index.php?act=updatesp&id=<?=$id?>" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        <select name="iddm" id="">
                            <option value="0" selected>Tất cả</option>
                            <?php
                                foreach($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    if($iddm === $id){
                                        echo '<option value="'.$id.'" selected>"'.$name.'"</option>';
                                    }else{
                                        echo '<option value="'.$id.'">"'.$name.'"</option>';
                                    }
                                    
                                }

                            ?>
                        </select>
                    </div>
                    <div class="row mb10">   
                        Tên sản phẩm: <br>
                        <input type="text" name="name" value="<?=$sanpham['name']?>" id="">
                    </div>
                    <div class="row mb10">   
                        Giá: <br>
                        <input type="text" name="price" value="<?=$sanpham['price']?>" id="">
                    </div>
                    <div class="row mb10">   
                        Hình: <br>
                        <input type="file" name="img" id="">
                        <?=$hinhThongBao?>
                    </div>
                    <div class="row mb10">   
                        Mô tả <br>
                        <textarea name="mota" id="" cols="30" rows="10" ><?=$sanpham['mota']?></textarea>
                    </div>
                    <div class="row ">
                        <input type="hidden" name="id" id="" value="<?=$sanpham['id']?>">
                        <input type="submit" value="Cập nhật" name="capnhat" id="">
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