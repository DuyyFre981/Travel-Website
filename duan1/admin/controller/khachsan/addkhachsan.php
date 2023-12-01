<h2>Add a new hotel</h2>
<button type="submit" class="btn btn-success"><a style="color: white;text-decoration:none;" href="index.php?act=listhotel">List Hotel</a></button>
<form style="padding: 5%;" 
method="post" enctype="multipart/form-data" action="index.php?act=addhotel">

    <label class="form-label" for="form6Example1">TOUR Name: </label>
    <select name="MSTOUR" class="selectpicker">
        <?php
        foreach ($listtour as $tour) {
            extract($tour);
            echo ' <option  value="' . $tour['MSTOUR'] . '">' . $tour['TENTOUR'] . '</option>';
        }
        ?>
    </select>
 
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">

        <div class="col">
            <div class="form-outline">
                <input required name="TENKS" type="text" id="form6Example1" class="form-control" />
                <label class="form-label" for="form6Example1">Hotel Name</label>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input required name="DCKS" type="text" id="form6Example1" class="form-control" />
                <label class="form-label" for="form6Example1">Adress</label>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input required name="SDTKS" type="text" id="form6Example1" class="form-control" />
                <label class="form-label" for="form6Example1">Hotline</label>
            </div>
        </div>
    </div>

  
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input required name="GIA" type="text" id="form6Example1" class="form-control" />
                <label class="form-label" for="form6Example1">Price</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input required name="ANHKS" type="file" id="form6Example1" class="form-control" />
                <label class="form-label" for="form6Example1">Hotel Image 1</label>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input required name="ANHKS2" type="file" id="form6Example1" class="form-control" />
                <label class="form-label" for="form6Example1">Hotel Image 2</label>
            </div>
        </div>
    </div>
    <!-- Message input -->
    <div class="form-outline mb-4">
        <textarea required name="MTKS" class="form-control" id="form6Example7" rows="4"></textarea>
        <label class="form-label" for="form6Example7">Describe</label>
    </div>



    <!-- Submit button -->
    <input name="ADD" type="submit" class="btn btn-primary btn-block mb-4" value="ADD HOTEL"></input>
</form>
