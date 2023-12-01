<?php
include "./view/header.php";
include "./view/nav.php";
include "../dao/pdo.php";
include "../dao/tour.php";
include "../dao/hotel.php";
include "../dao/taikhoan.php";
include "../dao/vehicle.php";
include "../dao/bill.php";
?>



<div class="content">

    <?php
    if (isset($_GET['act']) && ($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
            case 'table':
                $listtour = loadall_tour();
                include "./controller/tour/listour.php";


                break;
            case 'chart':
                $listbill = load_all_bill();
                $listtour = loadall_tour();
                $listhotel = loadall_hotel();
                $listkm = load_all_discount();
                if(isset($_POST['TOURRATE'])&&$_POST['TOURRATE']){
                  $rate = $_POST['VALUE'];
                   $TOURRATE = get_tour_discount_name($rate);
                   $date = $_POST['date'];
                  $ratename = $TOURRATE['MUCKM'];
                  add_discount_tour($rate,$ratename,$date);
                    $thongbao = "Change tour rate sucessfully!";
                }else{
                    $thongbao = "";
                };
                include "../admin/view/chart.php";

                break;
                // TOUR
            case 'addtour':
                if (isset($_POST['ADD']) && ($_POST['ADD'])) {
                    $TENTOUR = $_POST['TENTOUR'];
                    $MOTATOUR = $_POST['MOTATOUR'];
                    $GIATOUR = $_POST['GIATOUR'];
                    $filename = $_FILES['ANHTOUR']['name'];

                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["ANHTOUR"]["name"]);
                    move_uploaded_file($_FILES["ANHTOUR"]["tmp_name"], $target_file);
                    insert_tour($TENTOUR, $MOTATOUR, $filename, $GIATOUR);
                    echo $thongbao = "<b style='color:green;'>thêm thành công!</b>";
                }
                include "./controller/tour/addtour.php";

                break;
            case "edittour":
                if (isset($_GET['MSTOUR']) && ($_GET['MSTOUR'] > 0)) {
                    $tour = load_once_tour($_GET['MSTOUR']);
                }


                include "./controller/tour/edit.php";
                break;
            case 'updatetour':

                if (isset($_POST['UPDATE']) && ($_POST['UPDATE'])) {
                    $TENTOUR = $_POST['TENTOUR'];
                    $MTTOUR = $_POST['MTTOUR'];
                    $GIATOUR = $_POST['GIATOUR'];
                    $filename = $_FILES['ANHTOUR']['name'];
                    $MSTOUR = $_POST['MSTOUR'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["ANHTOUR"]["name"]);
                    move_uploaded_file($_FILES["ANHTOUR"]["tmp_name"], $target_file);
                    update_tour($MSTOUR, $TENTOUR, $MTTOUR, $filename, $GIATOUR);
                    $thongbao = "<b style='color:green;'>Finished Update!</b>";
                }


                $listtour = loadall_tour();
                include "./controller/tour/listour.php";
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                break;
            case 'deletetour':
                if (isset($_GET['MSTOUR']) && ($_GET['MSTOUR'] > 0)) {
                    delete_tour($_GET['MSTOUR']);
                }
                $listtour = loadall_tour();
                include "./controller/tour/listour.php";

                break;
            case 'listtour':
                
                $listtour = loadall_tour();
                include "./controller/tour/listour.php";
                break;
                // ENDTOUR

                // HOTEL
            case 'listhotel':
                if(isset($_POST['search'])&&($_POST['search']!="")){
                    $kyw = $_POST['kyw'];
                } else{
                    $kyw = "";
                }
                $listhotel = loadall_hotel();
                include "./controller/khachsan/listkhachsan.php";
                break;
            case 'addhotel':
                if (isset($_POST['ADD']) && ($_POST['ADD'])) {
                    $TENKS = $_POST['TENKS'];
                    $DCKS = $_POST['DCKS'];
                    $SDTKS = $_POST['SDTKS'];
                    $GIA = $_POST['GIA'];
                    $MSTOUR = $_POST['MSTOUR'];
                    $MTKS = $_POST['MTKS'];
                    $target_dir = "../uploads/";

                    $ANHKS = $_FILES['ANHKS']['name'];
                    $target_file = $target_dir . basename($_FILES["ANHKS"]["name"]);
                    move_uploaded_file($_FILES["ANHKS"]["tmp_name"], $target_file);

                    $ANHKS2 = $_FILES['ANHKS2']['name'];
                    $target_file_2 = $target_dir . basename($_FILES["ANHKS2"]["name"]);
                    move_uploaded_file($_FILES["ANHKS2"]["tmp_name"], $target_file_2);
                    insert_hotel($TENKS, $DCKS, $SDTKS, $ANHKS, $ANHKS2, $MTKS, $GIA, $MSTOUR);
                    echo $thongbao = "<b style='color:green;'>thêm thành công!</b>";
                }
                $listtour = loadall_tour();
                include "./controller/khachsan/addkhachsan.php";
                break;
            case 'deletehotel':
                if (isset($_GET['MAKS']) && ($_GET['MAKS'] > 0)) {
                    delete_hotel($_GET['MAKS']);
                }
                $listhotel =  loadall_hotel();
                include "./controller/khachsan/listkhachsan.php";
                break;
            case 'edithotel':
                if (isset($_GET['MAKS']) && ($_GET['MAKS'] > 0)) {
                    $hotel = load_once_hotel($_GET['MAKS']);
                }
                include "./controller/khachsan/editkhachsan.php";
                break;
            case 'updateks':
                if (isset($_POST['UPDATE']) && ($_POST['UPDATE'])) {
                    $MAKS = $_POST['MAKS'];
                    $TENKS = $_POST['TENKS'];
                    $DCKS = $_POST['DCKS'];
                    $SDTKS = $_POST['SDTKS'];
                    $GIA = $_POST['GIA'];
                    $MSTOUR = $_POST['MSTOUR'];
                    $MTKS = $_POST['MTKS'];
                    $target_dir = "../uploads/";

                    $ANHKS = $_FILES['ANHKS']['name'];
                    $target_file = $target_dir . basename($_FILES["ANHKS"]["name"]);
                    move_uploaded_file($_FILES["ANHKS"]["tmp_name"], $target_file);

                    $ANHKS2 = $_FILES['ANHKS2']['name'];
                    $target_file_2 = $target_dir . basename($_FILES["ANHKS2"]["name"]);
                    move_uploaded_file($_FILES["ANHKS2"]["tmp_name"], $target_file_2);
                    update_hotel($MAKS, $TENKS, $DCKS, $SDTKS, $ANHKS, $ANHKS2, $MTKS, $GIA, $MSTOUR);
                    $thongbao = "<b style='color:green;'>Finished Update!</b>";
                }
                $listhotel = loadall_hotel();
                include "./controller/khachsan/listkhachsan.php";
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                break;
                // END HOTELS

                // VEHICLES
            case 'listvehicle':
                if(isset($_POST['search'])&&($_POST['search']!="")){
                    $kyw = $_POST['kyw'];
                } else{
                    $kyw = "";
                }
                $listvehicle = loadall_vehicle();
                include "./controller/phuongtien/listphuongtien.php";
                break;
            case 'addvehicle':
                if (isset($_POST['ADD']) && $_POST['ADD']) {
                    $TENPT = $_POST['TENPT'];
            
                    $GIA = $_POST['GIA'];
                   
                    $ANHPT = $_FILES['ANHPT']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["ANHPT"]["name"]);
                    move_uploaded_file($_FILES["ANHPT"]["tmp_name"], $target_file);
                    insert_vehicle($TENPT,$ANHPT,$GIA);
                    echo $thongbao = "<b style='color:green;'>Add vehicle sucessful!</b>";

                }
                $listtour = loadall_tour();
                include "./controller/phuongtien/addphuongtien.php";
                break;
            case 'editvehicle':
                if (isset($_GET['MSPT']) && ($_GET['MSPT'] > 0)){
                $vehicle = load_once_vehicle($_GET['MSPT']);
            }

                $listtour = loadall_tour();
                include "./controller/phuongtien/editphuongtien.php";
                break;
            case 'updatevehicle':
                if (isset($_POST['UPDATE']) && ($_POST['UPDATE'])){
                    $MSPT = $_POST['MSPT'];
                    $TENPT = $_POST['TENPT'];
                    $SOLUONG = $_POST['SOLUONG'];
                    $GIA = $_POST['GIA'];
                    $MSTOUR = $_POST['MSTOUR'];
                    $ANHPT = $_FILES['ANHPT']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["ANHPT"]["name"]);
                    move_uploaded_file($_FILES["ANHPT"]["tmp_name"], $target_file);
                    update_vehicle($MSPT,$TENPT,$ANHPT,$SOLUONG,$MSTOUR,$GIA);
                      $thongbao = "<b style='color:green;'>Finished Update!</b>";
                }
                $listvehicle = loadall_vehicle();
                include "./controller/phuongtien/listphuongtien.php";
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                break;
                // END VIHICLE
                // BILL
            case 'listbill':
                if(isset($_POST['search'])&&($_POST['search']!="")){
                    $kyw = $_POST['kyw'];
                } else{
                    $kyw = "";
                }
              
                $listbill = load_all_bill();
                include "./controller/hoadon/listhoadon.php";
                break;
            case 'updatestatus':
                if(isset($_POST['UPDATE'])&&($_POST['UPDATE']!="")){
                    $TRANGTHAI =$_POST['TRANGTHAI'];
                    $MSPHIEU = $_POST['MSPHIEU'];
                }
                update_status($TRANGTHAI,$MSPHIEU);
                $listbill = load_all_bill();
                include "./controller/hoadon/listhoadon.php";
            break;
                // END BILL

                // ACCOUNT
            case 'listuser':
                $listuser = loadall_taikhoan();
                include "./controller/taikhoan/listtaikhoan.php";
                break;
            case 'deleteuser':
                if(isset($_GET['ID'])&&($_GET['ID']!="")){
                    delete_taikhoan($_GET['ID']);
                }
                break;
                // DISCOUNT
            case 'changdc':

                break;
            default:
                $listbill = load_all_bill();
                $listtour = loadall_tour();
                $listhotel = loadall_hotel();
                include "../admin/view/chart.php";
                break;
        }
    }

    ?>

</div>


<?php
include "./view/footer.php"
?>