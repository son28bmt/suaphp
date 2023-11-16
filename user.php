
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="login.css"> -->
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/slideshow.css">
    <title>
      
        Sửa tươi</title>
</head>
<body>
            <?php
                if (isset($_SESSION['registration_success'])) {
                echo '<div class="success-message">' . $_SESSION['registration_success'] . '</div>';
                unset($_SESSION['registration_success']); // Xóa thông báo sau khi hiển thị
                }
            ?>
    <header>
        <?php
            include("headeruser.php");
         ?>
    </header>
    <main>
                             
                <!-- <script>
                    function showLoginForm(formId) {
                        var formContainer = document.getElementById(formId);
                        formContainer.style.display = 'flex';
                        document.body.style.overflow = 'hidden';
                    }

                    function showRegisterForm() {
                        showLoginForm('registerForm');
                    }

                    function registerUser() {
                        // Perform registration logic, e.g., send data to the server
                        // On success, hide registration form and show login form
                        document.getElementById('registerForm').style.display = 'none';
                        document.getElementById('loginForm').style.display = 'flex';
                        document.body.style.overflow = 'auto';
                    }

                    function loginUser() {
                        // Perform login logic, e.g., send data to the server
                        // On success, hide the registration and login forms
                        document.getElementById('registerForm').style.display = 'none';
                        document.getElementById('loginForm').style.display = 'none';
                        document.body.style.overflow = 'auto';
                    }
                </script> -->

                <?php 
                    include("main/mainhd.php");
                ?>
                <div class="content">
                    <?php
                if(isset($_GET['quanly'])){
                    $tam = $_GET['quanly'];
                }else{
                    $tam='';
                }if($tam=='sua3tuoi'){
                    include("main/suachobe.php");
                }elseif($tam=='suamebau'){
                    include("main/suachome.php");
                }
                elseif($tam=='suamebau'){
                    include("main/topsanpham.php");
                }
                elseif($tam=='suachua'){
                    include("main/suachua.php");
                }
                elseif($tam=='suachieucao'){
                    include("main/suachieucao.php");
                }
                elseif($tam=='suatangcan'){
                    include("main/suanguoigia.php");
                }
                elseif($tam=='sanpham'){
                    include("main/mainsp.php");
                }
                elseif($tam=='thongtin'){
                    include("info.php");
                }
                elseif($tam=='khuyenmai'){
                    include("khuyenmai.php");
                }
                elseif($tam=='lienhe'){
                    include("lienhe.php");
                }
                elseif($tam=='giohang'){
                    include("user/giohang.php");
                }
                elseif($tam=='user'){
                    include("user/view-profile.php");
                }
                elseif($tam=='user'){
                    include("user/logout");
                }
                elseif ($tam == 'user-info') {
                    // Hiển thị thông tin cá nhân của người dùng
                    include("user/user-info.php");
                }
                else{
                    include("main/topsanpham.php");
                }
                ?>
                </div>
                
       
    </main>
    <!-- <div id="pagination">
        <button id="showMoreButton">Xem thêm nội dung</button>
        <button id="showLessButton">Thu gọn nội dung</button>
      </div>
      <script>
        document.addEventListener("DOMContentLoaded", function () {
            var showMoreButton = document.getElementById("showMoreButton");
            var showLessButton = document.getElementById("showLessButton");
            var divsToToggle = document.querySelectorAll(".div-to-hide");
    
            var visibleDivIndex = 0;
    
            showMoreButton.addEventListener("click", function () {
                if (visibleDivIndex < divsToToggle.length) {
                    divsToToggle[visibleDivIndex].style.display = "block";
                    visibleDivIndex++;
                    if (visibleDivIndex === divsToToggle.length) {
                        showMoreButton.style.display = "none";
                        // showLessButton.style.display = "block";
                    }
                }
            });
    
            showLessButton.addEventListener("click", function () {
                if (visibleDivIndex > 0) {
                    visibleDivIndex--;
                    divsToToggle[visibleDivIndex].style.display = "none";
                    showMoreButton.style.display = "block";
                    if (visibleDivIndex === 0) {
                        // showLessButton.style.display = "none";
                    }
                }
            });
        });
    </script>
     -->
    <footer>
        <?php
            include("footer.php");
        ?>
    </footer>
</body>
</html>