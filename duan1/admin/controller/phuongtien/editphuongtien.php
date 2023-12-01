<?php
if (is_array($vehicle)) {
    extract($vehicle);
    $hinhpath = "../uploads/" . $ANHPT;
    if (is_file($hinhpath)) {
        $ANHPT = "<img src ='" . $hinhpath . "' height = '80'>";
    } else {
        $ANHPT = "no photo";
    }
}
?>
<h2  style="padding-left: 5%;">Edit vehicle</h2>
<form 
    style="padding: 5%;"
method="post" enctype="multipart/form-data" action="index.php?act=updatevehicle">
    <div class="mb-4">
        <input name="MSPT" type="hidden" value="<?=$MSPT?>">
       <div class="mb-4">
        <label for="">TOUR </label>
       <select name="MSTOUR" class="selectpicker">
            <?php
            foreach ($listtour as $tour) {
                extract($tour);
                echo ' <option  value="' . $tour['MSTOUR'] . '">' . $tour['TENTOUR'] . '</option>';
            }
            ?>
        </select>
       </div>
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input required name="TENPT" type="text" id="form6Example1" class="form-control" value="<?= $TENPT ?>" />
                    <label class="form-label" for="form6Example1">Vehicle Name</label>
                </div>
            </div>
            <!-- 2 column grid layout with text inputs for the first and last names -->


        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input required name="GIA" type="text" id="form6Example1" class="form-control" value="<?= $GIA ?>" />
                    <label class="form-label" for="form6Example1">Price</label>
                </div>
            </div>

        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input required name="SOLUONG" type="text" id="form6Example1" class="form-control" value="<?= $SOLUONG ?>" />
                    <label class="form-label" for="form6Example1">Price</label>
                </div>
            </div>

        </div>

        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input name="ANHPT" type="file" id="form6Example1" class="form-control" />
                    <label class="form-label" for="form6Example1"><?= $ANHPT ?></label>
                </div>
            </div>

        </div>





        <!-- Submit button -->
        <input name="UPDATE" type="submit" class="btn btn-primary btn-block mb-4" value="UPDATE">
</form>