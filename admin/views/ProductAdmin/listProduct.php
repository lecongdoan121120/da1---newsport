    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <div class="page-body-wrapper">
            <div class="page-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title d-sm-flex d-block">
                                        <h5>Danh sách sản phẩm</h5>
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                            <table class="table all-package theme-table table-product" id="table_id">
                                                <thead>
                                                    <tr>
                                                        <th>Hình ảnh</th>
                                                        <th>Tên sản phẩm</th>
                                                        <th>Danh mục</th>
                                                        <th>Giá</th>
                                                        <th>Giảm giá</th>
                                                        <th>Trạng thái</th>
                                                        <th>Số lượng</th>
                                                        <th>Hành động</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($data as $product) : ?>
                                                        <tr>
                                                            <td>
                                                                <div class="table-image">
                                                                    <img src="<?= $product['thumbnail'] ?>" alt="" width="60"
                                                                        alt="">
                                                                </div>
                                                            </td>
                                                            <td><?= $product['title'] ?></td>
                                                            <td><?= $product['category_id'] ?></td>
                                                            <td><?php echo number_format($product['price'], 0, ',', '.'); ?>₫</td>
                                                            <td class="td-price"><?= $product['discount'] ?>%</td>
                                                            <td style="background-color: 
                                                          <?php
                                                        if ($product['status'] == "Đang kinh doanh" && $product['stock'] > 0) {
                                                            echo '#d4edda'; 
                                                        } elseif ($product['status'] == "Đang kinh doanh" && $product['stock'] == 0) {
                                                            echo '#fff3cd'; 
                                                        } else {
                                                            echo '#f8d7da'; 
                                                        }
                                                           ?>;color: 
                                                         <?php
                                                        if ($product['status'] == "Đang kinh doanh" && $product['stock'] > 0) {
                                                            echo '#155724';
                                                        } elseif ($product['status'] == "Đang kinh doanh" && $product['stock'] == 0) {
                                                            echo '#856404';
                                                        } else {
                                                            echo '#721c24'; 
                                                        }
                                                         ?>;">
                                                                <span>
                                                                    <?php
                                                                    if ($product['status'] == "Đang kinh doanh" && $product['stock'] > 0) {
                                                                        echo 'Đang kinh doanh';
                                                                    } elseif ($product['status'] == "Đang kinh doanh" && $product['stock'] == 0) {
                                                                        echo 'Hết hàng';
                                                                    } else {
                                                                        echo 'Ngừng kinh doanh';
                                                                    }
                                                                    ?>
                                                                </span>
                                                            </td>

                                                            <td><?= $product['stock'] ?></td>
                                                            <td>
                                                                <ul>
                                                                    <li>
                                                                        <a href="index.php?action=editProduct&id=<?= $product['id'] ?>">
                                                                            <i class="ri-pencil-line"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="index.php?action=deleteProduct&id=<?= $product['id'] ?>"
                                                                            data-bs-target="#exampleModalToggle">
                                                                            <i class="ri-delete-bin-line"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
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