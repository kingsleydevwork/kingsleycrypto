<?php

    $users = mysqli_num_rows(mysqli_query($connection,"SELECT * FROM `client` "));
    $deposit = mysqli_num_rows(mysqli_query($connection,"SELECT * FROM `deposit` WHERE `status`='0' "));
    $withdraw = mysqli_num_rows(mysqli_query($connection,"SELECT * FROM `withdrawal`  WHERE `status`='0'"));
    $kyc = mysqli_num_rows(mysqli_query($connection,"SELECT * FROM `investment`  WHERE `status`='0'"));


?>


<div class="row gx-3">
  <!-- Total Users Card -->
  <div class="col-md-3 col-sm-6 col-12">
    <div class="bg-transparent-light rounded-1 mb-3 position-relative">
      <div class="p-3 text-white">
        <div class="mb-2">
          <!-- Font Awesome User Icon for Total Users -->
          
        </div>
        <div class="d-flex align-items-center justify-content-between">
          <h5 class="m-0 fw-normal">Total Users</h5>
          <h3 class="m-0"><?php echo  $users ?> </h3>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Total Deposit Card -->
  <div class="col-md-3 col-sm-6 col-12">
    <div class="bg-transparent-light rounded-1 mb-3 position-relative">
      <div class="p-3 text-white">
        <div class="mb-2">
          <!-- Font Awesome Dollar Sign Icon for Total Deposit -->
         
        </div>
        <div class="d-flex align-items-center justify-content-between">
          <h5 class="m-0 fw-normal">Pending Deposit</h5>
          <h3 class="m-0"><?php echo  $deposit ?></h3>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Total Withdrawal Card -->
  <div class="col-md-3 col-sm-6 col-12">
    <div class="bg-transparent-light rounded-1 mb-3 position-relative">
      <div class="p-3 text-white">
        <div class="mb-2">
          <!-- Font Awesome Arrow Circle Down Icon for Total Withdrawal -->
          
        </div>
        <div class="d-flex align-items-center justify-content-between">
          <h5 class="m-0 fw-normal">Pending Withdrawal</h5>
          <h3 class="m-0"><?php echo  $withdraw ?></h3>
        </div>
      </div>
    </div>
  </div>
  
  <!-- KYC Card -->
  <div class="col-md-3 col-sm-6 col-12">
    <div class="bg-transparent-light rounded-1 mb-3 position-relative">
      <div class="p-3 text-white">
        <div class="mb-2">
          <!-- Font Awesome Id Card Icon for KYC -->
          
        </div>
        <div class="d-flex align-items-center justify-content-between">
          <h5 class="m-0 fw-normal">Pending Investments</h5>
          <h3 class="m-0"><?php echo  $kyc ?></h3>
        </div>
      </div>
    </div>
  </div>
</div>
