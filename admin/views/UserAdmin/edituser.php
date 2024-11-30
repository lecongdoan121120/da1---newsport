<style>
    button[type="submit"] {
        background-color: #007bff;
        /* Màu nền xanh */
        color: #fff;
        /* Màu chữ trắng */
        border: none;
        /* Không viền */
        border-radius: 5px;
        /* Góc bo tròn */
        padding: 10px 20px;
        /* Khoảng cách bên trong */
        font-size: 1rem;
        /* Kích thước chữ */
        font-weight: bold;
        /* Chữ đậm */
        cursor: pointer;
        /* Con trỏ dạng bàn tay khi hover */
        transition: background-color 0.3s ease, transform 0.2s ease;
        /* Hiệu ứng hover */
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
        /* Màu nền khi hover */
        transform: translateY(-2px);
        /* Hiệu ứng nổi lên khi hover */
    }

    button[type="submit"]:active {
        background-color: #004085;
        /* Màu nền khi nhấn */
        transform: translateY(0);
        /* Trở lại trạng thái ban đầu */
    }
</style>

<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <div class="page-body-wrapper">
        <div class="page-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-8 m-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="title-header option-title">
                                            <h5>Chỉnh sửa người dùng</h5>
                                        </div>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                                <form class="theme-form theme-form-2 mega-form" method="post">

                                                    <div class="row">

                                                        <div class="mb-4 row align-items-center">
                                                            <label
                                                                class="form-label-title col-lg-2 col-md-3 mb-0">Họ tên
                                                            </label>
                                                            <div class="col-md-9 col-lg-10">
                                                                <input name="fullname" class="form-control" type="text" value="<?= $user['fullname'] ?>">
                                                            </div>
                                                        </div>

                                                        <div class="mb-4 row align-items-center">
                                                            <label
                                                                class="col-lg-2 col-md-3 col-form-label form-label-title">Email
                                                            </label>
                                                            <div class="col-md-9 col-lg-10">
                                                                <input name="email" class="form-control" type="email" value="<?= $user['email'] ?>">
                                                            </div>
                                                        </div>

                                                        <div class="mb-4 row align-items-center">
                                                            <label
                                                                class="col-lg-2 col-md-3 col-form-label form-label-title">Số điện thoại</label>
                                                            <div class="col-md-9 col-lg-10">
                                                                <input name="phone_number" class="form-control" type="number" value="<?= $user['phone_number'] ?>">
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center">
                                                            <label
                                                                class="col-lg-2 col-md-3 col-form-label form-label-title">Mật khẩu
                                                            </label>
                                                            <div class="col-md-9 col-lg-10">
                                                                <input name="password" class="form-control" type="password" value="<?= $user['password'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center" style="margin-top: 40px;">
                                                            <label
                                                                class="col-lg-2 col-md-3 col-form-label form-label-title">Địa chỉ
                                                            </label>
                                                            <div class="col-md-9 col-lg-10">
                                                                <input name="adress" class="form-control" type="text" value="<?= $user['adress'] ?>">
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center" style="margin-top: 40px;">
                                                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Phân quyền</label>
                                                            <div class="col-md-9 col-lg-10">
                                                                <select name="role" class="form-control">
                                                                    <option value="1">Admin</option>
                                                                    <option value="2">User</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <button style="margin-top: 40px;" type="submit">Thêm</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>