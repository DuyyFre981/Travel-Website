<script language="JavaScript" type="text/javascript">
  function checkDelete() {
    return confirm('Are you sure?');
  }
</script>
<div 
  style="padding-left: 5%;"
class="container">
 
  <button type="button" class="btn btn-primary">
    <a style="color: white;text-decoration:none;" href="index.php?act=addvehicle">ADD VEHICLEL</a>
  </button>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">IMAGE</th>
        <th scope="col">Vehicle name</th>

        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>


      <?php
      foreach ($listvehicle as $vehicle) {
        extract($vehicle);
        $hinhpath = "../uploads/" . $ANHPT;
        if (is_file($hinhpath)) {
          $ANHPT = "<img src ='" . $hinhpath . "' height = '80'>";
        } else {
          $ANHPT = "no photo";
        }
        echo '
          <tr>
          <td>' . $MSPT . '</td>
          <th>' . $ANHPT . '</th>
          <td>' . $TENPT . '</td>
        
          <td>' . $GIA . '</td>
          <td><button type="button"  class="btn btn-danger">
          <a style="color: white;text-decoration:none;" class="confirmation" href="index.php?act=deletevehicle&&MSPT=' . $MSPT . '"
         
          >Delete</a>
          </button>
          <button type="button" class="btn btn-danger">
          <a style="color: white;text-decoration:none;"  href="index.php?act=editvehicle&&MSPT=' . $MSPT . '">Edit</a>
          </button></td>
        </tr>
          ';
      }
      ?>



    </tbody>
  </table>
</div>
<script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>