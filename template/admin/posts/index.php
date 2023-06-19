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
                            <a href="<?= url('admin/posts/create')?>">
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
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>User</th>
                                            <th>View</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($posts as $post){?>
                                                <tr>
                                                    <td><?=$post['id']?></td>
                                                    <td>
                                                    
                                                        <img src="<?=asset($post['image'])?>" class="img-70 rounded-circle" alt="" >
                                                    
                                                    </td>
                                                    <td><?=$post['title']?></td>
                                                    <td><?=$post['category_name']?></td>
                                                    <td><?=$post['user_name']?></td>
                                                    <td><?=$post['view']?></td>
                                                    <td>
                                                    <?php 
                                                    if($post['status']== 'enable'){ ?>
                                                    <button type="button" class="btn btn-pill btn-success btn-xs active">Enable</button>
                                                    <?php }elseif($post['status']== 'disable'){?>
                                                        <button type="button" class="btn btn-pill btn-danger btn-xs active" >Disable</button>
                                                    <?php }?>  
                                                     
                                                                                            
                                                    <?= $post['selected'] == 1 ? '<br><button type="button" class="btn btn-pill btn-primary btn-xs active" >#selected</button>' : ''?>
                                                    <?= $post['breaking_news']== 1 ? '<br> <button type="button" class="btn btn-pill btn-secondary btn-xs active">#breaking_news</button>' : ''?>  
                                                    </td>
                                                    <td>
                                                        <a href="<?=url('admin/posts/breaking-news/'.$post['id'])?>" class="btn btn-pill btn-secondary btn-xs">
                                                            <?=  $post['breaking_news']== 1 ? 'Remove braeking News' : 'Add breaking News'?>
                                                        </a><br>
                                                        <a href="<?=url('admin/posts/selected/'.$post['id'])?>" class="btn btn-pill btn-primary btn-xs">
                                                            <?=  $post['selected']== 1 ? 'Remove selected' : 'Add selected'?>
                                                        </a>
                                                        <ul class="list-inline text-muted">
                                                            <li class="list-inline-item">
                                                                <a href="<?=url('admin/posts/edit/'.$post['id'])?>" class="txt-info"><i class="fa fa-edit"></i></a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="<?=url('admin/posts/delete/'.$post['id'])?>" class="txt-danger"><i class="fa fa-trash-o"></i></a>
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