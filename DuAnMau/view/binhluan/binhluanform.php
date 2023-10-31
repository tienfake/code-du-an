<?php
session_start();
$idpro = $_REQUEST['idpro'];
include "../../model/pdo.php";
include "../../model/binhluan.php";
$dsbl = loadall_binhluan($idpro);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <style>
        .binhluan table {
            width: 90%;
            margin-left: 5%;

        }

        .binhluan table td:nth-child(1) {
            width: 60%;
        }

        .binhluan table td:nth-child(2) {
            width: 20%;
        }

        .binhluan table td:nth-child(3) {
            width: 20%;
        }
    </style>


    <div class="row mb">
        <div class="boxtittle">
            BÌNH LUẬN
        </div>
        <div class="boxcontent2 binhluan">
            <table>
                <?php
                foreach ($dsbl as $bl) {
                    extract($bl);
                    echo '<tr><td>' . $noidung . '</td>';
                    echo '<td>' . $iduser . '</td>';
                    echo '<td>' . $ngaybinhluan . '</td></tr>';
                }
                ;
                ?>
            </table>
        </div>
        <div class="boxfooter searchbox">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="hidden" name="idpro" value="<?= $idpro ?>" id="">
                <input type="text" name="noidung">
                <input type="submit" value="Gửi bình luận" name="guibinhluan" id="">
            </form>
        </div>
        <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['id'];
            $ngaybinhluan = date('h:i:sa d/m/Y');
            insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }

        ?>
    </div>
</body>

</html>