<?php
require_once('includes/header.php');
?>

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Fact Area</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card widget widget-stats">
                        <div class="card-header">
                            Add Facts:
                        </div>
                        <div class="card-body">
                            <form action="fact_area_post.php" method="POST">
                                <input type="text" class="form-control m-b-md" name="fact_icon" placeholder="Fact Icon">
                                <input type="text" class="form-control m-b-md" name="fact_count" placeholder="Fact Count">
                                <input type="text" class="form-control m-b-md" name="fact_title" placeholder="Fact Title">
                                <select class="form-control m-b-md" name="status">
                                    <option>Active</option>
                                    <option>Deactive</option>
                                </select>
                                <button type="submit" class="btn btn-primary" name="add_fact">Add Service</button>
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