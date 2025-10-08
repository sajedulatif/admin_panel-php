<!-- Header area Start -->
<?php
require_once 'functions/functions.php';


    $user_id = $_GET['edit'];
    $select = "SELECT * FROM users WHERE user_id='$user_id'";

    $query = mysqli_query($conn, $select);
    $info = mysqli_fetch_array($query);


if(!empty($_POST)){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    

    $update = "UPDATE users SET user_name='$name', user_phone='$phone', user_email='$email', username='$username' WHERE user_id='$user_id'";
    
    if(mysqli_query($conn, $update)){
       header('Location: all-user.php');
    }
    
    
      
   
  }  

get_header();
get_sidebar();
?>
<!-- Header area End -->

<!-- User Edit form part start -->
    
                    <div class="row">
                        <div class="col-md-12 ">
                            <form method="post" action="">
                                <div class="card mb-3">
                                  <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-8 card_title_part">
                                            <i class="fab fa-gg-circle"></i>Update User Information
                                        </div>  
                                        <div class="col-md-4 card_button_part">
                                            <a href="all-user.php" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All User</a>
                                        </div>  
                                    </div>
                                  </div>
                                  <div class="card-body">
                                      <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label col_form_label">Name<span class="req_star">*</span>:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control form_control" id="" name="name" value="<?= $info ['user_name']; ?>">
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label col_form_label">Phone:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control form_control" id="" name="phone" value="<?= $info ['user_phone']; ?>">
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label col_form_label">Email<span class="req_star">*</span>:</label>
                                        <div class="col-sm-7">
                                          <input type="email" class="form-control form_control" id="" name="email" value="<?= $info ['user_email']; ?>">
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label col_form_label">Username<span class="req_star">*</span>:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control form_control" id="" name="username" value="<?= $info ['username']; ?>">
                                        </div>
                                      </div>
                                    
                                      <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label col_form_label">User Role<span class="req_star">*</span>:</label>
                                        <div class="col-sm-4">
                                          <select class="form-control form_control" id="" name="">
                                            <option>Select Role</option>
                                            <option value="">Superadmin</option>
                                            <option value="">Admin</option>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label col_form_label">Photo:</label>
                                        <div class="col-sm-4">
                                          <input type="file" class="form-control form_control" id="" name="">
                                        </div>
                                      </div>
                                  </div>
                                  <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-sm btn-dark">UPDATE</button>
                                  </div>  
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- User Edit form part End -->

   <!-- Footer Area Start  -->
<?php
get_footer();
?>
    <!-- Footer Area End  -->