<div class="tour-content">



    <section class="pb-5">
        <div class="container text-center">
            <!-- Masonry grid -->
            <div style="padding-top: 7%;"
             class="gallery-wrapper">
                <!-- Grid sizer -->
                <div class="grid-sizer col-lg-4 col-md-6"></div>

                <div class="tour-flex">
                    <?php
                    foreach ($listtour as $tour) {
                        extract($tour);
                       
                        $hinhpath = "../uploads/" . $ANHTOUR;
                        if (is_file($hinhpath)) {
                            $hinhtour = "<img src ='" . $hinhpath . "' height = '80'>";
                        } else {
                            $hinhtour = "no photo";
                        }
                        echo '
                        <!-- Grid item -->
                    <div class="col-lg-4 col-md-6 grid-item mb-4">
                    <img style="height:250px" class="img-fluid w-100 mb-3 img-thumbnail shadow-sm rounded-0" src='.$hinhpath.' alt="">
                    <h2 class="h4">'.$TENTOUR.'</h2>
                    <p class="small text-muted font-italic">'.$MTTOUR.'</p>
                  
                    <a class="chose" style="color: ;" href="index.php?act=bookhotel&&MSTOUR='.$MSTOUR.'">Chose this place!</a>
                </div>
                    ';
                    } ?>
                   


                   
                </div>
            </div>
        </div>
    </section>
    <script>
        $(function() {

            // Initate masonry grid
            var $grid = $('.gallery-wrapper').masonry({
                temSelector: '.grid-item',
                columnWidth: '.grid-sizer',
                percentPosition: true,
            });

            // Initate imagesLoaded
            $grid.imagesLoaded().progress(function() {
                $grid.masonry('layout');
            });

        });
    </script>


</div>
<style>
    a.chose{
        font-weight: 200;
        font-size: 20px;
        color: black;
    }
    a.chose:hover{
        color: green;
        font-weight: 300;
    }
</style>