 <div class="page-wrapper compact-wrapper" id="pageWrapper">
     <div class="page-body-wrapper">
         <div class="page-body">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-sm-12">
                         <div class="card card-table">
                             <div class="card-body">
                                 <div class="title-header option-title">
                                     <h5>Tất cả danh mục</h5>
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
                                                                     <a href=" index.php?action=deleteCategory&id=<?= $category['id'] ?>">
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