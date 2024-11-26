 <div class="tf-page-title">
        <div class="container-full">
            <div class="heading text-center">My Account</div>
        </div>
    </div>
    <section class="flat-spacing-11">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="wrap-sidebar-account">
                        <ul class="my-account-nav">
                            <li><a href="?action=inforuser" class="my-account-nav-item active">Trang tài khoản</a></li>
                            <li><a href="?action=listoders" class="my-account-nav-item">Đơn hàng đã mua</a></li>
                            <li><a href="?action=logout" class="my-account-nav-item">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="my-account-content account-dashboard">
                        <h5 class="fw-5 mb_20">Tài khoản</h5>
                        <p>Tên tài khoản : <strong><?php echo $user['fullname'] ?> </strong> </p>
                        <p>Email : <strong><?php echo $user['email'] ?> </strong> </p>
                        <p>Số điện thoại : <strong><?php echo $user['phone_number'] ?> </strong> </p>
                        <div class="mb_60">
                            <div class="list-account-address">
                                <div class="account-address-item">
                                    <div style="margin-right: 1000px; margin-top:30px" class="d-flex gap-10 justify-content-center">
                                        <button class="tf-btn btn-fill animate-hover-btn justify-content-center btn-edit-address">
                                            <span>Sửa</span>
                                        </button>
                                    </div>
                                    <form class="edit-form-address wd-form-address" id="formeditAddress" action="" method="post">
                                        <div class="title">Họ tên</div>
                                        <div class="box-field ">
                                            <div class="tf-field style-1">
                                                <input class="tf-field-input tf-input" placeholder="" type="text" id="firstnameEdit" name="fullname" value="<?php echo $user['fullname'] ?>">
                                                <label class="tf-field-label fw-4 text_black-2" for="firstnameEdit">Họ tên</label>
                                            </div>
                                        </div>
                                        <div class="box-field">
                                            <div class="tf-field style-1">
                                                <input class="tf-field-input tf-input" placeholder=" " type="text" id="addressEdit" name="adress" value="<?php echo $user['adress']  ?>">
                                                <label class="tf-field-label fw-4 text_black-2" for="addressEdit">Địa chỉ</label>
                                            </div>
                                        </div>
                                        <div class="box-field">
                                            <div class="tf-field style-1">
                                                <input class="tf-field-input tf-input" placeholder=" " type="text" id="cityEdit" name="phone_number" value="<?php echo $user['phone_number'] ?>">
                                                <label class="tf-field-label fw-4 text_black-2" for="cityEdit">Số điện thoại</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center gap-20">
                                            <button type="submit" class="tf-btn btn-fill animate-hover-btn">Cập nhật tài khoản</button>
                                            <span class="tf-btn btn-fill animate-hover-btn btn-hide-edit-address">Quay lại</span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>