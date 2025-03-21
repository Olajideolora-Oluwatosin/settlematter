<?php require APPROOT . '/views/inc/header.php'; ?>
<!-- Page Sidebar Ends-->
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-sm-6">
          <h3>Update Password</h3>
          <?php
          $currentDate =  new DateTime();
          ?>
          <small class="badge badge-dark"><i class="fa fa-calendar"></i> <?= $currentDate->format('Y-m-d'); ?></small>
        </div>

      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid default-dash">
    <div class="row">
      
    <div class="col-lg-12"> 
          
          <!-- Profile Completeness
          =============================== -->
          <div class="bg-white shadow-sm rounded p-4 mb-4">
              <p class="text-primary text-4"><b>Change password</b></p>
            <form id="loginForm" action="<?=URLROOT?>/users/update/<?=$data['user']->id?>" method="post">
                <div class="input-group">
                <input required type="password" class="form-control <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'){echo (!empty($data['password_err'])) ? 'is-invalid' : '';} ?>" id="password" name="password" placeholder="Enter new Password">
              <span class="invalid-feedback"><?php if ($_SERVER['REQUEST_METHOD'] == 'POST'){echo $data['password_err'];} ?></span>
                </div>
                <div class="d-grid my-4"><button class="btn btn-primary shadow-none" type="submit">Update</button></div>
            </form>
          </div>
          <!-- Profile Completeness End --> 
            
            
          </div>
    </div>

  </div>
</div>
<!-- Container-fluid Ends-->
</div>
<!-- footer start-->
<?php require APPROOT . '/views/inc/footer.php'; ?>