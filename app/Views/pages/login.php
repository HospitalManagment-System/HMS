<head>
<link rel="stylesheet" href="<?php echo base_url("assests/css/bootstrap.min.css");?>" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url("assests/css/bootstrap.css");?>" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url("assests/css/bootstrap-grid.min.css");?>" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url("assests/css/bootstrap-grid.css");?>" crossorigin="anonymous">
<script src="<?php echo base_url("assests/js/jquery-3.3.1.min.js");?>"></script>
<script src="<?php echo base_url("assests/js/jquery.js");?>"></script>
<script src="<?php echo base_url("assests/js/bootstrap.min.js");?>"></script>
<script src="<?php echo base_url("assests/js/bootstrap.js");?>"></script>
<script src="<?php echo base_url("assests/js/custom.js");?>"></script>
</head>


<form action="<?php echo base_url("Login/check_login");?>" method="POST">

   
<a class="navbar-brand" href="#"><img class="main-logo" src="<?php echo base_url("assests/icons/logo_dark.png");?>"></a>
 
 
 
        <div class="mx-auto my-manual col-4">
          <div class="header" style="text-align: center;">
            <h3>Login</h3>
          </div>
          <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>
          <div class="field-group">
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
              </label>
            </div>
            <button type="submit" id="login" name="login" class="btn btn-primary">LOGIN</button>
          </div>

     
 

    </form>