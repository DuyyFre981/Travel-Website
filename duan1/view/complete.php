<div style="padding: 10%;" id="booking" class="section">
    <div class="section-center">
        <div class="container">
           
            <div class="row">
                <div class="col-md-7 col-md-push-5">
                    <div class="booking-cta">
                        <h1>Make your reservation</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facere, soluta magnam consectetur molestias itaque
                            ad sint fugit architecto incidunt iste culpa perspiciatis possimus voluptates aliquid consequuntur cumque quasi.
                            Perspiciatis.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-md-pull-7">
                    <div class="booking-form">
                        <form action="index.php?act=confirmbill" method="post">
                            <div class="form-group">
                                <a href="">Return</a>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <span class="form-label">Your Tour:</span>
                                        <p> Đà Nẵng - <?php
                                                        if (isset($_SESSION['tour']['TENTOUR']) && ($_SESSION['tour']['TENTOUR'] != "")) {
                                                            echo  $_SESSION['tour']['TENTOUR'];
                                                        } else echo "?<button type='button' class='btn btn-primary'> <a href='index.php?act=tour'>BOOK NOW</a></button>"
                                                        ?></p>
                                        <input class="form-control" name="tour" type="hidden" value="<?php
                                                                                                        if (isset($_SESSION['tour']['MSTOUR']) && ($_SESSION['tour']['MSTOUR']) != "") {
                                                                                                            echo $_SESSION['tour']['MSTOUR'];
                                                                                                        } else  echo "";
                                                                                                        ?>">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <span class="form-label">Hotel: </span>
                                        <p> <?php
                                            if (isset($_SESSION['tour']['TENTOUR']) && ($_SESSION['tour']['TENTOUR'] != "")) {
                                                echo  $_SESSION['tour']['TENTOUR'];
                                            } else echo "?" ?> - <?php
                                                                                    if (isset($_SESSION['hotel']['TENKS']) && ($_SESSION['hotel']['TENKS']) != "") {
                                                                                        echo  $_SESSION['hotel']['TENKS'];
                                                                                    } else echo "";
                                                                                    ?></p>
                                        <input class="form-control" name="khachsan" type="hidden" value="<?php
                                        if (isset($_SESSION['hotel']['MAKS']) && ($_SESSION['hotel']['MAKS']) != "") {
                                                                                        echo  $_SESSION['hotel']['MAKS'];
                                                                                    } else echo "" ?>">

                                    </div>
                                    <div class="col-sm-6">
                                        
                                        <p>Type: <?php
                                            if (isset($_SESSION['hotel']['size']) && ($_SESSION['hotel']['size']) != "") echo $_SESSION['hotel']['size'];
                                            else echo "Not chose yet";
                                            if (isset($_SESSION['hotel']['ho-quantity']) && ($_SESSION['hotel']['ho-quantity']) != "") echo ' - '. $_SESSION['hotel']['ho-quantity'].' room(s)';
                                            else echo " - 1 room";
                                            ?>
                                            
                                        </p>
                                    </div>
                                  
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <span class="form-label">Vehicle: </span>
                                        <p><?php
                                            if (isset($_SESSION['vehicle']['TENPT']) && ($_SESSION['vehicle']['TENPT']) != "") echo  $_SESSION['vehicle']['TENPT'];
                                            else echo "Not chose yet!";
                                            ?></p>
                                        <input class="form-control" name="phuongtien" type="hidden" value="<?= $_SESSION['vehicle']['MSPT'] ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <span class="form-label">Quantity: </span>
                                        <p><?php
                                            if (isset($_SESSION['vehicle']['quantity']) && ($_SESSION['vehicle']['quantity'] != "")) {
                                                echo  $_SESSION['vehicle']['quantity'];
                                            }else echo "1";
                                             ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Day Booking</span>
                                        <input name="DATE" class="form-control" type="date" required value="<?php echo date('Y-m-d'); ?>">
                                    </div>
                                </div>

                            </div>
                            <div class="row">

                            </div>
                            <div class="form-btn">
                                <button class="submit-btn">Check availability</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .col-sm-6>p {
        margin-left: 10px;
        color: black;
    }
   button> a{
        color: white;
    }
    button.btn.btn-primary {
    background: royalblue;
}   
    .section {
        position: relative;
        height: 100vh;

    }

    .section .section-center {
        position: absolute;
        top: 55%;
        left: 0;
        right: 0;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    #booking {
        font-family: 'Montserrat', sans-serif;
        background-image: url('https://i.imgur.com/ZaRYfYW.jpg');
        background-size: cover;
        background-position: center;
    }

    #booking::before {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        background: rgba(47, 103, 177, 0.6);
    }

    .booking-form {
        background-color: #fff;
        padding: 20px 20px;
        -webkit-box-shadow: 0px 5px 20px -5px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 5px 20px -5px rgba(0, 0, 0, 0.3);
        border-radius: 4px;
        width: 500px;
        font-size: 16px;

    }

    .booking-form .form-group {
        position: relative;
        margin-bottom: 20px;
    }

    .booking-form .form-control {
        background-color: #ebecee;
        border-radius: 4px;
        border: none;
        height: 50px;
        -webkit-box-shadow: none;
        box-shadow: none;
        color: #3e485c;
        font-size: 16px;
        width: 100%;
    }

    .booking-form .form-control::-webkit-input-placeholder {
        color: rgba(62, 72, 92, 0.3);
    }

    .booking-form .form-control:-ms-input-placeholder {
        color: rgba(62, 72, 92, 0.3);
    }

    .booking-form .form-control::placeholder {
        color: rgba(62, 72, 92, 0.3);
    }

    .booking-form input[type="date"].form-control:invalid {
        color: rgba(62, 72, 92, 0.3);
    }

    .booking-form select.form-control {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .booking-form select.form-control+.select-arrow {
        position: absolute;
        right: 0px;
        bottom: 4px;
        width: 32px;
        line-height: 32px;
        height: 32px;
        text-align: center;
        pointer-events: none;
        color: rgba(62, 72, 92, 0.3);
        font-size: 14px;
    }

    .booking-form select.form-control+.select-arrow:after {
        content: '\279C';
        display: block;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .booking-form .form-label {
        display: inline-block;
        color: #3e485c;
        font-weight: 700;
        margin-bottom: 6px;
        margin-left: 7px;
    }

    .booking-form .submit-btn {
        display: inline-block;
        color: #fff;
        background-color: #1e62d8;
        font-weight: 700;
        padding: 14px 30px;
        border-radius: 4px;
        border: none;
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
    }

    .booking-form .submit-btn:hover,
    .booking-form .submit-btn:focus {
        opacity: 0.9;
    }

    .booking-cta {
        margin-top: 80px;
        margin-bottom: 30px;
    }

    .booking-cta h1 {
        font-size: 52px;
        text-transform: uppercase;
        color: #fff;
        font-weight: 700;
    }

    .booking-cta p {
        font-size: 16px;
        color: rgba(255, 255, 255, 0.8);
    }
</style>