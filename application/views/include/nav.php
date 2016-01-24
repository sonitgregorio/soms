
<div id="wrapper">
    <div id="sidebar-wrapper" style="background: rgb(157, 90, 71);box-shadow: 0px 0px 10px black">
        <ul class="sidebar-nav">
            <li class="sidebar-brand" style="padding:0;margin:0 auto">
                <a href="#" style="color:#fff">
                  <img src="../assets/images/EVSU.jpg" alt="x" width="40" style="border-radius:20px"/> EVSU
                </a>
            </li>
            <?php if($this->session->userdata('usertype') == 1) { ?>
            <!-- <li>
                <a href="/user_registration" style="color:#fff">Student Registration</a>
            </li> -->
            <li>
                <a href="/users_req_list" class="<?php echo ($params == 'request') ? 'active' : '' ?>" style="color:#fff">Users Registration List</a>
            </li>
           
            <?php } else { ?>

            <li>
                <a href="/request_material" class="<?php echo ($params == 'request_mat') ? 'active' : '' ?>" style="color:#fff;">Request Material</a>
            </li>
            <li>
                <a href="/Request Material" style="color:#fff;">My Approve Material</a>
            </li>
            <?php } ?>
            <li>
                <a href="/login/logout" style="color:white">Logout</a>
            </li>
        </ul>
    </div>