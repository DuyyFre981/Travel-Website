<?php 
session_start();
include "./dao/pdo.php";
include "./dao/taikhoan.php";
if(isset($_POST['REGISTER'])&&($_POST['REGISTER'])){
    $USERNAME = $_POST['username'];
    $PASSWORD = $_POST['password'];
    $PASSWORDrp = $_POST['password-repeat'];
    if($PASSWORD!==$PASSWORDrp){
        $repeaterr = "Xác nhận mật khẩu chưa đúng!";
    }
    $checkusertt = check_usertt($USERNAME);
    if(is_array($checkusertt)&&!isset($repeaterr)){{
      
      $thongbao = '<p style="color:red;text-align:center;">Đăng kí không thành công, tài khoản đã tồn tại!</p>';
      
      
  }} else if($PASSWORD!==$PASSWORDrp){
    $repeaterr = "<p style='color:red;margin-left:10px;'>Xác nhận mật khẩu chưa đúng!</p>";
    }
  
  else{
    $regisuser =insert_taikhoan($USERNAME,$PASSWORD);
    header('Location:index.php');
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://kit.fontawesome.com/0ef8ec799b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
<div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post">
                <h2 class="text-center"><strong>Đăng kí</strong> tài khoản.</h2>
                <div class="form-group"><input class="form-control" type="text" name="username" required placeholder="Tên tài khoản"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" required placeholder="Mật khẩu"></div>
                <div class="form-group"><input class="form-control" type="password" name="password-repeat" required placeholder="Xác nhận mật khẩu"></div>
                <?php
            if(isset($repeaterr)&&$repeaterr!=""){
              echo $repeaterr;
            }
          ?> 
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" required>Tôi đồng ý với các thỏa thuận.</label></div>
                </div>
                <div class="form-group"><input class="btn btn-primary btn-block" type="submit" name="REGISTER" value="Đăng kí"></input></div><a href="./index.php" class="already">You already have an account? Login here.</a></form>
        </div>
        <?php
            if(isset($thongbao)&&$thongbao!=""){
              echo $thongbao;
            }
          ?>    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>