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
                            <form class="theme-form" method="POST" action="<?=url('admin/posts/update/'.$post['id'])?>" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="title" class="col-form-label pt-0">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="<?=$post['title']?>">
                                </div>
                                <div class="mb-3 row select2-drpdwn">
                                    <div class="col-sm-6">
                                        <label for="user_id" class="col-form-label pt-0">Category</label>
                                        <select class="js-example-basic-single col-sm-12" name="category_id">
                                            <?php foreach($categories as $category){?>
                                                <option value="<?=$category["id"]?>" <?php  $post['category_id']==$category['id'] ? 'selected' : ''?>><?=$category['name']?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="body" class="col-form-label pt-0">Image</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="mb-3 row select2-drpdwn">
                                    <div class="col-sm-6">
                                        <label for="published_at" class="col-form-label pt-0">Publish Date English</label>
                                        <div class="input-group">
                                            <input type="text" data-language="en" class="datepicker-here form-control digits" aria-describedby="basic-addon2" >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="body" class="col-form-label pt-0">Publish Persian</label>
                                        <input type="hidden" class="form-control" name="published_at" id="persian_date">
                                        <input type="text" class="form-control" id="persian_date_view" value = <?=$post['published_at']?>>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="summary" class="col-form-label pt-0">Summary</label>
                                    <textarea class="form-control" id="summary" name="summary" rows="3"><?=$post['summary']?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="body" class="col-form-label pt-0">Body</label>
                                    <textarea class="form-control" id="body" name="body" rows="5"><?=$post['body']?></textarea>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-sm-6">
                                        <label for="user_id" class="col-form-label pt-0">Status</label>
                                        <div class="mb-3 m-t-15 custom-radio-ml">
                                            <div class="form-check radio radio-success mb-1">
                                                <input class="form-check-input" type="radio" name="status" id="radio55" value="enable" <?=$post['status'] =='enable'?'checked':''?>>
                                                <label class="form-check-label" for="radio55">Enable</label>
                                            </div>
                                            <div class="form-check radio radio-danger mb-0">
                                                <input class="form-check-input" type="radio" name="status" id="radio66" value="disable" <?=$post['status'] =='disable'?'checked':''?>>
                                                <label class="form-check-label" for="radio66">Disable</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="user_id" class="col-form-label pt-0">Options</label>
                                        <div class="mb-3 m-t-15">
                                            <div class="form-check checkbox checkbox-primary mb-0">
                                                <input class="form-check-input" id="checkbox-primary-1" type="checkbox" name="selected" value="1" <?=$post['selected'] ==1?'checked':''?>>
                                                <label class="form-check-label" for="checkbox-primary-1">Selected Post</label>
                                            </div>
                                            <div class="form-check checkbox checkbox-success mb-0">
                                                <input class="form-check-input" id="checkbox-primary" type="checkbox" name="breaking_news" value="1" <?=$post['breaking_news'] == 1 ?'checked':''?>>
                                                <label class="form-check-label" for="checkbox-primary">Breaking News</label>
                                            </div>
                                        </div>
                                    </div>
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