<div style="padding: 10%;" class="container">
    <h1>YOUR BILLS</h1>
    <table class="table table-striped">
    <tr>
        <th>IDUSER</th>
        <th>Tour</th>
        <th>TOTAL</th>
       <th>STATUS</th>
      
      
    </tr>  
        <?php
        if (isset($listbill)) {
            foreach ($listbill as $bill) {
                extract($bill);
                $tentour = load_ten_tour($bill['MSTOUR']);
                extract($tentour);
               if($bill['TRANGTHAI']=='CHECKING'){
                $color = "color:blue;";
               } else if($bill['TRANGTHAI']=='OK'){
                $color = "color:green;";
               } else {
                $color = "color:red;";
               }
                echo '
          
            <tr>
            <td>'.$bill['IDKH'].'</td>
            <td>'.$tentour['TENTOUR'].'</td>
            <td>$'.$bill['BILL'].'</td>
            <td style ='.$color.'>'.$bill['TRANGTHAI'].'</td>
            
            <td></td>
            </tr>  

            ';
            }
        }
        ?>




    </table>

</div>