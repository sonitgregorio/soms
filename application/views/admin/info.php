<?php 
      if ($firstname == "") {
        $firstname = '';
        $middlename = '';
        $lastname = '';
        $address = '';
        $contact = '';
        $email = '';
        $pid = '';
        $department = '';
        $description = '';
      }
 ?>



    <div class="form-group">
      <label class="col-sm-3 control-label">First Name</label>

      <div class="col-sm-9">
        <input type="text" class="form-control" placeholder="Enter Firstname" name="fname" required value="<?php echo $firstname ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Middle Name</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" placeholder="Enter Middle Name" name="mname" value="<?php echo $middlename ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Surname</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" placeholder="Enter Surname" required name="sname" value="<?php echo $lastname ?>"/>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Address</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" placeholder="Enter Address" required name="address" value="<?php echo $address ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Contact No.</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" placeholder="Enter Contact Number" required name="contact" value="<?php echo $contact ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Email Address</label>
      <div class="col-sm-9">
        <input type="email" class="form-control" placeholder="Enter Email Address" required name="emailadd" value="<?php echo $email ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Department</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" value="<?php echo $description ?>" />
      </div>
    </div>
    <div class="pull-right">
        <button type="submit" class="btn btn-primary">Confirm</button>
    </div>
    </form>
    <br />