<?php 
// session_start();
// if (empty($_SESSION["adminuid"]) || $_SESSION["adminuid"] == '') {
//     header("location: login.php");
//     die();
//  }
//  $adminname = $_SESSION["adminuid"];
?>
<?php 
include 'includes/header.php';
?>
<!-- dashboard main content start here -->
<div class="col-sm-9">
      <div class="well">
        <h4>Dashboard</h4>
        <p></p>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Evidence</h4>
            <p>100</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Vehicles</h4>
            <p>100</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Weapons</h4>
            <p>100</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>IT Equipment</h4>
            <p>30</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Uniforms</h4>
            <p>100</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Report</h4>
            <p>100</p> 
          </div>
        </div>
      </div>




<!-- dashboard main content here end -->
<?php 
include 'includes/footer.php';
?>