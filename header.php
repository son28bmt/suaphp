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
                                <li><a href="user.php?quanly=thongtin">Hãng Sữa</a>
                                    <!-- <ul class="submenu-c3">
                                        <li><a href="#">nội địa</a></li>
                                        <li><a href="#">nhập khẩu</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="https://www.facebook.com/NqSone203">Fanpage</a></li>
                                <li><a href="https://zalo.me/0387636718">zalo</a></li>
                            </ul>
                        </li>
                        <li><a href="c"><i class="fa-solid fa-universal-access" style="color: #ffffff;"></i><span> Khuyến Mãi</span></a></li>   
                        <li><a href="user.php?quanly=lienhe"><i class="fa-solid fa-lightbulb" style="color: #ffffff;"></i><span> Liên Hệ</span></a></li>
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