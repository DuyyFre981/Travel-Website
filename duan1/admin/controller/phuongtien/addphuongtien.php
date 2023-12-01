<h2 style="margin-left: 5%;">Add a new vehicle</h2> 
<button style="margin-left: 5%;" type="submit" class="btn btn-success">
    <a style="color: white;text-decoration:none;" href="index.php?act=listvehicle">List Vehicle</a>
</button>
<form style="padding:5%" method="post" enctype="multipart/form-data" action="index.php?act=addvehicle">
   
   
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input required name="TENPT" type="text" id="form6Example1" class="form-control" />
                <label class="form-label" for="form6Example1">Vehicle Name</label>
            </div>
        </div>

    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input required name="GIA" type="text" id="form6Example1" class="form-control" />
                <label class="form-label" for="form6Example1">Vehicle Fee</label>
            </div>
        </div>

    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input required name="ANHPT" type="file" id="form6Example1" class="form-control" />
                <label class="form-label" for="form6Example1">Vehicle Image</label>
            </div>
        </div>

    </div>
   




    <!-- Submit button -->

    <input name="ADD" type="submit" class="btn btn-primary btn-block mb-4" value="ADD"></input>



</form>