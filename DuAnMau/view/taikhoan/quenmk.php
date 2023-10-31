<div class="row mb">
    <div class="boxtrai mr ">
        <div class="row mb">
            <div class="boxtittle">QUEEN MẬT KHẨU</div>
            <div class="row boxcontent">
                <form action="index.php?act=quenmk" method="post">
                    <div class="formdangky">
                        <div class="row mb10" >
                            <label for="">Email</label>
                            <input type="email" name="email" id="">
                        </div>
                        <div class="row mb10" >
                            <input type="submit" value="GỬI" name="guiemail" id="">
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