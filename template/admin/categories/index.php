<?php 
require_once BASE_PATH . '/template/admin/layout/header.php';
?>
 <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Basic DataTables
                                <small>Universal Admin panel</small>
                            </h3>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?= url('admin/categories/create')?>">
                              <button type="button" class="btn btn-pill btn-success btn-air-success btn-sm pull-right" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="btn btn-success"> Create</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <!--Zero Configuration  Starts -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-1" class="display">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>name</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($categories as $category){?>
                                                <tr>
                                                    <td><?=$category['id']?></td>
                                                    <td><?=$category['name']?></td>
                                                    <td>
                                                        <ul class="list-inline text-muted">
                                                            <li class="list-inline-item">
                                                                <a href="<?=url('admin/categories/edit/'.$category['id'])?>" class="txt-info"><i class="fa fa-edit"></i></a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="<?=url('admin/categories/delete/'.$category['id'])?>" class="txt-danger"><i class="fa fa-trash-o"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Zero Configuration  Ends -->

                </div>
            </div>
<?php 
require_once(BASE_PATH . '/template/admin/layout/footer.php');
?>