 <!-- TRANG SẢN PHẨM -->
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>Document</title>
    </head>

    <body>
        <header>
            <div class="logo" style="display: flex;gap : 100px">
                <h1>NewSport</h1>

            </div>
            <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <?php foreach ($category as $categoryy) {
                    ?> <a class="dropdown-item" href="index.php?action=product-category&id=<?php echo $categoryy['id'] ?>">
                            <?php echo $categoryy['name'] ?>
                        </a>
                    <?php      }
                    ?>

                </div>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="http://">Trang chủ</a>
                        <a href="http://">Giới thiệu</a>
                        <a href="http://">Liên hệ</a>
                        <a href="http://">Sản phẩm</a>
                    </li>
                </ul>
            </nav>
            <div class="action">

                <i class="fa-solid fa-user"></i>
                <i class="fa-solid fa-bag-shopping"></i>
            </div>
            <main>
                <h1>TẤT CẢ SẢN PHẢM</h1>
                <section class="product">
                    <?php
                    foreach ($product as $products) {
                    ?>
                        <a href="index.php?action=product-detail&id=<?php echo $products['id']; ?>&category_id=<?php echo $products['category_id'] ?>">
                            <p><?php echo $products['thumbnail'] ?></p>
                            <p><?php echo $products['title'] ?></p>
                            <p><?php echo $products['price'] ?></p>
                            <p><?php echo $products['discount'] ?></p>
                        </a>

                    <?php
                    }   ?>



                </section>
            </main>


    </body>

    </html>