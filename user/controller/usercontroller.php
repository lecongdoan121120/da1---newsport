<?php
require_once 'model/userModel.php';

class userController
{
    private $userModel;

    function __construct()
    {
        $this->userModel = new userModel();
    }

    function register()
    {
        $error = $success = ''; // Khởi tạo các biến thông báo

        if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Kiểm tra phương thức POST
            // Lấy dữ liệu từ form và loại bỏ khoảng trắng thừa
            $fullname = trim($_POST['fullname']);
            $email = trim($_POST['email']);
            $phone_number = trim($_POST['phone_number']);
            $password = trim($_POST['password']);

            // Kiểm tra dữ liệu từ model (kiểm tra trùng lặp email, phone, fullname)
            if ($this->userModel->check($fullname, $email, $phone_number)) {
                $error = "Email, Số điện thoại hoặc Họ tên đã tồn tại. Vui lòng sử dụng thông tin khác!";
            } else {
                // Đăng ký thành công
                if ($this->userModel->register($fullname, $email, $phone_number, $password)) {
                    $success = "Đăng ký thành công!";          
                } else {
                    $error = "Đã có lỗi xảy ra. Vui lòng thử lại!";
                }
            }
        }

        // Truyền biến lỗi hoặc thông báo thành công ra view
        include "view/register.php";
    }
}
