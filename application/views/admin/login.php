<div class="container">
  <div class="row">
  <div class="col-md-6 offset-md-3"> 

  <!-- <p style="color: red"><i><?php //echo $this->session->flashdata('pesan');?></i></p> -->
  <div class="shadow-lg p-3 mb-2 bg-info text-white mt-5 rounded-lg">
    <p class="d-flex justify-content-center font-weight-bold">LOGIN ADMIN</p>
    <?php if($this->session->flashdata('pesan')): ?>
         <div class="row mt-3">
          <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <?php echo $this->session->flashdata('pesan'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div> 
       <?php endif; ?>
  <div class="col-12 mt-3">
    <form action="<?php echo base_url(); ?>login/auth" method="post">
      <div class="form-group">
        <label for="Username">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Username" autofocus="">
      </div>
      <div class="form-group">
        <label for="Password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-light">Login</button>
    </form>
  </div>
</div>
</div>
</div>
</div>