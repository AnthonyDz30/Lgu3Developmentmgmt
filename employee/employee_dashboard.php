<?php 
include('../employee/assets/config/dbconn.php');

include('../employee/assets/inc/header.php');

include('../employee/assets/inc/sidebar.php');

include('../employee/assets/inc/navbar.php');

?> 
   
<!--data info-->
 <div class="card-info">
    <a href="employee_requestform_list.php">
        <div class="card-data">
            <i class='bx bxs-user-detail icon'></i>
            <div>
                <h3></h3>
                <span> Total Request </span>
            </div>
        </div>
    </a>
    
    <a href="employee_employee_list.php">
        <div class="card-data">
            <i class='bx bxs-user-detail icon'></i>
            <div>
                <h3></h3>
                <span>Total Employees</span>
            </div>
        </div>
    </a>
    <a href="employee_user_list.php">
        <div class="card-data">
            <i class='bx bxs-user-detail icon'></i>
            <div>
                <h3></h3>
                <span>Total Users</span>
            </div>
        </div>
    </a>
</div>
<!--end data info-->


<div class="data-card">
    <div class="card">
        <div class="card-header">
            <h4> Request List</h4>
        </div>


        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div id="displayDataTable">
                        <a href= "employee_dashboard_list_displaydata.php">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php 
include('../employee/assets/inc/footer.php');
?> 


<script>
    $(document).ready(function()
    {
        displayData();
    });
    //display function
    function displayData()
    {
        var displayData="true";
        $.ajax
        ({
            url:"employee_dashboard_list_displaydata.php",
            type:'post',
            data:{
                displaysend:displayData
            },
            success:function(data,status)
            {
                $('#displayDataTable').html(data);
                $('#updateModal').modal('hide');
            }
        });
    }




</script>

</body>
</html>
