<div 
style="padding: 3%;" class="container">


<button style="width:120px" type="button" class="btn btn-primary">
    <a style="color: white;text-decoration:none;" href="index.php?act=addhotel">ADD HOTEL</a>
</button>


<table 
    style="padding: 5%;"
class="table">

    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Hotel Name</th>
            <th scope="col">Adress</th>
            <th scope="col">Phone number</th>
            <th scope="col">Image 1</th>
            <th scope="col">Image 2</th>
            <th scope="col">Price</th>
            <th scope="col">Describe</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($listhotel as $hotel) {
            extract($hotel);

            $hinhpath = "../uploads/" . $ANHKS;
            $hinhpath2 = "../uploads/" . $ANHKS2;
            if (is_file($hinhpath)) {
                $ANHKS = "<img src ='" . $hinhpath . "' height = '80px'; width= '100px'>";
                $ANHKS2 = "<img src ='" . $hinhpath2 . "' height = '80px';width= '100px'>";
            } else {
                $hinhtour = "no photo";
            }
            echo '
    <tr>
      <th scope="row">' . $MAKS . '</th>
      <td>' . $TENKS . '</td>
      <td>' . $DCKS . '</td>
      <td>' . $SDTKS . '</td>
      <td>' . $ANHKS . '</td>
      <td>' . $ANHKS2 . '</td>
      <td>' . $GIA . '</td>
      <td>' . $MTKS . '</td>
      <td><button type="button"  class="btn btn-danger" >
       <a style="color: white;text-decoration:none;" class="confirmation" href="index.php?act=deletehotel&&MAKS='.$MAKS.'">Delete</a>
       </button>
       <button type="button" class="btn btn-danger">
       <a style="color: white;text-decoration:none;"  href="index.php?act=edithotel&&MAKS='.$MAKS.'">Edit</a>
       </button></td>
    </tr>';
        }
        ?>
    </tbody>
</table>

</div>
<style>
    img{
        height: 80px;
        width: 100px;
    }
    button{
        width: 100px;
        margin-bottom: 5px;
    }
</style>
<script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>