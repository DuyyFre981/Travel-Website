<div class="dt-content">
<?php 
    if(isset($hotel)){
        extract($hotel);
        $hinhpath = "../uploads/" . $ANHKS;
        $hinhpath2 = "../uploads/" . $ANHKS2;
        if (is_file($hinhpath)) {
            $ANHKS = "<img src ='" . $hinhpath . "' height = '80'>";
            $ANHKS2 = "<img src ='" . $hinhpath2 . "' height = '80'>";
        } else {
            $hinhtour = "no photo";
        }
    }
?>
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="images p-3">
                                <div class="text-center p-4"> <img id="main-image" src="<?= $hinhpath?>" width="300" /> </div>
                                <div class="thumbnail text-center"> <img onclick="change_image(this)" src="<?= $hinhpath2?>" width="70"> <img onclick="change_image(this)" src="<?= $hinhpath?>" width="80"> </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product p-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span class="ml-1"><a href="index.php?act=khachsan">BACK</a></span> </div> <i class="fa fa-shopping-cart text-muted"></i>
                                </div>
                                <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand"><?=$DCKS?></span>
                                    <h5 class="text-uppercase"><?=$TENKS?></h5>
                                    <div class="price d-flex flex-row align-items-center"> <span class="act-price"><?=$GIA?></span>
                                        <div class="ml-2"> <small class="dis-price">$590</small> <span>40% OFF</span> </div>
                                    </div>
                                </div>
                                <?php 
                                if(isset($MTKS)&&($MTKS=="Còn phòng")){
                                    echo ' <p class="about" style="color: green;">'.$MTKS.'</p>
                                    <div class="sizes mt-5">
                             
                                    <h6 class="text-uppercase">Type of room</h6>
                                    <form method="post" action="index.php?act=bookroom&&MAKS='.$MAKS.'">
                                        <label class="radio"> <input type="radio" name="size" value="Single" checked> <span>Single</span></label>
                                        <label class="radio"> <input type="radio" name="size" value="Double"> <span>Double</span> </label>
                                        <label class="radio"> <input type="radio" name="size" value="Suite"> <span>Suite</span> </label>
                                        <label class="radio"> <input type="radio" name="size" value="Smoking"> <span>Smoking</span> </label>
                                        <label class="radio"> <input type="radio" name="size" value="Non-smoking"> <span>Non-smoking</span> </label>
                                </div>
                                <div class="row">
                                <p class="ml-3">Number of room</p><input class="ml-2" style="height:25px;" name ="ho-quantity" type="number" placeholder="1" min="1" max="5">
                                </div>
                                <div class="cart mt-4 align-items-center">
                                    <button class="btn btn-danger text-uppercase mr-2 px-4">BOOK</button>
                                </div>
                                </form>
                                    ';
                             

                                } else echo '
                                <p class="about" style="color:red;">'.$MTKS.'</p>
                                <div class="sizes mt-5">
                                <h6 class="text-uppercase">Type of room</h6>
                                <form method="post" action="index.php?act=bookroom&&MAKS='.$MAKS.'">
                                    <label class="radio"> <input type="radio" name="size" value="Single" checked> <span>Single</span></label>
                                    <label class="radio"> <input type="radio" name="size" value="Double"> <span>Double</span> </label>
                                    <label class="radio"> <input type="radio" name="size" value="Suite"> <span>Suite</span> </label>
                                    <label class="radio"> <input type="radio" name="size" value="Smoking"> <span>Smoking</span> </label>
                                    <label class="radio"> <input type="radio" name="size" value="Non-smoking"> <span>Non-smoking</span> </label>
                            </div>
                            <div class="cart mt-4 align-items-center">
                                <button disabled class="btn text-uppercase mr-2 px-4">Book this</button> 
                            </div>
                            </form>

                                    ';
                                ?>
                                <!-- <p class="about" style="color: green;"><?=$MTKS?></p> -->
                                <!-- <div class="sizes mt-5">
                                    <h6 class="text-uppercase">Type of room</h6>
                                    <form method="post" action="index.php?act=bookroom&">
                                        <label class="radio"> <input type="radio" name="size" value="Single" checked> <span>Single</span></label>
                                        <label class="radio"> <input type="radio" name="size" value="Double"> <span>Double</span> </label>
                                        <label class="radio"> <input type="radio" name="size" value="Suite"> <span>Suite</span> </label>
                                        <label class="radio"> <input type="radio" name="size" value="Smoking"> <span>Smoking</span> </label>
                                        <label class="radio"> <input type="radio" name="size" value="Non-smoking"> <span>Non-smoking</span> </label>
                                </div>
                                <div class="cart mt-4 align-items-center">
                                    <button disabled class="btn btn-danger text-uppercase mr-2 px-4">Book this</button> <i class="fa fa-heart"></i> <i class="fa fa-share-alt text-muted"></i>
                                </div> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
</div>
<script>
    function change_image(image) {

        var container = document.getElementById("main-image");

        container.src = image.src;
    }



    document.addEventListener("DOMContentLoaded", function(event) {







    });
</script>