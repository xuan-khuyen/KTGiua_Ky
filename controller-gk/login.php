<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username && $password) {
        require_once 'GiuaKy\Model\index.php';

        $query = "SELECT * FROM User WHERE TenUser = :username AND MatKhau = :password";
        $statement = $db->prepare($query);
        $statement->execute(array(':username' => $username, ':password' => $password));
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $_SESSION['username'] = $username;
            header("Location: GiuaKy\View\Sach.php");
            exit();
        } else {
            echo "<script>alert('Thông tin đăng nhập không chính xác. Vui lòng thử lại!');</script>";
        }
    } else {
        echo "<script>alert('Vui lòng điền đầy đủ thông tin đăng nhập!');</script>";
    }
}
?>