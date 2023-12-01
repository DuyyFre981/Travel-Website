<?php
if (is_array($rate)) {
    extract($rate);
}

?>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div style="padding:5%" class="container">
    <div class="col-md-12">
        <div class="invoice">
            <!-- begin invoice-company -->
            <span class="pull-right hidden-print">
                <a href="javascript:;" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-file t-plus-1 text-danger fa-fw fa-lg"></i> Export as PDF</a>
                <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
            </span>
            GOAWAY TRAVEL (1 WEEK TRAVEL)
        </div>
        <!-- end invoice-company -->
        <!-- begin invoice-header -->
        <div class="invoice-header">
            <div class="invoice-from">
                <small>from</small>
                <address class="m-t-5 m-b-5">
                    <strong class="text-inverse">GOAWAY TRAVEL.</strong><br>
                    Street Address<br>
                    DA NANG, Zip code 50000<br>
                    Phone: +84 935619781<br>
                    Fax: (123) 456-7890
                </address>
            </div>
            <div class="invoice-to">
                <small>to</small>
                <address class="m-t-5 m-b-5">
                    <strong class="text-inverse"><?= $_SESSION['user']['USERNAME'] ?></strong><br>
                    <?= $_SESSION['user']['ADRESS'] ?><br>

                    <?= $_SESSION['user']['SDT'] ?><br>

                </address>
            </div>
            <div class="invoice-date">
                <small>Invoice</small>
                <div class="date text-inverse m-t-5"><?= $_SESSION['DATE'] ?></div>
                <div class="invoice-detail">

                    Services Product
                </div>
            </div>
        </div>
        <div class="invoice-company text-inverse f-w-600">

            <!-- end invoice-header -->
            <!-- begin invoice-content -->
            <div class="invoice-content">
                <!-- begin table-responsive -->
                <div class="table-responsive">
                    <table class="table table-invoice">
                        <thead>
                            <tr>
                                <th>TASK DESCRIPTION (7 days)</th>
                                <th class="text-center" width="10%">RATE</th>
                                <th class="text-center" width="10%">QUANTITY</th>
                                <th class="text-right" width="20%"> TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span class="text-inverse"><?php
                                                                if (isset($_SESSION['tour']) && $_SESSION['tour'] != "") {
                                                                    echo $_SESSION['tour']['TENTOUR'];
                                                                }
                                                                ?><br>

                                </td>
                                <td class="text-center"><?php
                                                        if (isset($_SESSION['tour']) && $_SESSION['tour'] != "") {
                                                            echo  $_SESSION['tour']['GIATOUR'];
                                                        }
                                                        ?></td>
                                <td class="text-center">7days</td>
                                <td class="text-right">$<?= $tongtour ?></td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-inverse">
                                        <?php
                                        if (isset($_SESSION['hotel']['TENKS']) && ($_SESSION['hotel']['TENKS']) != "") {
                                            echo  $_SESSION['hotel']['TENKS'];
                                        } else echo "";
                                        if (isset($_SESSION['hotel']['size']) && ($_SESSION['hotel']['size']) != "") echo ' - ' . $_SESSION['hotel']['size'];
                                        else echo "?";
                                        ?>

                                    </span><br>
                                    <small>
                                        <?php
                                        if (isset($_SESSION['hotel']['DCKS']) && ($_SESSION['hotel']['DCKS']) != "") {
                                            echo  $_SESSION['hotel']['DCKS'];
                                        } else echo "";

                                        ?>
                                    </small>
                                </td>
                                <td class="text-center">
                                    <?php
                                    if (isset($_SESSION['hotel']['GIA']) && ($_SESSION['hotel']['GIA']) != "") {
                                        echo  $_SESSION['hotel']['GIA'];
                                    } else echo "";
                                    ?>
                                </td>
                                <td class="text-center"><?php

                                                        if (isset($_SESSION['hotel']['ho-quantity']) && ($_SESSION['hotel']['ho-quantity']) != "") echo  $_SESSION['hotel']['ho-quantity'] . ' room(s)';
                                                        else echo "?";
                                                        ?></td>
                                <td class="text-right">$<?= $tonghotel ?></td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-inverse">
                                        <?php
                                        if (isset($_SESSION['vehicle']['TENPT']) && ($_SESSION['vehicle']['TENPT']) != "") echo  $_SESSION['vehicle']['TENPT'];
                                        else echo "1";
                                        ?>
                                    </span><br>
                                    <small></small>
                                </td>
                                <td class="text-center">
                                    <?php
                                    if (isset($_SESSION['vehicle']['GIA']) && ($_SESSION['vehicle']['GIA']) != "") echo  $_SESSION['vehicle']['GIA'];
                                    else echo "";
                                    ?>
                                </td>
                                <td class="text-center">
                                    <?php
                                    if (isset($_SESSION['vehicle']['quantity']) && ($_SESSION['vehicle']['quantity'] != "")) {
                                        echo  $_SESSION['vehicle']['quantity'];
                                    } else echo "1" ?>
                                </td>
                                <td class="text-right">$<?= $tongvehicle ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
                <!-- begin invoice-price -->
                <div class="invoice-price">
                    <div class="invoice-price-left">
                        <div class="invoice-price-row">
                            <div class="sub-price">
                                <small>SUBTOTAL</small>
                                <span class="text-inverse"><?= $tongbill=$tongtour+$tonghotel+$tongvehicle; ?></span>
                            </div>
                            <div class="sub-price">
                                <i class="fa fa-plus text-muted"></i>
                            </div>
                            <div class="sub-price">
                                <small>DISCOUNT(BOOKING BEFORE <?= $rate['date'] ?> TO GET DISCOUNT)</small>
                                <span class="text-inverse"><?php
                                                            if (isset($_POST['DATE']) && $_POST['DATE'] != "") {
                                                                if ($_POST['DATE'] <= $rate['date']) echo "-" . $rate['ratetour'];
                                                            } else echo "0%";
                                                            ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="invoice-price-right">
                        <small>TOTAL</small> <span class="f-w-600">$<?php echo $_SESSION['BILL'] = $tongbill * $rate['tour'] ?></span>
                    </div>
                </div>
                <!-- end invoice-price -->

            </div>

            <!-- end invoice-content -->
            <a class="confirmbill" href="index.php?act=finish">Confirm</a>
            <!-- begin invoice-footer -->
            <div class="invoice-footer">
                <p class="text-center m-b-5 f-w-600">
                    THANK YOU FOR YOUR BUSINESS
                </p>
                <p class="text-center">
                    <span class="m-r-10"><i class="fa fa-fw fa-lg fa-globe"></i> GoAway.com</span>
                    <span class="m-r-10"><i class="fa fa-fw fa-lg fa-phone-volume"></i> T:016-18192302</span>
                    <span class="m-r-10"><i class="fa fa-fw fa-lg fa-envelope"></i> goaway@gmail.com</span>
                </p>
            </div>
            <!-- end invoice-footer -->


        </div>
    </div>
</div>
<style>
    .confirmbill {
        background-color: royalblue;
        color: white;
        border-radius: 10px;
        border: none;
        text-align: center;
        padding: 5px 10px;
        margin: 20px 0;
        float: right;
    }

    .confirmbill:hover {
        color: yellow;
    }

    .invoice {
        background: #fff;
        padding: 20px
    }

    .invoice-company {
        font-size: 20px
    }

    .invoice-header {
        margin: 0 -20px;
        background: #f0f3f4;
        padding: 20px
    }

    .invoice-date,
    .invoice-from,
    .invoice-to {
        display: table-cell;
        width: 1%
    }

    .invoice-from,
    .invoice-to {
        padding-right: 20px
    }

    .invoice-date .date,
    .invoice-from strong,
    .invoice-to strong {
        font-size: 16px;
        font-weight: 600
    }

    .invoice-date {
        text-align: right;
        padding-left: 20px
    }

    .invoice-price {
        background: #f0f3f4;
        display: table;
        width: 100%
    }

    .invoice-price .invoice-price-left,
    .invoice-price .invoice-price-right {
        display: table-cell;
        padding: 20px;
        font-size: 20px;
        font-weight: 600;
        width: 75%;
        position: relative;
        vertical-align: middle
    }

    .invoice-price .invoice-price-left .sub-price {
        display: table-cell;
        vertical-align: middle;
        padding: 0 20px
    }

    .invoice-price small {
        font-size: 12px;
        font-weight: 400;
        display: block
    }

    .invoice-price .invoice-price-row {
        display: table;
        float: left
    }

    .invoice-price .invoice-price-right {
        width: 25%;
        background: #2d353c;
        color: #fff;
        font-size: 28px;
        text-align: right;
        vertical-align: bottom;
        font-weight: 300
    }

    .invoice-price .invoice-price-right small {
        display: block;
        opacity: .6;
        position: absolute;
        top: 10px;
        left: 10px;
        font-size: 12px
    }

    .invoice-footer {
        border-top: 1px solid #ddd;
        padding-top: 10px;
        font-size: 10px
    }

    .invoice-note {
        color: #999;
        margin-top: 80px;
        font-size: 85%
    }

    .invoice>div:not(.invoice-footer) {
        margin-bottom: 20px
    }

    .btn.btn-white,
    .btn.btn-white.disabled,
    .btn.btn-white.disabled:focus,
    .btn.btn-white.disabled:hover,
    .btn.btn-white[disabled],
    .btn.btn-white[disabled]:focus,
    .btn.btn-white[disabled]:hover {
        color: #2d353c;
        background: #fff;
        border-color: #d9dfe3;
    }
</style>