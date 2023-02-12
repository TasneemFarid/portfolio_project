<?php require_once('includes/header.php')?>
    <div class="app-content">
    <div class="content-wrapper">
    <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Banner</h1>
                    </div>
                </div>
            </div>
             

                <div class="col-xl-12">
                    <div class="card widget widget-stats">
                        <div class="card-body">
                            <div class="card-header">
                               View Banner Info
                            </div>
                            <?php
                            $view_banner_query = "SELECT * FROM banners";
                            $view_banner = mysqli_query($db_connect, $view_banner_query);
                            ?>
                            <table class="table table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <th>Banner Title</th>
                                    <th>Banner Description</th>
                                    <th>Banner Image</th>
                                    <th>Status</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                                <?php
                                foreach ($view_banner as $key=>$view_b) {
                                ?>
                                <tr>
                                    <td><?= $key+1?></td>
                                    <td><?= $view_b['banner_title']?></td>
                                    <td><?= $view_b['banner_description']?></td>
                                    <td><?= $view_b['banner_img']?></td>
                                    <td><?= $view_b['status']?></td>
                                    <td><button class="btn btn-success">Update</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                                <?php }?>
                            </table>
                            
                        </div>
                    </div>
                </div>

             

            </div>


        </div>
    </div>
<?php require_once('includes/footer.php')?>