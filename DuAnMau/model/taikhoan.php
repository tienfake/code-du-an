<?php
function loadall_taikhoan()
{
    $sql = "SELECT * FROM taikhoan order by id asc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function delete_taikhoan($id)
{
    $sql = "DELETE FROM taikhoan WHERE id=" . $id;
    pdo_execute($sql);
}
function insert_taikhoan($user, $pass, $email)
{
    $sql = "INSERT INTO taikhoan(user,pass,email) VALUES( '$user', '$pass','$email')";
    pdo_execute($sql);
}
function checkuser($user, $pass)
{
    $sql = "SELECT * FROM taikhoan WHERE user='" . $user . "' AND pass='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkemail($email)
{
    $sql = "SELECT * FROM taikhoan WHERE email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadone_taikhoan($id){
    $sql = "SELECT * FROM taikhoan WHERE id=".$id;
    $tk=pdo_query_one($sql);
    return $tk;
}
function update_taikhoan($id, $user, $pass, $email, $address, $phone)
{
    $sql = "UPDATE taikhoan SET user='$user', pass='$pass',email='$email',address='$address', phone='$phone' WHERE id='$id'";
    pdo_execute($sql);
}
function update_taikhoan_in_admin($id, $user, $pass, $email, $address, $phone,$role)
{
    $sql = "UPDATE taikhoan SET user='$user', pass='$pass',email='$email',address='$address', phone='$phone', role='$role' WHERE id='$id'";
    pdo_execute($sql);
}

?>