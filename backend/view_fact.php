<?php require_once('includes/header.php')?>
    <div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Fact</h1>
                    </div>
                </div>
            </div>
             

                <div class="col-xl-12">
                    <div class="card widget widget-stats">
                        <div class="card-body">
                            <div class="card-header">
                               View Facts
                            </div>
                            <?php
                            $view_fact_query = "SELECT * FROM facts";
                            $view_fact = mysqli_query($db_connect,$view_fact_query);
                            ?>
                            <table class="table table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <th>Fact Icon</th>
                                    <th>Fact Count</th>
                                    <th>Fact Title</th>
                                    <th>Status</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                                <?php
                                foreach ($view_fact as $key=>$view_f) {
                                ?>
                                <tr>
                                    <td><?= $key+1?></td>
                                    <td><?= $view_f['fact_icon']?></td>
                                    <td><?= $view_f['fact_count']?></td>
                                    <td><?= $view_f['fact_title']?></td>
                                    <td><?= $view_f['status']?></td>
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