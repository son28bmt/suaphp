<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="login.css">
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
                       
                        
                        <li><a href="# "><i class="fa-solid fa-bell" style="color: #ffffff;"></i><span> Thông Tin</span></a>
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
                        <a href="#" class="login-1" onclick="showLoginForm('loginForm')"><i class="fa-solid fa-user" style="color: #ffffff;"></i> <span class="login-text">Đăng Nhập</span></a>
                    </div>
                    <div class="login">
                        <a href="#" class="register" onclick="showRegisterForm()"><i class="fa-solid fa-user" style="color: #ffffff;"></i> <span class="login-text">Đăng Kí</span></a>
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

        <div class="main-info" >
            <form action="" class="form-info">
                <h3>Thông tin hãng sữa</h3>
               <table class="info-sua">
                    <tr>
                        <th>Mã HS</th>
                        <th>Tên Hãng Sữa</th>
                        <th>Địa Chỉ</th>
                        <th>Điện Thoại</th>
                        <th>Email</th>
                    </tr>
                    <tr>
                        <td>VNM</td>
                        <td><a href="">Vinamilk</a></td>
                        <td>Trường đại học kiến trúc đà nẵng</td>
                        <td>0915582684</td>
                        <td>Vinamilk@gmail.com</td>
                    </tr>
                    <tr>
                        <td>NTF</td>
                        <td><a href="">NUTIFOOD</a></td>
                        <td>217/17 núi thành</td>
                        <td>0915582684</td>
                        <td>nuti@gmail.com</td>
                    </tr>
                    <tr>
                        <td>CGHL</td>
                        <td><a href="">Cô Gái Hà Lan</a></td>
                        <td>toà lanmart 81 vietnam</td>
                        <td>0915582684</td>
                        <td>CGHL@gmail.com</td>
                    </tr>
                    <tr>
                        <td>AB</td>
                        <td><a href="">Abbott</a></td>
                        <td>công ty sữa việt nam</td>
                        <td>0915582684</td>
                        <td>ABBOTT@gmail.com</td>
                    </tr>
                    <tr>
                        <td>DS</td>
                        <td><a href="">DASAN</a></td>
                        <td>Công ty nhập nhẩu nhật bản</td>
                        <td>0915582684</td>
                        <td>DASAN@gmail.com</td>
                    </tr>
                </table> 
            </form>
            
        </div>
    </main>
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
                    <li><a href="./home.html"><i class="fa-solid fa-chevron-right" style="color: #ffffff;"></i><span> Trang chủ</span></a></li>
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
            <span><a href="https://zalo.me/0387636718" target="_blank"><i class="fa-brands fa-facebook-messenger"></i><span> Chat Với Chúng Tôi</span></a></span>
           </div>
        </div>
    </footer>
</body>
</html>