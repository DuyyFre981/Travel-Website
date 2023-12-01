    <h2>Add a new tour</h2>
    <form style="padding: 5%;"
     method="post" enctype="multipart/form-data" action="index.php?act=addtour">
      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
            <input required name="TENTOUR" type="text" id="form6Example1" class="form-control"/>
            <label class="form-label" for="form6Example1">Tour Name</label>
          </div>
        </div>

      </div>
      <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
            <input required  name="GIATOUR" type="text" id="form6Example1" class="form-control" />
            <label class="form-label" for="form6Example1">Tour Price</label>
          </div>
        </div>

      </div>

      <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
            <input required  name="ANHTOUR" type="file" id="form6Example1" class="form-control" />
            <label class="form-label" for="form6Example1">Tour IMAGE</label>
          </div>
        </div>

      </div>

      <!-- Message input -->
      <div class="form-outline mb-4">
        <textarea required  name="MOTATOUR" class="form-control" id="form6Example7" rows="4"></textarea>
        <label class="form-label" for="form6Example7">Description</label>
      </div>



      <!-- Submit button -->
      <input name="ADD" type="submit" class="btn btn-primary btn-block mb-4" value="ADD"></input>
    </form>
    <button type="submit" class="btn btn-success"><a style="color: white;text-decoration:none;" href="index.php?act=listtour">List tour</a></button>