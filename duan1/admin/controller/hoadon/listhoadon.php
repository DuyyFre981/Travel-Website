<div style="padding-left: 2%;" class="container">
 
  <button type="button" class="btn btn-danger">
    <a style="color: white;text-decoration:none;" href="index.php?act=listbill&&change=1">CHANGE</a>
  </button>
 

  <table style="text-align: left;" class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col"> TOUR</th>
        <th scope="col">HOTEL</th>
        <th scope="col">VEHICLE</th>
        <th scope="col">GUEST INFO</th>
        <th scope="col">DATE</th>
        <th scope="col">TOTAL</th>
        <th scope="col">STATUS</th>
      </tr>
    </thead>
    <?php
    if (isset($listbill)) {
      foreach ($listbill as $bill) {
        extract($bill);
        $tour =  load_once_tour($bill['MSTOUR']);
        extract($tour);
        $khachsan = load_once_hotel($bill['MSKS']);
        extract($khachsan);
        $phuongtien = load_once_vehicle($bill['MSPT']);
        extract($phuongtien);
        $user = load_one_taikhoan($bill['IDKH']);
        extract($user);
        echo '
          <tr>
          <td>' . $MSPHIEU . '</td>
          <td>' . $tour['TENTOUR'] . '</td>
          <td>' . $khachsan['TENKS'] . '</td>
          <td>' . $phuongtien['TENPT'] . '</td>
          <td>  <ul style ="padding-lelf:10px"
          >
          <li>' . $user['HVT'] . '</li>
          <li>' . $user['SDT'] . '</li>
          <li>' . $user['ADRESS'] . '</li>
         </ul></td>
          <td>' . $bill['DATE'] . '</td>
          <td>$' . $bill['BILL'] . '</td>
          <td
       
          >';
        if (isset($_GET['change']) && ($_GET['change'])) {
          echo '
           <form action ="index.php?act=updatestatus" method="post">
           <select name="TRANGTHAI" class="selectpicker">
           <option value="OK">OK</option>
           <option value="CHECKING">CHECKING</option>
           <option value="CANCELED">CANCELED</option>
           <option selected="selected" value="'.$TRANGTHAI.'">'.$TRANGTHAI.'</option>
        </select>
       
        <input name="UPDATE" type="submit" class="btn btn-primary " value="UPDATE">
      <input type="hidden" name="MSPHIEU" value="'.$MSPHIEU.'">
           </form>
            ';
        } else
          echo ' ' . $TRANGTHAI . '<BR>
         </td>
          </td>
        </tr>
          ';
      }
    }
    ?>

</div>
