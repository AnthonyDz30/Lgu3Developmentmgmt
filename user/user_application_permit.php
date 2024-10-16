<?php 
include('../user/assets/config/dbconn.php');

include('../user/assets/inc/header.php');

include('../user/assets/inc/sidebar.php');

include('../user/assets/inc/navbar.php');

include('../employee/assets/config/dbconn.php');
?> 


<div class="data-card">
    <div class="card">
        <div class="card-header">
            
        </div>


        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form class="row g-3" id="validated_form" method="post" action="user_application_permit.php" enctype="multipart/form-data">
                        <div class="top-form" style="text-align: center;">
                            <h6>Republic of the Philippines</h6>
                            <h6>San Agustin, Metropolitan Manila</h6>
                            <h6>Application Permit & Licence Office</h6>
                            <h5>APPLICATION FORM FOR ZONING PERMIT</h5>
                        </div>
                        <div class="col-md-5">
                            <label for="date_application" class="form-label">Date of Application:</label>
                            <input type="date" class="form-control" id="date_application" name="date_application" required>
                        </div>

                        <div class="col-md-2"></div>

                        <div class="col-md-5">
                            <label for="reciept" class="form-label">Official Receipt No.:</label>
                            <input type="text" class="form-control" id="reciept" name="reciept" placeholder="Official Receipt No." required>
                        </div>


                        <div class="col-md-5">
                            <label for="or_date" class="form-label">O.R. Date:</label>
                            <input type="date" class="form-control" id="or_date" name="or_date" required>
                        </div>

                        <div class="col-md-2"></div>

                        <hr>

                        <div class="col-md-4">
                            <label for="fname" class="form-label">First name:</label>
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" required>
                        </div>
                        <div class="col-md-4">
                            <label for="mname" class="form-label">Middle name:</label>
                            <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle name" required>
                        </div>
                        <div class="col-md-4">
                            <label for="lname" class="form-label">Last name:</label>
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" required>
                        </div>

                        <div class="col-8">
                            <label for="address" class="form-label">Address of Applicant:</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
                        </div>
                        <div class="col-4">
                            <label for="zip" class="form-label">Zip:</label>
                            <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip" required>
                        </div>

                        <div class="col-md-4">
                            <label for="name_owner" class="form-label">Name of the Owner:</label>
                            <input type="text" class="form-control" id="name_owner" name="name_owner" placeholder="name of owner" required>
                        </div>
                        <div class="col-md-4">
                            <label for="phone" class="form-label">Contact #:</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Contact #" required>
                        </div>
                        <div class="col-md-4">
                            <label for="email" class="form-label">Email Address:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                        </div>

                        <div class="col-md-4">
                            <label for="loc_lot" class="form-label">Location of Lot:</label>
                            <input type="text" class="form-control" id="loc_lot" name="loc_lot" placeholder=" Address" required>
                        </div>
                        
                        <div class="col-md-3">
                            <label for="rightv_land" class="form-label">Right Over Land:</label>
                            <input type="text" class="form-control" id="rightv_land" name="rightv_land" placeholder required>
                        </div>
                        <div class="col-md-2">
                            <label for="lot_area" class="form-label">Lot Area:</label>
                            <input type="text" class="form-control" id="lot_area" name="lot_area" placeholder="SQM" required>
                        </div>

                        </div>
                        <div class="col-md-3">
                            <label for="period_date" class="form-label">Period of Date:</label>
                            <input type="date" class="form-control" id="period_date" name="period_date" required>
                        </div>
                         
                        <hr>
                        <div class="col-md-3">
                            <label for="picture" class="form-label">Upload File:</label>
                            <input type="file" class="form-control" id="picture" name="picture" required>
                        </div>
                        
                        <hr>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary" id="submit" name="submit" value="submit">Submit</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 
include('../user/assets/inc/footer.php');
?> 


</body>
</html>
