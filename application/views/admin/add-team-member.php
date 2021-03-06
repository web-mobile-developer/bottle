<?php 

    $page='team'; 

    $this->load->view('includes/header_start');

?>

   <!-- ============================================================== -->

            <!-- Start right Content here -->

            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Start content -->

                <div class="content">

                    <div class="container-fluid">

                        <div class="row m-b-20">

                             <!-- line -->

                            <div class="row" style="display:block !important;width:100%;">

                                <div class="col-sm-12">

                                    <?php if(isset($_SESSION['success'])):?>

                                        <div class="alert alert-success alert-dismissible fade show" role="alert">

                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                                                <span aria-hidden="true">×</span>

                                            </button>

                                            <div>

                                                <?php echo @$_SESSION['success'];unset($_SESSION['success']);?>

                                            </div>

                                        </div>

                                    <?php endif;?>

                                    <?php if(isset($_SESSION['error'])):?>

                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">

                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                                                <span aria-hidden="true">×</span>

                                            </button>

                                            <div>

                                                <?php echo @$_SESSION['error'];unset($_SESSION['error']);?>

                                            </div>

                                        </div>

                                    <?php endif;?>

                                    <form action="" method="post">

                                    <div class="card-box">

                                        <div class="row">

                                            <div class="col-md-12">

                                                <h3> Add an Administrator to the Admin Team</h3>
                                                <p>You are about to add a new member to the Administrative Team. Use the form below</p>
                                                <hr>

                                            </div>

                                        </div>

                                        <div class="form-group row">

                                            <label for="FirstName" class="col-3 col-form-label">First Name:</label> 

                                            <div class="col-9">

                                                <input class="form-control" type="text"  id="FirstName" name="FirstName" value="<?php echo @$_POST['FirstName'];?>" required>

                                            </div>

                                        </div>

                                        <div class="form-group row">

                                            <label for="LastName" class="col-3 col-form-label">Last Name:</label> <div class="col-9">

                                                <input class="form-control" type="text"  id="LastName" name="LastName" value="<?php echo @$_POST['LastName'];?>" required>

                                            </div>

                                        </div>

                                        

                                        <div class="form-group row">

                                            <label for="Email" class="col-3 col-form-label">Email: </label> 

                                            <div class="col-9">

                                                <input class="form-control" type="text"  id="Email" name="Email" value="<?php echo @$_POST['Email'];?>" required>

                                            </div>

                                        </div>

                                        <div class="form-group row">

                                            <label for="Phone" class="col-3 col-form-label">Phone:</label> 

                                            <div class="col-9">

                                                <input class="form-control" type="text"  id="Phone" name="Phone" value="<?php echo @$_POST['Phone'];?>" >                                        

                                            </div>

                                        </div>

                                        <div class="form-group row">

                                            <label for="Department" class="col-3 col-form-label">Department: </label> <div class="col-9">

                                                <input class="form-control" type="text"  id="Department" name="Department" value="<?php echo @$_POST['Department'];?>"  required>

                                            </div>

                                        </div>

                                        <div class="form-group row">

                                            <label for="Username" class="col-3 col-form-label">Username: </label> <div class="col-9">

                                                <input class="form-control" type="text"  id="Username" name="Username" value="<?php echo @$_POST['Username'];?>"  required>

                                            </div>

                                        </div>

                                        <div class="form-group row">

                                            <label for="Password" class="col-3 col-form-label">Password: </label> <div class="col-9">

                                                <input class="form-control" type="password"  id="Password" name="Password" value="<?php echo @$_POST['Password'];?>"   required>

                                            </div>

                                        </div>

                                        <div class="form-group row">

                                            <label for="ConfirmPassword" class="col-3 col-form-label">Confirm Password: </label> <div class="col-9">

                                                <input class="form-control" type="password"  id="ConfirmPassword" name="ConfirmPassword" value="<?php echo @$_POST['ConfirmPassword'];?>"   required>

                                            </div>

                                        </div>

                                        <div class="form-group row">

                                            <div class="col-12">

                                                <button class="btn btn-primary" type="submit">Submit</button>

                                            </div>

                                        </div>

                                    </div>

                                    </form>

                                </div>

                            </div>

                            <!-- eof line -->



                            </div>

                           </div>

                        </div>

                        </div>

                        <!-- end row -->

                                      

                             

                                    

                    </div> <!-- container -->



                </div> <!-- content -->







            </div>

            <!-- End content-page -->





    <!-- ============================================================== -->

    <!-- End Right content here -->

    <!-- ============================================================== -->



<?php 

    $this->load->view('includes/footer_start');

?>

