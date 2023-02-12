<?php
require_once('includes/header.php');
?>

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Services</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card widget widget-stats">
                        <div class="card-header">
                            Add Service:
                        </div>
                        <div class="card-body">
                            <form action="add_service_post.php" method="POST">
                                <input type="text" class="form-control m-b-md" name="service_title" placeholder="Service Title">
                                <textarea class="form-control m-b-md" rows="5" name="service_description"></textarea>
                                <input type="text" class="form-control m-b-md" name="service_icon" placeholder="Service Icon">
                                <select class="form-control m-b-md" name="status">
                                    <option>Active</option>
                                    <option>Deactive</option>
                                </select>
                                <button type="submit" class="btn btn-primary" name="add_service">Add Service</button>
                            </form>
                        </div>
                    </div>
                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('includes/footer.php');
?>