<?php
require_once "functions/functions.php";
get_header();
get_sidebar();

$message = ""; // message holder

if(!empty($_POST)){
  
  $user_name       = $_POST['name'];
  $user_phone      = $_POST['phone'];
  $user_email      = $_POST['email'];
  $user_username  = $_POST['user_username'];
  $user_pass       = $_POST['pass'];
  $user_cpass       = $_POST['cpass'];
  $insert = "INSERT INTO users (user_name, user_phone, user_email, user_username,user_pass,user_cpass)
             VALUES ('$user_name', '$user_phone', '$user_email', '$user_username','$user_pass)";
  
  $q = mysqli_query($conn, $insert);

 
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

    <!-- SHOW MESSAGE HERE -->
    <?php echo $message; ?>

    <div class="row">
        <div class="col-md-12 ">
          <?php
          if(!empty($user_name)){

          }else{
            echo "<div class='alert alert-danger' >
          Plese Enter Your Nmae
          </div>";
          }
          ?>
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
                          <input type="text" class="form-control form_control" name="user_name">
                        </div>
                      </div>
                      <div class="row mb-3"> <label class="col-sm-3 col-form-label col_form_label">Password<span class="req_star">*</span>:</label> 
                      <div class="col-sm-7"> 
                        <input type="password" class="form-control form_control" id="" name="pass"> 
                      </div> 
                    </div> 
                    <div class="row mb-3"> <label class="col-sm-3 col-form-label col_form_label">Confirm-Password<span class="req_star">*</span>:</label>
                     <div class="col-sm-7"> 
                      <input type="password" class="form-control form_control" id="" name="cpass">
                     </div> 
                    </div> 
                     <div class="row mb-3"> <label class="col-sm-3 col-form-label col_form_label">User Role<span class="req_star">*</span>:</label> 
                     <div class="col-sm-4"> <select class="form-control form_control" id="" name=""> 
                      <option>Select Role</option> <option value="">Superadmin</option> <option value="">Admin</option> </select> 
                    </div> 
                  </div> <div class="row mb-3"> <label class="col-sm-3 col-form-label col_form_label">Photo:</label> 
                  <div class="col-sm-4"> <input type="file" class="form-control form_control" id="" name=""> 
                </div> 
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
