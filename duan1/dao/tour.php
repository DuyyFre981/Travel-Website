<?php 
    function insert_tour($TENTOUR,$MOTATOUR,$ANHTOUR,$GIATOUR){
        $sql = "INSERT INTO tour(TENTOUR,MTTOUR,ANHTOUR,GIATOUR) values('$TENTOUR','$MOTATOUR','$ANHTOUR','$GIATOUR')";
        pdo_execute($sql);
    } 

  
    function loadall_tour(){
        $sql = "SELECT * FROM tour where 1;";
        $listtour = pdo_query($sql);
        return $listtour;
    }
    function delete_tour($id){
        $sql = "DELETE FROM tour where MSTOUR=".$id;
                    pdo_execute($sql);
    }
    function update_tour($MSTOUR,$TENTOUR,$MTTOUR,$ANHTOUR,$GIATOUR){
        if($ANHTOUR!="")  $sql = "UPDATE  tour set TENTOUR = '$TENTOUR' ,MTTOUR ='$MTTOUR',ANHTOUR = '$ANHTOUR', GIATOUR = '$GIATOUR' where MSTOUR =".$MSTOUR;
        else  $sql =  "UPDATE  tour set TENTOUR = '$TENTOUR' ,MTTOUR ='$MTTOUR', GIATOUR = '$GIATOUR' where MSTOUR =".$MSTOUR;
          pdo_execute($sql); 
    }
    function load_once_tour($id){
        $sql = "SELECT * from tour where MSTOUR =".$id;
        $tour = pdo_query_one($sql);
        return $tour;
    }
    function load_search_tour($kyw){
        $sql = "SELECT * from tour where 1";
        if($kyw !=""){
            $sql.= " and TENTOUR like '%".$kyw."%'";
        }
        
        $sql.= " order by id desc";
        $listtour = pdo_query($sql);
        return $listtour;
    }
    
?>