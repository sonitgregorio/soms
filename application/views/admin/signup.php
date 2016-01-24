
<div id="page-content-wrapper">
    <div class="container-fluid padding_zero col-md-8 col-md-offset-2">
        <div class="row padding_zero">
            <div class="col-lg-12">
                  <div class="panel panel-default" style="box-shadow: 0px 0px 20px rgb(49, 49, 49)">
                  <div class="panel-heading" style="background: rgb(157, 90, 71)" >
                    <h1 class="panel-title" style="color:white">User Registration</h1>
                  </div>
                  <div class="panel-body">
                    <?php echo $this->session->flashdata('message') ?>
                      <form class="form-horizontal" method="POST" action='/login/insert_users'>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">First Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Enter Firstname" name="fname" required value="<?php echo set_value('fname') ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Middle Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Enter Middle Name" name="mname" value="<?php echo set_value('mname') ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Surname</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Enter Surname" required name="sname" value="<?php echo set_value('sname') ?>" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Enter Address" required name="address" value="<?php echo set_value('address') ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Contact No.</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Enter Contact Number" required name="contact" value="<?php echo set_value('contact') ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Email Address</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" placeholder="Enter Email Address" required name="emailadd" value="<?php echo set_value('emailadd') ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Department</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="department">
                                  <?php foreach ($this->api->get_department() as $key => $value): ?>
                                    <option value="<?php echo $value['id'] ?>"><?php echo $value['description'] ?></option>
                                  <?php endforeach ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                              <div class="col-md-1 padding_zero"></div>
                              <div class="col-md-11">
                                <div class="panel " >
                                  <div class="panel-heading" style="background: rgb(157, 90, 71)">
                                    <h3 class="panel-title" style="color:white">Username/Password</h3>
                                  </div>
                                  <div class="panel-body">
                                    <div class="form-group" style="padding-right:5px;padding-left:5px;">
                                      <label>Username</label>
                                      <input type="text" class="form-control" placeholder="Username" required name="username" value="<?php echo set_value('username') ?>"/>
                                    </div>
                                    <div class="form-group" style="padding-right:5px;padding-left:5px">
                                      <label>Password</label>
                                      <input type="password" class="form-control" placeholder="Password" required name="password"/>
                                    </div>
                                    <div class="form-group" style="padding-right:5px;padding-left:5px">
                                      <label>Confirm Password</label>
                                      <input type="password" class="form-control" placeholder="Confirm Password" required name="cpassword"/>
                                    </div>
                                    <div class="pull-right">
                                     <a href="/" class="btn btn-info">Login</a>
                                     <a href="/sign_up" class="btn btn-success">Cancel</a>
                                     <button class="btn btn-primary" type="submit">Submit</button>
                                   </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </form> 
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
