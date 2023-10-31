<div class="row mb">
    <div class="boxtittle">
        Tài Khoản
    </div>
    <div class="boxcontent formtaikhoan">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
            ?>
            <div class="row mb10">
                <label for="">Hello</label>
                <?= $user ?>
            </div>
            <div class="row mb10">
                <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                <li><a href="index.php?act=edittaikhoan">Cập nhật thông tin tài khoản</a></li>
                <?php if($role == 1){ ?>
                    <li><a href="admin/index.php">Đăng Nhập admin</a></li>
                <?php } ?>
                
                <li><a href="index.php?act=thoat">Thoát</a></li>
            </div>

            <?php
        } else {
            ?>
            <form action="index.php?act=dangnhap" method="post">
                <div class="row mb10">
                    <label for="">Tên Đăng Nhập</label>
                    <input type="text" name="user">
                </div>
                <div class="row mb10">
                    <label for="">Mật khẩu</label><br>
                    <input type="password" name="pass"><br>
                </div>
                <div class="row mb10">
                    <input type="checkbox"> Lưu tài khoản <br>
                </div>
                <div class="row mb10">
                    <input type="submit" value="Đăng nhập" name="dangnhap">
                </div>
            </form>
            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
            <h2 class="thongbao">
                <?php
                if (isset($thongBaoo) && ($thongBaoo != "")) {
                    echo $thongBaoo;
                }
                ?>
            </h2>
        <?php } ?>
    </div>
</div>
<div class="row mb">
    <div class="boxtittle">
        Danh Mục
    </div>
    <div class="boxcontent2 menudoc">
        <ul>
            <?php
            foreach ($dsdmload as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '
                                    <li><a href="' . $linkdm . '">' . $name . '</a></li>
                                ';
            }
            ;
            ?>

        </ul>
    </div>
    <div class="boxfooter searchbox">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw">
            <input type="submit" value="Tìm Kiếm" name="timkiem" id="">
        </form>
    </div>
</div>
<div class="row">
    <div class="boxtittle">
        Top 10 yêu thích
    </div>
    <div class="row boxcontent">
        <?php
        foreach ($dstop10 as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $img = $img_path . $img;
            echo '
                                <div class="row mb10 top10">
                                    <a href="' . $linksp . '">  
                                    <img src="' . $img . '" alt=""></a>
                                    <a href="' . $linksp . '">' . $name . '</a>
                                </div>
                            ';
        }
        ?>


    </div>
</div>