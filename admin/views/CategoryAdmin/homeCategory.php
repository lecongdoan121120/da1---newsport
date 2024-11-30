 <div class="page-wrapper compact-wrapper" id="pageWrapper">
     <!-- Page Header Start-->

     <!-- Page Header Ends-->

     <!-- Page Body Start -->
     <div class="page-body-wrapper">
         <!-- Page Sidebar Start-->

         <!-- Page Sidebar Ends-->

         <!-- Container-fluid starts-->
         <div class="page-body">
             <!-- All User Table Start -->
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-sm-12">
                         <div class="card card-table">
                             <div class="card-body">
                                 <div class="title-header option-title">
                                     <h5>All Category</h5>

                                 </div>

                                 <div class="table-responsive category-table">
                                     <div>
                                         <table class="table all-package theme-table" id="table_id">
                                             <thead>
                                                 <tr>
                                                     <th>Id danh mục</th>
                                                     <th>Tên danh mục</th>
                                                     <th>Option</th>
                                                 </tr>
                                             </thead>

                                             <tbody>
                                                 <?php foreach ($categorys as $category) : ?>
                                                     <tr>
                                                         <td><?= $category['id'] ?></td>
                                                         <td><?= $category['name'] ?></td>
                                                         <td>
                                                             <ul>
                                                                 <li>
                                                                     <a href="index.php?action=editCategory&id=<?= $category['id'] ?>">
                                                                         <i class="ri-pencil-line"></i>
                                                                     </a>
                                                                 </li>

                                                                 <li>
                                                                     <a href=" index.php?action=deleteCategory&id=<?= $category['id'] ?>" data-bs-toggle="modal"
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

 <h3>Danh Sách Danh Mục</h3>
 <table border="1">
     <tr>
         <th>Category Id</th>
         <th> Category Name</th>
         <th>
             <a href="index.php?action=addCategory">Thêm</a>
         </th>
     </tr>

     <?php foreach ($categorys as $category) : ?>
         <tr>
             <td><?= $category['id'] ?></td>
             <td><?= $category['name'] ?></td>
             <td>
                 <a href="index.php?action=editCategory&id=<?= $category['id'] ?>">Sửa</a>
                 <a onclick="return confirm ('Bạn chắc chắn xóa không ?')" href="index.php?action=deleteCategory&id=<?= $category['id'] ?>">Xóa</a>
             </td>
         </tr>
     <?php endforeach ?>
 </table>
 </body>

 </html>