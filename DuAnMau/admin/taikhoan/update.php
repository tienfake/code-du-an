<?php
if (is_array($tk)) {
    extract($tk);
}
?>
<div class="row">
            <div class="row header formtittle">
                <h1>CẬP NHẬT THÔNG TIN KHÁCH HÀNG</h1>
            </div>
            <!-- <?php 
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                        extract($_SESSION['user']);
                    }
                ?> -->
            <form action="index.php?act=updatetk" method="post">
                    <div class="formdangky">
                        <div class="row mb10" >
                            <label for="">User</label>
                            <input type="text" name="user" value="<?=$user?>" id=""> <br>
                        </div>
                        <div class="row mb10" >
                            <label for="">Pass</label>
                            <input type="text" name="pass" value="<?=$pass?>" id=""><br>
                        </div>
                        <div class="row mb10" >
                            <label for="">Email</label>
                            <input type="email" name="email" value="<?=$email?>" id="">
                        </div>
                        <div class="row mb10" >
                            <label for="">Địa chỉ</label>
                            <input type="text" name="address" value="<?=$address?>" id=""><br>
                        </div>
                        <div class="row mb10" >
                            <label for="">Phone</label>
                            <input type="text" name="phone" value="<?=$phone?>" id="">
                        </div>
                        <div class="row mb10" >
                            <label for="">Role</label>
                            <input type="text" name="role" value="<?=$role?>" id="">
                        </div>
                        <div class="row mb10" >
                            <input type="hidden" name="id" value="<?=$id?>" id="">
                            <input type="submit" name="capnhat" value="Cập Nhật" id="">
                            <input type="reset" value="Nhập lại" id="">
                        </div>
                    </div>

                </form>
            </div>
        </div>