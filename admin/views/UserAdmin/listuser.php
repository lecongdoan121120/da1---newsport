  <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <div class="page-body-wrapper">
          <div class="page-body">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-sm-12">
                          <div class="card card-table">
                              <div class="card-body">
                                  <div class="title-header option-title d-sm-flex d-block">
                                      <h5>Danh sách người dùng</h5>

                                  </div>
                                  <div>
                                      <div class="table-responsive">
                                          <table class="table all-package theme-table table-product" id="table_id">
                                              <thead>
                                                  <tr>
                                                      <th>#</th>
                                                      <th>Họ Tên</th>
                                                      <th>Email</th>
                                                      <th>Số điện thoại</th>
                                                      <th>Chức vụ</th>
                                                      <th>Địa chỉ</th>
                                                      <th>Hành động</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php foreach ($user as $users) : ?>
                                                      <tr>
                                                          <td>
                                                              <?= $users['id'] ?>
                                                          </td>
                                                          <td> <?= $users['fullname'] ?></td>
                                                          <td> <?= $users['email'] ?></td>
                                                          <td><?= $users['phone_number'] ?></td>
                                                          <td><?= $users['role'] == 1 ? 'Admin' : 'User' ?></td>
                                                          <td><?= $users['adress'] ?></td>
                                                          <td>
                                                              <ul>


                                                                  <li>
                                                                      <a href="?action=deleteuser&id=<?= $users['id'] ?>"><i class="ri-delete-bin-line"></i></a>

                                                                      </a>
                                                                  </li>

                                                                  <li>
                                                                      <a href="?action=edituser&id=<?= $users['id'] ?>"> <i class="ri-pencil-line"></i>

                                                                      </a>
                                                                  </li>
                                                              </ul>

                                                          </td>
                                                      </tr>
                                                  <?php endforeach; ?>
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