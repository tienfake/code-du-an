<?php
    function insert_sanpham($tensp,$giasp, $hinhsp, $motasp, $iddm){
        $sql = "INSERT INTO sanpham(name, price, img, mota, iddm) VALUES('$tensp', '$giasp', '$hinhsp', '$motasp', '$iddm')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql = "delete from sanpham where id=".$id;
        pdo_execute($sql);
    }
    function delete_sanphamdm($id){
        $sql = "delete from sanpham where iddm=".$id;
        pdo_execute($sql);
    }
    
    function loadall_sanpham_top10(){
        $sql="SELECT * FROM sanpham where 1 order by luotxem desc limit 0,10"; 
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham_home(){
        $sql="SELECT * FROM sanpham where 1 order by id desc limit 0,9"; 
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham($kyw="",$iddm=0){
        // có where 1 để mình so sánh 2 điều kiện $kyw,$iddm để ghép vào câu sql
        $sql="SELECT * FROM sanpham where 1"; 
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and iddm ='".$iddm."'";
        }
        $sql.=" order by id desc";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function load_tendm($iddm){
        if($iddm>0){
            $sql = "SELECT * FROM danhmuc WHERE id=".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $name;
        }else{
            return "";
        }

    }
    function loadone_sanpham($id){
        $sql = "SELECT * FROM sanpham WHERE id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function loadone_sanpham_cungloai($id,$iddm){
        $sql = "SELECT * FROM sanpham WHERE iddm= ".$iddm." AND id <>".$id;
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function update_sanpham($id,$iddm,$name,$price,$mota,$img){
        if($img!=""){
            $sql = "UPDATE sanpham SET iddm='$iddm', name='$name',price='$price',mota='$mota',img='$img' WHERE id='$id' ";
        }else{
            $sql = "UPDATE sanpham SET iddm='$iddm', name='$name',price='$price',mota='$mota' WHERE id='$id'";
        }
        
        pdo_execute($sql);
    }
?>