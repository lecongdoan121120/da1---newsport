<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Fastkart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?= BASE_URL ?>/adminpublic//images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?= BASE_URL ?>/admin/public/images/favicon.png" type="image/x-icon">
    <title>NewSport</title>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASE_URL ?>/admin/public/css/linearicon.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/admin/public/css/vendors/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/admin/public/css/vendors/themify.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/admin/public/css/ratio.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/admin/public/css/remixicon.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/admin/public/css/vendors/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/admin/public/css/linearicon.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/admin/public/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/admin/public/css/vendors/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/admin/public/css/vector-map.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/admin/public/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/admin/public/css/style.css">
</head>
<body> 
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <div class="page-header">
            <div class="header-wrapper m-0">
                <div class="nav-right col-6 pull-right right-header p-0">
                   <ul class="nav-menus">
                        <li>
                            <div class="mode">
                                <i class="ri-moon-line"></i>
                            </div>
                        </li>
                        <li class="profile-nav onhover-dropdown pe-0 me-0">
                            <div class="media profile-media">
                                <div class="user-name-hide media-body">

                                    <span><?= $_SESSION['user']['fullname'] ?></span>
                                    <p class="mb-0 font-roboto"><?= $_SESSION['user']['role'] == 1 ? 'Admin' : 'User' ?><i class="middle ri-arrow-down-s-line"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li>
                                    <a href="all-users.html">
                                        <i data-feather="users"></i>
                                        <span>Users</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="order-list.html">
                                        <i data-feather="archive"></i>
                                        <span>Orders</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="profile-setting.html">
                                        <i data-feather="settings"></i>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                        href="javascript:void(0)">
                                        <i data-feather="log-out"></i>
                                        <span>Log out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-body-wrapper">
            <div class="sidebar-wrapper">
                <div id="sidebarEffect"></div>
                <div>
                    <div class="logo-wrapper logo-wrapper-center">
                        <a href="index.html" data-bs-original-title="" title="">
                            <h3 style="color:black">NewSport</h3>
                        </a>
                    </div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow">
                            <i data-feather="arrow-left"></i>
                        </div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"></li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="index.php">
                                        <i class="ri-home-line"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-store-3-line"></i>
                                        <span>Sản phẩm</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="?action=listProduct">Danh sách sản phẩm</a>
                                        </li>

                                        <li>
                                            <a href="?action=addProduct">Thêm mới sản phẩm</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>Danh mục</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="?action=homeCategory">Danh sách danh mục</a>
                                        </li>

                                        <li>
                                            <a href="?action=addCategory">Thêm mới danh mục</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>Tài khoản</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="?action=listuser">Danh sách người dùng</a>
                                        </li>
                                        <li>
                                            <a href="?action=adduser">Thêm người dùng</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-archive-line"></i>
                                        <span>Đơn hàng</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="?action=listorder">Danh sách đơn hàng</a>
                                        </li>
                                      
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="?action=comment">
                                        <i class="ri-star-line"></i>
                                        <span>Bình luận</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow">
                            <i data-feather="arrow-right"></i>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= BASE_URL ?>/admin/public/js/jquery-3.6.0.min.js"></script>
    <script src="<?= BASE_URL ?>/admin/public/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="<?= BASE_URL ?>/admin/public/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?= BASE_URL ?>/admin/public/js/icons/feather-icon/feather-icon.js"></script>
    <script src="<?= BASE_URL ?>/admin/public/js/scrollbar/simplebar.js"></script>
    <script src="<?= BASE_URL ?>/admin/public/js/scrollbar/custom.js"></script>
    <script src="<?= BASE_URL ?>/admin/public/js/config.js"></script>
    <script src="<?= BASE_URL ?>/admin/public/js/tooltip-init.js"></script>
    <script src="<?= BASE_URL ?>/admin/public/js/sidebar-menu.js"></script>
    <script src="<?= BASE_URL ?>/admin/public/js/notify/bootstrap-notify.min.js"></script>
    <script src="<?= BASE_URL ?>/admin/public/js/notify/index.js"></script>
    <script src="<?= BASE_URL ?>/admin/public/js/chart/apex-chart/apex-chart1.js"></script>
    <script src="<?= BASE_URL ?>/admin/public/js/chart/apex-chart/moment.min.js"></script>
    <script src="<?= BASE_URL ?>/admin/public/js/chart/apex-chart/apex-chart.js"></script>
    <script src="<?= BASE_URL ?>/admin/public/js/chart/apex-chart/stock-prices.js"></script>
    <script src="<?= BASE_URL ?>/admin/public/js/chart/apex-chart/chart-custom1.js"></script>
    <script src="<?= BASE_URL ?>/admin/public/js/slick.min.js"></script>
    <script src="<?= BASE_URL ?>/admin/public/js/custom-slick.js"></script>
    <script src="<?= BASE_URL ?>/admin/public/js/customizer.js"></script>
    <script src="<?= BASE_URL ?>/admin/public/js/ratio.js"></script>
    <script src="<?= BASE_URL ?>/admin/public/js/sidebareffect.js"></script>
    <script src="<?= BASE_URL ?>/admin/public/js/script.js"></script>
</body>
</html>