<?php require_once('includes/header.php')?>
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Recnt Works</h1>
                    </div>
                </div>
            </div>


            <div class="col-xl-12">
                <div class="card widget widget-stats">
                    <div class="card-body">
                        <div class="card-header">
                            View Works
                        </div>
                        <?php
                            $view_work_query = "SELECT * FROM works";
                            $view_work = mysqli_query($db_connect, $view_work_query);
                            ?>
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Work Category</th>
                                <th>Work Title</th>
                                <th>Work Image</th>
                                <th>Status</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                                foreach ($view_work as $key=>$view_w) {
                                ?>
                            <tr>
                                <td><?= $key+1?></td>
                                <td><?= $view_w['work_category']?></td>
                                <td><?= $view_w['work_title']?></td>
                                <td><?= $view_w['work_img']?></td>
                                <td><?= $view_w['status']?></td>
                                <td><a href="update_work.php?id=<?=$view_w['id']?>" class="btn btn-success">Update</a>
                                </td>
                                <td><a href="delete_work.php?id=<?=$view_w['id']?>" class="btn btn-danger">Delete</a>
                                </td>
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