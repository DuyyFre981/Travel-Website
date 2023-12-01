<?php

$user =$_SESSION['user'];

?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit User Information</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
    <style media="screen">



    </style>
</head>

<body>

    <div style="padding: 5%;" class="container">
        <h1>UPDATE YOUR INFORMATION</h1>

        <form method="post" action="index.php?act=updateuser">
            <div class="form-group">
                <input type="hidden" name="ID" value="<?=$user['ID']?>">
                <label for="">Enter new Name</label>
                <input type="text" class="form-control" id="usr" name="USERNAME" value="<?= $user['USERNAME'] ?>">
            </div>
            <div class="form-group">
                <label for="pwd">Enter new Password</label>
                <input type="text" class="form-control" id="pwd" name="PASSWORD" value="<?= $user['PASSWORD'] ?>">
            </div>
            <div class="form-group">
                <label for="pwd">Enter your fullname</label>
                <input type="text" class="form-control" id="pwd" name="HVT" value="<?= $user['HVT'] ?>">
            </div>
            <div class="form-group">
                <label for="pwd">Enter new Email</label>
                <input type="text" class="form-control" id="pwd" name="EMAIL" value="<?= $user['EMAIL'] ?>">
            </div>
            <div class="form-group">
                <label for="pwd">Enter new Phone</label>
                <input type="text" class="form-control" id="pwd" name="SDT" value="<?= $user['SDT'] ?>">
            </div>
            <div class="form-group">
                <label for="pwd">Enter new Adress</label>
                <input type="text" class="form-control" id="pwd" name="ADRESS" value="<?= $user['ADRESS'] ?>">
            </div>

            <input type="submit" name="UPDATE" value="UPDATE">
                </input>
        </form>
    </div>

</body>

</html>