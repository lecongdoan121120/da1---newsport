<div style="margin-left: 100px; margin-top:80px" class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <form action="index.php?action=storeProduct" method="POST" enctype="multipart/form-data" class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label for="title" class="form-label-title col-sm-3 mb-0">Tên sản phẩm</label>
                                        <div class="col-sm-9">
                                            <input name="title" class="form-control" type="text"
                                                placeholder="Product Name">
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label for="category_id"
                                            class="col-sm-3 col-form-label form-label-title">Danh mục</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" name="category_id" id="">
                                                <?php foreach ($categorys as $category) : "" ?>
                                                    <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
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
                                                    <textarea style="width:500px" type="text" id="description" name="description" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label
                                            for="thumbnail"
                                            class="col-sm-3 col-form-label form-label-title">Hình ảnh</label>
                                        <div class="col-sm-9">
                                            <input name="thumbnail" class="form-control form-choose" type="file"
                                                id="thumbnail" multiple>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label for="price" class="col-sm-3 form-label-title">Giá sản phẩm</label>
                                        <div class="col-sm-9">
                                            <input name="price" class="form-control" type="number" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label for="discount" class="col-sm-3 form-label-title">Giảm giá
                                        </label>
                                        <div class="col-sm-9">
                                            <input name="discount" class="form-control" type="number" placeholder="0">
                                        </div>
                                    </div>
                                    <label for="status">Trạng Thái:</label><br><br>
                                    <select name="status" id="status">
                                        <option value="Đang kinh doanh" selected>Đang kinh doanh</option>
                                        <option value="Ngừng kinh doanh">Ngừng kinh doanh</option>
                                    </select>
                                    <br><br>
                                    <button type="submit" class="btn btn-primary btn-sm mt-2">Thêm mới</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>