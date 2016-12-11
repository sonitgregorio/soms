
<div id="wrapper">
    <div id="sidebar-wrapper" style="background: rgb(157, 90, 71);box-shadow: 0px 0px 10px black">
        <ul class="sidebar-nav">
            <li class="sidebar-brand" style="padding:0;margin:0 auto">
                <a href="#" style="color:#fff">
                  <img src="../assets/images/EVSU.jpg" alt="x" width="40" style="border-radius:20px"/> EVSU
                </a>
            </li>
            <?php if($this->session->userdata('usertype') == 1 || $this->session->userdata('usertype') == 3) { ?>
            <!-- <li>
                <a href="/user_registration" style="color:#fff">Student Registration</a>
            </li> -->
            <li>
                <a href="/users_req_list" class="<?=  ($params == 'request') ? 'active' : '' ?>" style="color:#fff">Users Registration List</a>
            </li>
            <li>
                <a href="/list_req_mat" class="<?=  ($params == 'list_request_mat') ? 'active' : '' ?>" style="color:#fff;">List of Material Request</a>
            </li>
            <li>
                <a href="/pr" class="<?= ($params == 'pr') ? 'active' : '' ?>" style="color:#fff;">Purchase Request</a>
            </li>
            <li>
                <a href="/rfq" class="<?=  ($params == 'rfq') ? 'active' : '' ?>" style="color:#fff;">Request For Quotation</a>
            </li>
            <li>
                <a href="/po_list" class="<?=  ($params == 'po') ? 'active' : '' ?>" style="color:#fff;">Purchase Order</a>
            </li>
            <?php } else { ?>

            <li>
                <a href="/request_material" class="<?=  ($params == 'request_mat') ? 'active' : '' ?>" style="color:#fff;">Request Material</a>
            </li>
            <li>
                <!-- <a href="/list_req_mat" style="color:#fff;">List of Material Request</a> -->
            </li>
            <?php } ?>
            <li>
                <a href="/iar" class="<?=  ($params == 'iar') ? 'active' : '' ?>" style="color:#fff;">Inspection and Acceptance Report</a>
            </li>
            <li>
                <a href="/rep" class="<?=  ($params == 'rep') ? 'active' : '' ?>" style="color:#fff;">Annual Procurement</a>
            </li>
            <li>
                <a href="/physical" class="<?=  ($params == 'physical') ? 'active' : '' ?>" style="color:#fff;">Physical Count of Property</a>
            </li>
            <li>
                <a href="/ppe" class="<?=  ($params == 'ppe') ? 'active' : '' ?>" style="color:#fff;">Detailed PPE</a>
            </li>
            <li>
                <a href="/reports_supply" class="<?=  ($params == 'supply') ? 'active' : '' ?>" style="color:#fff;">Reports Of Supply</a>
            </li>
            <li>
                <a href="/tr" class="<?=  ($params == 'track') ? 'active' : '' ?>" style="color:#fff;">Tracks</a>
            </li>
            <li>
                <a href="/login/logout" style="color:white">Logout</a>
            </li>
        </ul>
    </div>