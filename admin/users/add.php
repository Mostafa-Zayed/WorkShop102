<?php include_once '../../config.php'; ?>
<?php include_once CORE_PATH.'connect.php'; ?>
<?php include_once CORE_PATH.'functions.php'; ?>
<?php include_once ADMIN_INCLUDES_PATH.'header.php'; ?>
<?php 
$errors = [];
if(isset($_POST['add'])) {
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Validation name 
  if(empty($name)) {
    $errors[] = '<strong>Name</strong> is required';
  } elseif(strlen($name) < 3) {
    $errors[] = '<strong>Name</strong> Must be greate than 2 chars';
  } elseif(strlen($name) > 100) {
    $errros[] = 'Name must be less than 101';
  }

}
?>
<div class="be-content">
  <div class="main-content container-fluid">
    <div class="row">
    <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading" class="text-center"> <h2 class="text-center">Add User </h4>
                </div>
                <div class="panel-body">
                  <div class="col-md-offset-2 col-md-8">
                  <form action="add.php" method="post">
                  <div class="login-form">
                    <div class="form-group">
                      <input id="name" type="text" placeholder="Full Name" autocomplete="off" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                      <input id="email" type="email" placeholder="Email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                      <input id="password" type="password" placeholder="Password" class="form-control" name="password">
                    </div>
                    <div class="form-group row login-submit">
                      <div class="col-xs-12">
                        <button  type="submit" class="btn btn-primary btn-xl" name="add">New User</button>
                      </div>
                    </div>
                  </div>
                </form>
                <?php if(! empty($errors)) : ?>
                  <?php foreach($errors as $error) : ?>
                <div role="alert" class="alert alert-contrast alert-danger alert-dismissible">
                    <div class="icon"><span class="mdi mdi-close-circle-o"></span></div>
                    <div class="message">
                      <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><?=$error;?>
                    </div>
                </div>
              <?php endforeach; ?>
              <?php endif; ?>
              <!--
                <div role="alert" class="alert alert-contrast alert-success alert-dismissible">
                    <div class="icon"><span class="mdi mdi-check"></span></div>
                    <div class="message">
                      <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><strong>Good!</strong> Better check yourself, you're not looking too good.
                    </div>
                  </div>
                -->
              </div>
                </div>
              </div>
            </div>
  </div>
  </div> <!-- end content fluid  containter -->
</div> <!-- end content -->
 <?php include_once ADMIN_INCLUDES_PATH.'footer.php'; ?>
