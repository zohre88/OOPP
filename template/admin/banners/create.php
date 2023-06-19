<?php 
require_once BASE_PATH . '/template/admin/layout/header.php';
?>
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>Default Forms
                    <small>Universal Admin panel</small>
                </h3>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-xl-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="theme-form" method="POST" action="<?=url('admin/banners/store')?>" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="title" class="col-form-label pt-0">URL</label>
                                    <input type="text" class="form-control" id="title" name="url">
                                </div>
                                <div class="mb-3">
                                    <label for="body" class="col-form-label pt-0">Image</label>
                                    <input type="file" class="form-control" name="image"> 
                                </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                        </form>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</div>
<?php 
require_once(BASE_PATH . '/template/admin/layout/footer.php');
?>