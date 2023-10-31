<?php
    session_start();
    if(isset($_SESSION['mycart'])){
        foreach($_SESSION['mycart'] as $cart){
            echo "Mã sp: ".$cart[0];
            echo "Ten sp: ".$cart[1];
            echo "Gia sp: ".$cart[2];
            echo "Soluong sp: ".$cart[3]."<br>";
        }
        echo '<h1>Session đã show</h1>';
    }else{
        echo '<h1>Session đã hủy</h1>';
    }
    echo '<h1>Session đã show</h1>';
    echo '<a href="session.php">Khởi tạo</a>';
    echo '<a href="session3.php">Xóa</a>';
?>