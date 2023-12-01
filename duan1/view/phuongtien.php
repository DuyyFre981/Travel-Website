<div class="vehicle-content">

<div class="row">
    <div class="col-lg-8 mx-auto">

      <!-- List group-->
      <ul style="margin: 10% 0;" class="list-group shadow">
    <?php 
       foreach ($listpt as $pt) {
        extract($pt);
       
        $hinhpath = "../uploads/" . $ANHPT;
        if (is_file($hinhpath)) {
            $hinhpt = "<img src ='" . $hinhpath . "' height = '80'>";
        } else {
            $hinhpt = "no photo";
        }
        echo '
      
        <!-- list group item-->
        <li class="list-group-item">
          <!-- Custom content-->
          <div class="media align-items-lg-center flex-column flex-lg-row p-3">
            <div class="media-body order-2 order-lg-1">
              <h5 class="mt-0 font-weight-bold mb-2">'.$TENPT.'</h5>
             <form method="post" action=index.php?act=complete&&MSPT='.$MSPT.'>
             <input name ="quantity" type="number" placeholder="1" min="1" max="5">
             <input type ="submit" name="book" value="Book">
             </form>
              <div class="d-flex align-items-center justify-content-between mt-1">
                <h6 class="font-weight-bold my-2">$'.$GIA.'/ week</h6>
                
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                </ul>
              </div>
            </div><img src="'.$hinhpath.'" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
          </div>
          <!-- End -->
        ';
      }
    ?>


    </div>
  </div>
</div>