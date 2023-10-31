<?php
    session_start();
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "model/taikhoan.php";
    include "view/header.php";
    include "gobal.php";

    $spnew = loadall_sanpham_home();
    $dsdmload = loadall_danhmuc();
    $dstop10 = loadall_sanpham_top10();
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act) {
            case 'sanpham':
                if(isset($_POST['kyw'])&&($_POST['kyw']!= "")){
                    $kyw =$_POST['kyw'];
                }else{
                    $kyw = "";
                }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm = $_GET['iddm'];
                }else{
                    $iddm = 0;
                }
                $dssp = loadall_sanpham($kyw,$iddm);
                $tendm = load_tendm($iddm);
                include "view/sanpham.php";
                break;
            case 'sanphamct':
                
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id = $_GET['idsp'];
                    $onesp = loadone_sanpham($id);
                    extract($onesp);
                    $spcungloai = loadone_sanpham_cungloai($id, $iddm);
                    include "view/sanphamct.php";
                }else{
                    include "view/home.php";
                }
                break;
            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email= $_POST['email'];
                    insert_taikhoan($user, $pass,$email);
                    $thongBao= "Đã đky thành công, hãy đăng nhập"; 
                }
                include "view/taikhoan/dangky.php";
                break;
            case 'dangnhap':
                if(isset($_POST['dangnhap']) && ($_POST['dangnhap']) ){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $checkuser = checkuser($user, $pass);
                    if(is_array($checkuser)){
                        $_SESSION['user']=$checkuser;
                        header("Location: index.php");
                    }else{
                        $thongBaoo= "Tài khoản không tồn tại";
                    }
                }
                include "view/taikhoan/dangky.php";
                break;
            case 'edittaikhoan':
                if(isset($_POST['capnhat']) && ($_POST['capnhat']) ){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $id = $_POST['id'];
                    update_taikhoan($id,$user,$pass,$email,$address,$phone);
                    $_SESSION['user']=checkuser($user, $pass);
                    header("Location: index.php?act=edittaikhoan");
                }
                include "view/taikhoan/edittaikhoan.php";
                break;
            case 'quenmk':
                if(isset($_POST['guiemail']) && ($_POST['guiemail']) ){
                    $email = $_POST['email'];
                    $checkemail = checkemail($email);
                    if(is_array($checkemail)){
                        $thongBao="Mật khẩu của bạn là: ".$checkemail['pass'];
                    }else{
                        $thongBao="Email không tồn tại";
                    }
                }
                include "view/taikhoan/quenmk.php";
                break;
            case 'thoat':
                session_unset();
                header('Location: index.php');
                break;
            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            case 'lienhe':
                include "view/lienhe.php";
                break;
            case 'gopy':
                include "view/gopy.php";
                break;
            case 'hoidap':
                include "view/hoidap.php";
                break;
            
            default:
                include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }

    include "view/footer.php";
?>