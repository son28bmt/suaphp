<?php 
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "register"; // Thay "your_database_name" bằng tên cơ sở dữ liệu của bạn

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Hàm để lấy thông tin người dùng dựa trên user_id
function getUserInfo($id) {
    global $conn; // Sử dụng biến kết nối trong hàm này

    $user_id = mysqli_real_escape_string($conn, $id); // Đảm bảo an toàn trước SQL injection

    $query = "SELECT * FROM user WHERE id = $user_id";// Đúng cột 'id' thay vì 'user'
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        $user_info = $result->fetch_assoc();
        return $user_info;
    } else {
        return false; // Không tìm thấy người dùng
    }
}

// Kiểm tra xem có phiên đăng nhập hoặc không
if (isset($_SESSION['id'])) {
    // Lấy thông tin của người dùng
    $userInfo = getUserInfo($_SESSION['id']);

    // Hiển thị thông tin cá nhân
    if ($userInfo) {
        echo "Tên người dùng: " . $userInfo['username'] . "<br>";
        echo "Email: " . $userInfo['email'] . "<br>";
        // Các thông tin khác của người dùng
    } else {
        echo "Không tìm thấy thông tin người dùng.";
    }
} else {
    echo "Vui lòng đăng nhập để xem thông tin.";
}

$conn->close(); // Đóng kết nối cơ sở dữ liệu khi hoàn thành
?>
