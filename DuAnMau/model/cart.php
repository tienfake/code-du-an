<?php
function loadall_thongke(){
    $sql ="SELECT danhmuc.id as madanhmuc, danhmuc.name as tendanhmuc, count(sanpham.id) as countsp, max(sanpham.price) as maxprice, min(sanpham.price) as minprice, avg(sanpham.price) as giatb";
    $sql .=" FROM sanpham LEFT JOIN danhmuc on danhmuc.id=sanpham.iddm";
    $sql.=" group by danhmuc.id order by danhmuc.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
?>
