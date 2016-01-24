<div class="col-md-4 col-md-offset-4" style="margin-top: 15%">
    <div class="panel panel-default" style="box-shadow: 0px 0px 20px rgb(49, 49, 49)">
        <div class="panel-heading" style="background: rgb(157, 90, 71)"><h3 class="panel-title" style="color:white; font-size:30px;"><span class="glyphicon glyphicon-user"></span>&nbsp;User Login</h3></div>
          <div class="panel-body">
              <form class="form-horizontal" action="/user_login" method="post">
              <?php echo $this->session->flashdata('message') ?>
                  <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Username</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="username" value="<?php echo set_value('username') ?>" placeholder="Username" autofocus required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" name="password" value="" placeholder="Password" required>
                      </div>
                  </div>
                  <div class = "pull-right">
                    <a href="/sign_up" class="btn btn-success">Sign Up</a>
                    <button type="submit" class="btn btn-primary ">Login</button>
                  </div>
                  
              </form>
          </div>
    </div>
</div>
