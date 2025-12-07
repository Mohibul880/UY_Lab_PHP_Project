<?php
require_once "functions/functions.php";
get_header();
get_sidebar();

$message = ""; 

if(!empty($_POST)){

  $user_name       = $_POST['name'];
  $user_phone      = $_POST['phone'];
  $user_email      = $_POST['email'];
  $user_username   = $_POST['user_username'];
  $user_pass       = $_POST['pass'];
  $user_cpass      = $_POST['cpass'];

  // ========================
  // VALIDATION START
  // ========================
  if(!empty($user_name)){
      if(!empty($user_phone)){
          if(!empty($user_email)){
              if(!empty($user_username)){
                  if(!empty($user_pass)){
                      if(!empty($user_cpass)){
                          if($user_pass == $user_cpass){

                              // ========================
                              // INSERT INTO DATABASE
                              // ========================
                              $insert = "INSERT INTO users (user_name, user_phone, user_email, user_username, user_pass, user_cpass)
                                         VALUES ('$user_name', '$user_phone', '$user_email', '$user_username', '$user_pass', '$user_cpass')";

                              if(mysqli_query($conn, $insert)){
                                  $message = "<div class='alert alert-success'>Registration Successful!</div>";
                              }else{
                                  $message = "<div class='alert alert-danger'>Database Error!</div>";
                              }

                          }else{
                              $message = "<div class='alert alert-danger'>Password & Confirm Password do not match!</div>";
                          }
                      }else{
                          $message = "<div class='alert alert-danger'>Please enter your Confirm Password.</div>";
                      }
                  }else{
                      $message = "<div class='alert alert-danger'>Please enter your Password.</div>";
                  }
              }else{
                  $message = "<div class='alert alert-danger'>Please enter your Username.</div>";
              }
          }else{
              $message = "<div class='alert alert-danger'>Please enter your Email.</div>";
          }
      }else{
          $message = "<div class='alert alert-danger'>Please enter your Phone.</div>";
      }
  }else{
      $message = "<div class='alert alert-danger'>Please enter your Name.</div>";
  }

}
?>

<div class="col-md-10 content">
    <div class="row">
        <div class="col-md-12 breadcumb_part">
            <div class="bread">
                <ul>
                  <li><a href=""><i class="fas fa-home"></i>Home</a></li>
                  <li><a href=""><i class="fas fa-angle-double-right"></i>Dashboard</a></li>                             
                </ul>
            </div>
        </div>
    </div>

    <!-- SHOW MESSAGE -->
    <?php echo $message; ?>

    <div class="row">
        <div class="col-md-12">
            <form method="post" action="">
                <div class="card mb-3">
                  <div class="card-header">
                    <div class="row">
                        <div class="col-md-8 card_title_part">
                            <i class="fab fa-gg-circle"></i>User Registration
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
                          <input type="text" class="form-control form_control" name="name">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Phone:</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control form_control" name="phone">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Email<span class="req_star">*</span>:</label>
                        <div class="col-sm-7">
                          <input type="email" class="form-control form_control" name="email">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Username<span class="req_star">*</span>:</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control form_control" name="user_username">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Password<span class="req_star">*</span>:</label>
                        <div class="col-sm-7">
                          <input type="password" class="form-control form_control" name="pass">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Confirm Password<span class="req_star">*</span>:</label>
                        <div class="col-sm-7">
                          <input type="password" class="form-control form_control" name="cpass">
                        </div>
                      </div>

                      <!-- DO NOT EDIT THESE -->
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">User Role<span class="req_star">*</span>:</label>
                        <div class="col-sm-4">
                          <select class="form-control form_control" name="">
                            <option>Select Role</option>
                            <option value="">Superadmin</option>
                            <option value="">Admin</option>
                          </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Photo:</label>
                        <div class="col-sm-4">
                          <input type="file" class="form-control form_control" name="">
                        </div>
                      </div>

                  </div>

                  <div class="card-footer text-center">
                    <button type="submit" class="btn btn-sm btn-dark">REGISTRATION</button>
                  </div>

                </div>
            </form>
        </div>
    </div>
</div>

<?php get_footer(); ?>
