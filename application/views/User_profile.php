<?php
$id_member=$this->session->userdata('id_member');
 
if(!$id_member){
 
  redirect('User/login_view');
}
 
 ?>
 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Profile Dashboard-CodeIgniter Login Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
 
<div class="container">
  <div class="row">
    <div class="col-md-4">
 
      <table class="table table-bordered table-striped">
 
 
        <tr>
          <th colspan="2"><h4 class="text-center">User Info</h3></th>
 
        </tr>
          <tr>
            <td>Nama</td>
            <td><?php echo $this->session->userdata('nama_member'); ?></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><?php echo $this->session->userdata('password_member');  ?></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td><?php echo $this->session->userdata('alamat_member');  ?></td>
          </tr>
          <tr>
            <td>No Telp</td>
            <td><?php echo $this->session->userdata('notelp_member');  ?></td>
          </tr>
      </table>
 
 
    </div>
  </div>
<a href="<?php echo base_url('User/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
</div>
  </body>
</html>