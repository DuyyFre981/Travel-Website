<?php 

  session_start();
  if(isset($_SESSION['tour'])) unset($_SESSION['tour']);
  if(isset($_SESSION['hotel'])) unset($_SESSION['hotel']);
  if(isset($_SESSION['vehicle'])) unset($_SESSION['vehicle']);
  include "./dao/pdo.php";
  include "./dao/taikhoan.php";
  if(isset($_POST['LOGIN'])&&($_POST['LOGIN'])){
    $USERNAME = $_POST['USERNAME'];
    $PASSWORD = $_POST['PASSWORD'];
    $checkuser =check_user($USERNAME,$PASSWORD);
    if(is_array($checkuser)){{
      $_SESSION['user'] = $checkuser;
      header('Location:view/index.php?act=home');
      
  }} else{
     $thongbao = '<p style="color:red;">Tài khoản không tồn tại, vui lòng kiểm tra hoặc đăng kí!</p>';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="./css/login.css">
    <script src="https://kit.fontawesome.com/0ef8ec799b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    <!-- login form -->
   
    <section style="padding-top: 40px;" id="loginform" class="vh-100">
      <h1><b>GoAway </b>Travel</h1>
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="./img/Travel Logo.png"
                class="img-fluid" alt="Sample image">
                
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form action="index.php?act=home"  style="background: #F6F6E9;" method="post">
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="lead fw-normal mb-0 me-3">Đăng nhập bằng</p>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                
                    <i class="fa-brands fa-linkedin-in"></i>
           
                </div>
      
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">Hoặc</p>
                </div>
          <?php
            if(isset($thongbao)&&$thongbao!=""){
              echo $thongbao;
            }
          ?>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input required type="text" id="form3Example3" name="USERNAME" class="form-control form-control-lg"
                    placeholder="Nhập tài khoản" />
                  <label style="margin-top: 5px;" class="form-label" for="form3Example3">Tài khoản</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input required type="password" id="form3Example4" name="PASSWORD" class="form-control form-control-lg"
                    placeholder="Nhập mật khẩu" />
                  <label style="margin-top: 5px;"  class="form-label" for="form3Example4">Mật khẩu</label>
                </div>
      
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label  class="form-check-label" for="form2Example3">
                      Ghi nhớ đăng nhập
                    </label>
                  </div>
                  <a href="#!" class="text-body">Quên mật khẩu?</a>
                </div>
      
                <div class="text-center text-lg-start mt-4 pt-2">
                    <!-- input login -->
                    <input id="login" style="border-radius: 10px;background-color: brown;color: white;padding: 10px;width: 100px;" type="submit" 
                    name="LOGIN" value="LOGIN">
                  <p class="small fw-bold mt-2 pt-1 mb-0">Chưa có tài khoản? <a href="./resigter.php"
                      class="link-danger">Đăng kí</a></p>
                </div>
      
              </form>
            </div>
          </div>
        </div>

          <!-- Right -->
        </div>
      </section>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>
