<?php 

require_once('includes/header.php');

$id=$_GET['id'];
$select_query = "SELECT * FROM educations WHERE id='$id'";
$select = mysqli_query($db_connect, $select_query);
$after_assoc = mysqli_fetch_assoc($select);


?>
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
                <div class="col-xl-6">
                    <div class="card widget widget-stats">
                        <div class="card-body">
                            <div class="card-header">
                               Update Your Education
                            </div>
                            
                            <form action="update_edu_post.php" method="POST">
                                <input type="hidden" name="id" value="<?=$after_assoc['id']?>">
                                <input type="text" class="form-control m-b-md" name="edu_title" placeholder="Education Title" value="<?=$after_assoc['edu_title']?>">
                                <input type="text" class="form-control m-b-md mt-4" name="edu_year" placeholder="Education Year" value="<?=$after_assoc['edu_year']?>">
                                <input type="text" class="form-control m-b-md mt-4" name="edu_percentage" placeholder="Education Percentage" value="<?=$after_assoc['edu_percentage']?>">
                               <select class="form-control" name="status">
                                <option value="active" <?=$after_assoc['status']=='active'?'selected':''?>>Active</option>
                                <option value="deactive" <?=$after_assoc['status']=='deactive'?'selected':''?>>Deactive</option>
                               </select>
                                <button class="btn btn-success mt-4">Update Education</button>
                            </form>
                        </div>
                    </div>
                </div>
<!-- Photo Upload  -->
             

            </div>


        </div>
    </div>
<?php require_once('includes/footer.php')?>