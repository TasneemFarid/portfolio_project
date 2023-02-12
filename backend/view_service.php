<?php require_once('includes/header.php')?>
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Service</h1>
                    </div>
                </div>
            </div>

            <!-- Photo Upload  -->
            <div class="col-xl-12">
                <div class="card widget widget-stats">
                    <div class="card-body">
                        <div class="card-header">
                            View Service
                        </div>
                        <?php
                            $view_service_query = "SELECT * FROM services";
                            $view_service = mysqli_query($db_connect,$view_service_query);
                            ?>
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Service Title</th>
                                <th>Service Description</th>
                                <th>Service Icon</th>
                                <th>Status</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                                foreach ($view_service as $key=>$view_s) {
                            ?>
                            <tr>
                                <td><?= $key+1?></td>
                                <td><?= $view_s['service_title']?></td>
                                <td><?= $view_s['service_description']?></td>
                                <td><?= $view_s['service_icon']?></td>
                                <td><?= $view_s['status']?></td>
                                <td>
                                    <a href="update_service.php?id=<?=$view_s['id']?>"
                                        class="btn btn-success">Update</a>
                                </td>
                                <td>
                                    <a href="delete_service.php?id=<?=$view_s['id']?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php }?>
                        </table>

                    </div>
                </div>
            </div>
            <!-- Photo Upload  -->


        </div>


    </div>
</div>
<?php require_once('includes/footer.php')?>