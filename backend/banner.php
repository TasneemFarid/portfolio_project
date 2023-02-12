<?php
require_once('includes/header.php');
?>

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
            
            <div class="row">
                <div class="col-lg-8">
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
                                    <th>SL</th>
                                    <th>Banner Title</th>
                                    <th>Banner Description</th>
                                    <th>Banner Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                <?php
                                foreach ($view_banner as $key=>$view_b) {
                                ?>
                                <tr>
                                    <td><?= $key+1?></td>
                                    <td><?= $view_b['banner_subtitle']?></td>
                                    <td><?= $view_b['banner_title']?></td>
                                    <td><?= $view_b['banner_description']?></td>
                                    <td>
                                        <a href="banner_status.php?id=<?=$view_b['id']?>" class="btn btn-<?=($view_b['status']==1?'success':'danger')?>"><?=($view_b['status']==1?'Active':'Deactive')?></a>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-success">Update</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php }?>
                            </table>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card widget widget-stats">
                        <div class="card-header">
                            Add Banner Info:
                        </div>
                        <div class="card-body">
                            <form action="banner_post.php" method="POST">
                                <input type="text" class="form-control m-b-md" name="banner_subtitle" placeholder="Add Sub-Title">
                                <input type="text" class="form-control m-b-md" name="banner_title" placeholder="Add Name">
                                <input type="text" class="form-control m-b-md" name="banner_description" placeholder="Add Description">
                                <button type="submit" class="btn btn-primary" name="add_banner_info">Add Banner Info</button>
                            </form>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-8">
                    <div class="card widget widget-stats">
                        <div class="card-body">
                            <div class="card-header">
                               View Banner Info
                            </div>
                            <?php
                            $view_banner_img = "SELECT * FROM banner_images";
                            $view_img = mysqli_query($db_connect, $view_banner_img);
                            ?>
                            <table class="table table-bordered">
                                <tr>
                                    <th>SL</th>
                                    <th>Banner Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                <?php
                                foreach ($view_img as $key=>$view_i) {
                                ?>
                                <tr>
                                    <td><?= $key+1?></td>
                                    <td><?= $view_i['id']?></td>
                                    <td><?= $view_i['banner_image']?></td>
                                    <td>
                                        <a href="bannerimg_status.php?id=<?=$view_i['id']?>" class="btn btn-<?=($view_i['status']==1?'success':'danger')?>"><?=($view_i['status']==1?'Active':'Deactive')?></a>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-success">Update</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php }?>
                            </table>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card widget widget-stats">
                        <div class="card-header">
                            Add Banner Image:
                        </div>
                        <div class="card-body">
                            <form action="banner_post.php" method="POST" enctype="multipart/form-data">
                                <input type="file" class="form-control m-b-md" name="banner_image" placeholder="Add Banner Image">
                                <button type="submit" class="btn btn-primary" name="add_banner_image">Add Banner Image</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
              
        </div>
    </div>
</div>

<?php
require_once('includes/footer.php');
?>

<?php if (isset($_SESSION['msg'])) { ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '<?=$_SESSION['msg']?>'
        })
    </script>
<?php } unset($_SESSION['msg'])?>


<?php if (isset($_SESSION['success'])) { ?>
    <script>
       Swal.fire({
        position: 'bottom-end',
        icon: 'success',
        title: '<?=$_SESSION['success']?>',
        showConfirmButton: false,
        timer: 1500
})
    </script>
<?php } unset($_SESSION['success'])?>