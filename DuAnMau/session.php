<?php
    session_start();
    $_SESSION['mycart']=array();
    $sp1=[1,"sanpham1",100,2];
    $sp2=[2,"sanpham2",200,3];
    $cart=[];
    $cart[]= $sp1;
    $cart[]= $sp2;
    $_SESSION['mycart']=$cart;
    echo '<h1>Session đã tạo </h1>';
    echo '<a href="session2.php">Show dữ liệu session</a>';
?>