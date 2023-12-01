<?php
if (is_array($hotel)) {
  extract($hotel);
  $hinhpath = "../uploads/" . $ANHKS;
  $hinhpath2 = "../uploads/" . $ANHKS2;
  if (is_file($hinhpath)||is_file($hinhpath2)) {
    $ANHKS = "<img src ='" . $hinhpath . "' height = '80'>";
    $ANHKS2 = "<img src ='" . $hinhpath2 . "' height = '80'>";
  } else {
    $ANHKS = "no photo";
    $ANHKS2 = "no photo";
  }
}
?>
<h2>Change information hotel</h2>
<form style="padding: 5%;"

method="post" enctype="multipart/form-data" action="index.php?act=updateks" onsubmit="return confirmDesactiv()">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input required name="TENKS" type="text" id="form6Example1" class="form-control" value="<?= $TENKS ?>" />
        <label class="form-label" for="form6Example1">Hotel Name</label>
      </div>
    </div>

    <input required name="MSTOUR" type="hidden" id="form6Example1" class="form-control" value="<?= $MSTOUR ?>" />
    <input required name="MAKS" type="hidden" id="form6Example1" class="form-control" value="<?= $MAKS ?>" />

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
        <input required name="DCKS" type="text" id="form6Example1" class="form-control" value="<?= $DCKS?>" />
        <label class="form-label" for="form6Example1">Adress</label>
      </div>
    </div>

  </div>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input required name="SDTKS" type="text" id="form6Example1" class="form-control" value="<?=$SDTKS?>" />
        <label class="form-label" for="form6Example1">Hotline</label>
      </div>
    </div>

  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input name="ANHKS" type="file" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1"><?= $ANHKS ?></label>
      </div>
    </div>

  </div>
  
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input name="ANHKS2" type="file" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1"><?= $ANHKS2 ?></label>
      </div>
    </div>

  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea required name="MTKS" class="form-control" id="form6Example7" rows="4"><?= $MTKS ?></textarea>
    <label class="form-label" for="form6Example7">Describe</label>
  </div>



  <!-- Submit button -->
  <input name="UPDATE" type="submit" class="btn btn-primary btn-block mb-4" value="UPDATE">
</form>
<script>
  function confirmDesactiv()
{
   return confirm("Are you sure ?")
}
</script>