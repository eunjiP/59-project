<?php
include_once "db.php";

function join_user(&$param) {

$user_mail = $param['user_mail'];
$user_pw = $param['user_pw'];
$user_check_pw = $param['user_check_pw'];
$nickname = $param['nickname'];
$user_nm = $param['user_nm'];

$sql = "INSERT INTO t_user
(user_mail,user_pw,nickname,user_nm)
value
('$user_mail','$user_pw','$nickname','$user_nm')
";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function id_check(&$param)
{
    $user_mail = $param['user_mail'];

    $sql = "SELECT user_mail 
            from t_user
            where user_mail = '$user_mail' 
    ";
    $conn = get_conn();
    $row = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($row);
    mysqli_close($conn); 
    if(isset($result['user_mail']))
    {
    return true;
    }
    return false;
}

function login_user(&$param){

        $user_email = $param['user_email'];

            $sql = "SELECT *
            from t_user
            where user_mail = '$user_email'
    ";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $row;
}

function upd_pw(&$param)
{
    $user_num = $param['user_num'];

    $sql = "UPDATE t_user
    set user_pw = ""
    ";
}