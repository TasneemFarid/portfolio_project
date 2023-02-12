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
                <div class="col-xl-6">
                    <div class="card widget widget-stats">
                        <div class="card-body">
                            <div class="card-header">
                               Add Your Education
                            </div>
                            
                            <form action="add_education_post.php" method="POST">
                                <input type="text" class="form-control m-b-md" name="edu_title" placeholder="Education Title">
                                <input type="text" class="form-control m-b-md mt-4" name="edu_year" placeholder="Education Year">
                                <input type="text" class="form-control m-b-md mt-4" name="edu_percentage" placeholder="Education Percentage">
                               <select class="form-control" name="status">
                                <option value="active">Active</option>
                                <option value="deactive">Deactive</option>
                               </select>
                                <button type="submit" class="btn btn-success mt-4">Add Education</button>
                            </form>
                        </div>
                    </div>
                </div>
<!-- Photo Upload  -->
             

            </div>


        </div>
    </div>
<?php require_once('includes/footer.php')?>