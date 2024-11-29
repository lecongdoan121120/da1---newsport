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
                                                      <th>Id</th>
                                                      <th>Id khách hàng</th>
                                                      <th>Id sản phẩm</th>
                                                      <th>Nội dung</th>
                                                      <th>Ngày bình luận</th>
                                                      <th>Hành động</th>        
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php foreach ($comments as $comment) : ?>
                                                      <tr>
                                                          <td>
                                                              <?= $comment['id'] ?>
                                                          </td>
                                                          <td> <?= $comment['id_user'] ?></td>
                                                          <td> <?= $comment['id_product'] ?></td>
                                                          <td><?= $comment['content_comment'] ?></td>
                                                          <td><?= $comment['date_comment'] ?></td>
                                                          <td>
                                                              <ul>
                                                                  <li>
                                                                      <a href="index.php?action=delete&id=<?= $comment['id']?>"
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