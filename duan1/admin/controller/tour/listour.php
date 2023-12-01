<div
    style="padding-left:5%"
class="container">
    


    <button type="button" class="btn btn-primary">
        <a style="color: white;text-decoration:none;" href="index.php?act=addtour">ADDTOUR</a>
    </button>


    <table class="table">

        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tour name</th>
                <th scope="col">Images</th>
                <th scope="col">Describe</th>
                <th scope="col">Price</th>
                <th scope="col"></th>

            </tr>
        </thead>
        <tbody>
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
    <tr>
      <th scope="row">' . $MSTOUR . '</th>
      <td>' . $TENTOUR . '</td>
      <td>' . $hinhtour . '</td>
      <td>' . $MTTOUR . '</td>
      <td>' . $GIATOUR . '</td>
      <td><button type="button" class="btn btn-danger">
       <a style="color: white;text-decoration:none;" class="confirmation"  href="index.php?act=deletetour&&MSTOUR=' . $MSTOUR . '">Delete</a>
       </button>
       <button type="button" class="btn btn-danger">
       <a style="color: white;text-decoration:none;"  href="index.php?act=edittour&&MSTOUR=' . $MSTOUR . '">Edit</a>
       </button></td>
    </tr>';
            }
            ?>
        </tbody>
    </table>
    <style>
        img {
            width: 100px;
            height: 80px;
        }

        button {
            width: 100px;
            margin-bottom: 5px;
        }
    </style>

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