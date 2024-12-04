<div style="margin-left: 100px; margin-top:80px" class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <form action="index.php?action=updateProduct" method="POST" enctype="multipart/form-data" class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label for="title" class="form-label-title col-sm-3 mb-0">Tên sản phẩm</label>
                                        <div class="col-sm-9">
                                            <input name="title" class="form-control" type="text"
                                                value="<?= $product['title'] ?>">
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label for="category_id"
                                            class="col-sm-3 col-form-label form-label-title">Danh mục</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" name="category_id" id="">
                                                <?php foreach ($category as $cate): ?>
                                                    <option value="<?= $cate['id'] ?>"
                                                        <?= ($cate['id'] == $product['category_id']) ? 'selected' : '' ?>>
                                                        <?= $cate['name'] ?>
                                                    </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <label for="description" class="form-label-title col-sm-3 mb-0">Mô tả sản phẩm
                                                </label>
                                                <div class="col-sm-9">
                                                    <textarea style="width:500px" type="text" id="description" name="description" required><?= $product['description'] ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label
                                            for="thumbnail"
                                            class="col-sm-3 col-form-label form-label-title">Hình ảnh</label><br>
                                        <img src="<?= $product['thumbnail'] ?>" alt="" width="200px"><br><br>
                                        <div class="col-sm-9">
                                            <input name="thumbnail" class="form-control form-choose" type="file"
                                                id="thumbnail" multiple>
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label for="price" class="col-sm-3 form-label-title">Giá sản phẩm</label>
                                        <div class="col-sm-9">
                                            <input name="price" class="form-control" type="number" value="<?= $product['price'] ?>">
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label for="discount" class="col-sm-3 form-label-title">Giảm giá
                                        </label>
                                        <div class="col-sm-9">
                                            <input name="discount" class="form-control" type="number" value="<?= $product['discount'] ?>">
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label for="discount" class="col-sm-3 form-label-title">Số lượng
                                        </label>
                                        <div class="col-sm-9">
                                            <input name="stock" class="form-control" type="number" value="<?= $product['stock'] ?>">
                                        </div>
                                    </div>
                            </div>
                            <label for="status">Trạng Thái:</label><br><br>
                            <select name="status" id="status">
                                <option value="Đang kinh doanh" <?= $product['status'] == "Đang kinh doanh" ? 'selected' : '' ?>>Đang kinh doanh</option>
                                <option value="Ngừng kinh doanh" <?= $product['status'] == "Ngừng kinh doanh" ? 'selected' : '' ?>>Ngừng kinh doanh</option>
                            </select>
                            <br><br>
                            <input type="hidden" name="id" value="<?= $product['id'] ?>">
                            <button type="submit" class="btn btn-primary btn-sm mt-2">Cập nhật</button>
                            <a style="margin-top: 20px;" href="?action=listProduct">Quay lại</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>