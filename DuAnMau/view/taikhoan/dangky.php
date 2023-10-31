<div class="row mb">
    <div class="boxtrai mr ">
        <div class="row mb">
            <div class="boxtittle">ĐĂNG KÝ THÀNH VIÊN</div>
            <div class="row boxcontent">
                <form action="index.php?act=dangky" method="post">
                    <div class="formdangky">
                        <div class="row mb10" >
                            <label for="">User</label>
                            <input type="text" name="user" id=""> <br>
                        </div>
                        <div class="row mb10" >
                            <label for="">Pass</label>
                            <input type="password" name="pass" id=""><br>
                        </div>
                        <div class="row mb10" >
                            <label for="">Email</label>
                            <input type="email" name="email" id="">
                        </div>
                        <div class="row mb10" >
                            <input type="submit" name="dangky" value="Đăng ký" id="">
                            <input type="reset" value="Nhập lại" id="">
                        </div>
                    </div>

                </form>
                <h2 class="thongbao">
                <?php 
                if(isset($thongBao)&&($thongBao!="")){
                    echo $thongBao;
                }
                ?>
                </h2>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>