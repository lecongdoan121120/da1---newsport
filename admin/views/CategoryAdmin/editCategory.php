<div style="margin-left: 100px; margin-top:80px" class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <form style="margin-top: 3  0px;" action="index.php?action=editCategory&id=<?= $category['id'] ?>" method="POST">
                                    <label for="name">Tên danh mục:</label>
                                    <input type="text" id="name" name="name" value="<?= $category['name'] ?>"><br><br>
                                    <input type="hidden" name="id" value="<?= $category['id'] ?>">
                                    <button action="index.php?action=homeCategory" type=" submit">Cập nhật</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<body>