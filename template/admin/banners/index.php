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
                            <a href="<?= url('admin/banners/create')?>">
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
                                            <th>url</th>
                                            <th>Image</th>  
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($banners as $banner){?>
                                                <tr>
                                                    <td><?=$banner['id']?></td>
                                                    <td><?=$banner['url']?></td>
                                                    <td>
                                                        <img src="<?=asset($banner['image'])?>" alt="" style="width: 128px; height: 72px;">
                                                    </td>
                                                    <td>
                                                        <ul class="list-inline text-muted">
                                                            <li class="list-inline-item">
                                                                <a href="<?=url('admin/banners/edit/'.$banner['id'])?>" class="txt-info"><i class="fa fa-edit"></i></a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="<?=url('admin/banners/delete/'.$banner['id'])?>" class="txt-danger"><i class="fa fa-trash-o"></i></a>
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