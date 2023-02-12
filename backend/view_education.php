<?php require_once('includes/header.php')?>
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Education</h1>
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
                            $view_edu_query = "SELECT * FROM educations";
                            $view_edu = mysqli_query($db_connect,$view_edu_query);
                            ?>
                        <table class="table table-bordered">
                            <tr>
                                <th>SL</th>
                                <th>Education Title</th>
                                <th>Education Year</th>
                                <th>Education Percentage</th>
                                <th>Status</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                                foreach ($view_edu as $key=>$view_edu) {
                                ?>
                            <tr>
                                <td><?= $key+1?></td>
                                <td><?= $view_edu['edu_title']?></td>
                                <td><?= $view_edu['edu_year']?></td>
                                <td><?= $view_edu['edu_percentage']?></td>
                                <td>
                                    <a href="status_edu.php?id=<?=$view_edu['id']?>"
                                        class="btn btn-<?=$view_edu['status']=='active'?'success':'danger'?>">
                                        <?= $view_edu['status']?>
                                    </a>
                                </td>
                                <td>
                                    <a href="update_edu.php?id=<?=$view_edu['id']?>" class="btn btn-success">Update</a>
                                </td>
                                <td>
                                    <a href="delete_edu.php?id=<?=$view_edu['id']?>" class="btn btn-danger">Delete</a>
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