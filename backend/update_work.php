<?php 

require_once('includes/header.php');

$id=$_GET['id'];
$select_query = "SELECT * FROM works WHERE id='$id'";
$select = mysqli_query($db_connect, $select_query);
$after_assoc = mysqli_fetch_assoc($select);

?>

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Works</h1>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card widget widget-stats">
                    <div class="card">
                        <div class="card-header">
                            Update Work Info
                        </div>
                        <div class="card-body">
                            <form action="update_work_post.php" method="POST">
                                <input type="hidden" name="id" value="<?=$after_assoc['id']?>">
                                <input type="text" class="form-control m-b-md" name="work_category"
                                    placeholder="Work Category" value="<?=$after_assoc['work_category']?>">
                                <input type="text" class="form-control m-b-md mt-4" name="work_title"
                                    placeholder="Work Title" value="<?=$after_assoc['work_title']?>">
                                <select class="form-control" name="status">
                                    <option value="active" <?=$after_assoc['status']=='active'?'selected':''?>>Active
                                    </option>
                                    <option value="deactive" <?=$after_assoc['status']=='deactive'?'selected':''?>>
                                        Deactive
                                    </option>
                                </select>
                                <button name="update_info" class="btn btn-success mt-4">Update Work</button>
                            </form>
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card widget widget-stats">
                    <div class="card-body">
                        <div class="card-header">
                            Update Work Image
                        </div>

                        <form action="update_work_post.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?=$after_assoc['id']?>">
                            <input type="file" class="form-control m-b-md mt-4" name="work_img" placeholder="Work Image"
                                value="<?=$after_assoc['work_img']?>">
                            <button name="update_img" class="btn btn-success mt-4">Update Work</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>


    </div>
</div>
<?php require_once('includes/footer.php')?>