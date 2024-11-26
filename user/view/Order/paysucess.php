<!DOCTYPE html>
<html lang="vi">

<head>
    <style>
        /* styles.css */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #ece9e6, #ffffff);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #2ecc71;
            font-size: 2.5rem;
            margin-bottom: 10px;
            text-align: center;
            text-shadow: 2px 2px #d7d7d7;
        }

        p {
            color: #555;
            font-size: 1.2rem;
            text-align: center;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            font-size: 1rem;
            text-decoration: none;
            border-radius: 5px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }

        a:hover {
            background-color: #2980b9;
            box-shadow: 2px 2px 20px rgba(0, 0, 0, 0.2);
            transform: scale(1.1);
        }

        /* Add a decorative icon or image */
        body::before {
            content: "";
            background: url('shoes-icon.png') no-repeat center center;
            background-size: 150px;
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translateX(-50%);
            width: 150px;
            height: 150px;
            opacity: 0.2;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán thành công</title>
</head>

<body>
    <h1>Thanh toán thành công!</h1>
    <p>Cảm ơn bạn đã mua hàng. Đơn hàng của bạn đang được xử lý.</p>
    <a href="?action=home">Quay lại trang chủ</a>
</body>
<script>
    // script.js
    document.addEventListener('DOMContentLoaded', function() {
        const successMessage = document.querySelector('h1');
        const backButton = document.querySelector('a');

        // Add animation to the success message
        successMessage.style.opacity = 0;
        successMessage.style.transform = "translateY(-20px)";
        setTimeout(() => {
            successMessage.style.transition = "all 1s ease";
            successMessage.style.opacity = 1;
            successMessage.style.transform = "translateY(0)";
        }, 300);

        // Add hover effect to the button
        backButton.addEventListener('mouseover', () => {
            backButton.style.boxShadow = "0px 4px 15px rgba(0, 0, 0, 0.3)";
        });
        backButton.addEventListener('mouseout', () => {
            backButton.style.boxShadow = "2px 2px 10px rgba(0, 0, 0, 0.1)";
        });
    });
</script>

</html>