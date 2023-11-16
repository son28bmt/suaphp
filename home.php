
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="login.css"> -->
    <link rel="stylesheet" href="css/slideshow.css">
    <title>
      
        Sửa tươi</title>
</head>
<body>
    <header>
        <?php
            include("header.php");
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
                include("main/mainhome.php");
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
                else{
                    include("main/topsanpham.php");
                }
                ?>
                </div>
       
    </main>
    <?php 
    include("footer.php");
    ?>
</body>
</html>