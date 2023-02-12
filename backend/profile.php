<?php
require_once('includes/header.php');
?>

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Profile</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card widget widget-stats">
                        <form action="profile_post.php" method="POST">
                            <div class="card-header">
                                Name:
                            </div>
                            <div class="card-body">
                                <input type="text" class="form-control m-b-md" name="change_name" value="<?php
                                                                                                            if (isset($_SESSION['db_name'])) {
                                                                                                                echo $_SESSION['db_name'];
                                                                                                            }
                                                                                                            ?>">
                                <button type="submit" class="btn btn-primary mb-5" name="name_cng_btn">Change Name</button>
                            </div>
                        </form>
                    </div>
                    <?php
                    if (isset($_SESSION['name_update'])) {
                    ?>
                        <div class="alert alert-success">
                            <?= $_SESSION['name_update']; ?>
                        </div>
                    <?php
                    }
                    unset($_SESSION['name_update']);
                    ?>
                </div>
                <div class="col-lg-6">
                    <div class="card widget widget-stats">
                        <form action="profile_post.php" method="POST">
                            <div class="card-header">
                                Bio:
                            </div>
                            <div class="card-body">
                                <textarea class="form-control m-b-md" name="bio" rows="3"></textarea>
                                <button type="submit" class="btn btn-primary" name="bio_add">Add Bio</button></button>
                            </div>
                        </form>
                    </div>
                    <?php
                    if (isset($_SESSION['name_update'])) {
                    ?>
                        <div class="alert alert-success">
                            <?= $_SESSION['name_update']; ?>
                        </div>
                    <?php
                    }
                    unset($_SESSION['name_update']);
                    ?>
                </div>
                <div class="col-lg-6">
                    <div class="card widget widget-stats">
                        <form action="profile_post.php" method="POST" enctype="multipart/form-data">
                            <div class="card-header">
                                Upload Profile Picture:
                            </div>
                            <div class="card-header text-center">
                                <img src="uploads/profile_photo/<?=$get_default_img?>" alt="" width="100">
                            </div>
                            <div class="card-body">
                                <input type="file" class="form-control m-b-md" name="img_up">
                                <button type="submit" class="btn btn-primary" name="img_up_btn">Upload</button>
                            </div>
                            <?php
                                if (isset($_SESSION['img_upload'])) {
                                ?>
                                    <div class="alert alert-primary">
                                        <?= $_SESSION['img_upload']; ?>
                                    </div>
                                <?php
                                }
                                unset($_SESSION['img_upload']);
                                ?>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card widget widget-stats">
                        <form action="profile_post.php" method="POST">
                            <div class="card-header">
                                Change Password:
                            </div>
                            <div class="card-body">
                                <input type="password" class="form-control m-b-md" name="old_password" placeholder="Enter Old Password" value="<?php
                if(isset($_SESSION['old_pass_input'])) {
                    echo $_SESSION['old_pass_input'];
                }
                unset($_SESSION['old_pass_input']);
                ?>">

                                <?php
                                if (isset($_SESSION['old_pass_error'])) {
                                ?>
                                    <div class="alert alert-danger">
                                        <?= $_SESSION['old_pass_error']; ?>
                                    </div>
                                <?php
                                }
                                unset($_SESSION['old_pass_error']);
                                ?>

                                <input type="password" class="form-control m-b-md" name="new_password" placeholder="Enter New Password" value="<?php
                if(isset($_SESSION['new_pass_input'])) {
                    echo $_SESSION['new_pass_input'];
                }
                unset($_SESSION['new_pass_input']);
                ?>">

                                <?php
                                if (isset($_SESSION['new_pass_error'])) {
                                ?>
                                    <div class="alert alert-danger">
                                        <?= $_SESSION['new_pass_error']; ?>
                                    </div>
                                <?php
                                }
                                unset($_SESSION['new_pass_error']);
                                ?>

                                <input type="password" class="form-control m-b-md" name="confirm_password" placeholder="Confirm New Password" value="<?php
                if(isset($_SESSION['con_pass_input'])) {
                    echo $_SESSION['con_pass_input'];
                }
                unset($_SESSION['con_pass_input']);
                ?>">

                                <?php
                                if (isset($_SESSION['con_pass_error'])) {
                                ?>
                                    <div class="alert alert-danger">
                                        <?= $_SESSION['con_pass_error']; ?>
                                    </div>
                                <?php
                                }
                                unset($_SESSION['con_pass_error']);
                                ?>

                                <button type="submit" class="btn btn-primary" name="pass_cng_btn">Change Password</button>

                                <?php
                                if (isset($_SESSION['pass_change_success'])) {
                                ?>
                                    <div class="alert alert-success mt-4">
                                        <?= $_SESSION['pass_change_success']; ?>
                                    </div>
                                <?php
                                }
                                unset($_SESSION['pass_change_success']);
                                ?>

                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<?php
require_once('includes/footer.php');
?>