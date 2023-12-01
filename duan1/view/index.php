<?php
session_start();
include "../dao/pdo.php";
include "../dao/taikhoan.php";
include "../dao/tour.php";
include "../dao/hotel.php";
include "../dao/vehicle.php";
include "../dao/bill.php";
$_SESSION['bill'] = [];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> GOAWAY TRAVEL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">

    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">


    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.3.1.slim.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js">
</head>


<?php

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'admin':
            header('Location:../admin');
            break;

        case 'home':
            include "../view/header.php";
            include "../view/homepage.php";
            break;

        case 'tour':
            include "../view/header2.php";
            $listtour = loadall_tour();
            include "../view/tour.php";
            break;
        case 'bookhotel':
            include "../view/header2.php";
            if (isset($_GET['MSTOUR']) && ($_GET['MSTOUR'] != "")) $listhotel = load_hotel_cungtour($_GET['MSTOUR']);
            else  $listhotel = loadall_hotel();
            if (isset($_GET['MSTOUR']) && ($_GET['MSTOUR'] != "")) {
                $_SESSION['tour'] = load_once_tour($_GET['MSTOUR']);
                $_SESSION['bill']['id'] = 1;
            }

            include "../view/khachsan.php";
            break;
        case 'khachsan':
            include "../view/header2.php";

            $listhotel = loadall_hotel();

            include "../view/khachsan.php";
            break;
        case 'detailks':
            include "../view/header2.php";
            if (isset($_GET['MAKS']) && ($_GET['MAKS'] != "")) {
                $hotel = load_once_hotel($_GET['MAKS']);
            }


            include "../view/detailks.php";
            break;
        case 'bookroom':
            include "../view/header2.php";
            if (isset($_GET['MAKS']) && ($_GET['MAKS'] != "")) {
                $_SESSION['hotel'] = load_once_hotel($_GET['MAKS']);
            }
            if ($_POST['size'] && ($_POST['size'] != "")) {
                $_SESSION['hotel']['size'] = $_POST['size'];
            }
            if ($_POST['ho-quantity'] && ($_POST['ho-quantity'] != "")) {
                $_SESSION['hotel']['ho-quantity'] = $_POST['ho-quantity'];
            }
            $listpt = loadall_vehicle();
            include "../view/phuongtien.php";
            break;


        case 'phuongtien':
            include "../view/header2.php";
            $listpt = loadall_vehicle();
            include "../view/phuongtien.php";
            break;
        case 'complete':
            include "../view/header2.php";
            if (isset($_GET['MSPT']) && ($_GET['MSPT'] != "")) {
                $_SESSION['vehicle'] = load_once_vehicle($_GET['MSPT']);
            }
            if ($_POST['quantity'] && ($_POST['quantity'] != "")) {
                $_SESSION['vehicle']['quantity'] = $_POST['quantity'];
            }

            include "../view/complete.php";
            break;

        case 'confirmbill':
            include "../view/header2.php";
            $km = load_rate();
            if (isset($_SESSION['tour']) && isset($_SESSION['hotel']) && isset($_SESSION['vehicle'])) {

                if (isset($_SESSION['hotel']['ho-quantity']) && $_SESSION['hotel']['ho-quantity'] != "") {
                    $hoquantity = $_SESSION['hotel']['ho-quantity'];
                } else $hoquantity = 1;
                if (isset($_SESSION['vehicle']['quantity']) && $_SESSION['vehicle']['quantity'] != "") {
                    $vequantity = $_SESSION['vehicle']['quantity'];
                } else $vequantity = 1;
                $tongtour = get_tour($_SESSION['tour']['GIATOUR']);
                $tonghotel = get_hotel($_SESSION['hotel']['GIA'],  $hoquantity);
                $tongvehicle = get_vehicle($_SESSION['vehicle']['GIA'],  $vequantity);
            }
            if (isset($_POST['DATE']) && $_POST['DATE'] != "") {
                $_SESSION['DATE'] = $_POST['DATE'];
            }
            $rate = load_rate();
            include "../view/bill.php";
            break;
        case 'gopy':
            include "../view/header2.php";
            include "../view/gopy.php";
            break;
        case 'taikhoan':
            include "../view/header2.php";
            include "../view/header2.php";
            if (isset($_SESSION['user']) && ($_SESSION['user'] != "")) {
                $user = load_one_taikhoan($_SESSION['user']['ID']);
            }


            include "../view/taikhoan.php";
            break;
        case 'finish':
            include "../view/header2.php";
            if (isset($_SESSION['tour']) && isset($_SESSION['hotel']) && isset($_SESSION['vehicle']) && isset($_SESSION['DATE']) && isset($_SESSION['BILL'])) {
                $MSTOUR = $_SESSION['tour']['MSTOUR'];
                $MSKS = $_SESSION['hotel']['MAKS'];
                $MSPT = $_SESSION['vehicle']['MSPT'];
                $DATE = $_SESSION['DATE'];
                $BILL = $_SESSION['BILL'];
                $IDKH = $_SESSION['user']['ID'];
                insert_bill($MSTOUR, $MSKS, $MSPT, $IDKH, $DATE, $BILL, 'CHECKING');
            }
            $listbill = load_bill_user($_SESSION['user']['ID']);
            unset($_SESSION['tour']);
            unset($_SESSION['hotel']);
            unset($_SESSION['vehicle']);
            unset($_SESSION['DATE']);
            unset($_SESSION['BILL']);
            include "../view/listbill.php";
            break;
        case 'bill':
            include "../view/header2.php";
            $listbill = load_bill_user($_SESSION['user']['ID']);
            include "../view/listbill.php";
            break;
        case 'edituser':
            include "../view/header2.php";
            if (isset($_SESSION['user']) && ($_SESSION['user'] != "")) {
                $user = load_one_taikhoan($_SESSION['user']['ID']);
            }
            include "../view/edituser.php";
            break;
        case 'updateuser':
            include "../view/header2.php";
            if (isset($_POST['UPDATE']) && $_POST['UPDATE']) {
                $ID = $_POST['ID'];
                $USERNAME = $_POST['USERNAME'];
                $PASSWORD = $_POST['PASSWORD'];
                $HVT = $_POST['HVT'];
                $EMAIL = $_POST['EMAIL'];
                $SDT = $_POST['SDT'];
                $ADRESS = $_POST['ADRESS'];
                update_user_view($ID, $USERNAME, $PASSWORD, $HVT, 'user', $EMAIL, $SDT, $ADRESS);
                $thongbao = "<b style='color:green;'>Finished Update!</b>";
                $_SESSION['user'] = load_one_taikhoan($ID);
            }
            include "../view/taikhoan.php";
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            break;
        default:
            include "../view/header.php";
            include "../duan1/view/homepage.php";
    }
}

?>


<?php
include "../view/footer.php";
?>