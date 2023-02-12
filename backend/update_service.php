<?php 

require_once('includes/header.php');

$id=$_GET['id'];
$select_query = "SELECT * FROM services WHERE id='$id'";
$select = mysqli_query($db_connect, $select_query);
$after_assoc = mysqli_fetch_assoc($select);


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

            <div class="col-xl-6">
                <div class="card widget widget-stats">
                    <div class="card-body">
                        <div class="card-header">
                            Update Service
                        </div>

                        <form action="update_service_post.php" method="POST">
                            <input type="hidden" name="id" value="<?=$after_assoc['id']?>">
                            <input type="text" class="form-control m-b-md" name="service_title"
                                placeholder="Service Title" value="<?=$after_assoc['service_title']?>">
                            <input type="text" class="form-control m-b-md mt-4" name="service_description"
                                placeholder="Service Description" value="<?=$after_assoc['service_description']?>">
                            <input type="text" class="form-control m-b-md mt-4" name="service_icon"
                                placeholder="Service Icon" value="<?=$after_assoc['service_icon']?>">
                            <select class="form-control" name="status">
                                <option value="active" <?=$after_assoc['status']=='active'?'selected':''?>>Active
                                </option>
                                <option value="deactive" <?=$after_assoc['status']=='deactive'?'selected':''?>>Deactive
                                </option>
                            </select>
                            <button class="btn btn-success mt-4">Update Service</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>


    </div>
</div>
<?php require_once('includes/footer.php')?>