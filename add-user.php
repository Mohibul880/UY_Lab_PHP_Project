<?php
require_once "functions/functions.php";
get_header();
get_sidebar();

$message = ""; // message holder

if(!empty($_POST)){
  
  $Name       = $_POST['Name'];
  $Phone      = $_POST['Phone'];
  $Email      = $_POST['Email'];
  $User_Name  = $_POST['User_Name'];

  $insert = "INSERT INTO users (Name, Phone, Email, User_Name)
             VALUES ('$Name', '$Phone', '$Email', '$User_Name')";
  
  $q = mysqli_query($conn, $insert);

  if($q){
      $message = "<div class='alert alert-success'>User Registration Successful</div>";
  }else{
      $message = "<div class='alert alert-danger'>User Registration Failed: " . mysqli_error($conn) . "</div>";
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

    <!-- SHOW MESSAGE HERE -->
    <?php echo $message; ?>

    <div class="row">
        <div class="col-md-12 ">
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
                          <input type="text" class="form-control form_control" name="Name">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Phone:</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control form_control" name="Phone">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Email<span class="req_star">*</span>:</label>
                        <div class="col-sm-7">
                          <input type="email" class="form-control form_control" name="Email">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Username<span class="req_star">*</span>:</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control form_control" name="User_Name">
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
