
<?php
 if(is_array($tour)){
    extract($tour);
    $hinhpath = "../uploads/".$ANHTOUR;
    if(is_file($hinhpath)){
        $ANHTOUR = "<img src ='".$hinhpath."' height = '80'>"; 
    }else {
        $ANHTOUR = "no photo";
    }
} 
?>
<h2>Edit tour</h2>
    <form method="post" enctype="multipart/form-data" action="index.php?act=updatetour">
      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
            <input required name="TENTOUR" type="text" id="form6Example1" class="form-control" value="<?=$TENTOUR?>"/>
            <label class="form-label" for="form6Example1">Tour Name</label>
          </div>
        </div>
        <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
            <input name="MSTOUR" type="hidden" id="form6Example1" class="form-control" value="<?=$MSTOUR?>"/>
          </div>
        </div>

      </div>
      <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
            <input required  name="GIATOUR" type="text" id="form6Example1" class="form-control" value="<?=$GIATOUR?>" />
            <label class="form-label" for="form6Example1">Price</label>
          </div>
        </div>

      </div>

      <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
            <input  name="ANHTOUR" type="file" id="form6Example1" class="form-control"/>
            <label class="form-label" for="form6Example1"><?=$ANHTOUR?></label>
          </div>
        </div>

      </div>

      <!-- Message input -->
      <div class="form-outline mb-4">
        <textarea required  name="MTTOUR" class="form-control" id="form6Example7"  rows="4"><?=$MTTOUR?></textarea>
        <label class="form-label" for="form6Example7">Describe</label>
      </div>



      <!-- Submit button -->
      <input name="UPDATE" type="submit" class="btn btn-primary btn-block mb-4" value="UPDATE">
    </form>
    