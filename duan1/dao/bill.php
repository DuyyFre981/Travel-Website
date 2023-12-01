<?php

function get_all_bill($giatour, $giaphong, $sophong, $giaphuongtien, $sophuongtien, $muckm)
{
    return ($giatour + ($giaphong * $sophong) + ($giaphuongtien * $sophuongtien)) * $muckm;
}

function get_tour($tour)
{
    return $tour;
}
function get_hotel($hotel, $sophong)
{
    return $hotel * $sophong;
}
function get_vehicle($vehicle, $quantity)
{
    return $vehicle * $quantity;
}
function insert_bill($MSTOUR,$MSKS,$MSPT,$IDKH,$DATE,$BILL,$STATUS)
{
    $sql = "INSERT INTO phieudangki(MSTOUR,MSKS,MSPT,IDKH,DATE,BILL,TRANGTHAI) values('$MSTOUR','$MSKS','$MSPT','$IDKH','$DATE','$BILL','$STATUS')";
    pdo_execute($sql);
}
function load_all_bill(){
    $sql = "SELECT * FROM phieudangki where 1;";
        $listbill = pdo_query($sql);
        return $listbill;
}
function load_once_bill($ID){
    $sql = "SELECT * FROM phieudangki where MSPHIEU ='.$ID;";
        $bill = pdo_query_one($sql);
        return $bill;
}
function load_ten_tour($MSTOUR){
    $sql = "SELECT TENTOUR FROM tour where MSTOUR =".$MSTOUR;
    $tourname = pdo_query_one($sql);
    return $tourname;
}
function load_ten_hotel($MAKS){
    $sql = "SELECT TENKS FROM khachsan where MAKS =".$MAKS;
    $hotelname = pdo_query_one($sql);
    return $hotelname;
}

function load_ten_pt($MSPT){
    $sql = "SELECT TENPT FROM phuongtien where MSPT =".$MSPT;
    $vehiclename = pdo_query_one($sql);
    return $vehiclename;
}
function load_bill_user($IDKH){
    $sql = "SELECT * FROM phieudangki where IDKH =".$IDKH;
    $listbill = pdo_query($sql);
    return $listbill;
}
function update_status($TRANGTHAI,$MSPHIEU){
    $sql = "UPDATE phieudangki set TRANGTHAI ='$TRANGTHAI'  WHERE MSPHIEU =".$MSPHIEU; 
    pdo_execute($sql);
}
function load_all_discount(){
    $sql = "SELECT * FROM khuyenmai where 1;";
        $listkm = pdo_query($sql);
        return $listkm;
}
function add_discount_tour($TOURRATE,$RATENAME,$date){
    $sql = "UPDATE rate set tour ='$TOURRATE', ratetour = '$RATENAME', date = '$date' WHERE id =1";
    pdo_execute($sql);
}
function get_tour_discount(){
    $sql = "SELECT tour FROM rate where ID =1;";
    $tourrate = pdo_query_one($sql);
    return $tourrate;
}
function get_tour_discount_name($rate){
    $sql = "SELECT MUCKM FROM khuyenmai where VALUE=".$rate;
    $ratename   = pdo_query_one($sql);
    return $ratename;
}
function load_rate(){
    $sql = "SELECT * FROM rate where 1;";
        $rate = pdo_query_one($sql);
        return $rate;
}
?>
