<?php
require_once('includes/header.php');
?>

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Recent Works</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card widget widget-stats">
                        <div class="card-header">
                            Add Recent Work Info:
                        </div>
                        <div class="card-body">
                            <form action="recent_work_post.php" method="POST" enctype="multipart/form-data">
                                <input type="text" class="form-control m-b-md" name="work_category" placeholder="Add Category">
                                <input type="text" class="form-control m-b-md" name="work_title" placeholder="Add Title">
                                <select class="form-control m-b-md" name="status">
                                    <option>Active</option>
                                    <option>Deactive</option>
                                </select>
                                <input type="file" class="form-control m-b-md" name="work_img" placeholder="Add Work Photo">
                                <button type="submit" class="btn btn-primary" name="add_work_info">Add Work Info</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('includes/footer.php');
?>