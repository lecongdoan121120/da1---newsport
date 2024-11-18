<form action="?action=register" method="POST">
    <h2>Đăng ký</h2>

    <!-- Hiển thị thông báo lỗi nếu có -->
    <?php if (!empty($error)): ?>
        <div style="color: red;"><?= $error; ?></div>
    <?php endif; ?>

    <!-- Hiển thị thông báo thành công nếu có -->
    <?php if (!empty($success)): ?>
        <div style="color: green;"><?= $success; ?></div>
    <?php endif; ?>

    <input type="text" name="fullname" placeholder="Tên" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="phone_number" placeholder="SĐT" required>
    <input type="password" name="password" placeholder="Mật khẩu" required>
    <button type="submit">Đăng ký</button>
</form>