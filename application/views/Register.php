<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SOCIANOVATION Web Administration</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/admin/baru/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url() ?>assets/admin/baru/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/admin/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>assets/admin/baru/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
 <br>
<br>
<br><br>
<br>
<br><br>
<br>
  <span style="background-color:red;">
    <div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
      <div class="row"><!-- row class is used for grid system in Bootstrap-->
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
          <div class="login-panel panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Registration</h3>
            </div>
            <div class="panel-body">

              <?php
              $error_msg=$this->session->flashdata('error_msg');
              if($error_msg){
                echo $error_msg;
              }
              ?>

              <form role="form" method="post" action="<?php echo base_url('User/register_user'); ?>">
                <fieldset>
                  <div class="form-group">
                    <input class="form-control" placeholder="Nama" name="nama_member" type="text" autofocus>
                  </div>

                  <div class="form-group">
                    <input class="form-control" placeholder="Password" name="password_member" type="password" value="">
                  </div>

                  <div class="form-group">
                    <input class="form-control" placeholder="Alamat" name="alamat_member" type="text" value="">
                  </div>

                  <div class="form-group">
                    <input class="form-control" placeholder="No Telp" name="notelp_member" type="number" value="">
                  </div>

                  <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register"> 

                </fieldset>
              </form>
              <center><b>Already registered ?</b> <br></b><a href="<?php echo base_url('User/login_view'); ?>">Login here</a></center><!--for centered text-->
            </div>
          </div>
        </div>
      </div>
    </div>
    </span>
</body>
</html>