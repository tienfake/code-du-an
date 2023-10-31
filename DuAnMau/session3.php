<?php
    session_start();
    session_destroy();
    echo '<h1>Session đã huỷ</h1>';
    echo '<a href="session.php">Khởi tạo</a>';
    echo '<a href="session2.php">Show session</a>';
?>
