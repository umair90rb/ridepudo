<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pr-0 pl-0">
  <div class="container-fluid mt-50">
    <h2>Drivers</h2>
  </div>
  <hr>
  <div class="container-fluid admn-dbrd-main">
    <div class="row mt-30">
      <div class="col-12 text-right">
        <button type="button" class="btn bg-primary lh-1 clr-light" id="create_user" data-toggle="modal" data-target="#UserModal"><i class="fas fa-plus"></i> Add Drivers</button>
      </div>
      <div class="col-12 mt-20">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th width="8%">S No.</th>
                <th width="25%">Driver Name</th>
                <th width="20%">Email</th>
                <th width="20%">Carbase Name</th>
                <th width="15%">Phone</th>
                <th width="12%">Member Since</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($info) {
                $sno = 1;
                foreach ($info as $key => $value) { ?>
                <tr>
                  <th scope="row"><?php echo $sno; ?></th>
                  <td><?php echo $value['first_name']; ?> <?php echo $value['last_name']; ?></td>
                  <td><?php echo $value['email']; ?></td>
                  <td><?php echo $value['carbase_name']; ?></td>
                  <td><?php echo $value['phone']; ?></td>
                  <td><?php $date = date_create($value['member_since']); echo date_format($date,"M d, Y")?></td>
                </tr>
              <?php $sno++; } } ?>
              <!--<tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1"></label>
                  </div> 
                </td>
              </tr>-->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>

<div class="modal fade" id="UserModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
          <div class="modal-body">
            <div class="login-box">
            <form class="px-4 py-3" id="CreateuserForm">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              <h3>Create <span class="clr-primary">Drivers</span></h3>
              <hr>
              <div class="form-group mt-20">
                <label>First Name</label>
                <input id="" type="text" class="form-control" name="first_name" placeholder="First Name" required>
              </div>
              <div class="form-group">
                <label>Last Name</label>
                <input id="" type="text" class="form-control" name="last_name" placeholder="Last Name">
              </div>
              <div class="form-group">
                <label>Email Name</label>
                <input id="register_email" type="text" class="form-control" name="email" placeholder="Enter Email" required>
                <label id="email_error" class="clr-red f-10" style="display: none;">Sorry email already exists, please login or reset password.</label>
              </div>
              <div class="form-group">
                <label>Carbase</label>
                <select class="form-control" name="carbase_id" required>
                  <option value="">Select Carbase</option>
                  <?php if ($carbase) {
                    foreach ($carbase as $key => $value) { ?>
                  <option value="<?php echo $value['carbase_id'] ?>"><?php echo $value['carbase_name'] ?></option>
                  <?php } } ?>
                </select>
              </div>
              <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" name="phone" maxlength="10" ><span>
              </div>
              <div>
                <input type="hidden" name="user_type" value="5">
                <button type="button" id="btn_register" class="btn btn-dark mt-20" onclick="create_user();">Create Driver</button>
              </div>
            </form>
        </div>
        </div>
      </div>
    </div>
</div>

<div id="required_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-mainclr clr-white">
        <h4 class="modal-title">Warning !</h4>
      </div>
      <div class="modal-body">
        <h4 class="clr-grey">Please fill all required fields highlighted with red border. </h4>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn bg-primary lh-1 clr-light">Ok</button>
      </div>
    </div>

  </div>
</div>

<script src="<?php echo base_url(); ?>rp_assets/custom_js/admin_driver.js?v=2.0"></script>