<div class="row mb">
    <div class="boxtrai mr ">
        <div class="row mb">
            <div class="boxtittle">SẢN PHẨM <strong><?=$tendm?> </strong></div>
            <div class="row boxcontent ">
                <?php
                $i = 0;
                foreach ($dssp as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    if (($i == 2) || ($i == 5) || ($i == 8)|| ($i == 11)) {
                        $mr = "";
                    } else {
                        $mr = "mr";
                    }
                    $img = $img_path . $img;
                    echo '
                        <div class="boxsanpham ' . $mr . '">
                        <div class="img row"><a href="' . $linksp . '">
                            <img src="' . $img . '" alt=""></a>
                        </div>
                        <p >' . $price . '</p>
                        <a href="' . $linksp . '">' . $name . '</a>
                        </div>
                        ';
                    $i++;
                }
                ;

                ?>
            </div>
        </div>

    </div>
    <div class="boxphai">
        <?php include "boxright.php"; ?>
    </div>
</div>