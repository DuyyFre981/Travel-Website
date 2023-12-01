<?php
function insert_taikhoan($user, $pass)
{
    $sql = "INSERT INTO taikhoan(USERNAME,PASSWORD) values('$user','$pass')";
    pdo_execute($sql);
}
function check_user($user, $pass)
{
    $sql = "SELECT * from taikhoan where USERNAME ='" . $user . "' and PASSWORD = '" . $pass . "'";
    $check = pdo_query_one($sql);
    return $check;
}
function check_usertt($user)
{
    $sql = "SELECT * from taikhoan where USERNAME ='" . $user . "'";
    $check = pdo_query_one($sql);
    return $check;
}
function update_taikhoan($ID, $USERNAME, $PASSWORD, $HVT, $RULE, $EMAIL, $SDT, $ADRESS)
{
    $sql = "UPDATE  taikhoan set USERNAME ='" . $USERNAME . "', PASSWORD ='" . $PASSWORD . "',HVT ='" . $HVT . "', RULE= '" . $RULE . "', EMAIL = '" . $EMAIL . "', SDT = '" . $SDT . "',ADRESS= '" . $ADRESS . "' where ID =" . $ID;
    pdo_execute($sql);
}
function update_user_view($ID, $USERNAME, $PASSWORD,$HVT, $RULE, $EMAIL, $SDT, $ADRESS)
{
    $sql = "UPDATE  taikhoan set USERNAME ='" . $USERNAME . "',PASSWORD ='" . $PASSWORD . "',HVT ='" . $HVT . "', RULE= '" . $RULE . "', EMAIL = '" . $EMAIL . "', SDT = '" . $SDT . "',ADRESS= '" . $ADRESS . "' where ID =" . $ID;
    pdo_execute($sql);
}

function check_email($email)
{
    $sql = "SELECT * from taikhoan where email ='" . $email . "'";
    $check = pdo_query_one($sql);
    return $check;
}
function loadall_taikhoan()
{
    $sql = "SELECT * from taikhoan where 1";
    $listuser = pdo_query($sql);
    return $listuser;
}
function load_one_taikhoan($ID)
{
    $sql = "SELECT * from taikhoan where ID =" . $ID;
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}
function delete_taikhoan($ID)
{
    $sql = "DELETE FROM taikhoan where ID=" . $ID;
    pdo_execute($sql);
}
