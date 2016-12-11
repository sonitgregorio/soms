<div id="page-content-wrapper">
    <a href="#menu-toggle" id="menu-toggle" class="btn btn-info">Menu</a>
    <div class="container-fluid padding_zero">
        <div class="row padding_zero">
            <div class="col-lg-12">
                <div class="panel panel-default" style="box-shadow: 0px 0px 20px rgb(49, 49, 49)">
                    <div class="panel-heading" style="background: rgb(157, 90, 71)">
                        <h1 class="panel-title" style="color:white">List of Materials Request</h1>
                    </div>
                    <div class="panel-body">


                        <div class="col-md-12">

                            <hr style="border: 1px solid brown;"/>
                            <div class="tabe table-responsive">
                                <?php echo $this->session->flashdata('message') ?>
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                    <tr class="navbar-inverse">
                                        <td style="color:white;text-align:center">PR NO.</td>
                                        <td style="color:white;text-align:center">Name</td>
                                        <td style="color:white;text-align:center">Department</td>
                                        <td style="color:white;text-align:center">Section</td>
                                        <!-- <td style="color:white;text-align:center">Letter</td> -->
                                        <td style="color:white;text-align:center;width:30%">Action</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($this->materialsmd->get_request_list() as $key => $value): ?>
                                        <tr>
                                            <td><?php echo $value['prno'] ?></td>
                                            <td><?php echo strtoupper($value['firstname'] . " " . $value['lastname']) ?></td>
                                            <td><?php echo strtoupper($value['department']) ?></td>
                                            <td><?php echo $value['section'] ?></td>
                                            <!-- <td><p style="text-align:justify"><?php echo $value['description'] ?></p></td> -->
                                            <td>
                                                <?php if ($this->session->userdata('usertype') == 3 AND $value['status'] == 0 AND $value['status'] != 1) { ?>
                                                    <a href="/update_mat_status/<?php echo $value['id'] ?>/1"
                                                       class="btn btn-info addmaterial btn-xs" data-toggle="modal"
                                                       data-param="<?php echo $value['id'] ?>">Approve&nbsp;&nbsp;<span
                                                            class="glyphicon glyphicon-thumbs-up"></span></a>
                                                    <a href="#" class="btn btn-danger disapprove btn-xs" data-toggle="modal"
                                                       data-param="<?php echo $value['id'] ?>">Disapprove&nbsp;&nbsp;<span
                                                            class="glyphicon glyphicon-thumbs-down"></span></a>
                                                <?php } ?>
                                                <?php if ($value['status'] == 1 AND $this->session->userdata('usertype') == 1) { ?>
                                                    <a href="https://www.philgeps.gov.ph"
                                                       class="btn btn-primary btn-xs" target="_blank">Philgeps&nbsp;&nbsp;&nbsp;<span
                                                            class=""></span></a>
                                                <?php } ?>
                                                <a href="/print_request/<?php echo $value['id'] ?>"
                                                   class="btn btn-success addmaterial btn-xs" target="_blank"
                                                   data-toggle="modal">Print&nbsp;&nbsp;&nbsp;<span
                                                        class="glyphicon glyphicon-print"></span></a>

                                            </td>
                                        </tr>
                                    <?php endforeach ?>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="disapprove" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form class="form-horizontal" id="save_disapprove" method="POST" action="/save_disapprove">
            <div class="modal-content">

                <div class="modal-header" style="background: rgb(157, 90, 71)">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel" style="color:white">Add Materials</h4>
                </div>

                <div class="modal-body">
                    <div class="errors">

                    </div>

                    <div class="form-group">
                        <input type="hidden" class="mid_d" name="mid_d" value="">
                        <label class="col-sm-2 control-label">Reason</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="resize: none" required name="reason"></textarea>
                        </div>
                    </div>
                    <br/><br/>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>
