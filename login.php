
<div id="loginForm" style="display: none;" class="login-form-container">
                    <!-- Your login form HTML goes here -->
                    <!-- Example: -->
                    <div class="login-form" >
                        <form action="login.php" method="post" onsubmit="loginUser(); return false">
                        <label for="user"> <b>Tên đầy đủ</b></label>
                        <br>
                        <input type="text" id="user" style="width: 333px; height: 30px;padding-left: 5px; border-radius: 5px; " placeholder="VD:Quang Sơn">
                        <br>
                        <label for="pass1"><b>Mật Khẩu</b></label>
                        <br>
                        <input type="password" id="pass1" style="width: 333px; height: 30px;padding-left: 5px; border-radius: 5px;  " placeholder=" Nhập mật khẩu">
                        <br>
                        
                        <input class="footer" type="submit" value="đăng nhập">
                    </div>
                </div>

               
                <div id="registerForm" style="display: none;" class="login-form-container">
                    <!-- Your registration form HTML goes here -->
                    <!-- Example: -->
                    <div class="login-form" >
                        <form action="register.php" method="post" onsubmit="registerUser(); return false;">
                        <label for="user"> <b>Tên đầy đủ</b></label>
                        <br>
                        <input type="text" id="loginUser" style="width: 314px; height: 30px;padding-left: 5px; border-radius: 5px; " placeholder="VD:Quang Sơn">
                        <br>
                        <label for="email"><b>Email</b></label>
                        <br>
                        <input type="email" id="email" style="width: 314px; height: 30px;padding-left: 5px; border-radius: 5px;  " placeholder="VD: Email@gmail.com">
                        <br>
                        <label for="pass1"><b>Mật Khẩu</b></label>
                        <br>
                        <input type="password" id="pass1" style="width: 314px; height: 30px;padding-left: 5px; border-radius: 5px;  " placeholder=" Nhập mật khẩu">
                        <br>
                        <label for="pass2"><b>Nhập Lại Mật Khẩu</b></label >
                        <br>
                        <input type="password" id="pass2" style="width: 314px; height: 30px;padding-left: 5px; border-radius: 5px;  " placeholder="Nhập lại mật khẩu">
                        <br>
                        <input class="footer" type="submit" value="Đăng kí">
                    </div>
                </div>
                </div>
                <?php
                    session_start(); // Bắt đầu phiên làm việc

                    // Kết nối đến cơ sở dữ liệu
                    $servername = "localhost";
                    $username = "root";
                    $password = ""; // Thay "your_password" bằng mật khẩu của tài khoản MySQL
                    $dbname = "register";

                    $conn = new mysqli($servername, $username, $password, $dbname);


                    if ($conn->connect_error) {
                        die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
                    }

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        // Kiểm tra thông tin đăng nhập
                        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

                        $result = $conn->query($sql);

                        if ($result->num_rows == 1) {
                            // Người dùng đã đăng nhập thành công, có thể thực hiện các hành động cần thiết ở đây
                            $_SESSION['logged_in'] = true;
                            header("Location: welcome.php"); // Chuyển hướng đến trang chào mừng
                        } else {
                            echo "Tên đăng nhập hoặc mật khẩu không đúng";
                        }
                    }
?>
