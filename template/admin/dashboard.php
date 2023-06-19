<?php 
require_once BASE_PATH . '/template/admin/layout/header.php';
?>
            <!-- Container-fluid starts -->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Fix Header & Sidebar
                                <small>Universal Admin panel</small>
                            </h3>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item">Menu Options</li>
                                <li class="breadcrumb-item active">Fix Header & Sidebar</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends -->

            <!-- Container-fluid starts -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-primary" role="alert">
                            <h4 class="alert-heading">Tip!</h4>
                            <p>Add the position attribute set to fixed to the page-main-header & page-sidebar class to get this layout.</p>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Title</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="icofont icofont-simple-left "></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <span>Start Here</span>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                    <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;span&gt;Start Here&lt;/span&gt;
    &lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                                </div>
                            </div>
                            <div class="card-footer">
                                <h6 class="mb-0">Card Footer</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends -->

        </div>
<?php 
require_once(BASE_PATH . '/template/admin/layout/footer.php');
?>