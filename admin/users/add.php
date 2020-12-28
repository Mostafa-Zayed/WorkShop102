<?php include_once '../../app.php'; ?>
<?php include_once ADMIN_INCLUDES_PATH.'header.php'; ?>
<div class="be-content">
  <div class="main-content container-fluid">
    <div class="row">
    <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading" class="text-center"> <h2 class="text-center">Add User </h4>
                </div>
                <div class="panel-body">
                  <div class="col-md-offset-2 col-md-8">
                  <form action="#" method="post">
                  <div class="login-form">
                    <div class="form-group">
                      <input id="name" type="text" placeholder="Full Name" autocomplete="off" class="form-control" name="full_name">
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
                <!--
                <div role="alert" class="alert alert-contrast alert-danger alert-dismissible">
                    <div class="icon"><span class="mdi mdi-close-circle-o"></span></div>
                    <div class="message">
                      <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button>Error
                    </div>
                </div>
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
 <?php include_once ADMIN_INCLUDES_PATH.'footer.php'; ?>>
