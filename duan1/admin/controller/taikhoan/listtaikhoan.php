


<table  class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">USERNAME</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PHONE</th>
      <th scope="col">ADRESS</th>
    </tr>
  </thead>
  <tbody class="table-group-divider table-divider-color">
  <?php
        foreach ($listuser as $user) {
            extract($user);
            echo '
    <tr>
      <th scope="row">' . $ID. '</th>
      <td>' . $USERNAME . '</td>
      <td>' . $PASSWORD . '</td>
      <td>' . $EMAIL . '</td>
      <td>' . $SDT. '</td>
      <td>' . $ADRESS. '</td>
      <td><button type="button" class="btn btn-danger">
       <a style="color: white;text-decoration:none;" class="confirmation" href="index.php?act=deleteuser&&ID='.$ID.'">Delete</a>
       </button>
       <button type="button" class="btn btn-danger">
       <a style="color: white;text-decoration:none;"  href="index.php?act=edituser&&ID='.$ID.'">Edit</a>
       </button></td>
    </tr>';
        }
        ?>
  </tbody>
</table>
<script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
<!--  -->


