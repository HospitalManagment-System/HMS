<!doctype html>
<html>
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
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="<?php echo  base_url("User/dashboard")?>"><img class="logo" src="<?php echo base_url("assests/icons/logo.png");?>"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample04">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-md-0">
      <input class="form-control" type="text" placeholder="Search">
    </form>
  </div>
</nav>

        </body>
</html>