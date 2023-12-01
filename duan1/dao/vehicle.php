<?php
function insert_vehicle($TENPT,$ANHPT,$GIA){
    $sql = "INSERT INTO phuongtien(TENPT,ANHPT,GIA) values('$TENPT','$ANHPT','$GIA')";
    pdo_execute($sql);
}  
function loadall_vehicle(){
    $sql = "SELECT * FROM phuongtien where 1;";
    $listvehicle = pdo_query($sql);
    return $listvehicle;
}
function load_once_vehicle($MSPT){
    $sql = "SELECT * from phuongtien where MSPT =".$MSPT;
    $vehicle = pdo_query_one($sql);
    return $vehicle;
}
function delete_vehicle($MAPT){
    $sql = "DELETE FROM phuongtien where MSPT=".$MAPT;
    pdo_execute($sql);
}
function update_vehicle($MSPT,$TENPT,$ANHPT,$GIA){
     $sql =  "UPDATE  phuongtien set TENPT = '$TENPT' ,ANHPT ='$ANHPT', GIA = '$GIA' where MSPT =".$MSPT;
      pdo_execute($sql); 
}

function load_vehicle_tour($kyw){
    $sql = "SELECT * from phuongtien where 1";
    if($kyw !=""){
        $sql.= " and TENPT like '%".$kyw."%'";
    }
    
    $sql.= " order by id desc";
    $listhotel = pdo_query($sql);
    return $listhotel;
}
function load_pt_cungtour($MSTOUR){
    $sql = 'SELECT * from phuongtien where MSTOUR ='.$MSTOUR.'';
    $ptcungtour = pdo_query($sql);
    return $ptcungtour;
}
?>