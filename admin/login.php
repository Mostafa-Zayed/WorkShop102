<?php include_once '../app.php'; ?>
<?php include_once ADMIN_INCLUDES_PATH.'top_header.php'; ?>
  <body class="be-splash-screen">
    <div class="be-wrapper be-login">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading"><img src="assets/img/logo-xx.png" alt="logo" width="102" height="27" class="logo-img"><span class="splash-description">Please enter your admin information.</span></div>
              <div class="panel-body">
                <form action="index.html" method="post">
                  <div class="form-group">
                    <input id="email" type="text" placeholder="Email" autocomplete="off" class="form-control" name="email">
                  </div>
                  <div class="form-group">
                    <input id="password" type="password" placeholder="Password" class="form-control" name="password">
                  </div>      
                  <div class="form-group login-submit">
                    <button  type="submit" class="btn btn-primary btn-xl" name="login">Login</button>
                  </div>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
<?php include_once ADMIN_INCLUDES_PATH.'footer.php'; ?>