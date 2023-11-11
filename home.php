<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="login.css"> -->
    <title>
      
        Sửa tươi</title>
</head>
<body>
    <header>
        <nav>
            <div class="heading">
                <div class="logo">
                   <a href=""><img class="image-logo" src="image/Logo_th_group.png" alt="logosua"></a> 
                </div>  
                <div class="menu">
                    <ul class="subnav">
                        <li><a href="./home.php"> <i class="fa-solid fa-house" style="color: #ffffff;"></i><span>Trang Chủ</span></a></li>
                        <li><a href=""><i class="fa-solid fa-briefcase" style="color: #ffffff;"></i><span> Sản Phẩm</span></a>
                            <ul class="submenu">
                                <li><a href="#">Sữa bột</a></li>
                                <li><a href="#">Sữa tươi </a></li>
                                <li><a href="#">Sữa chua</a></li>
                            </ul>
                        </li>
                       
                        
                        <li><a href="./info.php"><i class="fa-solid fa-bell" style="color: #ffffff;"></i><span> Thông Tin</span></a>
                            <ul class="submenu">
                                <li><a href="">Hãng Sữa</a>
                                    <!-- <ul class="submenu-c3">
                                        <li><a href="#">nội địa</a></li>
                                        <li><a href="#">nhập khẩu</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="https://www.facebook.com/NqSone203">Fanpage</a></li>
                                <li><a href="https://zalo.me/0387636718">zalo</a></li>
                            </ul>
                        </li>
                        <li><a href=""><i class="fa-solid fa-universal-access" style="color: #ffffff;"></i><span> Khuyến Mãi</span></a></li>   
                        <li><a href=""><i class="fa-solid fa-lightbulb" style="color: #ffffff;"></i><span> Liên Hệ</span></a></li>
                    </ul>
                </div>
                    <div class="login-menu">
                    <div class="login" >
                        <a href="login.php" class="login-1" onclick="showLoginForm('loginForm')"><i class="fa-solid fa-user" style="color: #ffffff;"></i> <span class="login-text">Đăng Nhập</span></a>
                    </div>
                    <div class="login">
                        <a href="register.php" class="register" onclick="showRegisterForm()"><i class="fa-solid fa-user" style="color: #ffffff;"></i> <span class="login-text">Đăng Kí</span></a>
                    </div>
                </div>

                <!-- Login Form -->         
                <script>
                    function showLoginForm(formId) {
                        document.getElementById('loginForm').style.display = 'block';
                        document.getElementById('registerForm').style.display = 'none';
                    }

                    function showRegisterForm() {
                        document.getElementById('loginForm').style.display = 'none';
                        document.getElementById('registerForm').style.display = 'block';
                    }
                </script>
                <div class="search">
                    <form action="" class="ti-search" >
                    <input type="text" class="fa-search-text" placeholder="tìm sản Phẩm..." required >
                    <button onclick="check()" class="search-btn"><i class="fa-solid fa-magnifying-glass" style="color: #0b0909;"></i></button >
                </form>
                </div>
            </div>
        </nav>
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

        <div class="main-header">
            <div class="main-header-1">
                <ul class="main-submenu">
                    <li id="danhMuc" onclick="toggleSubMenu()">
                        <i class="fa-solid fa-bars" style="color: #000000;"></i> <span>Danh Mục Sản phẩm </span>
                        <ul class="navds-menu">
                            <li><a href=""> <i class="fa-solid fa-child" style="color: #020203;"></i><span> Sữa cho bé dưới 3 tuổi </span> </a></li>
                            <li><a href=""><i class="fa-solid fa-child" style="color: #020203;"></i><span> sữa cho mẹ bầu </span> </a></li>
                            <li><a href=""><i class="fa-solid fa-child" style="color: #020203;"></i><span> sữa chua </span> </a></li>
                            <li><a href=""><i class="fa-solid fa-child" style="color: #020203;"></i><span> sữa cho trẻ tăng chiều cao </span> </a></li>
                            <li><a href=""><i class="fa-solid fa-child" style="color: #020203;"></i><span> sữa cho trẻ tăng cân </span> </a></li>
                            <li><a href=""><i class="fa-solid fa-child" style="color: #020203;"></i><span> sữa chua </span> </a></li>
                            <li><a href=""><i class="fa-solid fa-child" style="color: #020203;"></i><span> sữa cho trẻ tăng chiều cao </span> </a></li>
                            <li><a href=""><i class="fa-solid fa-child" style="color: #020203;"></i><span> sữa cho trẻ tăng cân </span> </a></li>
                            <li><a href=""><i class="fa-solid fa-child" style="color: #020203;"></i><span> sữa chua </span> </a></li>
                        </ul>
                    </li>
                </ul>
                <script>
                    function toggleSubMenu() {
                        // Your click event logic here
                        var submenu = document.querySelector('.navds-menu');
                        submenu.classList.toggle('show-submenu');
                    }
                </script>
                <div class="main-header-2">
                    <img src="./image/y-tuong-quang-cao-voi-chu-bo-cua-Vinamilk.jpg" alt="">
                </div>
            </div>
            <div class="content">
            <div id="box1" class="div-to-hide-0">
                <div class="content-heading">
                    <h1> <i class="fa-solid fa-fire" style="color: #000000;"></i>TOP SẢN PHẨM</h1>
                </div>
                <div class="main-content">
                    <ul id="product-list" class="main-content-2">
                        <li >
                            <div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                        <li><div class="product-heading">
                            <h3>Sữa Ensure</h3>
                        </div>
                        <div class="product-item">
                            <div class="product-image">
                                <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                            </div>
                            <div class="product-info">
                                 <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                Abbott (Hoa Kỳ) <br>
                                 Mỹ, Úc, Đức, Tây Ban Nha <br>
                                <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                            </div>
                        </div>
                    </li>
                        <li>
                            <div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                        <li><div class="product-heading">
                            <h3>Sữa Ensure</h3>
                        </div>
                        <div class="product-item">
                            <div class="product-image">
                                <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                            </div>
                            <div class="product-info">
                                 <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                Abbott (Hoa Kỳ) <br>
                                 Mỹ, Úc, Đức, Tây Ban Nha <br>
                                <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                            </div>
                        </div>
                    </li>
                        <li>
                            <div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                        <li><div class="product-heading">
                            <h3>Sữa Ensure</h3>
                        </div>
                        <div class="product-item">
                            <div class="product-image">
                                <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                            </div>
                            <div class="product-info">
                                 <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                
                                Abbott (Hoa Kỳ) <br>
                                 Mỹ, Úc, Đức, Tây Ban Nha <br>
                                <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                            </div>
                        </div>
                    </li>
                        <li>
                            <div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                        <li><div class="product-heading">
                            <h3>Sữa Ensure</h3>
                        </div>
                        <div class="product-item">
                            <div class="product-image">
                                <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                            </div>
                            <div class="product-info">
                                 <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                Abbott (Hoa Kỳ) <br>
                                 Mỹ, Úc, Đức, Tây Ban Nha <br>
                                <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                            </div>
                        </div>
                    </li>
                        <li>
                            <div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                        <li><div class="product-heading">
                            <h3>Sữa Ensure</h3>
                        </div>
                        <div class="product-item">
                            <div class="product-image">
                                <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                            </div>
                            <div class="product-info">
                                 <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                Abbott (Hoa Kỳ) <br>
                                 Mỹ, Úc, Đức, Tây Ban Nha <br>
                                <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                            </div>
                        </div>
                    </li>
                        <li>
                            <div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                        <li><div class="product-heading">
                            <h3>Sữa Ensure</h3>
                        </div>
                        <div class="product-item">
                            <div class="product-image">
                                <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                            </div>
                            <div class="product-info">
                                 <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                Abbott (Hoa Kỳ) <br>
                                 Mỹ, Úc, Đức, Tây Ban Nha <br>
                                <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                            </div>
                        </div>
                    </li>
                       
                    </ul>
            </div>

                    <div id="box2" class="div-to-hide">
                        <div class="content-heading">
                            <h1> <i class="fa-solid fa-fire" style="color: #000000;"></i>Sữa Tăng chiều cao</h1>
                        </div>
                        <div class="main-content">
                            <ul id="product-list" class="main-content-2">
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li >
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            
                            <li><div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li >
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li><div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li >
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li><div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li >
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li><div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        </div>
                        <div id="box3" class="div-to-hide">
                        <div class="content-heading">
                            <h1> <i class="fa-solid fa-fire" style="color: #000000;"></i>Sữa cho trẻ</h1>
                        </div>
                        <div class="main-content">
                            <ul id="product-list" class="main-content-2">
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li >
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            
                            <li><div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li >
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li><div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li >
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li><div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li >
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li><div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="box3" class="div-to-hide">
                        <div class="content-heading">
                            <h1> <i class="fa-solid fa-fire" style="color: #000000;"></i>Sữa Tăng Người già</h1>
                        </div>
                        <div class="main-content">
                            <ul id="product-list" class="main-content-2">
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li >
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            
                            <li><div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li >
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li><div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li >
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li><div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li >
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li><div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        </div>
                        <div id="box4" class="div-to-hide">
                        <div class="content-heading">
                            <h1> <i class="fa-solid fa-fire" style="color: #000000;"></i>Sữa cho Mẹ bầu</h1>
                        </div>
                        <div class="main-content">
                            <ul id="product-list" class="main-content-2">
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li >
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            
                            <li>
                            <div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li >
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li><div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li >
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li><div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li >
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                            <li><div class="product-heading">
                                <h3>Sữa Ensure</h3>
                            </div>
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                </div>
                                <div class="product-info">
                                     <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span><br>
                                    Abbott (Hoa Kỳ) <br>
                                     Mỹ, Úc, Đức, Tây Ban Nha <br>
                                    <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                    <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                </div>
                            </div>
                        </li>
                            <li>
                                <div class="product-heading">
                                    <h3>Sữa Ensure</h3>
                                </div>
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="./image/sua-bot-optimum-gold-1-800g-1.webp" alt="">
                                    </div>
                                    <div class="product-info">
                                         <span class="Buy-now-a"><a href="#">Mua Ngay</a></span> <span class="Buy-now-b"><a href="#">Thêm giỏ hàng</a></span>  <br>
                                        Abbott (Hoa Kỳ) <br>
                                         Mỹ, Úc, Đức, Tây Ban Nha <br>
                                        <b>Giá: 390.000 VNĐ/hộp </b> <br>
                                        <b>Đối tượng:</b> Trẻ dưới 3 tuổi<br>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                    
                      
                </div>
            </div>
        </div>
       
    </main>
    <div id="pagination">
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
    
    <footer>
        <div class="footer-top">
            <div class="footer-left">
                <h3>thông tin liên hê</h3>
                <i class="fa-solid fa-school" style="color: #ffffff;"></i><span>  Trường đại học kiến trúc đà nẵng</span><br>
                <i class="fa-regular fa-envelope" style="color: #ffffff;"></i><span>   Email: quangsonnguyen2907@gmail.com</span><br>
                <i class="fa-solid fa-phone" style="color: #ffffff;"></i><span>   Hotline: 0915582684 0387636718</span><br>
            </div>
            <div class="footer-content">
                <h3>Truy cập nhanh</h3>
                <ul>
                    <li><a href=""><i class="fa-solid fa-chevron-right" style="color: #ffffff;"></i><span> Trang chủ</span></a></li>
                    <li><a href=""><i class="fa-solid fa-chevron-right" style="color: #ffffff;"></i><span> Sản phẩm</span></a></li>
                    <li><a href=""><i class="fa-solid fa-chevron-right" style="color: #ffffff;"></i><span> Liên hệ</span></a></li>
                </ul>
            </div>
            <div class="footer-right">
                <h3>Follow chúng tôi</h3>
                <ul>
                    <li><a href="https://www.facebook.com/NqSone203"> <i class="fa-brands fa-facebook" style="color: #ffffff;"></i><span>  Facebook</span> </a></li>
                    <li><a href="https://www.facebook.com/NqSone203"><i class="fa-brands fa-tiktok" style="color: #ffffff;"></i><span>  TIKTOK</span></a></li>
                    <li><a href="https://www.instagram.com/sowne_03/" ><i class="fa-brands fa-instagram" style="color: #ffffff;"></i><span>  INSTAGRAM</span></a></li>
                </ul>
            </div>
        </div>
        <div class="footer">
           <div class="footer-1-left">
                <span>Copyright@nguyenquangson2807siucapvipro</span>
           </div>
           <div class="footer-2-right">
            <span><a href="https://zalo.me/0387636718" target="_blank"><i class="fa-brands fa-facebook-messenger" style="color: #ffffff;"></i><span> Chat Với Chúng Tôi</span></a></span>
           </div>
        </div>
    </footer>
</body>
</html>