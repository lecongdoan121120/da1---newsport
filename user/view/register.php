<section class="flat-spacing-10">
    <div class="container">
        <div class="form-register-wrap">
            <div class="flat-title align-items-start gap-0 mb_30 px-0">
                <h5 class="mb_18">Register</h5>
                <p class="text_black-2">Sign up for early Sale access plus tailored new arrivals, trends and promotions. To opt out, click unsubscribe in our emails</p>
            </div>
            <div>
                <form id="register-form" action="?action=register" method="post" accept-charset="utf-8">
                    <!-- Display error message if any -->
                    <?php if (!empty($error)): ?>
                        <div style="color: red;"><?= $error; ?></div>
                    <?php endif; ?>

                    <!-- Display success message if any -->
                    <?php if (!empty($success)): ?>
                        <div style="color: green;"><?= $success; ?></div>
                    <?php endif; ?>

                    <div class="tf-field style-1 mb_15">
                        <input class="tf-field-input tf-input" placeholder=" " type="text" id="property1" name="fullname">
                        <label class="tf-field-label fw-4 text_black-2" for="property1">Họ tên</label>
                    </div>
                    <div class="tf-field style-1 mb_15">
                        <input class="tf-field-input tf-input" placeholder=" " type="email" id="property2" name="email">
                        <label class="tf-field-label fw-4 text_black-2" for="property2">Email</label>
                    </div>
                    <div class="tf-field style-1 mb_15">
                        <input class="tf-field-input tf-input" placeholder=" " type="text" id="property3" name="phone_number">
                        <label class="tf-field-label fw-4 text_black-2" for="property3">Số điện thoại</label>
                    </div>
                    <div class="tf-field style-1 mb_30">
                        <input class="tf-field-input tf-input" placeholder=" " type="password" id="property4" name="password">
                        <label class="tf-field-label fw-4 text_black-2" for="property4">Mật khẩu</label>
                    </div>
                    <div class="mb_20">
                        <button type="submit" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">Đăng ký</button>
                    </div>
                    <div class="text-center">
                        <a href="?action=login" class="tf-btn btn-line">Already have an account? Log in here<i class="icon icon-arrow1-top-left"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>