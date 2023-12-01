<?php 

function insert_hotel($TENKS,$DCKS,$SDTKS,$ANHKS,$ANHKS2,$MTKS,$GIA,$MSTOUR){
    $sql = "INSERT INTO khachsan(TENKS,DCKS,SDTKS,ANHKS,ANHKS2,MSTOUR,GIA,MTKS) 
    values('$TENKS','$DCKS','$SDTKS','$ANHKS','$ANHKS2','$MSTOUR','$GIA','$MTKS')";
    pdo_execute($sql);
} 
function loadall_hotel(){
    $sql = "SELECT * FROM khachsan where 1;";
    $listhotel = pdo_query($sql);
    return $listhotel;
}
function load_hotel_cungtour($MSTOUR){
    $sql = 'SELECT * from khachsan where MSTOUR ='.$MSTOUR.'';
    $hotelcungtour = pdo_query($sql);
    return $hotelcungtour;
}

function load_hotel_tour($kyw,$MSTOUR){
    $sql = "SELECT * from khachsan where 1";
    if($kyw !=""){
        $sql.= " and name like '%".$kyw."%'";
    }
    if($MSTOUR>0){
        $sql .= " and  ='".$MSTOUR."'"; 
    }
    $sql.= " order by id desc";
    $listhotel = pdo_query($sql);
    return $listhotel;
}
function delete_hotel($id){
    $sql = "DELETE FROM khachsan where MAKS=".$id;
                pdo_execute($sql);
}

function update_hotel($MAKS,$TENKS,$DCKS,$SDTKS,$ANHKS,$ANHKS2,$MTKS,$GIA,$MSTOUR){
    if($ANHKS!="")  $sql = "UPDATE  khachsan set TENKS = '$TENKS' ,DCKS ='$DCKS',SDTKS = '$SDTKS', ANHKS2 = '$ANHKS2', MTKS ='$MTKS', GIA = '$GIA',MSTOUR = '$MSTOUR' where MAKS =".$MAKS;
    else if ($ANHKS2!="") $sql = "UPDATE  khachsan set TENKS = '$TENKS' ,DCKS ='$DCKS',SDTKS = '$SDTKS', ANHKS = '$ANHKS' where MAKS =".$MAKS;
   
    else  $sql = "UPDATE  khachsan set TENKS = '$TENKS' ,DCKS ='$DCKS',SDTKS = '$SDTKS', GIA = '$GIA',MSTOUR = '$MSTOUR' where MAKS =".$MAKS;
      pdo_execute($sql); 
}
function load_once_hotel($MAKS){
    $sql = "SELECT * from khachsan where MAKS =".$MAKS;
    $hotel = pdo_query_one($sql);
    return $hotel;
}
?>